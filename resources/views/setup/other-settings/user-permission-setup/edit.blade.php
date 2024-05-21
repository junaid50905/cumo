@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">User Role Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">User Role List</span>
                        </a>
                    </li>
                </ul>
              <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <div class="col-md-5 d-flex" >
                                              <label class="col-2 d-flex align-items-center">Role Name </label>
                                                <x-input-text name="role_name" placeholder="Role Name Here">
                                                </x-input-text>
                                            </div>
                                            <div class="col-md-6 text-end">
                                              <label style="display: inline-flex;align-items: center;">Description
                                                <x-input-text name="role_description" placeholder="Role Description Here">
                                                </x-input-text>
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>All Products </h5>
                                    <div class="table-responsive">
                                      <table class="table w-100 table-bordered">
                                        <thead>
                                          <tr class="table-primary">
                                            <th>SL</th>
                                            <th>Module Name</th>
                                            <th>Form Name</th>
                                            <th> <span>Can View ? <br></span>
                                              <span>Select All<input class="form-check-input me-5" id="container" type="checkbox" name="container"></span>
                                            </th>
                                            <th> <span>Can Add ? <br> </span>
                                              <span>Select All<input class="form-check-input me-5" id="container" type="checkbox" name="container"></span>
                                            </th>
                                            <th><span>Can Edit ? <br></span>
                                              <span>Select All<input class="form-check-input me-5" id="container" type="checkbox" name="container"></span>
                                            </th>
                                            <th><span>Can Delete ? <br></span>
                                              <span>Select All<input class="form-check-input me-5" id="container" type="checkbox" name="container"></span>
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Pre-Admission</td>
                                            <td>CARE needs - Part 1 (PA1OT)</td>
                                            <td><input class="form-check-input me-5" id="container" type="checkbox" name="container"></td>
                                            <td><input class="form-check-input me-5" id="container" type="checkbox" name="container"></td>
                                            <td><input class="form-check-input me-5" id="container" type="checkbox" name="container"></td>
                                            <td><input class="form-check-input me-5" id="container" type="checkbox" name="container"></td>
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
                                    <!-- end card body -->
                            </div>
                                <!-- end card -->
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
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
                                                    <th>Job No</th>
                                                    <th>Date</th>
                                                    <th>Items</th>
                                                    <th>Cost</th>
                                                    <th>VAT</th>
                                                    <th>Discount</th>
                                                    <th>Is Approved</th>
                                                    <th>Log</th>
                                                    <th>Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>Admin</td>
                                                    <td>Admin Role</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Yes</td>
                                                    <td>Create: sk paul @ 2018-09-17 00:00:00
                                                        Update: Shonod Digital @ 2018-11-13 18:10:08 </td>
                                                    <td>
                                                    <button type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div
@endsection