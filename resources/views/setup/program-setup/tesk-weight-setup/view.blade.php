@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection

@section('content')
        <div class="card">
            <div class="card-body">

                <!-- Nav tabs -->
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
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                         <div class="modal-body p-0">  
                            <div class="card p-0 m-0">
                                <div class="card-body">
                                    <div class="row pb-3">
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Time</label>
                                            <div class="col-8">
                                                <x-input-text type="number" name="time"  placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Domain Weight</label>
                                            <div class="col-8">
                                                <x-input-text type="number" name="domain_weight"  placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div> 
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Quantity</label>
                                            <div class="col-8">
                                                <x-input-text type="number" name="quantity"  placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div> 
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Quality</label>
                                            <div class="col-8">
                                                <x-input-text type="number" name="quality"  placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div> 
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Delivery</label>
                                            <div class="col-8">
                                                <x-input-text type="number" name="delivery"  placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div> 
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Time Taken</label>
                                            <div class="col-8">
                                                <x-input-text name="time_taken"  placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div> 
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Target</label>
                                            <div class="col-8">
                                                <x-input-text type="number" name="target"  placeholder="">
                                            </x-input-text>
                                            </div>
                                        </div> 
                                        <div class="col-6 row mb-3">
                                            <label class="col-4 col-form-label">Activity Type</label>
                                            <div class="col-8">
                                                <x-input-select name="student_id"
                                                :records="[]" />
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end pe-2">
                            <button type="button" class="btn btn-danger waves-effect waves-light">Reset</button>
                            <button type="button" class="btn btn-success waves-effect waves-light">Save</button>
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
                                <input type="search" name="search" class="form-control form-control-sm" placeholder="">
                              </label>
                            </div>
                          </div>
                      <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th class="col-3 bold"> Activity</th>
                                <th class="col-5 bold"> task</th>
                                <th class="col-2 text-center">Log</th>
                                <th class="col-2 text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>General Play</td>
                                <td>Push and Pull Doors open and closed</td>
                                <td>Create: Nusrat Jahan @ <br> 2019-06-09 22:22:54 <br>
                                    There is no update record.
                                </td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".text-add-or-edit">
                                  <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".text-add-or-edit">
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
@endsection
@section('script')
@endsection