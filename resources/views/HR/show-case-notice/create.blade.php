@extends('layouts.master')
@section('css')
@endsection
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
                        <!-- sample modal content -->
                        <div class="modal-body p-0">    
                            <div class="card p-0 m-0">
                                <div class="card-body">
                                    <div class="row">
                                        {{-- Select Name --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Select Name</label>
                                                <x-input-select name="student_id" :records="['1' => 'ONE', '2' => 'TWO']" />
                                            </div>
                                        </div>
                                        {{-- Show Cause Subject --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Show Cause Subject</label>
                                                <x-input-text name="showcase_sub" type="text"
                                                placeholder="">
                                            </x-input-text> 
                                            </div>
                                        </div>  
                                                    {{-- Show Cause Description --}}
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                        <label class="form-label">Show Cause Description</label>
                                            <div class="col-md-12">
                                            <x-input-textarea name="showcase_des" type="text"
                                                placeholder="">
                                            </x-input-textarea>
                                            </div>
                                        </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row modal-footer">
                            <div class="col-md-1">
                                <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-success w-100">Save</button>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
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
                                <th>Employee Name</th>
                                <th>Show Cause Subject</th>
                                <th>Show Cause Description</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Mst Tahmina Begum</td>
                                <td>test sub</td>
                                <td>test</td>
                                <td>Create: Md. Kutubuddin .. @ 2020-12-08 12:37:02 There is no update record.</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                  <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
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

                <!--  Extra Large modal example -->
     <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"> Show Cause Notice Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                     <h3 class="text-center">SHOW CAUSE NOTICE</h3>
                     <p>Name :Mst Tahmina Begum</p>
                     <p>Employee ID :ID-0149</p>
                     <p>Department/Location :Admin</p>
                     <h6 class="mt-4 mb-3">Subject : Show Cause Notice on the issue test sub.</h6>
                     <p class="mt-4 mb-3">test</p>
                     <p class="mt-4 mb-3">Yours faithfully,</p>
                     <p class="m-0 ">-------------------</p>
                     <p class="mb-4">HR/Authorized Person</p>
                    <!-- journal form end -->
                    <div class="row modal-footer">
  
                        <div class="col-md-1">
                            <button class="btn btn-success w-100">Print</button>    
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
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
@endsection