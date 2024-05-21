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
<div class="card apply-view-only">
    <div class="card-body">
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="advice_letter" role="tabpanel">
                
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        
                        <div class="col-4 d-flex mb-3">
                            <label for="example-text-input" class="col-md-4 pe-6">Requisition for:</label>
                            <div class="btn-group btn-group-lg" role="group"
                                aria-label="Basic radio toggle button group">
                                <div class="square-switch px-3" id="staff_employee">
                                    <input name="requisition_for" type="checkbox" switch="bool" id="square-switch10"
                                    @if ($record->requisition_for) {{ 'checked' }} @else @endif />
                                    <label for="square-switch10" data-on-label="Staff"
                                        data-off-label="Employee"></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 d-flex mb-3">
                            <label for="replacement-input" class="col-md-4 pe-6">New Position:</label>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                <div class="square-switch  px-3">
                                    <input name="new_position" type="checkbox" id="square-switch" switch="bool"
                                    @if ($record->new_position) {{ 'checked' }} @else @endif />
                                    <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 d-flex mb-3">
                            <label for="replacement-input" class="col-md-4 pe-6">Replacement:</label>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                <div class="square-switch px-3">
                                    <input name="replacement" type="checkbox" id="square-switch30" switch="bool"
                                    @if ($record->replacement) {{ 'checked' }} @else @endif />
                                    <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
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
                                <x-input-select :selected="$record->department_setup_id" name="dept_id"
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
                                    :records="$user"/>
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
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

