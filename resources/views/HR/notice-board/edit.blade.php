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
                        <form action="{{ route('notice-board.store') }}" method="post">
                            @csrf
                            <div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-4 col-form-label text-center">Notice Template</label>
                                    <div class="col-md-8 pe-5">
                                      <select id="formrow-inputState" class="form-select">
                                        <option selected>Select</option>
                                      </select>
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-4 col-form-label text-center">Send
                                        To:</label>
                                    <div class="col-md-8 pe-5">
                                      <select id="formrow-inputState" class="form-select">
                                        <option selected>Select</option>
                                      </select>
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Subject:</label>
                                    <div class="col-md-8 pe-5">
                                        <x-input-text name="sub" placeholder="Notice Subject Here" />
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Notice Number</label>
                                    <div class="col-md-8 pe-5">
                                        <x-input-text name="notice_number" value="7" />
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Message:</label>
                                    <div class="col-md-8 pe-5">
                                        <form method="post">
                                            <x-input-textarea name="area" rows="1" />
                                        </form>
                                    </div>
                                </div>
                                {{-- --}}
                              <div class=" d-flex justify-content-end gap-1">
                                <div>
                                  <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                                <div>
                                  <button class="btn btn-success">Save</button>
                                </div>
                              </div>
                            </div>
                        </form>
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
                              <x-input-text type="search" name="search" />
                          </label>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table w-100 table-bordered">
                          <thead>
                          <tr class="table-primary">
                          <th><input type="checkbox"></th>
                          <th>Subject</th>
                          <th>Send for Approve</th>
                          <th>Is Approve</th>
                          <th>Log</th>
                          <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <td><input type="checkbox"></td>
                            <td>Letter of Appointment</td>
                            <td>No</td>
                            <td>No</td>
                            <td>Create: Md. Kutubuddin .. @ 2021-09-02 13:46:18
                              Update: Sajida Rahman @ 2021-09-02 13:59:24 </td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                  <i class="mdi mdi-eye"></i>
                                </button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Extra Large modal example -->
<div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Job contact
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="row p-3">
                <div class="col-12 mb-3 d-flex">
                    <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Notice Template</label>
                    <div class="col-md-10">
                        <x-input-select name="notice_template" :records="[]" />
                    </div>
                </div>
                <div class="col-12 d-flex mb-3">
                    <label for="example-text-input"
                        class="col-md-2 col-form-label  pe-2">Send To</label>
                    <div class="col-md-10">
                        <x-input-text name="send_to" vlaue="Sajida Rahman" />
                    </div>
                </div>
                <div class="col-12 d-flex mb-3">
                    <label for="example-text-input"
                        class="col-md-2 col-form-label  pe-2">Subject</label>
                    <div class="col-md-10">
                        <x-input-text name="subject"/>
                    </div>
                </div>
                <div class="col-12 d-flex mb-3">
                    <label for="example-text-input"
                        class="col-md-2 col-form-label  pe-2">Message</label>
                    <div class="col-md-10">
                        <x-input-textarea name="message" rows="1"/>
                    </div>
                </div>
            </div>
                <div class="table-responsive">
          <table class="table w-100 table-bordered">
            <thead>
              <tr class="table-primary">
             <th>SL</th>
             <th>Approvar</th>
             <th>Status</th>
             <th>Comments</th>
             <th>Status Changed</th>
             <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <td>1</td>
              <td>Sajida Rahman</td>
              <td>Deny/Reject</td>
              <td></td>
              <td>2021-09-02</td>
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
            <div class="row modal-footer">
                <div class="col-md-1">
                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
