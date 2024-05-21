<?php

namespace App\Http\Controllers;

use App\Models\CurrencySetup;
use Illuminate\Support\Facades\Session;
use App\Repositories\CurrencySetupRepository;
use App\Http\Requests\StoreCurrencySetupRequest;
use App\Http\Requests\UpdateCurrencySetupRequest;

class CurrencySetupController extends Controller
{
    private CurrencySetupRepository $currencyRepo;

    public function __construct(CurrencySetupRepository $currencyRepo)
    {
        $this->currencyRepo = $currencyRepo;
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
            'records' => []
        ];
        return view('HR.currency-setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCurrencySetupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencySetupRequest $request)
    {
        $this->currencyRepo->store($request->validated());
       Session::flash('success');
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function show(CurrencySetup $currency)
    {
        $data = ['record' => $currency];
       return view('HR.currency-setup.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrencySetup $currency)
    {
        $data = ['record' => $currency];
        return view('HR.currency-setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurrencySetupRequest  $request
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurrencySetupRequest $request, CurrencySetup $currency)
    {
        $this->companyRepo->update($currency, $request->validated());
       Session::flash('success');
       return redirect()->route('company.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurrencySetup  $currencySetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrencySetup $currency)
    {
        return $currency->delete();
    }
}
