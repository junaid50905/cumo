<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Utility\WarehouseConstant;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\WarehouseRepository;
use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;

class WarehouseController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private WarehouseRepository $warehouseRepo;
    public $record;

    public function __construct(UserRepository $userRepository, StudentRepository $studentRepo, WarehouseRepository $warehouseRepo)
    {
        $this->userRepo = $userRepository;
        $this->studentRepo = $studentRepo;
        $this->warehouseRepo = $warehouseRepo;
    }

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
        $data = [
            'store_type' => WarehouseConstant::$StorType,
            'users' => $this->userRepo->getData(),
        ];
        return view('setup.store-management.warehouse_setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWarehouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWarehouseRequest $request)
    {
        $this->warehouseRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        $data = [
            'store_type' => WarehouseConstant::$StorType,
            'users' => $this->userRepo->getData(),
            'record' => $warehouse,
        ];
        return view('setup.store-management.warehouse_setup.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse)
    {
        $data = [
            'store_type' => WarehouseConstant::$StorType,
            'users' => $this->userRepo->getData(),
            'record' => $warehouse,
        ];
        return view('setup.store-management.warehouse_setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWarehouseRequest  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWarehouseRequest $request, Warehouse $warehouse)
    {
        $this->warehouseRepo->update($warehouse, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse)
    {
        return $warehouse->delete();
    }
}
