<?php

namespace App\Http\Controllers;

use App\Models\AttendancePolicy;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreAttendancePolicyRequest;
use App\Http\Requests\UpdateAttendancePolicyRequest;
use App\Repositories\AttendancePolicyRepository;
use App\Services\AttendancePolicyService;

class AttendancePolicyController extends Controller
{
    private AttendancePolicyService $service;

    public function __construct( AttendancePolicyService $service)
    {
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
    public function create()
    {
        return view('setup.attendance-policy-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendancePolicyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendancePolicyRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendancePolicy  $attendancePolicy
     * @return \Illuminate\Http\Response
     */
    public function show(AttendancePolicy $attendancePolicy)
    {
        $data =[
            'record' => $attendancePolicy
        ];
        return view('setup.attendance-policy-setup.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendancePolicy  $attendancePolicy
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendancePolicy $attendancePolicy)
    {
        $data =[
            'record' => $attendancePolicy
        ];
        return view('setup.attendance-policy-setup.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendancePolicyRequest  $request
     * @param  \App\Models\AttendancePolicy  $attendancePolicy
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAttendancePolicyRequest $request, AttendancePolicy $attendancePolicy)
    {
        $this->service->update($attendancePolicy, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendancePolicy  $attendancePolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendancePolicy $attendancePolicy)
    {
        return $attendancePolicy->delete();
    }
}
