<?php

namespace App\Http\Controllers;

use App\Models\RunMitp;
use App\Http\Requests\StoreRunMitpRequest;
use App\Http\Requests\UpdateRunMitpRequest;

class RunMitpController extends Controller
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
         return view('program.run-mitp.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRunMitpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRunMitpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RunMitp  $runMitp
     * @return \Illuminate\Http\Response
     */
    public function show(RunMitp $runMitp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunMitp  $runMitp
     * @return \Illuminate\Http\Response
     */
    public function edit(RunMitp $runMitp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRunMitpRequest  $request
     * @param  \App\Models\RunMitp  $runMitp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRunMitpRequest $request, RunMitp $runMitp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunMitp  $runMitp
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunMitp $runMitp)
    {
        //
    }
}
