@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="organization" role="tabpanel">
                            <form action="{{ Route('organization.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body p-0">
                                    <div class="container">
                                        <div class="row d-flex">
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Organization Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="organization_name" value="{{$record->organization_name}} " />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Contact Person:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="contact_person" value="{{$record->contact_person}}"  />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Address:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="address" value="{{$record->address}}"  />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Phone:</label>
                                                <div class="col-md-8">
                                                    <x-input-text  value="{{$record->phone}}" name="phone"  />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ route('organization.create') }}"
                                                    class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                                                <button type="submit"
                                                    class="btn btn-outline-success waves-effect waves-light">Update</button>
                                            </div>
                                        </div>
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
