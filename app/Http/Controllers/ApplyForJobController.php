<?php

namespace App\Http\Controllers;

use App\Models\ApplyForJob;
use App\Http\Requests\StoreApplyForJobRequest;
use App\Models\EmployeeRequisition;
use App\Repositories\ApplyForJobRepository;
use App\Services\ApplyForJobService;
use App\Utility\ApplyingJobDemoConstant;
use Illuminate\Support\Facades\Session;
	
                                                                                                                                                                                                                                                                                                                                                                                                                                                      
class ApplyForJobController extends Controller
{
    private ApplyForJobRepository $applyJobRepo;
    private ApplyForJobService $service;

    public function __construct(ApplyForJobRepository $applyJobRepo,ApplyForJobService $service)
    {                                 
        $this->applyJobRepo = $applyJobRepo;
        $this->service = $service;
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

    // $dob = Carbon::parse($postData['dob']);

    public function getAgeAttribute()
    {
        //return Carbon::parse($this->attributes['birthdate'])->age;
    }
    
    public function create()
    {
        $data = [
            'applyingJob' => EmployeeRequisition::where('is_approved', 1)->get(['job_title']),
        ];
        return view('HR.apply-for-job.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplyForJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplyForJobRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success','Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function show(ApplyForJob $apply)
    {
        $data = [
            'record' => $apply,
            'applyingJob' => ApplyingJobDemoConstant::$applyingJob,
        ];   
        return view('HR.apply-for-job.view',$data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplyForJob $apply)
    {
        $data = [
            'record' => $apply,
            'applyingJob' => ApplyingJobDemoConstant::$applyingJob,
        ];

        return view('HR.apply-for-job.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplyForJobRequest  $request
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function update(StoreApplyForJobRequest $request, ApplyForJob $apply)
    {
        $this->applyJobRepo->update($apply, $request->validated());
        Session::flash('success');
        return redirect()->route('apply.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplyForJob  $applyForJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplyForJob $apply)
    {
        return $apply->delete();
    }
}
