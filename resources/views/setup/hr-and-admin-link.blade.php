@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Table css -->
<link href="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')HRMS > EMPLOYEE @endslot
@endcomponent
<div class="row">
  <div class="col-xl-12">
      <div class="card">
          <div class="card-body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                          <span class="d-none d-sm-block">Employee Setup</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Employee List</span>
                      </a>
                  </li>
                  <li class="nav-item p-0 ms-2">
                    <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> ADD</button>
                  </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel ">
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="card ms-0">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified flex-nowrap" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active p-0" data-bs-toggle="tab" href="#home1" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Personal</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#profile1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Photo & CV</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#messages1" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block"> Education</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#settings1" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Experience</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Language" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Language</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Reference" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block"> Reference</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Family" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Family</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Organization" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Organization</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" data-bs-toggle="tab" href="#Summery" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block"> Summery</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted mt-4">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                             <div class="row">
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                     <h4>Basic Information</h4>
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                          <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Employee Code</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-text name="Code" type="number" placeholder="Enter Code Here">
                                                                </x-input-text>
                                                               </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>User ID</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <select class="form-control select2 form-select">
                                                                  <option value="0">--Select-</option>
                                                                  <option value="1">Sajida Rahman</option>
                                                                  <option value="2">Nurjahan Dipa</option>
                                                                  <option value="3">Md. Kutubuddin ..</option>
                                                                  <option value="4">Md. Amir Hossain</option>
                                                                  <option value="5">Nusrat Jahan</option>
                                                                  <option value="6">Nur-Ul Amin</option>
                                                                  <option value="7">Airin Shiddique</option>
                                                                  <option value="8">Nupur Nahar</option>
                                                                  <option value="9">Arup Mandal</option>
                                                                  <option value="10">Safwat Nasif</option>
                                                                </select>
                                                               </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Gender</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <div class="form-check d-flex">
                                                                  <div class="me-4">
                                                                    <input class="form-check-input" type="radio" name="formRadios">
                                                                    <label class="form-check-label">Male</label>
                                                                  </div>
                                                                  <div class="me-4">
                                                                    <input class="form-check-input" type="radio" name="formRadios">
                                                                    <label class="form-check-label">Female</label>
                                                                  </div>
                                                                  <div class="me-4">
                                                                    <input class="form-check-input" type="radio" name="formRadios">
                                                                    <label class="form-check-label"> Other</label>
                                                                  </div>
                                                                  <div>
                                                                    <input class="form-check-input" type="radio" name="formRadios">
                                                                    <label class="form-check-label">N/A</label>
                                                                  </div>
                                                                </div>
                                                               </div>
                                                             </div>
                                                            <div class="row mb-4">
                                                              <div class="col-2 d-flex align-items-center">
                                                                <h6>DOB</h6>
                                                              </div>
                                                               <div class="col-4">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text name="date" type="date" placeholder="dd/mm/yyyy">
                                                                  </x-input-text>
                                                              </div>
                                                               </div>
                                                              <div class="col-2 d-flex align-items-center">
                                                                <h6>Age</h6>
                                                              </div>
                                                               <div class="col-4">
                                                                <x-input-text name="age" type="number" placeholder="Enter Age Here">
                                                                </x-input-text>
                                                               </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-3 d-flex align-items-center">
                                                                <h6>First Name</h6>
                                                              </div>
                                                               <div class="col-9">
                                                                <div class="input-group" >
                                                                       <!-- EmpFName -->
                                                                       <input type="text" class="form-control col-4"  placeholder="Frist Name">
                                                                      <!-- EmpMName -->
                                                                      <input type="text" class="form-control col-4"  placeholder="Middle Name">
                                                                      <!-- EmpLName -->
                                                                      <input type="text" class="form-control col-4" placeholder="Last Name">
                                                                </div>
                                                               </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Full Name in Bangla</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <x-input-text name="Name" placeholder="Enter Bangla Name Here">
                                                                </x-input-text>
                                                               </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Fathers Name</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Name" placeholder="Enter Father Name Here">
                                                              </x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Mothers Name</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Name" placeholder="Enter Mother Name Here">
                                                              </x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Present Address</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-textarea name="Adress"></x-input-textarea>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Permanent Address</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-textarea name="Adress"></x-input-textarea>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Phone Number</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Number" placeholder="Phone Number">
                                                              </x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Mobile</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Number" placeholder="Mobile Number">
                                                              </x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Blood Group</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-select name="blood_group" :records="$constants::$bloodGroups">
                                                              </x-input-select>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Marital Status</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <select class="form-control select2 form-select">
                                                                <option value="0">--Select-</option>
                                                                <option value="M">Married</option>
                                                                <option value="UM">Unmarried</option>
                                                                <option value="D">Divorce</option>
                                                              </select>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Marriage Date</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <div class="input-group" id="datepicker1">
                                                                <x-input-text name="date" type="date" placeholder="dd/mm/yyyy"></x-input-text>
                                                            </div>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Spouse Name</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Name" placeholder="Spouse Name"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Occupation</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Occupation" placeholder="Occupation"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Religion</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <select class="form-control select2 form-select">
                                                                <option value="0">--Select-</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Hinduism">Hinduism</option>
                                                                <option value="Buddhism">Buddhism</option>
                                                                <option value="Christianity">Christianity</option>
                                                              </select>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Nationality</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Nationality" placeholder="Enter Nationality here"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Passport No</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="number" type="number" placeholder="Passport Number"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Personal Mobile</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="number" placeholder="Enter Personal Mobile"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Personal Email1</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="email" placeholder="Personal Email1"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>National ID</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="id" placeholder="National ID"></x-input-text>
                                                             </div>
                                                           </div>
                                                      </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                               <div class="col-6">
                                                <div class="row">
                                                  <div class="col-12">
                                                    <h4>Other Information</h4>
                                                     <div class="row mt-3">
                                                       <div class="col-md-12">
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Department</h6>
                                                             </div>
                                                              <div class="col-8">
                                                               <select class="form-control select2 form-select">
                                                                 <option value="0">--Select-</option>
                                                                 <option value="1">Pre-Vocational</option>
                                                                 <option value="2">Admin</option>
                                                                 <option value="3">Angel Chef</option>
                                                                 <option value="4">Program</option>
                                                                 <option value="5">Canteen</option>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Section</h6>
                                                             </div>
                                                              <div class="col-8">
                                                               <select class="form-control select2 form-select">
                                                                 <option value="0">--Select-</option>
                                                                 <option value="1">sadf</option>
                                                                 <option value="2">Bakery</option>
                                                                 <option value="3">Purchage</option>
                                                                 <option value="4">Security</option>
                                                                 <option value="5">Maintaince</option>
                                                                 <option value="6">Kitchen</option>
                                                                 <option value="7">Beads</option>
                                                                 <option value="8">Vocational</option>
                                                                 <option value="9">Block</option>
                                                                 <option value="10">Tie-Dye</option>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Designation</h6>
                                                             </div>
                                                              <div class="col-8">
                                                               <select class="form-control select2 form-select">
                                                                 <option value="0">--Select-</option>
                                                                 <option value="3">HR Manager</option>
                                                                 <option value="4">Accounts Manager</option>
                                                                 <option value="5">Principal & Program Maneger</option>
                                                                 <option value="6">Bakery Manager</option>
                                                                 <option value="7">Senior Program Specialist</option>
                                                                 <option value="8">Assistant Program Officer</option>
                                                                 <option value="9">Trainee Program Officer</option>
                                                                 <option value="10">Junior Program Officer</option>
                                                                 <option value="11">Physiotherapist</option>
                                                                 <option value="12">Bakery Manager</option>
                                                               </select>
                                                              </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Route</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Route" type="number" placeholder="Route"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Week End</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <select class="form-control select2 form-select">
                                                                <option value="0">--Select-</option>
                                                                <option value="2">Full Time</option>
                                                                <option value="3">Therapy</option>
                                                                <option value="4">Part time Employee (Cultural)</option>
                                                                <option value="5">Part time emplyee (Morning)</option>
                                                                <option value="6">Part time emplyee (Morning) -2</option>
                                                                <option value="7">Cricket</option>
                                                              </select>
                                                             </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Attendance Policy</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <select class="form-control select2 form-select">
                                                                <option value="0">--Select-</option>
                                                                <option value="1">Common_Policy</option>>
                                                                <option value="2">Bakery_Policy</option>
                                                              </select>
                                                             </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Leave Package</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <select class="form-control select2 form-select">
                                                                <option value="0">--Select-</option>
                                                                <option value="1">Test Leave Package</option>
                                                                <option value="2">Test Package 2</option>
                                                                <option value="3">Leave_Male</option>
                                                                <option value="4">Leave_Female</option>
                                                              </select>
                                                             </div>
                                                            </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Salary Pak Id</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <select class="form-control select2 form-select">
                                                                <option value="0">--Select-</option>
                                                                <option value="1">Chairperson (Entry Step)</option>
                                                                <option value="2">Chairperson (1-1)</option>
                                                                <option value="3">Chairperson (1-2)</option>
                                                                <option value="4">Chairperson (1-3)</option>
                                                                <option value="5">Chairperson (1-4)</option>
                                                                <option value="6">Chairperson (1-5)</option>
                                                                <option value="7">Chairperson (1-6)</option>
                                                                <option value="8">Chairperson (1-7)</option>
                                                                <option value="9">Chairperson (1-8)</option>
                                                                <option value="10">Chairperson (1-9)</option>
                                                                <option value="11">Chairperson (1-10)</option>
                                                              </select>
                                                             </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Sal Pak Eff Date</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text name="date" type="date" placeholder="dd/mm/yyyy"></x-input-text>
                                                              </div>
                                                               </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Bonus Package</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <select class="form-control select2 form-select">
                                                                  <option value="0">--Select-</option>
                                                                  <option value="1">Eid Bonus</option>
                                                                  <option value="2">test bonus</option>
                                                                </select>
                                                               </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Project Name</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <select class="form-control select2 form-select">
                                                                    <option value="0">--Select-</option>
                                                                    <option value="1">Administration</option>
                                                                    <option value="2">Angel Chef Bakery</option>
                                                                    <option value="3">Art, Crafts  and Paintings</option>
                                                                    <option value="4">Art, Crafts  and Paintings</option>
                                                                    <option value="5">Computer Section</option>
                                                                    <option value="6">Core Programme</option>
                                                                    <option value="7">Cricket</option>
                                                                    <option value="8">Dance</option>
                                                                    <option value="9">Drama</option>
                                                                    <option value="10">Employment</option>
                                                                    <option value="11">Finance and Accounts Section</option>
                                                                    <option value="12">Food Catering</option>
                                                                    <option value="13">Food Catering</option>
                                                                  </select>
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Name</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <select class="form-control select2 form-select">
                                                                    <option value="0">--Select-</option>
                                                                  </select>
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Head</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <select class="form-control select2 form-select">
                                                                    <option value="0">--Select-</option>
                                                                  </select>
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Sub Head</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <select class="form-control select2 form-select">
                                                                    <option value="0">--Select-</option>
                                                                  </select>
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Budget Account</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <select class="form-control select2 form-select">
                                                                    <option value="0">--Select-</option>
                                                                  </select>
                                                                 </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Attendance Bonus</h6>
                                                                </div>
                                                                    <div class="col-8">
                                                                      <div class="form-check form-check-danger">
                                                                        <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                                      </div>
                                                                    </div>
                                                              </div>
                                                              <div class="row mb-4">
                                                                <div class="col-4 d-flex align-items-center">
                                                                  <h6>Reporting To</h6>
                                                                </div>
                                                                 <div class="col-8">
                                                                  <select class="form-control select2 form-select">
                                                                    <option value="0">--Select-</option>
                                                                    <option value="1">Test Muhammad Employee</option>
                                                                    <option value="3">Sahanaj  Akter</option>
                                                                    <option value="5">Ashiqur Rahman Majumder</option>
                                                                    <option value="6">Md. Kutub Uddin</option>
                                                                    <option value="7">Arup  Mandal</option>
                                                                    <option value="8">Md. Rizwanur Rahman</option>
                                                                    <option value="9">Angon  Rahman</option>
                                                                    <option value="10">Tausif  Alam</option>
                                                                    <option value="11">Parvez Parvez Ahmad</option>
                                                                    <option value="12">Mariam  Begum</option>
                                                                  </select>
                                                                 </div>
                                                              </div>
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Joining Date</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text name="date" type="date" placeholder="dd/mm/yyyy"></x-input-text>
                                                                 </div>
                                                               </div>
                                                              </div>
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Confirm Due Date</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <div class="input-group" id="datepicker1">
                                                                  <x-input-text name="date" type="date" placeholder="dd/mm/yyyy"></x-input-text>
                                                                 </div>
                                                               </div>
                                                            </div>
                                                          <div class="row mb-4">
                                                           <div class="col-4 d-flex align-items-center">
                                                             <h6>Type Id</h6>
                                                           </div>
                                                            <div class="col-8">
                                                              <select class="form-control select2 form-select">
                                                                <option value="0">--Select-</option>
                                                                <option value="1">Regular</option>
                                                                <option value="2">Md.Aminul Islam</option>
                                                                <option value="3">Ohidulhasan</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Type Status</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <div class="form-check d-flex">
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label">Staff</label>
                                                                </div>
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label"> Worker</label>
                                                                </div>
                                                              </div>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Next Valuation Date</h6>
                                                            </div>
                                                             <div class="col-8">
                                                               <div class="input-group" id="datepicker1">
                                                                 <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                                     data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">
                                                                 <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                           <div class="col-4 d-flex align-items-center">
                                                             <h6>Valuation Interval</h6>
                                                           </div>
                                                            <div class="col-8">
                                                              <x-input-text name="Number" placeholder="Phone Number"></x-input-text>
                                                            </div>
                                                          </div>
                                                          <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Employee Status</h6>
                                                            </div>
                                                             <div class="col-8">
                                                               <select class="form-control select2 form-select">
                                                                 <option value="0">--Select-</option>
                                                                 <option value="A">Active and eligible for normal salary</option>
                                                                 <option value="S">Suspended</option>
                                                                 <option value="T">Terminated</option>
                                                                 <option value="L">Resigned/Left</option>
                                                                 <option value="R">Retired</option>
                                                                 <option value="C">Closed</option>
                                                               </select>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Card No</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Number" placeholder="Enter Card Number Here "></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Bank Acc No</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <x-input-text name="Number" placeholder="Enter Bank Account Number Here"></x-input-text>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Salary Pay Type</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <div class="form-check d-flex">
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label">Cash</label>
                                                                </div>
                                                                <div class="me-4">
                                                                  <input class="form-check-input" type="radio" name="formRadios">
                                                                  <label class="form-check-label">Bank</label>
                                                                </div>
                                                              </div>
                                                             </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Is Visit Restricted</h6>
                                                            </div>
                                                                <div class="col-8">
                                                                  <div class="form-check form-check-danger">
                                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                                  </div>
                                                                </div>
                                                          </div>
                                                          <div class="row mb-4">
                                                           <div class="col-4 d-flex align-items-center">
                                                             <h6>Faciliy Pack Id</h6>
                                                           </div>
                                                            <div class="col-8">
                                                             <select class="form-control select2 form-select">
                                                               <option value="0">--Select-</option>
                                                               <option value="1">Facility Package title</option>
                                                             </select>
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
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="">
                                               <h5 class="ms-3">Employee Photo & CV</h5><hr>
                                               <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                            </div>
                                            <div class="row d-flex justify-content-end mt-2">
                                              <div class="col-2">
                                                  <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                              </div>
                                              <div class="col-2">
                                                  <button class="btn btn-success w-100">Save</button>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                              <div class="">
                                                <h5 class="ms-3">Employee Education Info</h5><hr>
                                                <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                             </div>
                                             <div class="row d-flex justify-content-end mt-2">
                                               <div class="col-2">
                                                   <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                               </div>
                                               <div class="col-2">
                                                   <button class="btn btn-success w-100">Save</button>
                                               </div>
                                             </div>
                                        </div>
                                        <div class="tab-pane" id="settings1" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Experience Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Language" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Language Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Reference" role="tabpanel">
                                            <div class="">
                                              <h5 class="ms-3">Employee Reference Info</h5><hr>
                                              <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                           </div>
                                           <div class="row d-flex justify-content-end mt-2">
                                             <div class="col-2">
                                                 <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                             </div>
                                             <div class="col-2">
                                                 <button class="btn btn-success w-100">Save</button>
                                             </div>
                                           </div>
                                        </div>
                                        <div class="tab-pane" id="Family" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Family Member Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Organization" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Employee Activity/Organization Info</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
                                           <div class="col-2">
                                               <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                           </div>
                                           <div class="col-2">
                                               <button class="btn btn-success w-100">Save</button>
                                           </div>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Summery" role="tabpanel">
                                          <div class="">
                                            <h5 class="ms-3">Summery of the Employee</h5><hr>
                                            <h4 class="text-danger ms-3 mt-5 mb-5 me-5">Add Employee Personal Information First</h4>
                                         </div>
                                         <div class="row d-flex justify-content-end mt-2">
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
                          <tr>
                              <th> Name</th>
                              <th>Gander</th>
                              <th>Mobile</th>
                              <th>Email</th>
                              <th>Religion</th>
                              <th>Department</th>
                              <th>Section</th>
                              <th>Type</th>
                              <th>Log</th>
                              <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>System </td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011</td>
                              <td>$320,</td>
                              <td>61</td>
                              <td>2011/</td>
                              <td>$320,</td>
                              <td>$320,</td>
                              <td>
                                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                      <i class="mdi mdi-pencil"></i>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td>Puja </td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>20115</td>
                              <td>$170</td>
                              <td>61</td>
                              <td>2011/</td>
                              <td>2011/</td>
                              <td>
                                      <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                          <i class="mdi mdi-pencil"></i>
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
@section('script')
   <!-- form advanced init -->
   <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

   <!-- form repeater js -->
   <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>


   <!-- Required datatable js -->
   <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
   <!-- Datatable init js -->
   <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

   <!-- Responsive Table js -->
   <script src="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.js') }}"></script>

   <!-- Init js -->
   <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

   <!-- Table Editable plugin -->
   <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
@endsection
