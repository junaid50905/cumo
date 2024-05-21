@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__data__box">
                    <form action="{{ route('setup-question.store') }}" method="POST">
                        @csrf
                        <div class="field__data mt-2">
                            <div class="field__label">
                                <span>Add Question for Specific Category</span>
                            </div>
                            <div class="input__field_data mt-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="category_id" class="col-md-4 col-form-label">Category:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="category_id" id="category_id"
                                                    :records="$categories"
                                                    :firstLabel="'Select Category'" required>
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="sub_category_id" class="col-md-4 col-form-label">Sub-Category:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="sub_category_id" id="sub_category_id"
                                                    :records="$subCategories"
                                                    :firstLabel="'Select Sub-Category'" required>
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 pb-3">
                                        <div class="row">
                                            <label for="name" class="col-md-2 col-form-label">Question:</label>
                                            <div class="col-md-10">
                                                <x-input-text name="name" id="name" type="text"
                                                    placeholder="Enter question"></x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <div class="btn bold">
                                            <x-check-box name="is_reverse" placeholder="Is reverse?"></x-check-box>
                                        </div>
                                        <button type="submit" class="btn btn-success w-100">Save</button>
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
@endsection