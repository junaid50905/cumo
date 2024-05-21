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
                      <form>
                          <div class="modal-body p-0">
                            <div class="card p-0 m-0">
                                <div class="card-body">
                                  <div class="row pb-3">
                                      <div class="col-6 row mb-3">
                                          <label class="col-4 col-form-label">Domain</label>
                                          <div class="col-8">
                                              <x-input-select name="domain" :records="[]" />
                                          </div>
                                      </div>
                                      <div class="col-6 row mb-3">
                                          <label class="col-4 col-form-label">Sub-Domain</label>
                                          <div class="col-8">
                                              <x-input-select name="sub_domain" :records="[]" />
                                          </div>
                                      </div>
                                      <div class="col-6 row mb-3">
                                          <label class="col-4 col-form-label">Area</label>
                                          <div class="col-8">
                                              <x-input-select name="area" :records="[]" />
                                          </div>
                                      </div>
                                      <div class="col-6 row mb-3">
                                          <label class="col-4 col-form-label">Activity</label>
                                          <div class="col-8">
                                              <x-input-select name="activity" :records="[]" />
                                          </div>
                                      </div>
                                      <div class="col-6 row mb-3">
                                          <label class="col-4 col-form-label">Activity Type</label>
                                          <div class="col-8">
                                              <x-input-select name="activity_type" :records="[]" />

                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div class="row">
                                      <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive w-100 p-0">
                                          <thead>
                                              <tr class="table-primary">
                                                  <th>SL.</th>
                                                  <th>Task</th>
                                                  <th>Time</th>
                                                  <th>Sequence</th>
                                                  <th>Quantity</th>
                                                  <th>Quality</th>
                                                  <th>Delivery</th>
                                                  <th>Time Taken</th>
                                                  <th>Target</th>
                                                  <th>Type</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>1</td>
                                                  <td>Ray Waters</td>
                                                  <td>5</td>
                                                  <td>5</td>
                                                  <td>5</td>
                                                  <td>5</td>
                                                  <td>5</td>
                                                  <td>5</td>
                                                  <td>A</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-9">
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-outline-success waves-light">
                                      Save</button>
                              </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr class="table-primary">
                                        <th class=""> Activity</th>
                                        <th class="">Task</th>
                                        <th class="">Activity Type</th>
                                        <th class="">Log</th>
                                        <th class="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>General Play</td>
                                        <td>Push and Pull Doors open and closed</td>
                                        <td>A</td>
                                        <td>
                                            <small>Create: Nusrat Jahan @  2019-06-09 22:22:54
                                            There is no update record.</small>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                                class="fas fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                                class="fas fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
