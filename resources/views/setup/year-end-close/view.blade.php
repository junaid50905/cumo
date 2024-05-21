@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
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
                          <span class="d-none d-sm-block">Budget Year Setup</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Budget Year List</span>
                      </a>
                  </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel ">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="card ms-0">
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content text-muted mt-4">
                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                          <div class="row">
                                            <div class="col-6">
                                              <div class="row">
                                                <div class="col-12">
                                                  <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <div class="row mb-4">
                                                          <div class="col-4 d-flex align-items-center">
                                                            <h6>Budget Year</h6>
                                                          </div>
                                                            <div class="col-8">
                                                              <div class="input-group" id="datepicker4">
                                                              <x-input-text name="date" placeholder="" type="date">
                                                              </x-input-text>
                                                              </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row d-flex justify-content-end mt-3">
                                          <div class="col-2">
                                              <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                          </div>
                                          <div class="col-2">
                                              <button class="btn btn-success w-100">Save</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="tab-pane mt-4" id="profile" role="tabpanel">
                    <table id="datatable" class="table table-bordered dt-responsive w-100">
                      <thead>
                          <tr class="table-primary">
                            <th>Budget Year</th>
                            <th>Log</th>
                            <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>2022</td>
                            <td>Create: Ohidul Hassan @ 2021-01-02 15:00:18
                              There is no update record.
                            </td>
                            <td>
                            <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <td>2022</td>
                            <td>Create: Ohidul Hassan @ 2021-01-02 15:00:18
                              There is no update record.
                              </td>
                            <td>
                            <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
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
@endsection

