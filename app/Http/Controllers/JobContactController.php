<?php

namespace App\Http\Controllers;

use App\Models\JobContact;
use App\Http\Requests\StoreJobContactRequest;
use App\Http\Requests\UpdateJobContactRequest;
use App\Repositories\DepartmentSetupRepository;
use App\Repositories\JobConfirmationRepository;
use App\Repositories\StudentRepository;
use App\Utility\JobTitleConstant;

class JobContactController extends Controller
{
    private DepartmentSetupRepository $departmentRepo;
    private StudentRepository $studentRepo;
    private JobConfirmationRepository $jobConfirmationRepo;

    public function __construct(StudentRepository $studentRepo,DepartmentSetupRepository $departmentRepo,
    JobConfirmationRepository $jobConfirmationRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->departmentRepo = $departmentRepo;
        $this->jobConfirmationRepo = $jobConfirmationRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HR.recruit.job-contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function show(JobContact $jobContact)
    {
        $data = [
            'record' => $jobContact,
            'jobTitle' => JobTitleConstant::$jobTitle,
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.job-contact.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function edit(JobContact $jobContact)
    {
        $data = [
            'record' => $jobContact,
            'jobTitle' => JobTitleConstant::$jobTitle,
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.job-contact.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobContactRequest  $request
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobContactRequest $request, JobContact $jobContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobContact  $jobContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobContact $jobContact)
    {
        return $jobContact->delete();
    }
}
