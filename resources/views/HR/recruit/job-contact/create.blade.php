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
                           <livewire:job-contact-create/>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                            <livewire:job-contact-list/>
                        </div>
                    </div>
                    <!--  Extra Large modal example -->
                    <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary">Job contact
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="row p-3">
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Job
                                            Title:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="job_title" :records="[
                                                'TEACHER'=>'Teacher',
                                                'DEVELOPER'=>'Developer',
                                                'GRAPHICSDESIGNER'=>'Graphics Designer',
                                                'COMPUTEROPERATOR'=>'Computer Operator',
                                                'DRIVER'=>'Driver',
                                            ]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">Department:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="depertment" :records="[
                                                'ACCOUNT'=>'Account',
                                                'INVENTORYMANAGEMENT'=>'Inventory Management',
                                                'PARPERWORKSECTION'=>'Paper Work Section',
                                                'PROCURMENTSECTION'=>'Procurement Section',
                                                'PROGRAMMESECTION'=>'Programme Section',
                                                'RESEARCHANDDEVELOPMENT'=>'Research And Development',
                                            ]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Applicant
                                            Name:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="applicant_name" :records="[
                                                'Angon  Rahman' => 'Angon  Rahman',
                                                'Parvez Parvez Ahmad' => 'Parvez Parvez Ahmad',
                                                'Begum Nurjahan Dipa' => 'Begum Nurjahan Dipa',
                                                'Md. Abu Bakar Siddique' => 'Md. Abu Bakar Siddique',
                                                'Mohammad Amir Hossain' => 'Mohammad Amir Hossain',
                                                'Airin  Shiddique' => 'Airin  Shiddique',
                                            ]" />
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-4 col-form-label  pe-2">WorkStation:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="workStation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row modal-footer">
                                    <div class="col-md-1">
                                        <button class="btn btn-danger w-100"
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
