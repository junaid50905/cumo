<?php

namespace App\Http\Controllers;

use App\Models\VocationalMarkingCategory;
use App\Http\Requests\StoreVocationalMarkingCategoryRequest;
use App\Http\Requests\UpdateVocationalMarkingCategoryRequest;

class VocationalMarkingCategoryController extends Controller
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
        return view('setup.vocational-marking-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVocationalMarkingCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVocationalMarkingCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VocationalMarkingCategory  $vocationalMarkingCategory
     * @return \Illuminate\Http\Response
     */
    public function show(VocationalMarkingCategory $vocationalMarkingCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VocationalMarkingCategory  $vocationalMarkingCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(VocationalMarkingCategory $Vocational_Mcategory)
    {
        $data = [
            'record' => $Vocational_Mcategory,
        ];
        return view('setup.vocational-marking-category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVocationalMarkingCategoryRequest  $request
     * @param  \App\Models\VocationalMarkingCategory  $vocationalMarkingCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVocationalMarkingCategoryRequest $request, VocationalMarkingCategory $vocationalMarkingCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VocationalMarkingCategory  $vocationalMarkingCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(VocationalMarkingCategory $Vocational_Mcategory)
    {
        return $Vocational_Mcategory->delete();
    }
}
