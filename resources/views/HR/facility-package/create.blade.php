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
                      <div class="modal-body">
                        <div class="col-12 d-flex  mb-3">
                            <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Package Title:</label>
                            <div class="col-md-8">
                                <x-input-text name="package_name" type="text"
                                placeholder="">
                            </x-input-text>
                            </div>
                        </div>
                        <h5 class="text-center py-2">Activity Lists</h5>
                        <div class="repeater" enctype="multipart/form-data">
                          <div class="row">
                              <div class="col-lg-2 p-0 pe-1">
                                  <label for="product">Salary Head</label>
                              </div>
                              <div class="col-lg-2 p-0 pe-1">
                                  <label for="product">Pay Amount </label>
                              </div>
                              <div class="col-lg-1 p-0 pe-1 text-center">
                                  <label for="quality">Is Percent</label>
                              </div>
                              <div class="col-lg-2 p-0 pe-1">
                                  <label for="discount">Percent Head</label>
                              </div>
                              <div class="col-lg-1 p-0 pe-1">
                                  <label for="total">Rules</label>
                              </div>
                              <div class="col-lg-1 p-0 pe-1">
                                  <label for="total">Extra Time</label>
                              </div>
                              <div class="col-lg-2 p-0 pe-1">
                                  <label for="total">Payment Type</label>
                              </div>
                          </div>
                          <div data-repeater-list="details" id="ProductGroup">
                              <div data-repeater-item class="row removeRow">
                                  <div class=" col-lg-2 p-0 pe-1 pb-1">
                                      <x-input-select name="salary_head_ID"
                                      :records="[
                                        'Basic' => 'Basic',
                                        'House Rent' => 'House Rent',
                                        'Medical Allowance' => 'Medical Allowance',
                                        'Advance' => 'Advance',
                                        'Transport' => 'Transport',
                                        'AIT' => 'AIT',
                                        'PF' => 'PF',
                                        'Overtime' => 'Overtime',
                                      ]" />
                                  </div>

                                  <div class=" col-lg-2 p-0 pe-1 pb-1">
                                      <x-input-text name="available_qty" placeholder=""  :readonly="true" class="available-qty">
                                      </x-input-text>
                                  </div>

                                  <div class=" col-lg-1 p-0 pe-1 pb-1 text-center">
                                      <input type="checkbox" class="form-check-input">
                                  </div>
                                  <div class=" col-lg-2 p-0 pe-1 pb-1">
                                      <x-input-select name="percent_head"  :records="[
                                        'Basic' => 'Basic',
                                        'Gross' => 'Gross',
                                      ]" />
                                  </div>
                                  <div class=" col-lg-1 p-0 pe-1 pb-1">
                                      <x-input-select name="rules"
                                      :records="[
                                        'For Every Month' => 'For Every Month',
                                        'For Each Day' => 'For Each Day',
                                        'For Each Working Day' => 'For Each Working Day',
                                        'For Each Holiday' => 'For Each Holiday',
                                        'For Each Weekend day' => 'For Each Weekend day',
                                        'For Every Weekend and holiday' => 'For Every Weekend and holiday',
                                        'For Each OT Hour' => 'For Each OT Hour',
                                        'For Transportation' => 'For Transportation',
                                        'For Each OT Hour with fixed time limit' => 'For Each OT Hour with fixed time limit',
                                      ]" />
                                  </div>
                                  <div class=" col-lg-1 p-0 pe-1 pb-1">
                                      <x-input-text name="price" placeholder="" class="price" :readonly="true">
                                      </x-input-text>
                                  </div>
                                  <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                      <x-input-select name="payment_type"
                                      :records="[
                                        'Pay Slip Item' => 'Pay Slip Item',
                                        'Daily Payment' => 'Daily Payment',
                                      ]" />
                                      <button class="btn btn-danger ms-2 removeBtn">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <input data-repeater-create type="button"
                                class="btn btn-success mt-3 px-4 mt-lg-0" value="Add"
                                id="AddMore"/>
                        </div>
                      </div>
                        <div class=" d-flex justify-content-end gap-2">
                          <div class="col-md-1 ">
                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                          <div class="col-md-1">
                            <button class="btn btn-success">Save</button>
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
                            <input type="search" name="search" class="form-control form-control-sm" placeholder="">
                          </label>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th>Facility Package Name</th>
                                <th>Log </th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Facility Package title</td>
                                <td>Create: Shonod Digital @ 2018-12-26 16:32:48</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
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
                            <h5 class="modal-title text-primary">Facility Package</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="col-12 d-flex  mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Package Title:</label>
                                <div class="col-md-8">
                                    <x-input-text name="package_name" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <h5 class="text-center py-2">Activity Lists</h5>
                            <div class="repeater" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-lg-2 p-0 pe-1">
                                      <label for="product">Salary Head</label>
                                  </div>
                                  <div class="col-lg-2 p-0 pe-1">
                                      <label for="product">Pay Amount </label>
                                  </div>
                                  <div class="col-lg-1 p-0 pe-1 text-center">
                                      <label for="quality">Is Percent</label>
                                  </div>
                                  <div class="col-lg-2 p-0 pe-1">
                                      <label for="discount">Percent Head</label>
                                  </div>
                                  <div class="col-lg-1 p-0 pe-1">
                                      <label for="total">Rules</label>
                                  </div>
                                  <div class="col-lg-1 p-0 pe-1">
                                      <label for="total">Extra Time</label>
                                  </div>
                                  <div class="col-lg-2 p-0 pe-1">
                                      <label for="total">Payment Type</label>
                                  </div>
                              </div>
                              <div data-repeater-list="details" id="ProductGroup">
                                  <div data-repeater-item class="row removeRow">
                                      <div class=" col-lg-2 p-0 pe-1 pb-1">
                                          <x-input-select name="salary_head_ID"
                                          :records="[
                                            'Basic' => 'Basic',
                                            'House Rent' => 'House Rent',
                                            'Medical Allowance' => 'Medical Allowance',
                                            'Advance' => 'Advance',
                                            'Transport' => 'Transport',
                                            'AIT' => 'AIT',
                                            'PF' => 'PF',
                                            'Overtime' => 'Overtime',
                                          ]" />
                                      </div>

                                      <div class=" col-lg-2 p-0 pe-1 pb-1">
                                          <x-input-text name="available_qty" placeholder=""  :readonly="true" class="available-qty">
                                          </x-input-text>
                                      </div>

                                      <div class=" col-lg-1 p-0 pe-1 pb-1 text-center">
                                          <input type="checkbox" class="form-check-input">
                                      </div>
                                      <div class=" col-lg-2 p-0 pe-1 pb-1">
                                          <x-input-select name="percent_head"  :records="[
                                            'Basic' => 'Basic',
                                            'Gross' => 'Gross',
                                          ]" />
                                      </div>
                                      <div class=" col-lg-1 p-0 pe-1 pb-1">
                                          <x-input-select name="rules"
                                          :records="[
                                            'For Every Month' => 'For Every Month',
                                            'For Each Day' => 'For Each Day',
                                            'For Each Working Day' => 'For Each Working Day',
                                            'For Each Holiday' => 'For Each Holiday',
                                            'For Each Weekend day' => 'For Each Weekend day',
                                            'For Every Weekend and holiday' => 'For Every Weekend and holiday',
                                            'For Each OT Hour' => 'For Each OT Hour',
                                            'For Transportation' => 'For Transportation',
                                            'For Each OT Hour with fixed time limit' => 'For Each OT Hour with fixed time limit',
                                          ]" />
                                      </div>
                                      <div class=" col-lg-1 p-0 pe-1 pb-1">
                                          <x-input-text name="price" placeholder="" class="price" :readonly="true">
                                          </x-input-text>
                                      </div>
                                      <div class=" col-lg-2 p-0 pe-1 pb-1 d-flex">
                                          <x-input-select name="payment_type"
                                          :records="[
                                            'Pay Slip Item' => 'Pay Slip Item',
                                            'Daily Payment' => 'Daily Payment',
                                          ]" />
                                          <button class="btn btn-danger ms-2 removeBtn">
                                              <i class="fas fa-trash-alt"></i>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                              <input data-repeater-create type="button"
                                    class="btn btn-success mt-3 px-4 mt-lg-0" value="Add"
                                    id="AddMore"/>
                            </div>
                          </div>
                          <div class="row modal-footer">
                              <div class="col-md-1">
                                  <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- form repeater js -->
<script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
@endsection