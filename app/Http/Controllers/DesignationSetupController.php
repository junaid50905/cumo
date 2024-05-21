<?php

namespace App\Http\Controllers;

use App\Models\DesignationSetup;
use Illuminate\Support\Facades\Session;
use App\Repositories\DesignationSetupRepository;
use App\Http\Requests\StoreDesignationSetupRequest;
use App\Http\Requests\UpdateDesignationSetupRequest;

class DesignationSetupController extends Controller
{
    private DesignationSetupRepository $designationSetupRepo;

    public function __construct(DesignationSetupRepository $designationSetupRepo)
    {
        $this->designationSetupRepo = $designationSetupRepo;
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
        return view('HR.designation-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDesignationSetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesignationSetupRequest $request)
    {
        $this->designationSetupRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function show(DesignationSetup $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(DesignationSetup $designation)
    {
        $data=[
            'record' => $designation
        ];
       return view('HR.designation-setup.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDesignationSetupRequest  $request
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesignationSetupRequest $request, DesignationSetup $designation)
    {
        $this->designationSetupRepo->update($designation, $request->validated());
        Session::flash('success');
        return redirect()->route('designation.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DesignationSetup  $designationSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(DesignationSetup $designation)
    {
        return $designation->delete();
    }
}
