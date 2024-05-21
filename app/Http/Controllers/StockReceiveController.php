<?php

namespace App\Http\Controllers;

use App\Models\StockReceive;
use App\Http\Requests\StoreStockReceiveRequest;
use App\Http\Requests\UpdateStockReceiveRequest;

class StockReceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        redirect()->route('stock-assign.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock-management.stock_receive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStockReceiveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockReceiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockReceive  $stockReceive
     * @return \Illuminate\Http\Response
     */
    public function show(StockReceive $stockReceive)
    {
        $data = [
            'records' => $stockReceive,
        ];

        return view('stock-management.stock_receive.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockReceive  $stockReceive
     * @return \Illuminate\Http\Response
     */
    public function edit(StockReceive $stockReceive)
    {
        // $data = [
        //     'record' => $stockReceive,
        // ];
        // return view('stock-management.stock_receive.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStockReceiveRequest  $request
     * @param  \App\Models\StockReceive  $stockReceive
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStockReceiveRequest $request, StockReceive $stockReceive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockReceive  $stockReceive
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockReceive $stockReceive)
    {
        return $stockReceive->delete();
    }
}
