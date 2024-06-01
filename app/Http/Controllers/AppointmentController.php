<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Livewire\WithPagination;
use App\Services\CourseService;
use App\Utility\ProjectConstants;
use App\Repositories\UserRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CaseHistoryRepository;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\StoreAppointmentCalendarRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AppointmentRepository;
use App\Repositories\EventCalendarRepository;
use Illuminate\Support\Facades\Auth;

use App\Repositories\DepartmentRepository;
use App\Repositories\DesignationRepository;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    use WithPagination, CommonListElements;

    public $record;
    private AppointmentRepository $appointmentRepository;
    private EventCalendarRepository $eventCalendarRepository;
    private DepartmentRepository $departmentRepo;
    private UserRepository $userRepo;

    public function __construct(AppointmentRepository $appointmentRepository, EventCalendarRepository $eventCalendarRepository, DepartmentRepository $departmentRepo, UserRepository $userRepo) {
        $this->appointmentRepository = $appointmentRepository;
        $this->eventCalendarRepository = $eventCalendarRepository;
        $this->departmentRepo = $departmentRepo;
        $this->userRepo = $userRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomeType = 1;
        $sortBy = 'created_at';
        $sortType = 'DESC';
        $allAppointmentStudent = $this->appointmentRepository->getAppointmentWithPaymentData($incomeType, $sortBy, $sortType);

        // dd($allAppointmentStudent);
        return view('pre_admission.appointment.show', compact('allAppointmentStudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $userData = $this->userRepo->getAllUser();

        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'interview_medium' => ProjectConstants::$studentTypes,
            'departments' => $this->departmentRepo->getAllDepartment(),
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
    public function store(StoreAppointmentRequest $request)
    {
        try {
            $userId = Auth::id();

            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;
            // dd($validatedData);

            $this->appointmentRepository->store($validatedData);
            Session::flash('success','Appointment Added Successfully!');
            return redirect()->back();

        } catch (\Throwable $th) {
            Session::flash('warning','Something went wrong : '.$th->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
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

        $userData = $this->userRepo->getAllUser();

        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'interview_medium' => ProjectConstants::$studentTypes,
            'departments' => $this->departmentRepo->getAllDepartment(),
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
        $incomeType = 1; // 1=Inverview
        $searchData = $id;
        $studentData = $this->appointmentRepository->getSpecificAppointmentForIncomeTypeWithPaymentData($incomeType, $searchData);
        // dd($studentData->id);

        $eventType = 1; // 1=Inverview
        $appointmentId = $studentData->id;
        $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);
        $specificUserEvents = $this->eventCalendarRepository->getSpecificUserEventCalendarList($eventType, $appointmentId);
        // dd($events, $specificUserEvents);

        // $events = '{
        //     "2024-02-28": [
        //         {
        //             "id": "event1709012996390",
        //             "studentId": "000008-27/02/24",
        //             "title": "SID#000150(000001-Md. Amir Hossain)",
        //             "startTime": "11:49",
        //             "endTime": "13:49"
        //         }
        //     ],
        //     "2024-03-05": [
        //         {
        //             "id": "event1709012650703",
        //             "title": "SID#000150(000001-Sajida Rahman Danny)",
        //             "startTime": "11:44",
        //             "endTime": "14:44"
        //         },
        //         {
        //             "id": "event1709014695070",
        //             "studentId": "000009-27/02/24",
        //             "title": "SID#000150(000001-Begum Nurjahan Dipa)",
        //             "startTime": "14:18",
        //             "endTime": "15:18"
        //         }
        //     ],
        //     "2024-03-06": [
        //         {
        //             "id": "event1709012996390",
        //             "studentId": "000008-27/02/24",
        //             "title": "SID#000150(000001-Md. Amir Hossain)",
        //             "startTime": "11:49",
        //             "endTime": "13:49"
        //         }
        //     ],
        //     "2024-04-01": [
        //         {
        //             "id": "event1709012996390",
        //             "studentId": "000008-27/02/24",
        //             "title": "SID#000150(000001-Md. Amir Hossain)",
        //             "startTime": "11:49",
        //             "endTime": "13:49"
        //         }
        //     ]
        // }';

        // dd($events, $eventsData);

        $userData = $this->userRepo->getAllUser();

        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'event_medium_type' => ProjectConstants::$studentTypes,
            'departments' => $this->departmentRepo->getAllDepartment(),
            'all_user' => $userData,
            'studentData' => $studentData,
            'events' => $events,
            'specificUserEvents' => $specificUserEvents,
        ];

         return view('pre_admission.appointment.edit',$data);
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
            $userId = auth()->id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;

            // Update the appointment using the repository or Eloquent model
            $appointment->update($validatedData);
            
            return redirect()->back()->with('success', 'Appointment Updated Successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('warning', 'Something went wrong: ' . $th->getMessage());
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
        // $appointmentId = $request->input('appointment_id');
        $incomeType = 1; 
        $searchData = $request->input('search_id');
        $studentData = $this->appointmentRepository->getSpecificAppointmentForIncomeTypeWithPaymentData($incomeType, $searchData);
        // dd($studentData );
        
        $eventType = 1; // 1=Inverview
        $appointmentId = $studentData->id;
        $events = json_decode($this->eventCalendarRepository->getAllEventCalendarList($eventType), true);
        $specificUserEvents = $this->eventCalendarRepository->getSpecificUserEventCalendarList($eventType, $appointmentId);
        // dd($specificUserEvents);

        $userData = $this->userRepo->getAllUser();

        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
            'pre_admission_payment_type' => ProjectConstants::$pre_admission_payment_type,
            'paymentGateways' => ProjectConstants::$paymentGateways,
            'event_medium_type' => ProjectConstants::$studentTypes,
            'departments' => $this->departmentRepo->getAllDepartment(),
            'all_user' => $userData,
            'studentData' => $studentData,
            'events' => $events,
            'specificUserEvents' => $specificUserEvents,
        ];

        return view('pre_admission.appointment.edit',$data);
    }

    public function interviewerTimeSetup(StoreAppointmentCalendarRequest $request)
    {
       
        // Handle POST request
        try {
            $userId = Auth::id();
            $validatedData = $request->validated();
            $validatedData['created_by'] = $userId;

            unset($validatedData['main_teacher_department']);
            unset($validatedData['assistant_teacher_department']);

            // Store the validated data
            $this->eventCalendarRepository->store($validatedData);

            // Fetch the appointment ID from the validated data
            $appointmentId = $validatedData['appointment_id'];

            Session::flash('success', 'Interview Setup Successfully!');
            // return redirect()->back();
            return redirect()->route('pre-appointment-interview-setup.search', ['search_id' => $appointmentId]);
        } catch (\Throwable $th) {
            Session::flash('warning', 'Something went wrong: ' . $th->getMessage());
            return redirect()->back();
        }
    }

    // public function interviewerTimeSetup(StoreAppointmentCalendarRequest $request)
    // {
    //     try {
    //         $userId = Auth::id();

    //         $validatedData = $request->validated();
    //         $validatedData['created_by'] = $userId;

    //         unset($validatedData['main_teacher_department']);
    //         unset($validatedData['assistant_teacher_department']);
    //         // dd($validatedData);
    //         $this->eventCalendarRepository->store($validatedData);
    //         Session::flash('success','Interview Setup Successfully!');
    //         return redirect()->back();

    //     } catch (\Throwable $th) {
    //         Session::flash('warning','Something went wrong : '.$th->getMessage());
    //         return redirect()->back();
    //     }
    // }
}