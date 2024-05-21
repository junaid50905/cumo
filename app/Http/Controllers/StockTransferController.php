<?php

namespace App\Http\Controllers;

use App\Models\StockTransfer;
use App\Http\Requests\StoreStockTransferRequest;
use App\Http\Requests\UpdateStockTransferRequest;

class StockTransferController extends Controller
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
        return view('stock-management.stock_transfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStockTransferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockTransferRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockTransfer  $stockTransfer
     * @return \Illuminate\Http\Response
     */
    public function show(StockTransfer $stockTransfer)
    {
        $data = [
            'records' => $stockTransfer,
        ];

        return view('stock-management.stock_transfer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockTransfer  $stockTransfer
     * @return \Illuminate\Http\Response
     */
    public function edit(StockTransfer $stockTransfer)
    {
        $data = [
            'record' => $stockTransfer,
        ];

        return view('stock-management.stock_transfer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStockTransferRequest  $request
     * @param  \App\Models\StockTransfer  $stockTransfer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStockTransferRequest $request, StockTransfer $stockTransfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockTransfer  $stockTransfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockTransfer $stockTransfer)
    {
        return $stockTransfer->delete();
    }
}
