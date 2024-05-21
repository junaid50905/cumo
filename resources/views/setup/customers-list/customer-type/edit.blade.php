@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('customer-type.update', $record->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Type Name</label>
                                <div class="col-sm-9">
                                    <x-input-text type="text" name="type_name" placeholder="Enter your name " value="{{ $record->type_name }}"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <x-input-textarea name="description" placeholder="Enter your description here" value="{{ $record->description }}"></x-input-textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success waves-light">
                                            Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>

            </div>
        </div>
    </div>
</div
@endsection