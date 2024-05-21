<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Support\Facades\Session;
use App\Repositories\SupplierRepository;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Repositories\SupplierTypeRepository;

class SupplierController extends Controller
{

    private SupplierRepository $repo;
    private SupplierTypeRepository $supplierTypeRepo;

    public function __construct(SupplierRepository $repository, SupplierTypeRepository $supplierTypeRepository)
    {
        $this->repo = $repository;
        $this->supplierTypeRepo = $supplierTypeRepository;
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
        $data = [
            'supplierType' => $this->supplierTypeRepo->getData(),
        ];
        return view('setup.vendor-list.supplier-setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupplierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupplierRequest $request)
    {
        $this->repo->store($request->validated());
        Session::flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $data = [
            'supplierType' => $this->supplierTypeRepo->getData(),
            'record' => $supplier,
        ];

        return view('setup.vendor-list.supplier-setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupplierRequest  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSupplierRequest $request, Supplier $supplier)
    {

        $this->repo->update($supplier, $request->validated());
        Session::flash('success');
        return redirect()->route('supplier.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        return $supplier->delete();
    }
}
