<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Repositories\DonorRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreDonorRequest;
use App\Http\Requests\UpdateDonorRequest;

class DonorController extends Controller
{
    private DonorRepository $donorRepo;
    public function __construct(DonorRepository $donorRepo)
    {
        $this->donorRepo = $donorRepo;
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
            'projects' => $this->donorRepo->getData(),
        ];
        return view('setup.donor.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDonorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonorRequest $request)
    {
        $this->donorRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        $data = [
            'record' => $donor,
        ];
        return view('setup.donor.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        $data = [
            'record' => $donor,
        ];
        return view('setup.donor.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonorRequest  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonorRequest $request, Donor $donor)
    {
        $this->donorRepo->update($donor, $request->validated());
        Session::flash('success');
        return redirect()->route('donor.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        return $donor->delete();
    }
}
