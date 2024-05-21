<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleIncomeRequest;
use App\Http\Requests\UpdateSaleIncomeRequest;
use App\Models\SaleIncome;

class SaleIncomeController extends Controller
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
     * @param  \App\Http\Requests\StoreSaleIncomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleIncomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaleIncome  $saleIncome
     * @return \Illuminate\Http\Response
     */
    public function show(SaleIncome $saleIncome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaleIncome  $saleIncome
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleIncome $saleIncome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaleIncomeRequest  $request
     * @param  \App\Models\SaleIncome  $saleIncome
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaleIncomeRequest $request, SaleIncome $saleIncome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaleIncome  $saleIncome
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleIncome $saleIncome)
    {
        //
    }
}
