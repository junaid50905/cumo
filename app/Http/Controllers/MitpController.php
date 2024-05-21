<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMitpRequest;
use App\Http\Requests\UpdateMitpRequest;
use App\Models\Mitp;

class MitpController extends Controller
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
     * @param  \App\Http\Requests\StoreMitpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMitpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitp  $mitp
     * @return \Illuminate\Http\Response
     */
    public function show(Mitp $mitp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitp  $mitp
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitp $mitp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMitpRequest  $request
     * @param  \App\Models\Mitp  $mitp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMitpRequest $request, Mitp $mitp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitp  $mitp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitp $mitp)
    {
        //
    }
}
