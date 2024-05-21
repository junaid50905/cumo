<?php

namespace App\Http\Controllers;

use App\Models\SalaryGrade;
use App\Http\Requests\StoreSalaryGradeRequest;
use App\Http\Requests\UpdateSalaryGradeRequest;

class SalaryGradeController extends Controller
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
        return view('setup.salary-grade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalaryGradeRequest  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalaryGrade  $salaryGrade
     * @return \Illuminate\Http\Response
     */
    public function show(SalaryGrade $salaryGrade)
    {
        $data = [
            'record' => $salaryGrade
        ];
        return view('setup.salary-grade.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalaryGrade  $salaryGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(SalaryGrade $salaryGrade)
    {
        $data = [
            'record' => $salaryGrade
        ];
        return view('setup.salary-grade.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaryGradeRequest  $request
     * @param  \App\Models\SalaryGrade  $salaryGrade
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalaryGrade  $salaryGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalaryGrade $salaryGrade)
    {
        return $salaryGrade->delete();
    }
}
