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
                      <form action="{{route('setup.payroll-management.salary_package_setup.create')}}" method="POST">
                          @csrf
                        <!-- Tab panes One Add  -->
                          <div class="modal-body">
                            <div class="col-md-12 d-flex">
                              <div class="col-md-4 mb-3">
                                  <label class="form-label">Package Name</label>
                                  <x-input-text name="package_name" placeholder="Enter Head Name Here" ></x-input-text>
                              </div>
                              <div class="col-md-4 ms-2 mb-3">
                                  <label class="form-label">Description</label>
                                  <x-input-textarea name="description"></x-input-textarea>
                              </div>
                              <div class="col-md-4 ms-2 pe-3 mb-3">
                                  <label class="form-label">Grade Name</label>
                                <x-input-select name="grade_name" :records="[]" />
                              </div>
                            </div>
                            <div class="col-md-12 d-flex">
                              <div class="col-md-6  mb-3">
                                  <label class="form-label">Step Name</label>
                                  <x-input-select name="step_name" :records="[]" />
                              </div>
                              <div class="col-md-6 ps-2 mb-3">
                                  <label class="form-label">Curnc Id</label>
                                  <x-input-select name="curnc_id" :records="[]" />
                              </div>
                            </div>
                            <div class="col-md-8 d-flex">
                                <div class="col-md-4 mb-2">
                                      <x-input-radio-or-check  label="Will Convert" :records="$constants::$yesNoEn"/>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <x-input-radio-or-check class="justify-content-center" label="Pay Type" :records="$constants::$payType"/>
                                </div>
                              </div>
                              <div class="col-md-12 d-flex">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Over Time Amt</label>
                                    <x-input-text name="over_time_amt" type="number"  placeholder="Over Time Amt Per Hours" ></x-input-text>
                                </div>
                                <div class="col-md-4 pb-5 text-center">
                                    <x-input-radio-or-check class="me-5" label="Overtime in Percent of" :records="$constants::$yesNoEn"/>
                                    <x-input-select name="overtime" :records="[]"/>
                                </div>
                                <div class="col-md-4 ms-2 pe-3 mb-3">
                                    <label class="form-label">Bonus Salary Head</label>
                                    <x-input-select name="bonus_salary_head" :records="[]"/>
                                </div>
                              </div>
                              <div class="col-md-12 d-flex">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Attendance Bonus Amt</label>
                                    <x-input-text name="attendance_bonus_amt" type="number"  placeholder="Enter Attendance Bonus Amt" ></x-input-text>
                                </div>
                                <div class="col-md-4 text-center">
                                    <x-input-radio-or-check label="Bonus In Percent" :records="$constants::$yesNoEn"/>
                                </div>
                                <div class="col-md-4 ms-2 pe-3 mb-3">
                                    <label class="form-label">Bonus Salary Head</label>
                                    <x-input-select name="bonus_salary_head" :records="[]"/>
                                </div>
                              </div>
                              <div class="col-md-12 d-flex">
                                <div class="col-md-3 pe-2 mb-3">
                                    <label class="form-label">Late Count</label>
                                    <x-input-text name="late_count" type="number"  placeholder="Enter Late Count In Da" ></x-input-text> 
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label">Salary Deduction Days</label>
                                    <x-input-text name="salary_deduction_days" type="number"  placeholder="Enter late sal count here" ></x-input-text> 
                                </div>
                                <div class="col-md-3 ms-2 pe-3 mb-3">
                                  <label class="form-label">Late Sal Head</label>
                                  <x-input-select name="late_sal_head" :records="[]"/>
                              </div>
                                <div class="col-md-3 ms-2 pb-5">
                                    <x-input-radio-or-check class="" label="Deduct Head" :records="$constants::$deduct"/>
                                </div>
                              </div>
                              <div class="col-md-12 d-flex">
                                <div class="col-md-4 ms-2 pb-5">
                                  <x-input-radio-or-check class="justify-content-center" label="Is Auto Gross Calc" :records="$constants::$yesNoEn"/>
                              </div>
                                <div class="col-md-4 pe-2 mb-3">
                                    <label class="form-label">Gross Salary</label>
                                    <x-input-text name="gross_salary" type="number"  placeholder="Enter Total Gross Salary Here" ></x-input-text> 
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Net Salary</label>
                                    <x-input-text name="net_salary" type="number"  placeholder="Enter Total Salary Here" ></x-input-text> 
                                </div>
                              </div>
                              <div class="col-md-12 d-flex">
                                <div class="col-md-4 ms-2 pb-5">
                                  <x-input-radio-or-check class="justify-content-center" label="Is Comp Facility" :records="$constants::$yesNoEn"/>
                              </div>
                              <div class="col-md-4 ms-2 pe-3 mb-3">
                                <label class="form-label">Facility Package</label>
                                <x-input-select name="facility_package" :records="[]"/>
                            </div>
                              </div>
                              <div class="col-12">
                                <h4 class="card-title">Assign Tasks</h4>
                                <form class="repeater" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-1 p-0 pe-4  text-center">
                                            <label for="sl">SL</label>
                                        </div>
                                        <div class="col-2 p-0  text-center">
                                            <label for="salary_head">Salary Head</label>
                                        </div>
                                        <div class="col-1 p-0  text-center">
                                            <label for="pay_amount">Pay Amount</label>
                                        </div>
                                        <div class="col-1 p-0 ps-3">
                                            <label for="product">Is Percent</label>
                                        </div>
                                        <div class="col-2 p-0 text-center ">
                                            <label for="percrnt_field">Percent Field</label>
                                        </div>
                                        <div class="col-2 p-0 text-center">
                                            <label for="basic_provident">Basic/Provident</label>
                                        </div>
                                        <div class="col-2 p-0 text-center ">
                                            <label for="pf_company">PF Company</label>
                                        </div>
                                        <div class="col-1 p-0 text-center">
                                            <label for="total">Total</label>
                                        </div>
                                    </div>
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="row removeRow">
                                            <div  class="col-1 d-flex p-0  pb-1 ps-4">
                                                <label>01</label>
                                            </div>
                                            <div class=" col-2 p-0 pe-3 pb-1">
                                              <x-input-select name="salary_head" :records="[]"/>
                                            </div>
                                            <div class=" col-1 p-0 pb-1">
                                              <x-input-text name="pay_amount" type="number"></x-input-text> 
                                            </div>
                                            <div class=" col-1 p-0 pb-1 ps-5">
                                              <input type="checkbox" class="form-check-input">
                                            </div>
                                            <div class=" col-2 p-0 pb-1">
                                              <x-input-select name="percrnt_field" :records="[]"/>
                                            </div>
                                            <div class=" col-2 p-0 pb-1 ps-3">
                                              <x-input-select name="basic_provident" :records="[]"/>
                                            </div>
                                            <div class=" col-1 p-0 pb-1 ps-3 pe-3">
                                              <x-input-text name="pf_company" type="number"></x-input-text> 
                                            </div>
                                            <div class="col-2 p-0 pb-1 pe-3 align-self-center d-flex">
                                              <x-input-text name="total" type="number"></x-input-text> 
                                                <button class="btn btn-outline-danger waves-effect waves-light removeBtn">
                                                  <i class="fas fa-trash-alt"></i>
                                              </button>
                                            </div>
                                        </div> 
                                    </div>
                                  <div class="">
                                    <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 me-5  mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                                  </div>
                                </form>
                            </div>
                          </div>
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Gross Salary</th>
                                <th>Net Salary</th>
                                <th>Currency</th>
                                <th>Will Convert</th>
                                <th>Pay Type</th>
                                <th>Over Time Amnt</th>
                                <th>Log</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Junior Programme Assistant (9-3)</td>
                                <td>Junior Programme Assistant</td>
                                <td>14700.0000</td>
                                <td>14700.0000</td>
                                <td>USD</td>
                                <td>Y</td>
                                <td>Monthly</td>
                                <td>0.0000</td>
                                <td>Create: Md. Kutubuddin..@ 2021-07-05 21:20:28
                                    Update: Md. Kutubuddin..@ 2021-07-06 01:09:15</td>
                                    <td><button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                    <i class="fas fa-check"></i>
                                </button>
                                      <button type="button"
                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                    data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".material-callects-modal-xl-view">
                                    <i class="fas fa-pen"></i></button>
                                      <button type="button"
                                    class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                    class="fas fa-trash-alt"></i></button>
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