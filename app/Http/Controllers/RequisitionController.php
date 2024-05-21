<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequisitionRequest;
use App\Http\Requests\UpdateRequisitionRequest;
use App\Models\Requisition;
use App\Repositories\DepartmentSetupRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class RequisitionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('accounting.purchase.requisition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequisitionRequest  $request
     * @return Response
     */
    public function store(StoreRequisitionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Requisition $requisition
     *
     * @return Response
     */
    public function show(Requisition $requisition)
    {
        $data = [
            'record' => $requisition,
        ];
        return view('accounting.purchase.requisition_show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Requisition  $requisition
     *
     * @return Application|Factory|View
     */
    public function edit(Requisition $requisition): View|Factory|Application
    {
        $data = [
            'record' => $requisition,
        ];

        return view('accounting.purchase.requisition_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequisitionRequest  $request
     * @param Requisition $requisition
     *
     * @return Response
     */
    public function update(UpdateRequisitionRequest $request, Requisition $requisition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Requisition  $requisition
     *
     * @return Response
     */
    public function destroy(Requisition $requisition)
    {
        return $requisition->delete();
    }
}
