<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageStudentRequest;
use App\Http\Requests\UpdatePackageStudentRequest;
use App\Models\PackageStudent;

class PackageStudentController extends Controller
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
     * @param  \App\Http\Requests\StorePackageStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageStudent  $packageStudent
     * @return \Illuminate\Http\Response
     */
    public function show(PackageStudent $packageStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageStudent  $packageStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageStudent $packageStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageStudentRequest  $request
     * @param  \App\Models\PackageStudent  $packageStudent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageStudentRequest $request, PackageStudent $packageStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageStudent  $packageStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageStudent $packageStudent)
    {
        //
    }
}
