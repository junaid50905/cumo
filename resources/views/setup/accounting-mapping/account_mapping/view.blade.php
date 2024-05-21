@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                      <form action="{{route('setup.accounting-mapping.account_mapping.create')}}" method="POST">
                          @csrf
                        <!-- Tab panes One Add  -->
                        <div class="modal-body">
                            <div class="row p-5 pt-2 pb-0">
                                <div class="col-6 p-5 pt-0 pb-0">
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Product Category</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-6 p-5 pt-0 pb-0">
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Project</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>   
                                </div>
                            </div> 
                            <div class="row p-5 pt-0 pb-0">
                                <div class="col-6 p-5 pb-3 pt-3">
                                    <div class="mb-3 row  bg-success text-white text-center">
                                    <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                                        name="container"> Sales Acc. Group</label>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Credit Card Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Income Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Vat Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-6 p-5 pb-3 pt-3">
                                    <div class="mb-3 row bg-primary  text-white text-center">
                                        <label class="col-md-12 col-form-label "><input class="form-check-input" id="container" type="checkbox" 
                                        name="container"> Purchase Acc. Group</label>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Expense Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Vat Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="row p-5 pt-0 pb-0">
                                <div class="col-6 p-5 pt-0 pb-3">
                                    <div class="mb-3 row  bg-info text-white text-center">
                                    <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                                        name="container"> Sales Return Acc. Group</label>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Returnable Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-labelpe-0 ps-0">Income Acc.</label>
                                        <div class="col-md-8  pe-0 ps-0pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-labelpe-0 ps-0">Vat Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-6 p-5 pt-0 pb-3">
                                    <div class="mb-3 row  bg-danger text-white text-center">
                                        <label class="col-md-12 col-form-label "><input class="form-check-input" id="container" type="checkbox" 
                                        name="container"> Purchase Return Acc. Group</label>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-labelpe-0 ps-0">Expense Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-labelpe-0 ps-0">Vat Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="row p-5 pt-0">
                                <div class="col-6 p-5 pt-0 pb-3">
                                    <div class="mb-3 row bg-dark text-white text-center">
                                    <label class="col-md-12 col-form-label"><input class="form-check-input" id="container" type="checkbox" 
                                        name="container">  Customer Payment Acc. Group</label>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Receivable Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-6 p-5 pt-0 pb-3">
                                    <div class="mb-3 row bg-secondary text-white text-center">
                                        <label class="col-md-12 col-form-label "><input class="form-check-input" id="container" type="checkbox" 
                                        name="container">  Supplier Payment Acc. Group</label>
                                    </div> 
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Payable Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cash Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                            :records="[]" />
                                        </div>
                                    </div>  
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label pe-0 ps-0">Cheque Acc.</label>
                                        <div class="col-md-8 pe-0 ps-0">
                                            <x-input-select name="student_id"
                                            :records="[]" />
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                         </div>
                        <!-- Tab panes One Close  -->
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <!-- Tab panes Two Add  -->
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
                              <x-input-text  type="search" name="search"/>
                            </label>
                          </div>
                        </div>
                        <div class="table-responsive">
                         <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr class="table-primary">
                                    <th class="">Project</th>
                                    <th class="">Category</th>
                                    <th class="">Log</th>
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Administration</td>
                                    <td>Canteen Raw Material</td>
                                    <td><small>Create: Ohidul Hassan @ 2021-08-10 17:11:36</small></td>
                                    <td>
                                    <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                    <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light"><i class="fas fa-check"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light"><i class="fas fa-trash-alt" id="sa-warning"></i></button>
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
                        <!-- Tab panes Two Close  -->
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
 <!-- form repeater js -->
  <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection