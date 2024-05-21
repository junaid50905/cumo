<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Services\CertificateService;
use Illuminate\Support\Facades\Session;
use App\Repositories\CertificateRepository;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;

class CertificateController extends Controller
{
    private CertificateRepository $repo;
    private CertificateService $service;

    public function __construct(CertificateRepository $repo, CertificateService $service)
    {
        $this->repo = $repo;
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
        return view('HR.certificate-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificateRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success','Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        $data=[
            'record' =>$certificate
    ];
        return view('HR.certificate-setup.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        $data=[
            'record' =>$certificate
    ];
        return view('HR.certificate-setup.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificateRequest  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        $this->service->update($certificate, $request->validated());
        Session::flash('success', 'Update');
        return redirect()->route('certificate.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        return $certificate->delete();
    }
}
