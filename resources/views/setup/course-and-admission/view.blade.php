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
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block"> List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab Panes One -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="modal-body">
              <!-- journal form start -->
              <div class="col-md-12 d-flex">
                <div class="col-md-6 mb-3 text-center">
                    <label class="form-label">Course / Service Name</label>
                    <x-input-text name="course_service_name"  placeholder="Course Name Here"></x-input-text>
                </div>
                <div class="col-md-6 ms-2  mb-3 text-center">
                    <label class="form-label">Duration</label>
                    <x-input-text name="duration"  placeholder="Duration In Month ex:6"></x-input-text>
                </div>
              </div>  
              {{--  Cash Acc / Description  --}}
              <div class="col-md-12 d-flex">
                <div class="col-md-6 mb-3 text-center">
                    <label class="form-label">Cash Acc:</label>
                    <x-input-select name="cash_acc" :records="[]" />
                </div>
                <div class="col-md-6 ms-2  mb-3 text-center">
                    <label class="form-label">Description:</label>
                    <x-input-textarea name="description" ></x-input-textarea>
                </div>
              </div>    
            <div class="col-12 p-0">
                <div class="card">
                    <div class="card-body p-0">
                        <form class="repeater" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="product">Fee Heading</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="product">Acc No</label>
                                </div>
                                <div class="col-lg-4 p-0  text-center">
                                    <label for="total">Amount</label>
                                </div>
                            </div>
                            <div data-repeater-list="group-a">
                                <div data-repeater-item class="row removeRow">
                                    <div  class="col-lg-4 p-0  ps-4 pe-2 pb-1 align-items-center">
                                      <x-input-select name="amount" :records="[]" />
                                    </div>
                                    <div class=" col-lg-4 p-0 pe-2 ps-2 pb-1">
                                      <x-input-select name="select" :records="[]" />
                                    </div>
                                    <div class="col-lg-4 p-0 pe-4 ps-2 pe-2 pb-1 align-self-center d-flex">
                                      <x-input-text name="Amount" type="number"  placeholder="Amount"></x-input-text>
                                        <button class="btn btn-outline-danger waves-effect waves-light ms-2 removeBtn">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                    </div>
                                </div> 
                            </div>
                            <div class="ms-2">
                            <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 ms-1  mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
              <!-- journal form end -->
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
            <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
        </div>
                    </div>
                     <!-- Tab Panes Two -->
                    <div class="tab-pane" id="profile" role="tabpanel">
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
                            <x-input-text type="search" name="search" />
                          </label>
                        </div>
                       </div>
                        <div class="table-responsive">
                          <table class="table w-100 table-bordered">
            <thead>
              <tr class="table-primary">
                <th>Course / Service Name</th>
                <th>Duration</th>
                <th>Cash Account</th>
                <th>Log</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Consultation Fees</td>
                <td>1</td>
                <td>1010 :: Cash Operating Account</td>
                <td>Create: Ohidul Hassan @ 2020-12-27 15:49:02 <br>
                  Update: Ohidul Hassan @ 2022-05-15 15:10:58 </td>
                <td>
                  <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                      class="fas fa-check"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                    <i class="mdi mdi-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                    <i class="fas fa-trash-alt"></i>
                  </button>
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
  </div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection