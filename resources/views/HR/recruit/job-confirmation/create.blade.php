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
                                <form action="{{route('job-confirmation.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 d-flex  mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                                title:</label>
                                            <div class="col-md-8">
                                              <x-input-select name="job_title" :records="$jobTitle" />
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input"
                                                class="col-md-4 col-form-label  pe-2">Department:</label>
                                            <div class="col-md-8">
                                            <x-input-select name="dept_id" :records="$departments" targetColumn="department_name"/>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex  mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant
                                                Name:</label>
                                            <div class="col-md-8">
                                            <x-input-select name="applicant_name" :records="$students"/>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Work
                                                Station:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="workStation" />
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Start
                                                date:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="start_date" type="date" />
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Logs:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="logs" />
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-end gap-1">
                                            <div>
                                                <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            <div>
                                                <button class="btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                              
                            </div>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                            <livewire:job-confirmation-list />
                        </div>
                    </div>
                    <!--  Extra Large modal example -->
                    <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary">Job Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="row p-3">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                            title:</label>
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
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">Department:</label>
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
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant
                                            Name:</label>
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
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Work
                                            Station:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="workStation" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Start
                                            date:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="start_date" type="date" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row modal-footer">
                                    <div class="col-md-1">
                                        <button class="btn btn-outline-danger w-100"
                                            data-bs-dismiss="modal">Close</button>
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
