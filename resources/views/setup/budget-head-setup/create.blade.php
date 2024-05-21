@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">BudgetHead Setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">BudgetHead List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active " id="home" role="tabpanel ">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ms-0">
                                        <div class="card-body">
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted mt-4">
                                                <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <form action="{{ route('budget-head.store') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="row mt-3">
                                                                            <div class="col-md-12">
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-4 d-flex align-items-center">
                                                                                        <h6>Title</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-select name="title"
                                                                                            :records="$demo_title" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-4 d-flex align-items-center">
                                                                                        <h6>Parent</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-select name="parent"
                                                                                            :records="$demo_parent" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-4 d-flex align-items-center">
                                                                                        <h6>Indent</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-text type="number"
                                                                                            name="indent" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-4 d-flex align-items-center">
                                                                                        <h6>Description</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-textarea
                                                                                            name="description" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-outline-success  waves-light"> Save</button>
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
                        </div>
                        <div class="tab-pane mt-4" id="profile" role="tabpanel">
                            <livewire:budget-head-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
