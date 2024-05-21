@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#add" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="add" role="tabpanel">
                            <form action="{{ route('company.store') }}" method="POST">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Company Name </label>
                                                    <x-input-text name="company_name" placeholder="Company Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Total Department:</label>
                                                    <x-input-text name="total_department" placeholder="Total Department">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Manager </label>
                                                    <x-input-text name="manager" placeholder="Manager"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Street 1</label>
                                                    <x-input-text name="street_1" placeholder="Street 1"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Street 2</label>
                                                    <x-input-text name="street_2" placeholder="Street 2"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">City </label>
                                                    <x-input-text name="city" placeholder="City"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Zip Code </label>
                                                    <x-input-text type="number" name="zip_code" placeholder="Zip Code">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">State </label>
                                                    <x-input-text name="state" placeholder="State"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Country </label>
                                                    <x-input-text name="country" placeholder="Country"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Email </label>
                                                    <x-input-text name="email" placeholder="Email"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone 1:</label>
                                                    <x-input-text name="phone_1" placeholder="Phone 1"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone 2: </label>
                                                    <x-input-text name="phone_2" placeholder="Phone 2"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Fax: </label>
                                                    <x-input-text name="fax" placeholder="Fax"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Mobile: </label>
                                                    <x-input-text name="mobile" placeholder="Mobile"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Website Address: </label>
                                                    <x-input-text name="website_address" placeholder="Website Address">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Project </label>
                                                    <x-input-select name="project_id" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Logo </label>
                                                    <x-input-text type="file" name="logo" placeholder="Logo">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-outline-success  waves-light">
                                                  Save</button>
                                            </div>
                                        </div>
                                        <!-- journal form end -->

                                    </div>
                                </div><!-- /.modal-content -->
                            </form>
                        </div>
                        <div class="tab-pane" id="list" role="tabpanel">
                          <livewire:company-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
