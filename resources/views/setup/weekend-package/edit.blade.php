@extends('layouts.master')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <form action="{{ route('weekend-package.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Package
                                            Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="package_name" type="text" placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mb-3 d-flex row">
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label ">Sonday</label>
                                        <div class="square-switch">
                                            <input name="sunday" type="checkbox" id="square-switch10" switch="bool"
                                                @if ($record->sunday) {{ 'checked' }} @else @endif />
                                            <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label ">Monday</label>
                                        <div class="square-switch">
                                            <input name="monday" type="checkbox" id="square-switch11" switch="bool"
                                                @if ($record->monday) {{ 'checked' }} @else @endif />
                                            <label for="square-switch11" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Tuesday</label>
                                        <div class="square-switch">
                                            <input name="tuesday" type="checkbox" id="square-switch12" switch="bool"
                                                @if ($record->tuesday) {{ 'checked' }} @else @endif />
                                            <label for="square-switch12" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Wednesday</label>
                                        <div class="square-switch">
                                            <input name="wednesday" type="checkbox" id="square-switch13" switch="bool"
                                                @if ($record->wednesday) {{ 'checked' }} @else @endif />
                                            <label for="square-switch13" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Thursday</label>
                                        <div class="square-switch">
                                            <input name="thursday" type="checkbox" id="square-switch14" switch="bool"
                                                @if ($record->thursday) {{ 'checked' }} @else @endif />
                                            <label for="square-switch14" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Friday</label>
                                        <div class="square-switch">
                                            <input name="friday" type="checkbox" id="square-switch15" switch="bool"
                                                @if ($record->friday) {{ 'checked' }} @else @endif />
                                            <label for="square-switch15" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Saturday</label>
                                        <div class="square-switch">
                                            <input name="saturday" type="checkbox" id="square-switch16" switch="bool"
                                                @if ($record->saturday) {{ 'checked' }} @else @endif />
                                            <label for="square-switch16" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row modal-footer">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-success w-100">Update</button>
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
