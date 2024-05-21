<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeVisitRequest;
use App\Http\Requests\UpdateHomeVisitRequest;
use App\Models\HomeVisit;

class HomeVisitController extends Controller
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
     * @param  \App\Http\Requests\StoreHomeVisitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeVisitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeVisit  $homeVisit
     * @return \Illuminate\Http\Response
     */
    public function show(HomeVisit $homeVisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeVisit  $homeVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeVisit $homeVisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeVisitRequest  $request
     * @param  \App\Models\HomeVisit  $homeVisit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeVisitRequest $request, HomeVisit $homeVisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeVisit  $homeVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeVisit $homeVisit)
    {
        //
    }
}
