@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <form action="{{ route('job-confirmation.update', $record->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="case-histroy" role="tabpanel">
                                <div class="modal-body pb-0">
                                    <div class="row">
                                        <div class="col-6 d-flex  mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                                title:</label>
                                            <div class="col-md-8">
                                                <x-input-select :selected="$record->job_title" name="job_title"
                                                    :records="$jobTitle" />
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input"
                                                class="col-md-4 col-form-label  pe-2">Department:</label>
                                            <div class="col-md-8">
                                                <x-input-select :selected="$record->dept_id" name="dept_id"
                                                    :records="$departments" targetColumn="department_name"/>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex  mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant
                                                Name:</label>
                                            <div class="col-md-8">
                                                <x-input-select :selected="$record->applicant_name" name="applicant_name"
                                                    :records="$students"/>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Work
                                                Station:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="workStation" value="{{ $record->workStation }}"/>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Start
                                                date:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="start_date" type="date" value="{{ $record->start_date }}"/>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Logs:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="workStation" value="{{ $record->logs }}"/>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('job-confirmation.create') }}"
                                                class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                                                <button type="submit" href="{{ route('job-confirmation.create') }}" class="btn btn-outline-success waves-effect waves-light">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
