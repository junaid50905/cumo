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
                      <form action="{{route('setup.other-settings.academic-calender.create')}}" method="POST">
                          @csrf
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6 d-flex">
                              <label class="form-label col-2">Domain</label>
                              <div class="col-6">
                                <x-input-select name="domain_id" :records="[]" />
                              </div>
                          </div>
                          <div class="col-md-6 d-flex">
                              <label class="form-label col-2">Sub-Domain</label>
                              <div class="col-6">
                                <x-input-select name="sub_domain_id" :records="[]" />
                              </div>
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6 d-flex">
                              <label class="form-label col-2">Area</label>
                              <div class="col-6">
                                <x-input-select name="area_type" :records="[]" />
                              </div>
                          </div>
                          <div class="col-md-6 d-flex">
                              <label class="form-label col-2">Activity</label>
                              <div class="col-6">
                                <x-input-select name="activity_id" :records="[]" />
                              </div>
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6 d-flex">
                              <label class="form-label col-2">Activity Type</label>
                              <div class="col-6">
                                <x-input-select name="activity_type" :records="[]" />
                              </div>
                          </div>
                        </div>
                        <!-- Tab panes One Add  -->
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
                          <table class="table w-100 table-bordered">
                            <thead>
                              <tr class="table-primary">
                                  <th>Activity</th>
                                  <th>Task</th>
                                  <th>Activity Type</th>
                                  <th>Log</th>
                                  <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                              <td>General Play</td>
                              <td>Push and Pull Doors open and closed </td>
                              <td>A</td>
                              <td>Create: Nusrat Jahan @ 2019-06-09 22:22:54
                                  There is no update record.</td>
                              <td>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                  <i class="mdi mdi-pencil"></i>
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