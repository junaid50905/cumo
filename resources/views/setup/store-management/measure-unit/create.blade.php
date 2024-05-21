@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body pt-5">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#finished_good" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Measure Unit</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Measure Unit List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="finished_good" role="tabpanel">
                            <form action="{{ route('unit.store') }}" method="POST">
                                @csrf
                                <!-- form start -->
                                <div class="col-12 d-flex p-2">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Name</label>
                                    <div class="col-md-8">
                                        <x-input-text name="name" placeholder="Store Name Here"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-12 d-flex p-2">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Small Unit</label>
                                    <div class="col-md-8">
                                        <x-input-select name="small_unit" :records="$small_unit" />
                                    </div>
                                </div>
                                <div class="col-12 d-flex p-2">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Unit Factor</label>
                                    <div class="col-md-8">
                                        <x-input-text name="unit_factor" placeholder="Store Name Here"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-12 d-flex p-2">
                                    <label for="example-text-input" class="col-md-4 col-form-label">Description</label>
                                    <div class="col-md-8">
                                        <x-input-text name="description" placeholder="Enter Description Here">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="finished_good_list" role="tabpanel">
                            <livewire:measure-unit-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
@section('script-bottom')
@endsection
