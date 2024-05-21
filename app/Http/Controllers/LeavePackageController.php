<?php

namespace App\Http\Controllers;

use App\Models\LeavePackage;
use App\Http\Requests\StoreLeavePackageRequest;
use App\Http\Requests\UpdateLeavePackageRequest;

class LeavePackageController extends Controller
{
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
        return view('setup.leave-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeavePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeavePackageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeavePackage  $leavePackage
     * @return \Illuminate\Http\Response
     */
    public function show(LeavePackage $leavePackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeavePackage  $leavePackage
     * @return \Illuminate\Http\Response
     */
    public function edit(LeavePackage $leavePackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeavePackageRequest  $request
     * @param  \App\Models\LeavePackage  $leavePackage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeavePackageRequest $request, LeavePackage $leavePackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeavePackage  $leavePackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeavePackage $leavePackage)
    {
        //
    }
}
