@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('css')
    <style>
        #staff_employee>input[switch]:checked+label:after {
            left: 65px;
            background-color: #eff2f7;
        }

        #staff_employee>label {
            width: 90px !important;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#employee-requisition" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#employee-requisition_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>


                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">

                    <div class="tab-pane active" id="employee-requisition" role="tabpanel">
                        <div class="modal-body pb-0">
                            <form action="{{ route('employee-requisition.store') }}" method="POST">
                                @csrf

                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-4 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 pe-6">Requisition for:</label>
                                            <div class="btn-group btn-group-lg" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <div class="square-switch px-3" id="staff_employee">
                                                    <input name="requisition_for" type="checkbox" id="square-switch10"
                                                        switch="bool" checked />
                                                    <label for="square-switch10" data-on-label="Staff"
                                                        data-off-label="Employee"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4 d-flex mb-3">
                                            <label for="replacement-input" class="col-md-4 pe-6">New Position:</label>
                                            <div class="btn-group btn-group-sm" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <div class="square-switch  px-3">
                                                    <input name="new_position" type="checkbox" id="square-switch20"
                                                        switch="bool" checked />
                                                    <label for="square-switch20" data-on-label="Yes"
                                                        data-off-label="No"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4 d-flex mb-3">
                                            <label for="replacement-input" class="col-md-4 pe-6">Replacement:</label>
                                            <div class="btn-group btn-group-sm" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <div class="square-switch  px-3">
                                                    <input name="replacement" type="checkbox" id="square-switch0"
                                                        switch="bool" checked />
                                                    <label for="square-switch0" data-on-label="Yes"
                                                        data-off-label="No"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                            title:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="job_title" type="text" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Vacancy
                                            For:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="vacancy_for" type="number" />
                                        </div>
                                    </div> 
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                            Type:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="job_type" :records="$jobType" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">Department:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="department_setup_id" :records="$departments"
                                                targetColumn="department_name" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">Project</label>
                                        <div class="col-md-8">
                                            <x-input-select name="project_id" :records="$projects" targetColumn="title" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Requested
                                            By:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="requested_by" :records="$user" />
                                        </div>
                                    </div> 

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" 
                                        class="col-md-4 col-form-label pe-2">Responsibilities:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="responsibilities" type="text" />
                                        </div>
                                    </div> 

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" 
                                        class="col-md-4 col-form-label pe-2">Requirements:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="requirements" type="text" />
                                        </div>
                                    </div> 

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">When
                                            Required:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="when_required" type="date" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Last
                                            date:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="last_date" type="date" />
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
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane" id="employee-requisition_list" role="tabpanel">
                        <livewire:employee-requisition-list />
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
