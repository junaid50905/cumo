<?php

namespace App\Http\Controllers\Appointments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Appointments\Appointment;

use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;

use App\Http\Requests\Appointments\StoreAppointmentRequest;
use App\Http\Requests\Appointments\UpdateAppointmentRequest;

use App\Services\CourseService;
use App\Utility\ProjectConstants;
use App\Repositories\UserRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Repositories\CaseHistoryRepository;
use App\Repositories\Appointments\AppointmentRepository;
use App\Repositories\Events\EventCalendarRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\DesignationRepository;


class AppointmentController extends Controller
{
    use WithPagination, CommonListElements;

    public $record;
    private AppointmentRepository $appointmentRepository;
    private EventCalendarRepository $eventCalendarRepository;
    private DepartmentRepository $departmentRepository;
    private UserRepository $userRepository;

    public function __construct(AppointmentRepository $appointmentRepository, EventCalendarRepository $eventCalendarRepository, DepartmentRepository $departmentRepository, UserRepository $userRepository) {
        $this->appointmentRepository = $appointmentRepository;
        $this->eventCalendarRepository = $eventCalendarRepository;
        $this->departmentRepository = $departmentRepository;
        $this->userRepository = $userRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $incomeType = 1;
        $sortBy = 'created_at';
        $sortType = 'DESC';
        $allAppointmentStudent = $this->appointmentRepository->getAppointmentWithPaymentData($incomeType, $sortBy, $sortType);

        // dd($allAppointmentStudent);
        return view('pre_admission.appointment.list', compact('allAppointmentStudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $lastStudentId = Appointment::latest()->value('student_id');
        $formattedDate = now()->format('d/m/y');

        if($lastStudentId){
            list($prefix, $datePart) = explode('-', $lastStudentId);
            $incrementedPrefix = str_pad((intval($prefix) + 1), strlen($prefix), '0', STR_PAD_LEFT);
            
            $uniqueId = $incrementedPrefix . '-' . $formattedDate;
        }else {
            $lastStudentId = 1;
            $uniqueId = str_pad($lastStudentId, 6, '0', STR_PAD_LEFT) . '-' . $formattedDate;
        }

        $eventType = 1; // 1=Inverview
        $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);

        $userData = $this->userRepository->getAllUser();

        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'interview_medium' => ProjectConstants::$studentTypes,
            'departments' => $this->departmentRepository->getAllDepartment(),
            'all_user' => $userData,
            'uniqueId' => $uniqueId,
            'events' => $events,
        ];

        // dd($data);
     
        return view('pre_admission.appointment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request){
        try {
            // dd($request);
            $userId = Auth::id();

            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;
            // dd($validatedData);

            $this->appointmentRepository->store($validatedData);
            Session::flash('alert', ['type' => 'success', 'title'=>'Success!', 'message' => 'Appointment data created successfully!']);
            return redirect()->back();

        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'warning', 'title'=>'Failed!', 'message' => 'Something went wrong : '.$th->getMessage()]);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment){
        // dd($appointment->id);

        $studentData = Appointment::leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                   ->where('appointments.id', $appointment->id)
                   ->select('appointments.*', 'appointment_payments.payment_status')
                   ->first();

        $eventsData = '{
            "2024-02-28": [
                {
                    "id": "event1709012996390",
                    "studentId": "000008-27/02/24",
                    "title": "SID#000150(000001-Md. Amir Hossain)",
                    "startTime": "11:49",
                    "endTime": "13:49"
                }
            ],
            "2024-03-05": [
                {
                    "id": "event1709012650703",
                    "title": "SID#000150(000001-Sajida Rahman Danny)",
                    "startTime": "11:44",
                    "endTime": "14:44"
                },
                {
                    "id": "event1709014695070",
                    "studentId": "000009-27/02/24",
                    "title": "SID#000150(000001-Begum Nurjahan Dipa)",
                    "startTime": "14:18",
                    "endTime": "15:18"
                }
            ],
            "2024-03-06": [
                {
                    "id": "event1709012996390",
                    "studentId": "000008-27/02/24",
                    "title": "SID#000150(000001-Md. Amir Hossain)",
                    "startTime": "11:49",
                    "endTime": "13:49"
                }
            ],
            "2024-04-01": [
                {
                    "id": "event1709012996390",
                    "studentId": "000008-27/02/24",
                    "title": "SID#000150(000001-Md. Amir Hossain)",
                    "startTime": "11:49",
                    "endTime": "13:49"
                }
            ]
        }';

        $events = json_decode($eventsData, true);

        $userData = $this->userRepository->getAllUser();

        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'interview_medium' => ProjectConstants::$studentTypes,
            'departments' => $this->departmentRepository->getAllDepartment(),
            'all_user' => $userData,
            'studentData' => $studentData,
            'events' => $events,
        ];
         return view('pre_admission.appointment.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incomeType = 1; 
        $eventType = 1; 
        $appointmentId = $id;
        $data = $this->appointmentDetails($appointmentId, $incomeType, $eventType);

        // dd($data);

        return view('pre_admission.appointment.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        try {
            // dd($request);
            $userId = auth()->id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;

            // Update the appointment using the repository or Eloquent model
            $appointment->update($validatedData);

            Session::flash('alert', ['type' => 'success', 'title'=>'Success !', 'message' => 'Appointment Data Updated Successfully!']);
            return redirect()->route('appointment.edit', $request->appointment_id);
        } catch (\Throwable $th) {
            Session::flash('alert', ['type' => 'danger', 'title'=>'Not Found!', 'message' => $th->getMessage()]);
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function search(Request $request)
    {
        // dd($request);
        $incomeType = $request->input('event_type'); 
        $eventType = $request->input('event_type');

        $studentId = $request->input('search_id');
        $dataType = "Search";
        $data = $this->appointmentDetails($studentId, $incomeType, $eventType, $dataType);

        if($data['studentData'] === null){
            Session::flash('alert', ['type' => 'danger', 'title'=>'Not Found!', 'message' => 'Data not found!']);
            return redirect()->route('appointment.index');
        }else {
            Session::flash('alert', ['type' => 'success', 'title'=>'Success !', 'message' => 'Interview Data Found!']);
        }

        return view('pre_admission.appointment.edit',$data);
    }

    private function appointmentDetails($appointmentId, $incomeType, $eventType = null, $dataType = null){
        try {
            if($dataType){
                $studentData = $this->appointmentRepository->getAnAppointmentDetails(null, $incomeType, null, null, $appointmentId);
            }else {
                $studentData = $this->appointmentRepository->getAnAppointmentDetails($appointmentId, $incomeType);
            }

            // $eventType = 1; //1=Interview
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