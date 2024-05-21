<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleIncomeDetailRequest;
use App\Http\Requests\UpdateSaleIncomeDetailRequest;
use App\Models\SaleIncomeDetail;

class SaleIncomeDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreSaleIncomeDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleIncomeDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaleIncomeDetail  $saleIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SaleIncomeDetail $saleIncomeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaleIncomeDetail  $saleIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleIncomeDetail $saleIncomeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaleIncomeDetailRequest  $request
     * @param  \App\Models\SaleIncomeDetail  $saleIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaleIncomeDetailRequest $request, SaleIncomeDetail $saleIncomeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaleIncomeDetail  $saleIncomeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleIncomeDetail $saleIncomeDetail)
    {
        //
    }
}
