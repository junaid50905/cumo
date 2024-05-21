<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Http\Requests\StoreAttendenceRequest;
use App\Http\Requests\UpdateAttendenceRequest;

use App\Repositories\EmployeeRepository;

class AttendenceController extends Controller
{
    private EmployeeRepository $employeeRepo;

    public function __construct(EmployeeRepository $employeeRepo)
    {                                 
        $this->employeeRepo = $employeeRepo;
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
        return view('HR.attendence.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendenceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendenceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(Attendence $attendence)
    {
        $data = [
            'record' => $attendence,
            'e_name'=>$this->employeeRepo->getData()
        ];
        return view('HR.attendence.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendence $attendence)
    {
        $data = [
            'record' => $attendence,
        ];
        return view('HR.attendence.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendenceRequest  $request
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendenceRequest $request, Attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendence $attendence)
    {
        return $attendence->delete();
    }
}
