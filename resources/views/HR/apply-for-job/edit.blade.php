@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">

                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <form action="{{ route('apply.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">First Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="name" type="text" value="{{ $record->name }}"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Date of Birth:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="date_of_birth" type="date" value="{{ $record->date_of_birth }}"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Mobile no:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="mobile_number" type="text" value="{{ $record->mobile_number }}"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2" >Email:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="email_add" type="text" value="{{ $record->email_add }}"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Experience:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="experience" value="{{ $record->experience }}" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Currently Working:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="currently_working" value="{{ $record->currently_working }}" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Academic Qualification:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="academic_qualification"  value="{{ $record->academic_qualification }}" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applying For:</label>
                                        <div class="col-md-8">
                                            <x-input-select :selected="$record->applying_for" name="applying_for"
                                                    :records="$applyingJob"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">CV upload:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="cv_upload" type="file" value="{{ $record->cv_upload }}"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4">Is company employee:</label>
                                        <div class="square-switch">
                                            <input name="is_company_employee" type="checkbox" id="square-switch10" switch="bool"
                                                @if ($record->is_company_employee) {{ 'checked' }} @else @endif />
                                            <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('attendance-policy.create') }}"
                                            class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                                        <button type="submit"
                                            class="btn btn-outline-success waves-effect waves-light">Update</button>
                                    </div>
                                </div>  
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection