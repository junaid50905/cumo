<?php

namespace App\Http\Controllers;

use App\Models\SupplierSetup;
use App\Http\Requests\StoreSupplierSetupRequest;
use App\Http\Requests\UpdateSupplierSetupRequest;

class SupplierSetupController extends Controller
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
     * @param  \App\Http\Requests\StoreSupplierSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierSetupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierSetup  $supplierSetup
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierSetup $supplierSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierSetup  $supplierSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierSetup $supplierSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierSetupRequest  $request
     * @param  \App\Models\SupplierSetup  $supplierSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierSetupRequest $request, SupplierSetup $supplierSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierSetup  $supplierSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierSetup $supplierSetup)
    {
        //
    }
}
