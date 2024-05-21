<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncomeHistoryRequest;
use App\Http\Requests\UpdateIncomeHistoryRequest;
use App\Models\IncomeHistory;

class IncomeHistoryController extends Controller
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
     * @param  \App\Http\Requests\StoreIncomeHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncomeHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeHistory  $incomeHistory
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeHistory $incomeHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeHistory  $incomeHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeHistory $incomeHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncomeHistoryRequest  $request
     * @param  \App\Models\IncomeHistory  $incomeHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncomeHistoryRequest $request, IncomeHistory $incomeHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeHistory  $incomeHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeHistory $incomeHistory)
    {
        //
    }
}
