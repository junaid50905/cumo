@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Transaction Analysis View</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="card p-0 m-0">
                    <div class="card-body">
                        <div class="row pb-3">
                            <div class="row pb-3">
                                <div class="col-6 d-flex">
                                    <label class="col-2 col-form-label text-end me-4">Form</label>
                                    <div class="col-10 mb-4">
                                        <x-input-text type="date" name="form_date" placeholder="mm/dd/yyyy"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-6 d-flex">
                                    <label for="example-date-input" class="col-md-2 col-form-label me-4  text-end">To</label>
                                    <div class="col-md-10">
                                        <x-input-text type="date" name="to_date" placeholder="mm/dd/yyyy"></x-input-text>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-6 d-flex">
                                <label class="col-2 col-form-label text-end me-4">Bank</label>
                                <div class="col-10 mb-4">
                                    <x-input-select name="bank" :records="[]" />
                                </div>
                                <div class="col-md-4 ms-2">
                                    <button class="btn btn-outline-info waves-effect waves-light" data-bs-dismiss="modal">Show</button>
                                </div>
                         </div>
                         <div class="col-6 d-flex ps-0">
                            <label class="col-1 ms-3 col-form-label"></label>
                            <div class="col-10 ms-5 pe-3 mb-4">
                             <x-input-text value="Company Amount: Bank Amount:" name="company"></x-input-text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Transaction Date</th>
                                                    <th>Particular</th>
                                                    <th>Debit</th>
                                                    <th>Credit</th>
                                                    <th>Reconciliation Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>No data available in table</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
                        <!-- end row -->
                            <div class="col-md-12 d-flex">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Journal Add</button>
                                </div>    
                                <div class="col-md-6 text-end">
                                    <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                </div>    
                            </div>
                         </div>
                        </div> 
                    </div>
<!--  Extra Large modal example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myExtraLargeModalLabel"> Add Journal Voucher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal-body p-0"> 
                <div class="card p-0 m-0">
                    <div class="card-body p-0">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 text-center">
                                            <label for="formrow-inputState" class="form-label">Project</label>
                                            <x-input-select name="project_id" :records="[]" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 text-center">
                                            <label for="formrow-inputState" class="form-label">Trans. Amount</label>
                                            <x-input-text type="number" name="trans_amount" placeholder="Trans. Amount"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 text-center">
                                            <label for="formrow-inputState" class="form-label">Voucher Date</label>
                                            <x-input-text type="date" name="voucher_date" placeholder="mm/dd/yyyy"></x-input-text>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-3 text-center">
                                            <label for="formrow-inputZip" class="form-label ">Particulars</label>
                                            <x-input-text name="particulars" placeholder="Particulars"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3 text-center">
                                            <label for="formrow-inputZip" class="form-label">Reference</label>
                                            <x-input-text name="reference" placeholder="Reference If Any"></x-input-text>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <h6 class="text-center">Enter Transaction Detail</h6>
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col p-0 pe-1 text-center">
                                    <label for="number">Acc. Number</label>
                                </div>
                                <div class="col p-0 pe-1 text-center">
                                    <label for="particular">Acc. Particular</label>
                                </div>
                                <div class="col p-0 pe-1 text-center">
                                    <label for="debit">Debit</label>
                                </div>
                                <div class="col p-0 ps-5 text-center">
                                    <label for="credit">Credit</label>
                                </div>
                            </div>
                            <div data-repeater-list="group-a">
                                <div data-repeater-item="" class="row ms-1 removeRow">
                                    <div class=" col p-0 pe-1 pb-1">
                                        <x-input-text name="account_number" type="number" placeholder="Acc. Number"></x-input-text>
                                    </div>
                                    <div class=" col p-0 pe-1 pb-1">
                                        <x-input-text name="account_particular" placeholder="Acc. Particular"></x-input-text>
                                    </div>
                                    <div class=" col p-0 pe-1 pb-1">
                                        <x-input-text name="debit" type="number" placeholder="Debit"></x-input-text>
                                    </div>
                                    <div class=" col p-0  pb-1 me-4 d-flex">
                                        <x-input-text name="credit" type="number" placeholder="Credit"></x-input-text>
                                        <button class="btn btn-outline-danger waves-effect waves-light ms-2 removeBtn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create="" type="button" class="btn btn-outline-info waves-effect waves-light mt-3 ms-1 mt-lg-0" value="Add">
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                </div>
            </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        </div>
    </div>
  </div>
</div> 
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection

