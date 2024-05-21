<?php

namespace App\Http\Controllers;

use App\Models\SalaryHead;
use App\Utility\BankConstants;
use Illuminate\Support\Facades\Session;
use App\Repositories\SalaryHeadRepository;
use App\Http\Requests\StoreSalaryHeadRequest;
use App\Http\Requests\UpdateSalaryHeadRequest;
use App\Repositories\BankAccountRepository;

class SalaryHeadController extends Controller
{
    private SalaryHeadRepository $repo;

    public function __construct(SalaryHeadRepository $repo, BankAccountRepository $bankRepo)
    {
        $this->repo = $repo;
        $this->bankRepo = $bankRepo;
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
            'account' => $this->bankRepo->getData(),
        ];
        return view('setup.salary-head.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalaryHeadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalaryHeadRequest $request)
    {
        $this->repo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalaryHead  $salaryHead
     * @return \Illuminate\Http\Response
     */
    public function show(SalaryHead $salaryHead)
    {
        $data = [
            'record' => $salaryHead,
            'account' => $this->bankRepo->getData(),
        ];
        return view('setup.salary-head.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalaryHead  $salaryHead
     * @return \Illuminate\Http\Response
     */
    public function edit(SalaryHead $salaryHead)
    {
        $data = [
            'record' => $salaryHead,
            'account' => $this->bankRepo->getData(),
        ];
        return view('setup.salary-head.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalaryHeadRequest  $request
     * @param  \App\Models\SalaryHead  $salaryHead
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSalaryHeadRequest $request, SalaryHead $salaryHead)
    {
        $this->repo->update($salaryHead, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalaryHead  $salaryHead
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalaryHead $salaryHead)
    {
        return $salaryHead->delete();
    }
}
