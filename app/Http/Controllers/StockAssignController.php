<?php

namespace App\Http\Controllers;

use App\Models\StockAssign;
use App\Http\Requests\StockAssignRequest;


class StockAssignController extends Controller
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
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('inventory-management.stock_assign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StockAssignRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockAssign  $stock_assign
     * @return \Illuminate\Http\Response
     */
    public function show(StockAssign $stock_assign)
    {
        $data = [
            'records' => $stock_assign,
        ];

        return view('inventory-management.stock_assign.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockAssign  $stock_assign
     * @return \Illuminate\Http\Response
     */
    public function edit(StockAssign $stock_assign)
    {
        $data = [
            'records' => $stock_assign,
        ];

        return view('inventory-management.stock_assign.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StockAssignRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockAssign  $stock_assign
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockAssign $stock_assign)
    {
        return $stock_assign->delete();
    }
}
