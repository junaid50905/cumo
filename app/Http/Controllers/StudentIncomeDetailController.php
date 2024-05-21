<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentIncomeDetailRequest;
use App\Http\Requests\UpdateStudentIncomeDetailRequest;
use App\Models\StudentIncomeDetail;

class StudentIncomeDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreStudentIncomeDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentIncomeDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentIncomeDetail  $studentIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StudentIncomeDetail $studentIncomeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentIncomeDetail  $studentIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentIncomeDetail $studentIncomeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentIncomeDetailRequest  $request
     * @param  \App\Models\StudentIncomeDetail  $studentIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentIncomeDetailRequest $request, StudentIncomeDetail $studentIncomeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentIncomeDetail  $studentIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentIncomeDetail $studentIncomeDetail)
    {
        //
    }
}
