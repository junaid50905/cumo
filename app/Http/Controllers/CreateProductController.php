<?php

namespace App\Http\Controllers;

use App\Models\CreateProduct;
use App\Http\Requests\StoreCreateProductRequest;
use App\Http\Requests\UpdateCreateProductRequest;
use App\Repositories\CreateProductRepository;
use App\Utility\CreateProductConstant;

class CreateProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.create-product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreateProductRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateProduct  $createProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CreateProduct $createProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateProduct  $createProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateProduct $createProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCreateProductRequest  $request
     * @param  \App\Models\CreateProduct  $createProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCreateProductRequest $request, CreateProduct $createProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateProduct  $createProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateProduct $createProduct)
    {
        //
    }
}
