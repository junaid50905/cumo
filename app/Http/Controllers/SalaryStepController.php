<?php

namespace App\Http\Controllers;

use App\Models\SalaryStep;
use App\Http\Requests\StoreSalaryStepRequest;
use App\Http\Requests\UpdateSalaryStepRequest;

class SalaryStepController extends Controller
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
      return view('setup.salary-step.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalaryStepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalaryStepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Http\Response
     */
    public function show(SalaryStep $salaryStep)
    {
        // $data = [
        //     'record' => $salaryStep
        // ];
        // return view('setup.salary-grade.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Http\Response
     */
    public function edit(SalaryStep $salaryStep)
    {
        $data = [
            'record' => $salaryStep
        ];
        return view('setup.salary-step.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaryStepRequest  $request
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalaryStepRequest $request, SalaryStep $salaryStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalaryStep $salaryStep)
    {
        return $salaryStep->delete();
    }
}
