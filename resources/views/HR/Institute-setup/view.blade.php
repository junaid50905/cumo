@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card apply-view-only">
                <div class="card-body p-0">
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="institute" role="tabpanel">
                            <form action="{{ route('institute.show', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body p-0">
                                    <div class="container">
                                        <div class="row d-flex">
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Institute Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="institute_name"  value="{{$record->institute_name}}" />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Address:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="address"  value="{{$record->address}}" />
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex  mb-3">
                                                <label for="example-text-input"
                                                    class="col-md-2 col-form-label  pe-2">Note:</label>
                                                <div class="col-md-8">
                                                    <x-input-textarea name="note"  value="{{$record->note}}" />
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="row modal-footer">
                                                        <div class="col-md-4 d-flex">
                                                            <a href="{{ route('institute.create') }}"
                                                                class="btn btn-outline-danger w-100 me-3">Go back</a>
                                                        </div>
                                                    </div>
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
        </div>
    </div>
@endsection
