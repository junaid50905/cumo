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
                              <div class="modal-body p-0">
                                    <div class="card p-0 m-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 col-form-label">Student:</label>
                                                        <div class="col-md-8">
                                                            <select class="form-select">
                                                                <option>Select</option>
                                                                <option>yousufe</option>
                                                                <option>yamin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-md-4 col-form-label">Main Teacher:</label>
                                                        <div class="col-md-8">
                                                            <select class="form-select">
                                                                <option>Select</option>
                                                                <option>Md Hanif</option>
                                                                <option>Md Momin</option>
                                                                <option>Md Rahamat</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3 ">
                                                <div class="col-2 d-flex align-items-center">
                                                    <div class=" row">
                                                        <label class=" col-form-label ">Teacher:</label>

                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Select All
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Deselect All
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Abul hasnat
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Airin Shiddique
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Anas Bin Iqbal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Arup Mandal
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Abul hasnat
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Airin Shiddique
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Anas Bin Iqbal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Arup Mandal
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Abul hasnat
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Airin Shiddique
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Anas Bin Iqbal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Arup Mandal
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="square-switch pt-3">
                                                <input type="checkbox" id="square-switch1" switch="none" checked />
                                                <label for="square-switch1" data-on-label="Yes"
                                                    data-off-label="No"></label>
                                            </div>

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
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                          <thead>
                              <tr>
                                  <th class="">Student</th>
                                  <th class="">Main Teacher</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>demo </td>
                                  <td>demo</td>
                                  <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i
                                          class="fas fa-trash-alt"></i></td>
                              </tr>
                              <tr>
                                  <td>demo</td>
                                  <td>demo</td>
                                  <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i
                                          class="fas fa-trash-alt"></i></td>
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