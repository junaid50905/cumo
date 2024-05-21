@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Bank Reconciliation </span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="row pb-3">
                                <div class="col-6 d-flex">
                                    <label class="col-2 col-form-label">Form</label>
                                    <div class="col-10 mb-4">
                                        <x-input-text type="date" name="form_date" placeholder="mm/dd/yyyy"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <label for="example-date-input" class="col-md-2 col-form-label">To</label>
                                    <div class="col-md-10">
                                        <x-input-text type="date" name="to_date" placeholder="mm/dd/yyyy"></x-input-text>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-6 d-flex">
                                <label class="col-2 col-form-label">Bank</label>
                                <div class="col-10 mb-4">
                                    <x-input-select name="bank" :records="$bankList" />
                                </div>
                                <div class="col-md-4 ms-2">
                                    <button type="button" class="btn btn-outline-info  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Show</button>
                                </div>
                         </div>
                        <div class="row pb-3">
                            <div class="row">
                                <table class="table table-bordered dt-responsive  w-100 px-5">
                                    <thead>
                                        <tr>
                                            <th>Selected Task </th>
                                            <th>Date</th>
                                            <th>Reference no (CQ no)</th>
                                            <th>Deposit</th>
                                            <th>Withdrawal</th>
                                            <th>Reconciled</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            </div>
                            <div class="row modal-footer">
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-success  waves-light w-100" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Print</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light w-100" data-bs-dismiss="modal"> Close</button> 
                                </div>
                            </div>
                         </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div
@endsection