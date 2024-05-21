<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\DirectPayment;
use Illuminate\Contracts\View\View;
use App\Services\DirectPaymentService;
use Illuminate\Contracts\View\Factory; 
use App\Repositories\PaymentRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\PaymentTypeRepository;
use App\Repositories\DirectPaymentRepository;
use App\Http\Requests\StoreDirectPaymentRequest;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\UpdateDirectPaymentRequest;

class DirectPaymentController extends Controller
{
    private ProjectRepository $projectRepo;
    private PaymentTypeRepository $paymentTypeRepo;
    private PaymentRepository $paymentRepo;
    private DirectPaymentService $service;
    private DirectPaymentRepository $repo;

    public function __construct(
        ProjectRepository $projectRepository,
        PaymentTypeRepository $paymentTypeRepository,
        PaymentRepository $paymentRepository,
        DirectPaymentService $service,
        DirectPaymentRepository $repository,
    ) {
        $this->projectRepo = $projectRepository;
        $this->paymentTypeRepo = $paymentTypeRepository;
        $this->paymentRepo = $paymentRepository;
        $this->service = $service;
        $this->repo = $repository;
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
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'paymentType' => $this->paymentTypeRepo->getData(),
        ];

        return view('accounting.purchase.direct_payment.payment_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDirectPaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirectPaymentRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DirectPayment  $directPayment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'record' => Payment::find($id),
        ];
        return view('accounting.purchase.direct_payment.payment_view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'record' => Payment::find($id),
        ];
        // dd($data['record']);
        return view('accounting.purchase.direct_payment.payment_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDirectPaymentRequest  $request
     * @param  \App\Models\DirectPayment  $directPayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirectPaymentRequest $request, DirectPayment $directPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DirectPayment  $directPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Payment::find($id)->delete();
    }


    public function cashPaymentList()
    {
        return view('accounting.purchase.direct_payment.cash_payment_list');
    }
}
