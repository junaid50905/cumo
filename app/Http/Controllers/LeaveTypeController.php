<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Support\Facades\Session;
use App\Repositories\LeaveTypeRepository;
use App\Http\Requests\StoreLeaveTypeRequest;
use App\Http\Requests\UpdateLeaveTypeRequest;

class LeaveTypeController extends Controller
{
    private LeaveTypeRepository $repo;

    public function __construct(LeaveTypeRepository $repo)
    {
        $this->repo = $repo;
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
        return view('setup.leave-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeaveTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveTypeRequest $request)
    {
        $this->repo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaveType  $leaveType
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveType $leaveType)
    {
        $data = [
            'record' => $leaveType
          ];
          return view('setup.leave-type.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveType  $leaveType
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveType $leaveType)
    {
       $data = [
         'record' => $leaveType
       ];
       return view('setup.leave-type.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaveTypeRequest  $request
     * @param  \App\Models\LeaveType  $leaveType
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLeaveTypeRequest $request, LeaveType $leaveType)
    {
        $this->repo->update($leaveType, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveType  $leaveType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveType $leaveType)
    {
        return $leaveType->delete();
    }
}
