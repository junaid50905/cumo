<?php

namespace App\Http\Controllers;

use App\Models\MedicineAdminDetails;
use App\Http\Requests\StoreMedicineAdminDetailsRequest;
use App\Http\Requests\UpdateMedicineAdminDetailsRequest;

class MedicineAdminDetailsController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicineAdminDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineAdminDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineAdminDetails  $medicineAdminDetails
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineAdminDetails $medicineAdminDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineAdminDetails  $medicineAdminDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineAdminDetails $medicineAdminDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineAdminDetailsRequest  $request
     * @param  \App\Models\MedicineAdminDetails  $medicineAdminDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineAdminDetailsRequest $request, MedicineAdminDetails $medicineAdminDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineAdminDetails  $medicineAdminDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineAdminDetails $medicineAdminDetails)
    {
        //
    }
}
