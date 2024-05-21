@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />  
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Supplier Type Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Supplier Type List</span>
                        </a>
                   </li> 
                </ul>
             <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                       <div class="row">
                        <div class=" col-6">
                            <div class="row ">
                                <div class="col-3 mt-3 mb-3">
                                    <label for="formmessage">Name:</label>
                                </div>
                                <div class="col-7 mt-3 mb-3">
                                    <x-input-text name="name" placeholder="Supplier type name here"></x-input-text>
                                </div>      
                            </div>
                            <div class="row">
                                    <div class="col-3 mt-3 mb-3">
                                        <label for="formmessage">Description:</label>
                                    </div>
                                    <div class="col-7 mt-3 mb-3">
                                        <x-input-textarea name="description" placeholder="Enter description here"></x-input-textarea>
                                    </div>
                            </div>
                          <div class="d-flex justify-content-center ">
                            <div class="me-2"> 
                                <button class="btn btn-outline-danger waves-effect waves-light" type="submit">RESET</button>
                            </div>
                            <div class="ms-2">
                                <button class="btn btn-outline-success waves-effect waves-light" type="submit">SAVE</button>
                            </div>
                          </div>
                         </div>
                       </div>
                    </div>
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
                                <input type="search" class="form-control form-control-sm" placeholder="">
                              </label>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table class="table w-100 table-bordered">
                              <thead>
                                <tr class="table-primary">
                                  <th>Name</th>
                                  <th>Description</th>
                                  <th>Log</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Whole Sell</td>
                                  <td>In House Supplier</td>
                                  <td>Create: Shonod Digital @ 2018-12-01 17:51:02
                                    There is no update record. </td>
                                  <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                      <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                      <i class="mdi mdi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                      <i class="bx bx-dollar"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                      <i class="fas fa-arrow-circle-right"></i>
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
@endsection