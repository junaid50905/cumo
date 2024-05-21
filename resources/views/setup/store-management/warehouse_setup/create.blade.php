@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-block">Warehouse Setup</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-block">Warehouse List</span>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <form action="{{ route('warehouse.store') }}" method="POST">
                        @csrf
                        <div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <x-input-text name="title" pleceholder="Enter your name"></x-input-text>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Location</label>
                                <div class="col-sm-9">
                                    <x-input-text name="location" pleceholder="Enter your Location"></x-input-text>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Store type</label>
                                <div class="col-sm-9">
                                    <x-input-select name="store_type" :records="$store_type" />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <x-input-textarea name="description"></x-input-textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Managed by</label>
                                <div class="col-sm-9">
                                    <x-input-select name="managed_by" :records="$users" />
                                </div>
                            </div>
                            <div class="d-flex  flex-wrap float-end gap-2">
                                <button type="submit"
                                    class="btn btn-outline-success waves-effect waves-light">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="profile" role="tabpanel">
                    <livewire:warehouse-setup-list />
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
