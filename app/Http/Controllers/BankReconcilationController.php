<?php

namespace App\Http\Controllers;

use App\Models\BankReconcilation;
use App\Http\Requests\StoreBankReconcilationRequest;
use App\Http\Requests\UpdateBankReconcilationRequest;

class BankReconcilationController extends Controller
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
     * @param  \App\Http\Requests\StoreBankReconcilationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankReconcilationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankReconcilation  $bankReconcilation
     * @return \Illuminate\Http\Response
     */
    public function show(BankReconcilation $bankReconcilation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankReconcilation  $bankReconcilation
     * @return \Illuminate\Http\Response
     */
    public function edit(BankReconcilation $bankReconcilation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankReconcilationRequest  $request
     * @param  \App\Models\BankReconcilation  $bankReconcilation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankReconcilationRequest $request, BankReconcilation $bankReconcilation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankReconcilation  $bankReconcilation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankReconcilation $bankReconcilation)
    {
        //
    }
}
