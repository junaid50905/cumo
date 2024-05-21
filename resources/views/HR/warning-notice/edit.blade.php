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
                        <div class="modal-body p-0">
                            <div class="container">
                                <div class="row row-cols-2">
                                <div class="col">
                                    <h6>Select Name</h6>
                                    <x-input-select name="student_id" :records="[]" />
                                </div>
                                <div class="col">
                                    <h6>Warning Subject</h6>
                                    <x-input-text name="warning_sub" type="text"
                                            placeholder="">
                                        </x-input-text>
                                </div> 
                                </div>
                                <div class="col-xs-12 col-lg-12 col-md-12">
                                    <label class="control-label col-xs-12 col-md-12 text-left p-left-0   pt-3" for="" title="Student">Warning Description 
                                    </label>
                                    <div class="col-xs-12 col-md-12">
                                        <x-input-textarea name="warning_des" type="text"
                                            placeholder="">
                                        </x-input-textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal"> Close</button>
                            <button type="button" class="btn font-size-16 btn-success" id="sa-position"> Save</button>
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
                                <th>Warning Subject</th>
                                <th>Warning Description</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Mst Tahmina Begum </td>
                                <td>test sub</td>
                                <td>test desc</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target="#material-callects-modal-xl-view">
                                    <i class="mdi mdi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                        class="fas fa-check"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
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


                <div class="modal fade material-callects-modal-xl-view" id="material-callects-modal-xl-view" tabindex="-2" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-primary"> Warning Notice Details
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class=" col-xs-12 col-lg-12 col-md-12">
                                    <div id="myElementId">
                                        <h5 class="text-center"><b>WARNING NOTICE</b></h5>
                                        <div class="title-header">
                                        <p>Name :Mst Tahmina Begum</p>
                                        <p>Employee ID :ID-0149</p>
                                        <p>Department/Location :Admin</p>
                                        <br>
                                        <p><b>Subject: Warning Notice on the issue test sub.</b></p>
                                        <br>
                                        <p>test desc</p>
                                        <br> 
                                        <p>Yours faithfully,</p>
                                        <br>
                                        -------------------
                                        <p>HR/Authorized Person</p>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn font-size-14 btn-danger" data-bs-dismiss="modal"> Print</button>
                                <button type="button" class="btn font-size-14 btn-success" id="sa-position" data-bs-dismiss="modal"> Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection