@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Cash Payment List @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <!-- end row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                        class="form-control form-control-sm form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-6 text-end">
                                <label style="display: inline-flex;align-items: center;">Search:
                                    <input type="search" class="form-control form-control-sm" placeholder="">
                                </label>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Purpose</th>
                                                <th>From Account</th>
                                                <th>To account</th>
                                                <th>Amount</th>
                                                <th>Check Book Name</th>
                                                <th>Check No</th>
                                                <th>Trans Date</th>
                                                <th>Is Sent For Approval</th>
                                                <th>Is Approved</th>
                                                <th>Approved By</th>
                                                <th>Approved Date</th>
                                                <th>Is Transfer Done</th>
                                                <th>Transfer Date</th>
                                                <th>Log</th>
                                                <th class="nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Puja</td>
                                        <td>puja</td>
                                        <td>reading</td>
                                        <td>first to last</td>
                                        <td>Puja</td>
                                        <td>puja</td>
                                        <td>reading</td>
                                        <td>first to last</td>
                                        <td>Puja</td>
                                        <td>puja</td>
                                        <td>yousuf</td>
                                        <td>reading</td>
                                        <td>first to last</td>
                                        <td>first to last</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm  m-1 btn-primary btn-rounded waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".cash-payment-view"> <i
                                                    class="fas fa-eye"></i></button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                                <i class="fas fa-pen"></i></button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                                    class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                Showing 1 to 2 of 2 entries
                            </div>
                            <div class="col-sm-12 col-md-6 text-end">
                                <nav>
                                    <ul class="pagination" style="justify-content: end;">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
         <!--  Extra Large modal example -->
         <div class="modal fade cash-payment-view" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary">Advance Payment List View <i class=" fas fa-eye bx-tada"></i></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- journal form start -->
                            <div class="row">
                                <div class="col-md-12 my-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Project</label>
                                        <div class="col-sm-9">
                                          <x-input-text type="text" name="yousuf" placeholder="Administration" :readOnly="true"></x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">From Account</label>
                                        <div class="col-sm-9">
                                          <x-input-text type="text" name="yousuf" placeholder="1050004-Bank-The City Bank Ltd (3101829023001)" :readOnly="true"></x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">To Account</label>
                                        <div class="col-sm-9">
                                          <x-input-text type="text" name="yousuf" placeholder="1050001-Bank - Brac Bank (A/c # 1555204025093001)" :readOnly="true"></x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Amount</label>
                                        <div class="col-sm-9">
                                          <x-input-text type="number" name="yousuf" value="21343"></x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Chequebook Name</label>
                                        <div class="col-sm-9">
                                          <x-input-text type="text" name="yousuf" placeholder="City Bank Book-3" :readOnly="true"></x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cheque No</label>
                                        <div class="col-sm-9">
                                          <x-input-text type="text" name="yousuf" placeholder="6446552" :readOnly="true"></x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Amount</label>
                                        <div class="col-sm-9">
                                          <x-input-textarea type="text" name="yousuf" rows="5" :readOnly="true" placeholder="Amount as bank transfer from City bank (VTC A/C -3101829023001) to BRAC Bank (Angel Chef A/C-1555204025093001) for food sales by Angel chef to the parents for celebrating new year-2022 prog. because this amount deposited in the city bank a/c as subscriptions received from the parents."></x-input-textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <h4>Approval History</h4>
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr class="table-primary">
                                                 <th>Sl</th>
                                                <th>Approvar</th>
                                                <th>Status</th>
                                                <th>Comments</th>
                                                <th>Status Changed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Sajida Rahman</td>
                                            <td>Approved</td>
                                            <td></td>
                                            <td>2022-01-25</td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-xl-12 my-4">
                                    <label for="">Comments</label>
                                    <x-input-textarea  name="yousuf" rows="1"></x-input-text>
                                 </div>
                            </div>
                        <!-- journal form end -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn font-size-16 btn-success"><i class="bx bx-printer"></i> Print</button>
                        <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"><i class="bx bx-exit"></i> Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
@endsection
@section('script')
  
@endsection
@section('script-bottom')
@endsection