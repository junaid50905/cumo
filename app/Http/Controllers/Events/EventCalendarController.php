<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\Events\StoreEventScheduleRequest;
use App\Models\Appointment;
use App\Utility\ProjectConstants;
use App\Repositories\UserRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Setup\SetupQuestionRepository;
use App\Repositories\Events\EventCalendarRepository;

class EventCalendarController extends Controller
{
    private UserRepository $userRepository;
    private DepartmentRepository $departmentRepository;
    private AppointmentRepository $appointmentRepository;
    private SetupQuestionRepository $assessmentRepository;
    private EventCalendarRepository $eventCalendarRepository;

    public function __construct(UserRepository $userRepository, DepartmentRepository $departmentRepository, AppointmentRepository $appointmentRepository, SetupQuestionRepository $assessmentRepository, EventCalendarRepository $eventCalendarRepository)
    {
        $this->userRepository = $userRepository;
        $this->departmentRepository = $departmentRepository;
        $this->appointmentRepository = $appointmentRepository;
        $this->assessmentRepository = $assessmentRepository;
        $this->eventCalendarRepository = $eventCalendarRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function scheduleList(Request $request)
    {
        try {
            // dd($request->event_type);
            $eventType = $request->event_type;
            $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);
            // dd($events);
            $data = [
                'events' => $events,
                'eventType' => $eventType,
            ];
            return view('setup.event_schedule.list', $data);

        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title' => 'Successs', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function schedulePendingList($event_type){
        $sortBy = 'created_at';
        $sortType = "DESC";
        $eventType = $event_type; //1=Interview, 2=Assessment
        $paymentStatus = 5; // 5=Completed
        $pendingList = $this->eventCalendarRepository->getSchedulePendingList($sortBy, $sortType, $eventType, $paymentStatus);
        $data = [
            'pendingList' => $pendingList,
            'eventType' => $eventType,
        ];

        // dd($data);
        return view('setup.event_schedule.pending_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSchedule(Request $request)
    {
        // dd($request->event_type);
        if($request->event_type === "1"){
            return redirect()->route('appointment.index');
        }

        $paymentStatus = 5; // 5=Completed
        $incomeType = 2; // 2=Assessment
        $studentData = $this->appointmentRepository->getAnAppointmentDetails(null, $incomeType, null, $paymentStatus);
        // dd($studentData);

        if($studentData === null){
            Session::flash('alert', ['type' => 'danger', 'title'=>'Not Completed!', 'message' => 'At first, You have to complete payment procedure.']);
            return redirect()->route('pre-admission-income.index');
        }

        if($studentData->interview_status !== "Completed"){
            Session::flash('alert', ['type' => 'danger', 'title'=>'Not Completed!', 'message' => 'At first, You have to complete Care Need Part One.']);
            return redirect()->back();
        }
        
        
        $eventType = 2; // 2=Assessment
        $appointmentId = $studentData->id;
        $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);
        $specificUserEvents = $this->eventCalendarRepository->getSpecificUserEventCalendarList($eventType, $appointmentId);

        $toolType = "AssessmentCategory";
        $assessmentTools = $this->eventCalendarRepository->getToolList($toolType);
        $toolSubType = "AssessmentSubCategory";
        $assessmentToolsSubCategories = $this->eventCalendarRepository->getToolSubList($toolSubType);
        // dd($assessmentToolsSubCategories);
        // dd($events, $specificUserEvents);
        
        $allDepartment = $this->departmentRepository->getAllDepartment();
        $allUserData = $this->userRepository->getAllUser();

        // Group users by department
        $usersByDepartment = [];
        foreach ($allUserData as $user) {
            $departmentId = is_array($user) ? $user['department_id'] : $user->department_id;
            $usersByDepartment[$departmentId][] = $user;
        }

        $selectedDepartmentId = $allDepartment[0]['id'] ?? null;

        $data = [
            'event_medium_type' => ProjectConstants::$studentTypes,
            'departments' => $allDepartment,
            'usersByDepartment' => $usersByDepartment,
            'selectedDepartmentId' => $selectedDepartmentId,
            'studentData' => $studentData,
            'events' => $events,
            'specificUserEvents' => $specificUserEvents,
            'assessmentTools' => $assessmentTools,
            'assessmentToolsSubCategories' => $assessmentToolsSubCategories,
        ];

        // dd($data);
        
        return view('setup.event_schedule.assessment_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEventSchedule(StoreEventScheduleRequest $request)
    {
        // dd($request->payment_status);
        try {
            if($request->payment_status !== "5"){
                Session::flash('alert', ['type' => 'danger', 'title'=>'Payment Due!', 'message' => 'At first, You have to complete payment process. ']);
                if($request->event_type === 1){
                    return redirect()->route('event_schedule_list', ['event_type' => $request->event_type ]);
                } elseif($request->event_type === 2){
                    return redirect()->route('event_schedule_list', ['event_type' => $request->event_type ]);
                }else {
                    return redirect()->route('event_schedule_list', ['event_type' => $request->event_type ]);
                }
            }

            $userId = Auth::id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;

            unset($validatedData['main_teacher_department']);
            unset($validatedData['assistant_teacher_department']);

            // dd($validatedData);
            $errors = [];
            if ($validatedData['event_type'] === "2") {
                if (empty($validatedData['category_id'])) {
                    $errors['category_id'] = 'Category ID is required.';
                }

                if (empty($validatedData['sub_category_id'])) {
                    $errors['sub_category_id'] = 'Sub-Category ID is required.';
                }
            }

            // Check if there are errors
            if (!empty($errors)) {
                // return redirect()->back()->withErrors($errors)->withInput();
                Session::flash('alert', ['type' => 'danger', 'title'=>'Not Completed!', 'message' => 'At first, You have to complete Care Need Part One.']);
                return redirect()->back();
            }
            
            // Store the validated data
            $this->eventCalendarRepository->store($validatedData);

            // Fetch the appointment ID from the validated data
            $appointmentId = $validatedData['appointment_id'];
            $eventType = $validatedData['event_type'];
          
            if($eventType === "1"){
                Session::flash('alert', ['type' => 'success', 'title'=>'Success! ', 'message' => 'Interview Schedule Setup Successfully!']);
                // return redirect()->route('appointment.edit', $appointmentId);
                return redirect()->route('event_schedule_list', ['event_type' => $eventType]);
            }else if($eventType === "2"){
                Session::flash('alert', ['type' => 'success', 'title'=>'Success! ', 'message' => 'Assessment Schedule Setup Successfully!']);
                return redirect()->route('event_schedule_list', ['event_type' => $eventType]);
            }else {
                dd("Observation");
            }
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title'=>'Failed!', 'message' => 'Something went wrong: ' . $th->getMessage() ]);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('Specific View'.$id);
    }


    public function searchEventSchedule(Request $request)
    {
        try {
            // dd($request);
            $paymentStatus = 5; // 5=Completed
            $studentId = $request->input('search_id');
            $incomeType = $request->input('event_type');
            $interviewStatus = "Completed"; 
            $studentData = $this->appointmentRepository->getAnAppointmentDetails($appointmentId = null, $incomeType, $eventType = null, $paymentStatus, $studentId, $interviewStatus);
            // dd($studentData);

            if($studentData){
                $eventType = $request->input('event_type');
                $appointmentId = $studentData->id;
                $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);
                $specificUserEvents = $this->eventCalendarRepository->getSpecificUserEventCalendarList($eventType, $appointmentId);

                $allDepartment = $this->departmentRepository->getAllDepartment();
                $allUserData = $this->userRepository->getAllUser();

                // Group users by department
                $usersByDepartment = [];
                foreach ($allUserData as $user) {
                    $departmentId = is_array($user) ? $user['department_id'] : $user->department_id;
                    $usersByDepartment[$departmentId][] = $user;
                }

                $selectedDepartmentId = $allDepartment[0]['id'] ?? null;

                if($eventType === "1"){
                    $data = [
                        'gender' => ProjectConstants::$genders,
                        'bloodGroups' => ProjectConstants::$bloodGroups,
                        'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
                        'paymentGateways' => ProjectConstants::$paymentGateways,
                        'event_medium_type' => ProjectConstants::$studentTypes,
                        'departments' => $allDepartment,
                        'usersByDepartment' => $usersByDepartment,
                        'selectedDepartmentId' => $selectedDepartmentId,
                        'studentData' => $studentData,
                        'events' => $events,
                        'specificUserEvents' => $specificUserEvents,
                    ];
                    
                    Session::flash('alert', ['type' => 'success', 'title' => 'Success!', 'message' => 'Interview Setup Successfully!']);
                    return view('pre_admission.appointment.edit',$data);

                }elseif($eventType === "2"){
                    $toolType = "AssessmentCategory";
                    $assessmentTools = $this->eventCalendarRepository->getToolList($toolType);
                    $toolSubType = "AssessmentSubCategory";
                    $assessmentToolsSubCategories = $this->eventCalendarRepository->getToolSubList($toolSubType);
        
                    $data = [
                        'event_medium_type' => ProjectConstants::$studentTypes,
                        'departments' => $allDepartment,
                        'usersByDepartment' => $usersByDepartment,
                        'selectedDepartmentId' => $selectedDepartmentId,
                        'studentData' => $studentData,
                        'events' => $events,
                        'specificUserEvents' => $specificUserEvents,
                        'assessmentTools' => $assessmentTools,
                        'assessmentToolsSubCategories' => $assessmentToolsSubCategories,
                    ];

                    // dd($data);
                    Session::flash('alert', ['type' => 'success', 'title' => 'Success !', 'message' => 'Get Data of this appointment ID!']);
                    return view('setup.event_schedule.assessment_search', $data);
                }else {
                    dd("Observation");
                }
            }else {
                // Retrieve event_type from the request and convert it to an integer
                $eventType = intval($request->input('event_type'));
                // dd($eventType, gettype($eventType)); 
            
                // Debugging the converted event type (optional for testing)
                // dd($eventType); 
            
                // Check the event type after converting to integer
                if ($eventType === 1) {
                    Session::flash('alert', [
                        'type' => 'warning', 
                        'title' => 'Failed !', 
                        'message' => 'You must complete the previous steps: 1) Payment for Interview.'
                    ]);
                    return redirect()->route('appointment.edit', $appointmentId);
                } elseif ($eventType === 2) {
                    Session::flash('alert', [
                        'type' => 'warning', 
                        'title' => 'Failed !', 
                        'message' => 'You must complete the previous steps: 1) Interview. 2) Payment for Assessment.'
                    ]);
                    return redirect()->route('event_schedule_create', $eventType);
                } else {
                    // For debugging if no condition is matched
                    dd("Observation");
                }
            }
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title' => 'Failed !', 'message' => 'Something went wrong: ' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSchedule($event_type, $id)
    {
        dd("Edit ".$event_type, $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            dd('Event'.$id);
            Event::destroy($id);
            return redirect()->route('setup-assessment-schedule.index')->with('success', 'Event deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('setup-assessment-schedule.index')->with('error', 'Failed to delete event.');
        }
    }

    public function setupSchedule($appointment_id, $eventType){
        // dd("Setup ".$event_type);
        // dd($request->event_type);
        $paymentStatus = 5; // 5=Completed
        $incomeType = $eventType; // 2=Assessment
        $studentData = $this->appointmentRepository->getAnAppointmentDetails($appointment_id, $incomeType, null, $paymentStatus);
        // dd($studentData);

        if($studentData === null){
            Session::flash('alert', ['type' => 'danger', 'title'=>'Not Completed!', 'message' => 'At first, You have to complete payment procedure.']);
            return redirect()->route('pre-admission-income.index');
        }
        
        $appointmentId = $studentData->id;
        $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);
        $specificUserEvents = $this->eventCalendarRepository->getSpecificUserEventCalendarList($eventType, $appointmentId);

        $allDepartment = $this->departmentRepository->getAllDepartment();
        $allUserData = $this->userRepository->getAllUser();

        // Group users by department
        $usersByDepartment = [];
        foreach ($allUserData as $user) {
            $departmentId = is_array($user) ? $user['department_id'] : $user->department_id;
            $usersByDepartment[$departmentId][] = $user;
        }

        $selectedDepartmentId = $allDepartment[0]['id'] ?? null;

        $data = [
            'event_medium_type' => ProjectConstants::$studentTypes,
            'departments' => $allDepartment,
            'usersByDepartment' => $usersByDepartment,
            'selectedDepartmentId' => $selectedDepartmentId,
            'studentData' => $studentData,
            'events' => $events,
            'specificUserEvents' => $specificUserEvents,
        ];

        if($eventType === 1){
            return redirect()->route('appointment.index');
        }elseif($eventType === "2"){
            if($studentData->interview_status !== "Completed"){
                Session::flash('alert', ['type' => 'danger', 'title'=>'Not Completed!', 'message' => 'At first, You have to complete Care Need Part One.']);
                return redirect()->route('care-need-part-one.index');
            }

            $toolType = "AssessmentCategory";
            $assessmentTools = $this->eventCalendarRepository->getToolList($toolType);
            $toolSubType = "AssessmentSubCategory";
            $assessmentToolsSubCategories = $this->eventCalendarRepository->getToolSubList($toolSubType);
            // dd($assessmentToolsSubCategories);
            // dd($events, $specificUserEvents);

            $data['assessmentTools'] = $assessmentTools;
            $data['assessmentToolsSubCategories'] = $assessmentToolsSubCategories;

            return view('setup.event_schedule.assessment_create', $data);
        }
        dd('Ok');
    }

    private function appointmentDetails($appointmentId, $incomeType, $dataType = null){
        try {
            if($dataType){
                $studentData = $this->appointmentRepository->getAnAppointmentDetails(null, $incomeType, null, null, $appointmentId);
            }else {
                $studentData = $this->appointmentRepository->getAnAppointmentDetails($appointmentId, $incomeType);
            }

            $eventType = 1; //1=Interview
            $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);
            $specificUserEvents = $this->eventCalendarRepository->getSpecificUserEventCalendarList($eventType, $appointmentId);

            $allDepartment = $this->departmentRepository->getAllDepartment();
            $allUserData = $this->userRepository->getAllUser();

            // Group users by department
            $usersByDepartment = [];
            foreach ($allUserData as $user) {
                $departmentId = is_array($user) ? $user['department_id'] : $user->department_id;
                $usersByDepartment[$departmentId][] = $user;
            }

            $selectedDepartmentId = $allDepartment[0]['id'] ?? null;

            $data = [
                'gender' => ProjectConstants::$genders,
                'bloodGroups' => ProjectConstants::$bloodGroups,
                'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
                'paymentGateways' => ProjectConstants::$paymentGateways,
                'event_medium_type' => ProjectConstants::$studentTypes,
                'departments' => $allDepartment,
                'usersByDepartment' => $usersByDepartment,
                'selectedDepartmentId' => $selectedDepartmentId,
                'studentData' => $studentData,
                'events' => $events,
                'specificUserEvents' => $specificUserEvents,
            ];

            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('alert', ['type' => 'danger', 'title'=>'Not Found!', 'message' => 'Data not found!']);
            return null;
        }
    }
}