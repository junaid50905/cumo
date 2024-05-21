<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PaymentController extends Controller
{
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function requisition(): Factory|View|Application
    {
        return view('accounting.purchase.requisition');
    }

    public function supplier()
    {
        return view('accounting.purchase.supplier_payment');
    }

    public function directPaymentAdd()
    {
        return view('accounting.purchase.direct_payment.payment_add');
    }

    public function casePaymentList()
    {
        return view('accounting.purchase.direct_payment.cash_payment_list');
    }

    public function advancePaymentList()
    {
        return view('accounting.purchase.direct_payment.advance_payment_list');
    }
    public function bankToBankList()
    {
        return view('accounting.purchase.direct_payment.bank_to_bank_list');
    }
    // Reporting
    public function trailBalance(){
        return view('accounting.reporting.trail-balance.create');
    }

    public function plStatement(){
        return view('accounting.reporting.p&l-statement.create');
    }
    
    public function balanceSheet(){
        return view('accounting.reporting.balance-sheet.create');
    }
    public function print(){
        return view('print-layout.print');
    }

}
