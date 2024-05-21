@extends('layouts.master')
@section('css')
@endsection
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
                            <form action="{{ route('weekend-package.store') }}" method="post">
                                @csrf
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
                                                checked />
                                            <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label ">Monday</label>
                                        <div class="square-switch">
                                            <input name="monday" type="checkbox" id="square-switch11" switch="bool"
                                                checked />
                                            <label for="square-switch11" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Tuesday</label>
                                        <div class="square-switch">
                                            <input name="tuesday" type="checkbox" id="square-switch12" switch="bool"
                                                checked />
                                            <label for="square-switch12" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Wednesday</label>
                                        <div class="square-switch">
                                            <input name="wednesday" type="checkbox" id="square-switch13" switch="bool"
                                                checked />
                                            <label for="square-switch13" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Thursday</label>
                                        <div class="square-switch">
                                            <input name="thursday" type="checkbox" id="square-switch14" switch="bool"
                                                checked />
                                            <label for="square-switch14" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Friday</label>
                                        <div class="square-switch">
                                            <input name="friday" type="checkbox" id="square-switch15" switch="bool"
                                                checked />
                                            <label for="square-switch15" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg text-center">
                                        <label for="example-text-input" class=" col-form-label text-end">Saturday</label>
                                        <div class="square-switch">
                                            <input name="saturday" type="checkbox" id="square-switch16" switch="bool"
                                                checked />
                                            <label for="square-switch16" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row modal-footer">
                                    <div class="col-md-1">
                                        <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-success w-100">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                            <livewire:weekend-package-list />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
