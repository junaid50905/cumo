<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Support\Facades\Session;
use App\Repositories\InstituteRepository;
use App\Http\Requests\StoreinstituteRequest;
use App\Http\Requests\UpdateinstituteRequest;
use App\Http\Requests\StoreInstituteSetupRequest;
use App\Http\Requests\UpdateInstituteSetupRequest;

class InstituteSetupController extends Controller
{
    private InstituteRepository $instituteRepo;

    public function __construct(InstituteRepository $instituteRepo)
    {
        $this->instituteRepo = $instituteRepo;
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
       return view('HR.Institute-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreinstituteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstituteSetupRequest $request)
    {
        $this->instituteRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    { 
    $data =[
        'record' => $institute
    ];
     return view('HR.Institute-setup.view' ,$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        $data =[
            'record' => $institute
        ];
         return view('HR.Institute-setup.edit' ,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinstituteRequest  $request
     * @param  \App\Models\Institute $institute
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstituteSetupRequest $request, Institute $institute)
    {
        $this->instituteRepo->update($institute, $request->validated());
        Session::flash('success');
        return redirect()->route('institute.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        return $institute->delete();
    }
}
