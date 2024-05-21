@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card apply-view-only">
                <div class="card-body p-0">
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="certificate" role="tabpanel">
                            <form action="{{ route('certificate.show', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="col-12 d-flex">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-end">Certificate
                                            Name</label>
                                        <div class="col-md-8 ps-2">
                                            <x-input-text name="certificate_name" value="{{$record->certificate_name}}">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mb-2">
                                    <div class="col-12 d-flex">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-end" >Type</label>
                                        <div class="col-md-8 ps-3">
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="type" id="btnradio4" autocomplete="off" @if($record->type) {{ 'checked' }} @else  @endif>
                                                <label class="btn btn-outline-success" for="btnradio4">Academic</label>
                                                <input type="radio" class="btn-check" name="type" id="btnradio5" autocomplete="off" @if($record->type) {{ 'checked' }} @else  @endif>
                                                <label class="btn btn-outline-danger" for="btnradio5">Training</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12 d-flex">
                                    <label for="example-text-input" class="col-md-2 pb-2 col-form-label text-end">Type
                                        :</label>
                                    <div class="square-switch col-md-10 ps-4">
                                        <input name="type" type="checkbox" id="square-switch10" switch="bool" checked />
                                        <label for="square-switch10" data-on-label="Academic"
                                            data-off-label="Training"></label>
                                    </div>
                                </div> --}}
                                <div class="col-12 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-2 col-form-label text-end ">Note</label>
                                    <div class="col-md-8 ps-2">
                                        <x-input-text name="note" value="{{$record->note}}">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="row modal-footer">
                                            <div class="col-md-4 d-flex">
                                                <a href="{{ route('certificate.create') }}"
                                                    class="btn btn-outline-danger w-100 me-3">Go back</a>
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
