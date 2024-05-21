@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection


@section('content')

<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5 pb-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#student_attendance" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Student Attendance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#student_attendance_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Student Attendance List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="student_attendance" role="tabpanel">
                        <!-- form start -->
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Student</label>
                                        <x-input-select name="student_id" :records="[]" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Topic</label>
                                        <x-input-select name="topic_id" :records="[]" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                         <label>Rating</label>
                                         <x-input-select name="rating_id" :records="[]" />
                                    </div>
                                </div>
                            </div>
                            <div class="row  justify-content-end">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>Notes</label>
                                        <x-input-textarea  name="note"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="student_attendance_list" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
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
                                                      <th>Student Name</th>
                                                      <th>Date</th>
                                                      <th>Delay</th>
                                                      <th>Topic</th>
                                                      <th>Rating</th>
                                                      <th>Notes</th>
                                                      <th>Log</th>
                                                      <th>Action</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>Administration</td>
                                                      <td>2022-04-19</td>
                                                      <td>1</td>
                                                      <td>A</td>
                                                      <td>*****</td>
                                                      <td>Lorem ipsum dolor sit amet.</td>
                                                      <td>Create: A.K.M Shahidullah @ 2022-04-19 15:12:04
                                                          There is no update record.</td>
                                                      <td class="text-center">
                                                          <button type="button"
                                                              class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                              <i class="mdi mdi-pencil"></i>
                                                          </button>
                                                          <button type="button"
                                                              class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <!-- end row -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <button class="btn btn-outline-danger font-size-16 btn-rounded waves-effect waves-light w-50">Reset</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-success font-size-16 btn-rounded waves-effect waves-light w-50"
                            id="sa-position"></i>Save</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
@section('script-bottom')
@endsection
