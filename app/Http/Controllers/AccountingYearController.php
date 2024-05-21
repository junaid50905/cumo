<?php

namespace App\Http\Controllers;

use App\Models\AccountingYear;
use Illuminate\Support\Facades\Session;
use App\Repositories\AccountingYearRepository;
use App\Http\Requests\StoreAccountingYearRequest;
use App\Http\Requests\UpdateAccountingYearRequest;

class AccountingYearController extends Controller
{
    private AccountingYearRepository $accountYearRepo;

    public function __construct(AccountingYearRepository $accountYearRepo)
    {
        $this->accountYearRepo = $accountYearRepo;
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
        return view('setup.accounting-mapping.accounting_year_setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAccountingYearRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountingYearRequest $request)
    {
        $this->accountYearRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountingYear  $accountingYear
     * @return \Illuminate\Http\Response
     */
    public function show(AccountingYear $account_year)
    {
        
        $data = [
            'record' => $account_year
    ];
       return view('setup.accounting-mapping.accounting_year_setup.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountingYear  $accountingYear
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountingYear $account_year)
    {
        
        $data = [
            'record' => $account_year
        ];
       return view('setup.accounting-mapping.accounting_year_setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountingYearRequest  $request
     * @param  \App\Models\AccountingYear  $accountingYear
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountingYearRequest $request, AccountingYear $accountingYear)
    {
       $this->accountYearRepo->update($accountingYear, $request->validated());
       Session::flash('success');
       return redirect()->route('account-year.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountingYear  $accountingYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountingYear $account_year)
    {
        return $account_year->delete();
    }
}
