<?php

namespace App\Http\Controllers;

use App\Models\SupplierType;
use Illuminate\Support\Facades\Session;
use App\Repositories\SupplierTypeRepository;
use App\Http\Requests\StoreSupplierTypeRequest;
use App\Http\Requests\UpdateSupplierTypeRequest;

class SupplierTypeController extends Controller
{

    public SupplierTypeRepository $repo;

    public function __construct(SupplierTypeRepository $supplierTypeRepository)
    {
        $this->repo = $supplierTypeRepository;
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
        return view('setup.vendor-list.supplier-type-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierTypeRequest $request)
    {
        $this->repo->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierType  $supplierType
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierType $supplierType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierType  $supplierType
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierType $supplierType)
    {

        $data = [
            'record' => $supplierType,
        ];

        return view('setup.vendor-list.supplier-type-setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierTypeRequest  $request
     * @param  \App\Models\SupplierType  $supplierType
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSupplierTypeRequest $request, SupplierType $supplierType)
    {
        $this->repo->update($supplierType, $request->validated());

        Session::flash('success');

        return redirect()->route('supplier-type.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierType  $supplierType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierType $supplierType)
    {
        return $supplierType->delete();
    }
}
