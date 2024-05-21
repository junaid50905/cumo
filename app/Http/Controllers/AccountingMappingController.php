<?php

namespace App\Http\Controllers;

use App\Models\AccountingMapping;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreAccountingMappingRequest;
use App\Http\Requests\UpdateAccountingMappingRequest;
use App\Repositories\AccountingMappingRepository;

class AccountingMappingController extends Controller
{
    private StudentRepository $studentRepo;
    private AccountingMappingRepository $accountingMappingRepo;
    public $record;

    public function __construct(StudentRepository $studentRepo, AccountingMappingRepository $accountingMappingRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->accountingMappingRepo = $accountingMappingRepo;
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
        return view('setup.accounting-mapping.account_mapping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAccountingMappingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountingMappingRequest $request)
    {
        $this->warehouseRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountingMapping  $accountingMapping
     * @return \Illuminate\Http\Response
     */
    public function show(AccountingMapping $accountingMapping)
    {
        return view('setup.accounting-mapping.account_mapping.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountingMapping  $accountingMapping
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountingMapping $accountingMapping)
    {
        return view('setup.accounting-mapping.account_mapping.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountingMappingRequest  $request
     * @param  \App\Models\AccountingMapping  $accountingMapping
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountingMappingRequest $request, AccountingMapping $accountingMapping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountingMapping  $accountingMapping
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountingMapping $accountingMapping)
    {
        //
    }
}
