<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialProductProductRequest;
use App\Http\Requests\UpdateMaterialProductProductRequest;
use App\Models\MaterialProductProduct;

class MaterialProductProductController extends Controller
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
     * @param  \App\Http\Requests\StoreMaterialProductProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialProductProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialProductProduct  $materialProductProduct
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialProductProduct $materialProductProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialProductProduct  $materialProductProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialProductProduct $materialProductProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialProductProductRequest  $request
     * @param  \App\Models\MaterialProductProduct  $materialProductProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialProductProductRequest $request, MaterialProductProduct $materialProductProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialProductProduct  $materialProductProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialProductProduct $materialProductProduct)
    {
        //
    }
}
