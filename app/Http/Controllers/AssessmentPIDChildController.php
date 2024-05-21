<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Appointment;
use App\Utility\ProjectConstants;
use App\Repositories\UserRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\AssessmentPIDChildRepositoryRepository;

class AssessmentPIDChildController extends Controller
{
    
    private UserRepository $userRepository;
    private DepartmentRepository $departmentRepository;
    private AssessmentPIDChildRepositoryRepository $assPIDChildRepository;

    public function __construct(UserRepository $userRepository, DepartmentRepository $departmentRepository, AssessmentPIDChildRepositoryRepository $assPIDChildRepository)
    {
        $this->userRepository = $userRepository;
        $this->departmentRepository = $departmentRepository;
        $this->assPIDChildRepository = $assPIDChildRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("Ok List");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryId = 1;
        $departments = $this->departmentRepository->getAllDepartment();
        $userData = $this->userRepository->getAllUser();
        $questions = $this->assPIDChildRepository->getQuestionCollectionAccordingSubCategory($categoryId);

        // dd($questions);

        $data = [
            'gender' => ProjectConstants::$genders,
            'learnAbout' => ProjectConstants::$learnAbout,
            'eduClass' => ProjectConstants::$class,
            'departments' => $departments,
            'all_user' => $userData,
            'questions' => $questions,
        ];

        // dd($data);
        return view('assessment.pid-five-child.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function search(Request $request)
    {
        $studentData = Appointment::where('student_id', 'LIKE', '%' . $request->input('search_id') . '%')
                    ->leftJoin('appointment_payments', 'appointments.id', '=', 'appointment_payments.appointment_id')
                    ->select('appointments.id as student_appointment_id','appointments.student_id', 'appointment_payments.*')
                    ->first();
     
        $data = [
            'studentData' => $studentData,
        ];
         
        dd($data);
        return view('accounting.income.pre_admission.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
