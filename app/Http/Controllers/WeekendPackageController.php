<?php

namespace App\Http\Controllers;

use App\Models\WeekendPackage;
use App\Services\WeekendPackageService;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreWeekendPackageRequest;
use App\Http\Requests\UpdateWeekendPackageRequest;

class WeekendPackageController extends Controller
{
    private WeekendPackageService $service;

    public function __construct(WeekendPackageService $service)
    {
        $this->service = $service;
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
        return view('setup.weekend-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWeekendPackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeekendPackageRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success','Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeekendPackage  $weekendPackage
     * @return \Illuminate\Http\Response
     */
    public function show(WeekendPackage $weekendPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeekendPackage  $weekendPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(WeekendPackage $weekendPackage)
    {
        $data = [
            'record' => $weekendPackage
        ];
        return view('setup.weekend-package.edit' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeekendPackageRequest  $request
     * @param  \App\Models\WeekendPackage  $weekendPackage
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWeekendPackageRequest $request, WeekendPackage $weekendPackage)
    {
        $this->service->update($weekendPackage, $request->validated());
        Session::flash('success', 'Update');
        return redirect()->route('weekend-package.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeekendPackage  $weekendPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeekendPackage $weekendPackage)
    {
        return $weekendPackage->delete();
    }
}
