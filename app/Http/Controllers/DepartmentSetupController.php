<?php

namespace App\Http\Controllers;

use App\Models\DepartmentSetup;
use Illuminate\Support\Facades\Session;
use App\Repositories\DepartmentSetupRepository;
use App\Http\Requests\StoreDepartmentSetupRequest;
use App\Http\Requests\UpdateDepartmentSetupRequest;

class DepartmentSetupController extends Controller
{
    private DepartmentSetupRepository $departmentSetupRepo;

    public function __construct(DepartmentSetupRepository $departmentSetupRepo)
    {
        $this->departmentSetupRepo = $departmentSetupRepo;
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
        return view('HR.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartmentSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentSetupRequest $request)
    {
        $this->departmentSetupRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function show(DepartmentSetup $departmentSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(DepartmentSetup $department)
    {
        $data = [
            'record' => $department
        ];
       return view('HR.department.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartmentSetupRequest  $request
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentSetupRequest $request, DepartmentSetup $department)
    {
        $this->departmentSetupRepo->update($department, $request->validated());
        Session::flash('success');
        return redirect()->route('department.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepartmentSetup  $departmentSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepartmentSetup $department)
    {
        return $department->delete();
    }
}
