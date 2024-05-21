<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTypeSetup;
use App\Services\EmployeeTypeService;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreEmployeeTypeSetupRequest;
use App\Http\Requests\UpdateEmployeeTypeSetupRequest;

class EmployeeTypeSetupController extends Controller
{
    private EmployeeTypeService $service;

    public function __construct(EmployeeTypeService $service)
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
        return view('HR.employee-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeTypeSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeTypeSetupRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeTypeSetup  $employeeTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeTypeSetup $employeeType)
    {
        $data = ['record' => $employeeType];
       return view('HR.employee-type.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeTypeSetup  $employeeTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeTypeSetup $employeeType)
    {
        $data = ['record' => $employeeType];
       return view('HR.employee-type.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeTypeSetupRequest  $request
     * @param  \App\Models\EmployeeTypeSetup  $employeeTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeTypeSetupRequest $request, EmployeeTypeSetup $employeeType)
    {
        $this->service->update($employeeType, $request->validated());
        Session::flash('success');
        return redirect()->route('employee-type.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeTypeSetup  $employeeTypeSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeTypeSetup $employeeType)
    {
        return $employeeType->delete();
    }
}
