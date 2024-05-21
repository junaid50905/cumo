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
                <div class="tab-content p-3 text-muted">
                    <!-- Livewire component -->
                    <livewire:leave-application-details />

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
                                    <input type="search" class="form-control form-control-sm" placeholder="">
                                </label>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered w-100">
                                <thead>
                                    <tr class="table-primary">
                                        <th>Employee</th>
                                        <th>Support Employee</th>
                                        <th>Type</th>
                                        <th>Days</th>
                                        <th>Hours</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @foreach($leave_applications as $leave_application)
                                    <tr>
                                        <td>{{$leave_application->employee->name}}</td>
                                        <td>{{$leave_application->support_employee->name}}</td>
                                        <td>{{$leave_application->leave_type->name}}</td>
                                        <td>{{$leave_application->duration_in_days}}</td>
                                        <td>{{$leave_application->duration_in_hours}}</td>
                                        <td>{{$leave_application->address_at_leave}}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-sm btn-light btn-rounded">
                                                <a href="{{route('HR.leave-application.view', $leave_application->id)}}"><i class="mdi mdi-eye"></i> View</a>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-success btn-rounded">
                                                <a href="{{route('HR.leave-application.edit', $leave_application->id)}}"><i class="mdi mdi-pencil"></i> Edit</a>
                                            </button>
                                            <button type="button"
                                                class="btn btn-sm btn-danger btn-rounded">
                                                <a href="{{route('HR.leave-application.delete', $leave_application->id)}}"> <i class="fas fa-check"></i> Delete</a>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
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

            <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary">Leave Application</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12 d-flex gap-2">
                                <div class="col-4">
                                    <label>Reason</label>
                                    <x-input-textarea name="reason" type="text" placeholder="" />
                                </div>
                                <div class="col-4">
                                    <label>Employee</label>
                                    <x-input-select name="employee" :records="[
                                    'Test Muhammad Employee' => 'Test Muhammad Employee',
                                    'Sahanaj  Akter' => 'Sahanaj  Akter',
                                    'Ashiqur Rahman Majumder' => 'Ashiqur Rahman Majumder',
                                    'Md. Kutub Uddin' => 'Md. Kutub Uddin',
                                    'Arup  Mandal' => 'Arup  Mandal',
                                    'Md. Rizwanur Rahman' => 'Md. Rizwanur Rahman',
                                    'Angon  Rahman' => 'Angon  Rahman',
                                    'Tausif  Alam' => 'Tausif  Alam',
                                    'Parvez Parvez Ahmad' => 'Parvez Parvez Ahmad',
                                    'Mariam  Begum' => 'Mariam  Begum'
                                  ]" />
                                </div>
                                <div class="col-4">
                                    <label>Support Employee</label>
                                    <x-input-select name="support_employee" :records="[
                                    'Test Muhammad Employee' => 'Test Muhammad Employee',
                                    'Sahanaj  Akter' => 'Sahanaj  Akter',
                                    'Ashiqur Rahman Majumder' => 'Ashiqur Rahman Majumder',
                                    'Md. Kutub Uddin' => 'Md. Kutub Uddin',
                                    'Arup  Mandal' => 'Arup  Mandal',
                                    'Md. Rizwanur Rahman' => 'Md. Rizwanur Rahman',
                                    'Angon  Rahman' => 'Angon  Rahman',
                                    'Tausif  Alam' => 'Tausif  Alam',
                                    'Parvez Parvez Ahmad' => 'Parvez Parvez Ahmad',
                                    'Mariam  Begum' => 'Mariam  Begum'
                                  ]" />
                                </div>
                            </div>
                            <div class="col-12 d-flex gap-2">
                                <div class="col-4">
                                    <label>Duration in days</label>
                                    <x-input-text name="duration_in_days" type="number" />
                                </div>
                                <div class="col-4">
                                    <label>Duration In Hours</label>
                                    <x-input-text name="duration_in_hours" type="number" />
                                </div>
                                <div class="col-4">
                                    <label for="LvAppType" class="control-label">Leave App. Type</label>
                                    <div class=" d-flex gap-2">
                                        <div class="radio radio-success">
                                            <input type="checkbox" class="form-check-input">
                                            <label> Request </label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input type="checkbox" class="form-check-input">
                                            <label> Plan </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex gap-2">
                                <div class="col-4">
                                    <label>Address At Leave</label>
                                    <x-input-text name="address_at_leave" />
                                </div>
                                <div class="col-4">
                                    <label>Phone At Leave</label>
                                    <x-input-text name="phone_at_leave" />
                                </div>
                                <div class="col-4">
                                    <label>Available Leave Attachment</label>
                                    <x-input-text name="available_leave_ttachment" type="file" />
                                </div>
                            </div>
                        </div>
                        <label class="text-center">Leave Application Details </label>
                        <div class="repeater p-4" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="Type">Type</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="start_date">Start Date</label>
                                </div>
                                <div class="col-lg-2 p-0 pe-1">
                                    <label for="start_date">End Date</label>
                                </div>
                                <div class="col-lg-1 p-0 pe-1 text-center">
                                    <label for="duration">Duration</label>
                                </div>
                                <div class="col-lg-1 p-0  text-center">
                                    <label for="is_houe">Is Hour</label>
                                </div>
                                <div class="col-lg-1 p-0">
                                    <label for="avl_time">Avl. Time</label>
                                </div>
                                <div class="col-lg-1 p-0  text-center">
                                    <label for="half_day">Half-Day</label>
                                </div>
                                <div class="col-lg-1 p-0">
                                    <label for="hour">1st Hour</label>
                                </div>
                            </div>
                            <div data-repeater-list="details" id="ProductGroup">
                                <div data-repeater-item class="row removeRow">
                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                        <x-input-select name="type" :records="[
                                        'Annual Leave'=>'Annual Leave',
                                        'Sick Leave'=>'Sick Leave',
                                        'Paternity Leave'=>'Paternity Leave',
                                       ]" />
                                    </div>
                                    <div class=" col-lg-2 p-0 pe-1 pb-1">
                                        <x-input-text name="start_date" type="date" placeholder="dd/mm/yyyy"
                                            :readonly="true" />
                                    </div>

                                    <div class=" col-lg-2 p-0 pe-1 pb-1 text-center">
                                        <x-input-text name="end_date" type="date" placeholder="dd/mm/yyyy"
                                            :readonly="true" />
                                    </div>
                                    <div class=" col-lg-1 p-0 pe-1 pb-1">
                                        <x-input-text name="duration" type="number" />
                                    </div>
                                    <div class=" col-lg-1  p-0 pb-1 text-center">
                                        <input type="checkbox" class="form-check-input " name="is_houe">
                                    </div>
                                    <div class=" col-lg-1 p-0 pe-1 pb-1">
                                        <x-input-text name="avl_time" />
                                    </div>
                                    <div class=" col-lg-1 p-0  pb-1 text-center">
                                        <input type="checkbox" class="form-check-input " name="half_day">
                                    </div>
                                    <div class=" col-lg-1 p-0  pb-1 d-flex ps-3 ">
                                        <input type="checkbox" class="form-check-input " name="hour">
                                        <button class="btn btn-danger ms-2 removeBtn">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input data-repeater-create type="button" class="btn btn-success mt-3 px-4 mt-lg-0"
                                value="Add" id="AddMore" />
                        </div>
                        <div class="row modal-footer">
                            <div class="col-md-1">
                                <button class="btn btn-outline-danger w-100" data-bs-dismiss="modal">Close</button>
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