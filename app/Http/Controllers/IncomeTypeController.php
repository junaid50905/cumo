<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncomeTypeRequest;
use App\Http\Requests\UpdateIncomeTypeRequest;
use App\Models\IncomeType;

class IncomeTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreIncomeTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncomeTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeType  $incomeType
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeType $incomeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeType  $incomeType
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeType $incomeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncomeTypeRequest  $request
     * @param  \App\Models\IncomeType  $incomeType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncomeTypeRequest $request, IncomeType $incomeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeType  $incomeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeType $incomeType)
    {
        //
    }
}
