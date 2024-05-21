@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#organization" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#organization_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="organization" role="tabpanel">
                            <form action="{{ Route('organization.store') }}" method="POST">
                                @csrf
                                <div class="modal-body p-0">
                                    <div class="container">
                                        <div class="row d-flex">
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Organization Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="organization_name" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Contact Person:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="contact_person" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Address:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="address" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Phone:</label>
                                                <div class="col-md-8">
                                                    <x-input-text  name="phone"  />
                                                </div>
                                            </div>
                                            <div class=" d-flex justify-content-end gap-1">
                                                <div>
                                                    <button class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--=====================List========================-->
                        <div class="tab-pane" id="organization_list" role="tabpanel">
                            <livewire:organization-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
