@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="designation-setup" role="tabpanel">
                            <form action="{{ route('designation.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body p-0">
                                    <div class="container">
                                        <div class="row d-flex">
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">
                                                    Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="institute_name"
                                                        value="{{ $record->institute_name }}" />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Description:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="address" value="{{ $record->address }}" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ route('designation.create') }}"
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
