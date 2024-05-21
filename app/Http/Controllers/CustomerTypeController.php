<?php

namespace App\Http\Controllers;

use App\Models\CustomerType;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CustomerTypeRepository;
use App\Http\Requests\StoreCustomerTypeRequest;
use App\Http\Requests\UpdateCustomerTypeRequest;

class CustomerTypeController extends Controller
{

    private StudentRepository $studentRepo;
    private CustomerTypeRepository $customerTypeRepo;

    public function __construct(StudentRepository $studentRepo, CustomerTypeRepository $customerTypeRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->customerTypeRepo = $customerTypeRepo;
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
            'projects' => $this->customerTypeRepo->getData(),
        ];
        return view('setup.customers-list.customer-type.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerTypeRequest $request)
    {
        $this->customerTypeRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerType  $customerType
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerType $customerType)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerType  $customerType
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerType $customerType)
    {
        $data = [
            'record' => $customerType,
        ];
        return view('setup.customers-list.customer-Type.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerTypeRequest  $request
     * @param  \App\Models\CustomerType  $customerType
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCustomerTypeRequest $request, CustomerType $customerType)
    {
        $this->customerTypeRepo->update($customerType, $request->validated());
        Session::flash('success');
        return redirect()->route('customer-type.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerType  $customerType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerType $customerType)
    {
        return $customerType->delete();
    }
}
