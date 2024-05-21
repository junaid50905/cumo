<?php

namespace App\Http\Controllers;

use App\Models\CompanySetup;
use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreCompanySetupRequest;
use App\Http\Requests\UpdateCompanySetupRequest;


class CompanyController extends Controller
{
    private CompanyRepository $companyRepo;

    public function __construct(CompanyRepository $companyRepo)
    {
        $this->companyRepo = $companyRepo;
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
        // 'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        'students' => []
    ];
    return view('setup.company-setup.create', $data);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreCompanySetupRequest  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreCompanySetupRequest $request)
   {
       $this->companyRepo->store($request->validated());
       Session::flash('success');
       return redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\CompanySetup  $Company
    * @return \Illuminate\Http\Response
    */
   public function show(CompanySetup $company)
   {
       $data = ['record' => $company];
       return view('setup.Company-setup.view', $data);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Company  $Company
    * @return \Illuminate\Http\Response
    */
   public function edit(CompanySetup $company)
   {
       $data = ['record' => $company];
       return view('setup.Company-setup.edit', $data);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateCompanyRequest  $request
    * @param  \App\Models\Company  $Company
    * @return \Illuminate\Http\Response
    */
   public function update(UpdateCompanySetupRequest $request, CompanySetup $company)
   {
       $this->companyRepo->update($company, $request->validated());
       Session::flash('success');
       return redirect()->route('company.create');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Company  $Company
    * @return \Illuminate\Http\Response
    */
   public function destroy(CompanySetup $Company)
   {
       return $Company->delete();
   }
}
