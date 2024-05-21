<?php

namespace App\Http\Controllers;

use App\Models\StockOut;
use App\Http\Requests\StoreStockOutRequest;
use App\Http\Requests\UpdateStockOutRequest;

class StockOutController extends Controller
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
        return view('inventory-management.stock_out.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStockOutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockOutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockOut  $stockOut
     * @return \Illuminate\Http\Response
     */
    public function show(StockOut $stockOut)
    {
        $data = [
            'records' => $stockOut,
        ];

        return view('inventory-management.stock_out.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockOut  $stockOut
     * @return \Illuminate\Http\Response
     */
    public function edit(StockOut $stockOut)
    {
        $data = [
            'records' => $stockOut,
        ];

        return view('inventory-management.stock_out.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStockOutRequest  $request
     * @param  \App\Models\StockOut  $stockOut
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStockOutRequest $request, StockOut $stockOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockOut  $stockOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockOut $stockOut)
    {
        return $stockOut->delete();
    }
}
