<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Repositories\StudentRepository;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;

class PrescriptionController extends Controller
{
    private StudentRepository $studentRepo;
    public function __construct( StudentRepository $studentRepository)
    {
        $this->studentRepo = $studentRepository;
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
        return view('setup.program-setup.prescription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePrescriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrescriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        $data = [
            'record' => $prescription,
        ];
        return view('setup.program-setup.prescription.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        $data = [
            'record' => $prescription,
        ];
        return view('setup.program-setup.prescription.edit',$data );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrescriptionRequest  $request
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrescriptionRequest $request, Prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        return $prescription->delete();
    }
}
