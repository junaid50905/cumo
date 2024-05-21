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
                            <form action="{{route('apply.store')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="name" type="text" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Email:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="email_add" type="email" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Mobile no:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="mobile_number" type="tel" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Date of Birth:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="date_of_birth" type="date" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Academic Qualification:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="academic_qualification" type="text" />
                                        </div>
                                    </div>



                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Experience:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="experience" type="no" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Currently Working:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="currently_working" type="text" />
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applying For:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="applying_for" :records="$applyingJob" targetColumn="job_title"/>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="cv_upload" class="col-md-4 col-form-label  pe-2">CV upload:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="cv_upload" type="file" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4">Is company employee:</label>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                            <div class="square-switch">
                                                <input name="is_company_employee" type="checkbox" id="square-switch10" switch="bool"
                                                    checked />
                                                <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row modal-footer">
                                    <div class="col-md-2">
                                        <button class="btn btn-success w-100">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                      <livewire:apply-job-list/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
