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
                        <div class="modal-body pb-0">
                            <div class="row pb-5">
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job title:</label>
                                    <div class="col-md-8">
                                          <x-input-select name="job_title" :records="[
                                            'TEACHER'=>'Teacher',
                                            'DEVELOPER'=>'Developer',
                                            'GRAPHICSDESIGNER'=>'Graphics Designer',
                                            'COMPUTEROPERATOR'=>'Computer Operator',
                                            'DRIVER'=>'Driver', ]" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Depertment:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="dept_id" :records="[
                                                'ACCOUNT'=>'Account',
                                                'INVENTORYMANAGEMENT'=>'Inventory Management',
                                                'PARPERWORKSECTION'=>'Paper Work Section',
                                                'PROCURMENTSECTION'=>'Procurement Section',
                                                'PROGRAMMESECTION'=>'Programme Section',
                                                'RESEARCHANDDEVELOPMENT'=>'Research And Development',]" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Requisition for:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="requisition_for"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant name:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="applicant_name" :records="[
                                            'PINTUSANGMA'=>'Pintu  Sangma',
                                            'MDFAISAL'=>'Md Faisal',
                                            'MSSHAMIMASIKDER'=>'Ms. Shamima Sikder',
                                            'MSOZIFAKHATUN'=>'Ms Ozifa khatun',
                                            'MSTNAJNINAKHTER'=>'Mst Najnin Akhter',
                                            'AKMSHAHIDUKKAH'=>'A.K.M  Shahidullah', ]"/>
                                    </div>
                                </div>
                            </div>
                            <form class="repeater pb-5" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col p-0 text-center">
                                          <label for="criteria">Criteria</label>
                                        </div>
                                        <div class="col p-0 text-center">
                                          <label for="rating">Rating</label>
                                        </div>
                                        <div class="col p-0 text-center">
                                          <label for="comment">Comment</label>
                                        </div>
                                    </div>
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item="" class="row ms-1 removeRow">
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-textarea name="criteria" rows='1'/>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                              <x-input-select name="rating" :records="[
                                                'ONE'=>'1',
                                                'TWO'=>'2',
                                                'THREE'=>'3',
                                                'FOUR'=>'4',
                                                'FIVE'=>'5',]"/>
                                            </div>
                                            <div class=" col p-0 gap-1 pb-1 me-4 d-flex">
                                                <x-input-textarea name="comment" rows='1'/>
                                                <button class="btn btn-danger waves-effect waves-light  removeBtn">
                                                 <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                </div>
                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                            </form>
                            <div class="row d-flex">
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Recommendation:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="recommendation" type="date"/>
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Overall Comment:</label>
                                    <div class="col-md-8">
                                        <x-input-textarea rows="1" name="overall_comment"/>
                                    </div>
                                </div>
                              </div>                            
                            <div class=" d-flex justify-content-end gap-2">
                                <div class="col-md-1 ">
                                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-success w-100">Save</button>
                                </div>
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
                            <x-input-text type="search" name="search" />
                          </label>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th>Depertmnet</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>time</th>
                                <th>Interviewer</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>HR</td>
                                <td>Demo</td>
                                <td>12/02</td>
                                <td>12.00pm</td>
                                <td>Application</td>
                                <td>Create: Karishma Cultural @ 2018-12-27 19:24:14</td>
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
                              <h5 class="modal-title text-primary">Assigning Interviewer Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body pb-0">
                            <div class="row pb-5">
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job title:</label>
                                    <div class="col-md-8">
                                          <x-input-select name="job_title" :records="[
                                            'TEACHER'=>'Teacher',
                                            'DEVELOPER'=>'Developer',
                                            'GRAPHICSDESIGNER'=>'Graphics Designer',
                                            'COMPUTEROPERATOR'=>'Computer Operator',
                                            'DRIVER'=>'Driver', ]" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Depertment:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="dept_id" :records="[
                                                'ACCOUNT'=>'Account',
                                                'INVENTORYMANAGEMENT'=>'Inventory Management',
                                                'PARPERWORKSECTION'=>'Paper Work Section',
                                                'PROCURMENTSECTION'=>'Procurement Section',
                                                'PROGRAMMESECTION'=>'Programme Section',
                                                'RESEARCHANDDEVELOPMENT'=>'Research And Development',]" />
                                    </div>
                                </div>
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Requisition for:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="requisition_for" type="text"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant name:</label>
                                    <div class="col-md-8">
                                        <x-input-select name="applicant_name" :records="[
                                            'PINTUSANGMA'=>'Pintu  Sangma',
                                            'MDFAISAL'=>'Md Faisal',
                                            'MSSHAMIMASIKDER'=>'Ms. Shamima Sikder',
                                            'MSOZIFAKHATUN'=>'Ms Ozifa khatun',
                                            'MSTNAJNINAKHTER'=>'Mst Najnin Akhter',
                                            'AKMSHAHIDUKKAH'=>'A.K.M  Shahidullah', ]"/>
                                    </div>
                                </div>
                            </div>
                            <form class="repeater pb-5" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col p-0 text-center">
                                          <label for="criteria">Criteria</label>
                                        </div>
                                        <div class="col p-0 text-center">
                                          <label for="rating">Rating</label>
                                        </div>
                                        <div class="col p-0 text-center">
                                          <label for="comment">Comment</label>
                                        </div>
                                    </div>
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item="" class="row ms-1 removeRow">
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-textarea name="criteria" rows='1'/>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                              <x-input-select name="rating" :records="[
                                                'ONE'=>'1',
                                                'TWO'=>'2',
                                                'THREE'=>'3',
                                                'FOUR'=>'4',
                                                'FIVE'=>'5',]"/>
                                            </div>
                                            <div class=" col p-0 gap-1 pb-1 me-4 d-flex">
                                                <x-input-textarea name="comment" rows='1'/>
                                                <button class="btn btn-danger waves-effect waves-light  removeBtn">
                                                 <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                </div>
                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                            </form>
                            <div class="row d-flex">
                                <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Recommendation:</label>
                                    <div class="col-md-8">
                                        <x-input-text name="recommendation" type="date"/>
                                    </div>
                                </div>
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Overall Comment:</label>
                                    <div class="col-md-8">
                                        <x-input-textarea rows="1" name="overall_comment"/>
                                    </div>
                                </div>
                            <div class=" d-flex justify-content-end pb-3">
                                <div class="col-md-1 ">
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
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection