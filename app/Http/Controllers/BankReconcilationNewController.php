<?php

namespace App\Http\Controllers;

use App\Utility\BankConstants;
use App\Models\BankReconcilationNew;
use App\Repositories\StudentRepository;
use App\Repositories\BankReconcilationNewRepository;
use App\Http\Requests\StoreBankReconcilationNewRequest;
use App\Http\Requests\UpdateBankReconcilationNewRequest;

class BankReconcilationNewController extends Controller
{
    private StudentRepository $studentRepo;
    private BankReconcilationNewRepository $bankReconcilationNewRepo;
    public $record;

    public function __construct(StudentRepository $studentRepo, BankReconcilationNewRepository $bankReconcilationNewRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->bankReconcilationNewRepo = $bankReconcilationNewRepo;
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
            'bankList' => BankConstants::$bankList,
        ];

        return view('setup.bank-reconcilation-new.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankReconcilationNewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankReconcilationNewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankReconcilationNew  $bankReconcilationNew
     * @return \Illuminate\Http\Response
     */
    public function show(BankReconcilationNew $bankReconcilationNew)
    {
        return view('setup.bank-reconcilation-new.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankReconcilationNew  $bankReconcilationNew
     * @return \Illuminate\Http\Response
     */
    public function edit(BankReconcilationNew $bankReconcilationNew)
    {
        return view('setup.bank-reconcilation-new.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankReconcilationNewRequest  $request
     * @param  \App\Models\BankReconcilationNew  $bankReconcilationNew
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankReconcilationNewRequest $request, BankReconcilationNew $bankReconcilationNew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankReconcilationNew  $bankReconcilationNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankReconcilationNew $bankReconcilationNew)
    {
        //
    }
}
