<?php

namespace App\Http\Controllers;

use App\Models\FacilityPackageSetup;
use App\Http\Requests\StoreFacilityPackageSetupRequest;
use App\Http\Requests\UpdateFacilityPackageSetupRequest;

class FacilityPackageSetupController extends Controller
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
     * @param  \App\Http\Requests\StoreFacilityPackageSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacilityPackageSetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacilityPackageSetup  $facilityPackageSetup
     * @return \Illuminate\Http\Response
     */
    public function show(FacilityPackageSetup $facilityPackageSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacilityPackageSetup  $facilityPackageSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(FacilityPackageSetup $facilityPackageSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacilityPackageSetupRequest  $request
     * @param  \App\Models\FacilityPackageSetup  $facilityPackageSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacilityPackageSetupRequest $request, FacilityPackageSetup $facilityPackageSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacilityPackageSetup  $facilityPackageSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacilityPackageSetup $facilityPackageSetup)
    {
        //
    }
}
