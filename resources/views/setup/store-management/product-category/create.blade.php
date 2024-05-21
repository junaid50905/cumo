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
                                <span class="d-none d-sm-block">Product Category Setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#finished_good_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Product Category Setup List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="finished_good" role="tabpanel">
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Parent Category</label>
                                            <x-input-select name="parent_category_id" :records="$parent_category" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <x-input-text name="name" placeholder="Category Name Here"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Sequence</label>
                                            <x-input-text name="seqence" placeholder="Sequence"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Tire No.</label>
                                            <x-input-text type="number" name="tire_no" placeholder="Tire No.">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Description</label>
                                            <x-input-textarea name="description"></x-input-textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <button type="submit"
                                            class="btn btn-outline-success font-size-16 waves-effect waves-light w-50"
                                            id="sa-position">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="finished_good_list" role="tabpanel">
                            <livewire:product-category-list />
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
