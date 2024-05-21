<?php

namespace App\Http\Controllers;

use App\Models\CareNeedPartOne;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CareNeedPartOneRepository;
use App\Http\Requests\StoreCareNeedPartOneRequest;
use App\Http\Requests\UpdateCareNeedPartOneRequest;
use App\Services\CareNeedPartOneServices;
use App\Repositories\AppointmentRepository;
use App\Utility\ProjectConstants;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class CareNeedPartOneController extends Controller
{
    private AppointmentRepository $appointmentRepository;
    private UserRepository $userRepo;
    private CareNeedPartOneRepository $careNeedpartOneRepo;
    private CareNeedPartOneServices $service;
    private StudentRepository $studentRepo;

    public function __construct(AppointmentRepository $appointmentRepository, CareNeedPartOneServices $service, StudentRepository $studentRepo, UserRepository $userRepository, CareNeedPartOneRepository $careNeedpartOneRepo)
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->userRepo = $userRepository;
        $this->careNeedpartOneRepo = $careNeedpartOneRepo;
        $this->service = $service;
        $this->studentRepo = $studentRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomeType = 1;
        $paymentStatus = 5;
        $allAppointmentStudent = $this->appointmentRepository->getAppointmentsForIncomeTypePaymentStatus($incomeType, $paymentStatus);

        // dd($allAppointmentStudent);
        return view('pre_admission.care-need-part-one.show', compact('allAppointmentStudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View|Factory|Application
    {
        $incomeType = 1;
        $paymentStatus = 5;
        $intervieweeData = $this->appointmentRepository->getLastAppointmentForPaymentStatusIncomeType($paymentStatus, $incomeType);

        // dd($intervieweeData);
        $data = [
            'gender' => ProjectConstants::$genders,
            'designation' => ProjectConstants::$designation,
            'learnAbout' => ProjectConstants::$learnAbout,
            'eduClass' => ProjectConstants::$class,
            'department' => ProjectConstants::$department,
            'assessorName' => $this->userRepo->getSpecificTypeUser('teacher'),
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'intervieweeData' => $intervieweeData,
        ];
        return view('pre_admission.care-need-part-one.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCareNeedPartOneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCareNeedPartOneRequest $request)
    {
        dd($request);
        $this->service->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function show(CareNeedPartOne $care_need_part_one)
    {
        // dd('Ok');
        // $data = [
        //     'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        //     'students' => $this->studentRepo->getData(),
        //     'id' => $care_need_part_one['id'],
        //     'collection_date' => $care_need_part_one['collection_date'],
        //     'teacher_id' => $care_need_part_one['teacher_id'],
        //     'student_id' => $care_need_part_one['student_id'],
        //     'common' => $care_need_part_one['common'],
        //     'types_of_specialty_disability_impairments' => $care_need_part_one['types_of_specialty_disability_impairments'],
        //     'assessment' => $care_need_part_one['assessment'],
        //     'educational_information' => $care_need_part_one['educational_information'],
        //     'childs_condition_at_his_family' => $care_need_part_one['childs_condition_at_his_family'],
        //     'number_of_children_in_the_family' => $care_need_part_one['number_of_children_in_the_family'],
        //     'schooling' => $care_need_part_one['schooling'],
        //     'home' => $care_need_part_one['home'],
        // ];
        // return view('pre_admission.care-need-part-one.details', $data);

        $data = [
            'gender' => ProjectConstants::$genders,
            'designation' => ProjectConstants::$designation,
            'learnAbout' => ProjectConstants::$learnAbout,
            'eduClass' => ProjectConstants::$class,
            'department' => ProjectConstants::$department,
            'assessorName' => $this->userRepo->getSpecificTypeUser('teacher'),
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('pre_admission.care-need-part-one.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function edit(CareNeedPartOne $care_need_part_one)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $care_need_part_one['id'],
            'collection_date' => $care_need_part_one['collection_date'],
            'teacher_id' => $care_need_part_one['teacher_id'],
            'student_id' => $care_need_part_one['student_id'],
            'common' => $care_need_part_one['common'],
            'types_of_specialty_disability_impairments' => $care_need_part_one['types_of_specialty_disability_impairments'],
            'assessment' => $care_need_part_one['assessment'],
            'educational_information' => $care_need_part_one['educational_information'],
            'childs_condition_at_his_family' => $care_need_part_one['childs_condition_at_his_family'],
            'number_of_children_in_the_family' => $care_need_part_one['number_of_children_in_the_family'],
            'schooling' => $care_need_part_one['schooling'],
            'home' => $care_need_part_one['home'],
        ];
        return view('pre_admission.care-need-part-one.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareNeedPartOneRequest  $request
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCareNeedPartOneRequest $request, CareNeedPartOne $careNeedPartOne)
    {
        $this->service->update($careNeedPartOne, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareNeedPartOne  $careNeedPartOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareNeedPartOne $careNeedPartOne)
    {
        return $careNeedPartOne->delete();
    }
}
