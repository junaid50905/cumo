<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinishedGoodRequest;
use App\Http\Requests\UpdateFinishedGoodRequest;
use App\Models\FinishedGood;

class FinishedGoodController extends Controller
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
        return view('stock-management.finished_goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFinishedGoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinishedGoodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinishedGood  $finishedGood
     * @return \Illuminate\Http\Response
     */
    public function show(FinishedGood $finishedGood)
    {
        $data = [
            'record' => $finishedGood,
        ];
        return view('stock-management.finished_goods.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinishedGood  $finishedGood
     * @return \Illuminate\Http\Response
     */
    public function edit(FinishedGood $finishedGood)
    {
        $data = [
            'record' => $finishedGood,
        ];

        return view('stock-management.finished_goods.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinishedGoodRequest  $request
     * @param  \App\Models\FinishedGood  $finishedGood
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinishedGoodRequest $request, FinishedGood $finishedGood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinishedGood  $finishedGood
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinishedGood $finishedGood)
    {
        return $finishedGood->delete();
    }
}
