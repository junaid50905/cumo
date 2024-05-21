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
                            <form action="{{route('reporting-memo.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Department:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="department" :records="$departments" targetColumn="department_name"/>
                                     
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Name:</label>
                                        <div class="col-md-8">
                                        <x-input-select name="name" :records="$students"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Designation:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="designation"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Joining Date:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="joining_date" type="date"/>
                                        </div>
                                    </div>
                                </div>
                               
                                </div>
                                <div class="row modal-footer">
                                    <div class="col-md-1">
                                        <button class="btn btn-outline-danger w-100" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-outline-success w-100">Save</button>
                                    </div>
                            </form>
                          </div>
                          
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                      <livewire:reporting-memo-list />
                      
                    </div>
                </div>
                 <!--  Extra Large modal example -->
                 <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-primary">Reporting Memo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-0">
                              <div class="row">
                                  <div class="col-6 d-flex mb-3">
                                      <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Department:</label>
                                      <div class="col-md-8">
                                          <x-input-select name="depertment" :records="[
                                              'Account'=>'Account',
                                              'Inventory Management'=>'Inventory Management',
                                              'Paper Work Section'=>'Paper Work Section',
                                              'Procurement Section'=>'Procurement Section',
                                              'Programme Section'=>'Programme Section',
                                              'Research And Development'=>'Research And Development',
                                          ]" />
                                      </div>
                                  </div>
                                   <div class="col-6 d-flex  mb-3">
                                      <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Name:</label>
                                      <div class="col-md-8">
                                           <x-input-select name="job_contact_name" :records="[
                                            'A.K.M  Shahidullah' => 'A.K.M  Shahidullah',
                                            'Abdullah Al Asif' => 'Abdullah Al Asif',
                                            'Airin  Shiddique' => 'Airin  Shiddique',
                                            'Anas Bin Iqbal' => 'Anas Bin Iqbal',
                                            'Angon  Rahman' => 'Angon  Rahman',
                                            'Arup  Mandal' => 'Arup  Mandal',
                                            'Ashiqur Rahman Majumder' => 'Ashiqur Rahman Majumder',
                                            'Begum Nurjahan Dipa' => 'Begum Nurjahan Dipa',
                                            'Bijoy Gharami' => 'Bijoy Gharami',
                                            'Bijoy Urban Rosario' => 'Bijoy Urban Rosario',
                                           ]" />
                                      </div>
                                  </div>
                                  <div class="col-6 d-flex  mb-3">
                                      <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Designation:</label>
                                      <div class="col-md-8">
                                           <x-input-text name="designation"/>
                                      </div>
                                  </div>
                                  <div class="col-6 d-flex mb-3">
                                      <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Joining Date:</label>
                                      <div class="col-md-8">
                                          <x-input-text name="joining_date" type="date"/>
                                      </div>
                                  </div>
                              </div>
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