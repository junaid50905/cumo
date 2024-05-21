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
            <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <form action="{{ route('warehouse.update', $record->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <x-input-text value="{{ $record->title }}" name="title"
                                        pleceholder="Enter your name"></x-input-text>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Location</label>
                                <div class="col-sm-9">
                                    <x-input-text value="{{ $record->location }}" name="location"
                                        pleceholder="Enter your Location"></x-input-text>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Store type</label>
                                <div class="col-sm-9">
                                    <x-input-select :selected="$record->store_type" name="store_type" :records="$store_type" />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <x-input-textarea value="{{ $record->description }}" name="description">
                                    </x-input-textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Managed by</label>
                                <div class="col-sm-9">
                                    <x-input-select :selected=" $record->managed_by " name="managed_by"
                                        :records="$users" />
                                </div>
                            </div>
                            <div class="d-flex  flex-wrap float-end gap-2">
                                <button type="submit"
                                    class="btn btn-outline-success waves-effect waves-light">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
