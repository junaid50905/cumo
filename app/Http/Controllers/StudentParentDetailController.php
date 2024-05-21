<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentParentDetailRequest;
use App\Http\Requests\UpdateStudentParentDetailRequest;
use App\Models\StudentParentDetail;

class StudentParentDetailController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentParentDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentParentDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentParentDetail  $studentParentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StudentParentDetail $studentParentDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentParentDetail  $studentParentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentParentDetail $studentParentDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentParentDetailRequest  $request
     * @param  \App\Models\StudentParentDetail  $studentParentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentParentDetailRequest $request, StudentParentDetail $studentParentDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentParentDetail  $studentParentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentParentDetail $studentParentDetail)
    {
        //
    }
}
