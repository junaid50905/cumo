@extends('layouts.master')

@section('title') @lang('translation.Starter_Page')@endsection
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
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="advice_letter" role="tabpanel">
                <form action="{{ route('employee-requisition.update', $record->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            
                            <div class="col-4 d-flex mb-3">
                                <label for="example-text-input" class="col-md-4 pe-6">Requisition for:</label>
                                <div class="btn-group btn-group-lg" role="group"
                                    aria-label="Basic radio toggle button group">
                                    <div class="square-switch px-3" id="staff_employee">
                                        <input name="requisition_for" type="checkbox" id="square-switch10"
                                            switch="bool"
                                            @if ($record->requisition_for) {{ 'checked' }} @else @endif />
                                        <label for="square-switch10" data-on-label="Staff"
                                            data-off-label="Employee"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 d-flex mb-3">
                                <label for="replacement-input" class="col-md-4 ">New Position:</label>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                    <div class="square-switch  px-3">
                                        <input name="new_position" type="checkbox" id="square-switch1" switch="bool"
                                        @if ($record->new_position) {{ 'checked' }} @else @endif />
                                        <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 d-flex mb-3">
                                <label for="replacement-input" class="col-md-4 ">Replacement:</label>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                    <div class="square-switch px-3">
                                        <input name="replacement" type="checkbox" id="square-switch0" switch="bool"
                                        @if ($record->replacement) {{ 'checked' }} @else @endif />
                                        <label for="square-switch0" data-on-label="Yes" data-off-label="No"></label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 d-flex  mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job title:</label>
                            <div class="col-md-8">
                                <x-input-text name="job_title" type="text" value="{{ $record->job_title }}"/>
                            </div>
                        </div>

                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Vacancy For:</label>
                            <div class="col-md-8">
                                <x-input-text name="vacancy_for" type="number" value="{{ $record->vacancy_for }}"/>
                            </div>
                        </div>


                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job Type:</label>
                            <div class="col-md-8">
                                <x-input-select :selected="$record->job_type" name="job_type"
                                    :records="$jobType" />
                            </div>
                        </div>

                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Department:</label>
                            <div class="col-md-8">
                                <x-input-select :selected="$record->department_setup_id" name="department_setup_id"
                                    :records="$departments" targetColumn="department_name"/>
                            </div>
                        </div>

                        <div class="col-6 d-flex  mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Project</label>
                            <div class="col-md-8">
                                <x-input-select :selected="$record->project_id" name="project_id"
                                    :records="$projects"  targetColumn="title"/>
                            </div>
                        </div>

                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Requested By:</label>
                            <div class="col-md-8">
                                <x-input-select :selected="$record->requested_by" name="requested_by"
                                    :records="$users" targetColumn="name"/>
                            </div>
                        </div>

                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" 
                            class="col-md-4 col-form-label pe-2">Responsibilities:</label>
                            <div class="col-md-8">
                                <x-input-text name="responsibilities" type="text" value="{{ $record->responsibilities }}"/>
                            </div>
                        </div> 

                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" 
                            class="col-md-4 col-form-label pe-2">Requirements:</label>
                            <div class="col-md-8">
                                <x-input-text name="requirements" type="text" value="{{ $record->requirements }}"/>
                            </div>
                        </div> 

                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">When Required:</label>
                            <div class="col-md-8">
                                <x-input-text name="when_required" type="date"  value="{{ $record->when_required }}"/>
                            </div>
                        </div>

                        <div class="col-6 d-flex mb-3">
                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Last date:</label>
                            <div class="col-md-8">
                                <x-input-text name="last_date" type="date" value="{{ $record->last_date }}"/>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="{{ route('employee-requisition.create') }}"
                                class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                            <button type="submit" href="{{ route('employee-requisition.create') }}" class="btn btn-outline-success waves-effect waves-light">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


