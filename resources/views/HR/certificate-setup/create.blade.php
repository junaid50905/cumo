@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#certificate" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#certificate_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="certificate" role="tabpanel">
                            <form action="{{ route('certificate.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-12 d-flex">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-end">Certificate
                                            Name</label>
                                        <div class="col-md-8 ps-2">
                                            <x-input-text name="certificate_name" type="text" placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mb-2">
                                    <div class="col-12 d-flex">
                                        <label for="example-text-input" class="col-md-2 col-form-label text-end" >Type</label>
                                        <div class="col-md-8 ps-3">
                                            <div class="btn-group" role="group"  aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="type" id="btnradio4" autocomplete="off" >
                                                <label class="btn btn-outline-success" for="btnradio4">Academic</label>
                                                <input type="radio" class="btn-check" name="type" id="btnradio5" autocomplete="off" >
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
                                        <x-input-text name="note" type="text" placeholder="">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="row modal-footer">
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-outline-success  waves-light">
                                                 Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="certificate_list" role="tabpanel">
                            <livewire:certificate-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
