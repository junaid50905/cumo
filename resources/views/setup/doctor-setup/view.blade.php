@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Tab Panes One -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <form action="{{ route('doctor.update', $record->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body p-0 apply only">
                             <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label for="example-text-input" class="col-2 col-form-label">Dr Name</label>
                                                <div class="col-10">
                                                    <x-input-text name="doctor_name"  value="{{ $record->doctor_name }}" placeholder="Doctor Name"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label for="example-text-input" class="col-2 col-form-label">Organization</label>
                                                <div class="col-10">
                                                    <x-input-text name="organization" value="{{ $record->organization }}" placeholder="Organization"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 d-flex">
                                                <label for="example-date-input" class="col-2 col-form-label">Contact</label>
                                                <div class="col-10">
                                                    <x-input-text name="contact" value="{{ $record->contact }}" placeholder="Contact"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex">
                                                <label class="col-2 col-form-label">Address</label>
                                                <div class="col-10">
                                                    <x-input-text name="address" value="{{ $record->address }}"  placeholder="Address"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pb-3 d-flex">
                                            <label class="col-1 col-form-label">Experties</label>
                                            <div class="col-11">
                                                <x-input-textarea name="experties" value="{{ $record->experties }}" ></x-input-textarea>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="row modal-footer">
                                                    <div class="col-md-4 d-flex">
                                                        <a href="{{ route('notice-board.create') }}"
                                                            class="btn btn-outline-danger w-100 me-3">Go back</a>
                                                        <button type="submit" class="btn btn-outline-success w-100">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                     <!-- Tab Panes Two -->
                </div>
            </div>
        </div>
    </div> 
</div
@endsection