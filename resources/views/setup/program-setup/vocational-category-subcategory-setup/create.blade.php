@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-block">Categories Setup</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-block">Categories List</span>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <form action="{{ route('vocational-sub-category.store') }}" method="post">
                @csrf
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="mb-3 row m-auto">
                        <div class="col-lg-6">
                            <label class="form-label">Categories</label>
                            <x-input-select name="category_id" :records="$category" targetColumn="category_name"/>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Sub Categories</label>
                            <x-input-text name="sub_categories">
                            </x-input-text>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="row modal-footer">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <livewire:vocational-sub-category-list />
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
