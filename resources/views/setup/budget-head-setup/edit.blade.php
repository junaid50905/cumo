@extends('layouts.master')
@section('title')
@lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content text-muted">
                        <div class="tab-pane active " id="home" role="tabpanel ">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card ms-0">
                                        <div class="card-body">
                                            <!-- Tab panes -->
                                            <div class="tab-content text-muted mt-4">
                                                <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <form action="{{ route('budget-head.update',$record->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
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
                                                                                        <x-input-select :selected="$record->title" name="title"
                                                                                            :records="$title" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-4 d-flex align-items-center">
                                                                                        <h6>Parent</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-select :selected="$record->parent" name="parent"
                                                                                            :records="$parent" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-4 d-flex align-items-center">
                                                                                        <h6>Indent</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-text type="number" value="{{ $record->indent }}"
                                                                                            name="indent" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-4">
                                                                                    <div
                                                                                        class="col-4 d-flex align-items-center">
                                                                                        <h6>Description</h6>
                                                                                    </div>
                                                                                    <div class="col-8">
                                                                                        <x-input-textarea value="{{ $record->description }}"
                                                                                            name="description" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-outline-success  waves-light">Update</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
