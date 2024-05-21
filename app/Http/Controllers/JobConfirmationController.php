<?php

namespace App\Http\Controllers;

use App\Models\JobConfirmation;
use App\Http\Requests\StoreJobConfirmationRequest;
use App\Http\Requests\UpdateJobConfirmationRequest;
use App\Repositories\DepartmentSetupRepository;
use App\Repositories\JobConfirmationRepository;
use App\Repositories\StudentRepository;
use App\Utility\JobTitleConstant;
use Illuminate\Support\Facades\Session;

class JobConfirmationController extends Controller
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
        $data = [
            'jobTitle' => JobTitleConstant::$jobTitle,
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.job-confirmation.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobConfirmationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobConfirmationRequest $request)
    {
        $this->jobConfirmationRepo->store($request->validated());
        Session::flash('success','Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function show(JobConfirmation $jobConfirmation)
    {
        $data = [
            'record' => $jobConfirmation,
            'jobTitle' => JobTitleConstant::$jobTitle,
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.job-confirmation.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function edit(JobConfirmation $jobConfirmation)
    {
        $data = [
            'record' => $jobConfirmation,
            'jobTitle' => JobTitleConstant::$jobTitle,
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.job-confirmation.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobConfirmationRequest  $request
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJobConfirmationRequest $request, JobConfirmation $jobConfirmation)
    {
        $this->jobConfirmationRepo->update($jobConfirmation , $request->validated());
        Session::flash('success','Update');
        return redirect()->route('job-confirmation.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobConfirmation  $jobConfirmation
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobConfirmation $jobConfirmation)
    {
        return $jobConfirmation->delete();
    }
}
