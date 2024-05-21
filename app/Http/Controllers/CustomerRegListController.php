<?php

namespace App\Http\Controllers;

use App\Models\CustomerRegList;
use App\Utility\AccountSetupConstant;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CustomerRegRepository;
use App\Http\Requests\StoreCustomerRegListRequest;
use App\Http\Requests\UpdateCustomerRegListRequest;

class CustomerRegListController extends Controller
{
    private StudentRepository $studentRepo;

    public function __construct(StudentRepository $studentRepo, CustomerRegRepository $customerRegRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->customerRegRepo = $customerRegRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'select' => $this->customerRegRepo->getData(),
            'types' => AccountSetupConstant::$type,
        ];
       return view('setup.customers-list.customer-reg.create' ,$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRegListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRegListRequest $request)
    {
        $this->customerRegRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerRegList $customerRegList)
    {
            $data = [
            'record' => $customerRegList,
            'types' => AccountSetupConstant::$type,
        ];
      return view('setup.customers-list.customer-reg.view' ,$data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerRegList $customerRegList)
    {
             $data = [
            'record' => $customerRegList,
            'types' => AccountSetupConstant::$type,
        ];
      return view('setup.customers-list.customer-reg.edit' ,$data );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRegListRequest  $request
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCustomerRegListRequest $request, CustomerRegList $customerRegList)
    {
        $this->customerRegRepo->update($customerRegList, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerRegList  $customerRegList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerRegList $customerRegList)
    {
        return $customerRegList->delete();
    }
}
