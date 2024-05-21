<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Repositories\StockRepository;
use App\Http\Requests\StoreStockRequest;
use App\Http\Requests\UpdateStockRequest;

class StockController extends Controller
{
    private StockRepository $repo;

    public function __construct(StockRepository $repository)
    {
        $this->repo = $repository;
    }

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
     * @param  \App\Http\Requests\StoreStockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStockRequest  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStockRequest $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }

    public function stockReceive()
    {
        return view('stock-management.stock_receive');
    }

    public function stockAssign()
    {
    }

    public function finishedGoods()
    {
        return view("stock-management.finished_goods");
    }

    public function materialCollect()
    {
        return view('stock-management.material_callects');
    }

    public function stockTransfer()
    {
        return view('stock-management.stock_transfer');
    }

    public function stockCount()
    {
        return view('stock-management.stock_count');
    }



    public function stockOut()
    {
        return view('inventory-management.stock_out');
    }

    public function stockHandReport()
    {
        return view('inventory-management.stock_hand_report');
    }

    public function stockProductReport()
    {
        return view('inventory-management.location_wise_product_report');
    }

    public function stockReOrderReport()
    {
        return view('inventory-management.stock_reorder_report');
    }

    public function stockProductAnalysisReport()
    {
        return view('inventory-management.product_analysis_report');
    }
    public function stockReceiveReport()
    {
        return view('inventory-management.stock_receive_report');
    }

    public function getDetailAccordingly()
    {
        return $this->repo->getDetailAccordingly();
    }
}
