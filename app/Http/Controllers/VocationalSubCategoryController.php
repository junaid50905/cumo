<?php

namespace App\Http\Controllers;

use App\Models\VocationalSubCategory;
use Illuminate\Support\Facades\Session;
use App\Repositories\VocationalSubCategoryRepository;
use App\Http\Requests\StoreVocationalSubCategoryRequest;
use App\Http\Requests\UpdateVocationalSubCategoryRequest;
use App\Repositories\VocationalMarkingCategoryRepository;

class VocationalSubCategoryController extends Controller
{
    private VocationalSubCategoryRepository $vocationalSubRepo;
    private VocationalMarkingCategoryRepository $categoryRepo;

    public function __construct(VocationalSubCategoryRepository $vocationalSubRepo, VocationalMarkingCategoryRepository $categoryRepo )
    {
        $this->vocationalSubRepo = $vocationalSubRepo;
        $this->categoryRepo = $categoryRepo;
    }
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
        $data =[
            'category' => $this->categoryRepo->getData(),
        ];
        return view('setup.program-setup.vocational-category-subcategory-setup.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVocationalSubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVocationalSubCategoryRequest $request)
    {
        $this->vocationalSubRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VocationalSubCategory  $vocationalSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(VocationalSubCategory $vocationalSubCategory)
    {
        $data =[
            'record' => $vocationalSubCategory,
            'category' => $this->categoryRepo->getData(),
        ];
        return view('setup.program-setup.vocational-category-subcategory-setup.view',$data);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VocationalSubCategory  $vocationalSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(VocationalSubCategory $vocationalSubCategory)
    {
        $data =[
            'record' => $vocationalSubCategory,
            'category' => $this->categoryRepo->getData(),
        ];
        return view('setup.program-setup.vocational-category-subcategory-setup.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVocationalSubCategoryRequest  $request
     * @param  \App\Models\VocationalSubCategory  $vocationalSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVocationalSubCategoryRequest $request, VocationalSubCategory $vocationalSubCategory)
    {
        $this->vocationalSubRepo->update($vocationalSubCategory, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VocationalSubCategory  $vocationalSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(VocationalSubCategory $vocationalSubCategory)
    {
        return $vocationalSubCategory->delete();
    }
}
