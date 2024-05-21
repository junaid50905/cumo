@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block"> List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab Panes One -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <form action="{{ route('doctor.store') }}" method="POST">
                        @csrf
                        <div class="modal-body p-0">
                             <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label for="example-text-input" class="col-2 col-form-label">Dr Name</label>
                                                <div class="col-10">
                                                    <x-input-text name="doctor_name" placeholder="Doctor Name"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label for="example-text-input" class="col-2 col-form-label">Organization</label>
                                                <div class="col-10">
                                                    <x-input-text name="organization" placeholder="Organization"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label for="example-date-input" class="col-2 col-form-label">Contact</label>
                                                <div class="col-10">
                                                    <x-input-text name="contact" placeholder="Contact"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label class="col-2 col-form-label">Address</label>
                                                <div class="col-10">
                                                    <x-input-text name="address" placeholder="Address"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3 d-flex">
                                            <label class="col-1 col-form-label">Experties</label>
                                            <div class="col-11">
                                                <x-input-textarea name="experties"></x-input-textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-outline-success  waves-light">
                                              Save</button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                     <!-- Tab Panes Two -->
                    <div class="tab-pane" id="profile" role="tabpanel">
                      <livewire:doctor-list />
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div
@endsection