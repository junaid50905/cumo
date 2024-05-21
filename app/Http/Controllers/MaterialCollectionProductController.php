<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialCollectionProductRequest;
use App\Http\Requests\UpdateMaterialCollectionProductRequest;
use App\Models\MaterialCollectionProduct;

class MaterialCollectionProductController extends Controller
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
     * @param  \App\Http\Requests\StoreMaterialCollectionProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialCollectionProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialCollectionProductRequest  $request
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialCollectionProductRequest $request, MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialCollectionProduct  $materialCollectionProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialCollectionProduct $materialCollectionProduct)
    {
        //
    }
}
