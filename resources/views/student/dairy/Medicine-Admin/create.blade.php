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
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{ route('medicine-admin.store') }}" method="post">
                            @csrf
                            <div class="card p-0 m-0">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 row ms-2">
                                                <label class="col-md-4 col-form-label">Sudent:</label>
                                                <div class="col-md-8">
                                                    <x-input-select name="student_id" :records="$students" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row ms-2">
                                                <label class="col-md-4 col-form-label">Prescription:</label>
                                                <div class="col-md-8">
                                                    <x-input-select name="prescription_id" :records="['1' => 'one']" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row ms-2">
                                                <label class="col-md-4 col-form-label">Given By:</label>
                                                <div class="col-md-8">
                                                    <x-input-select name="given_id" :records="$doctors" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row me-2">
                                                <label for="" class="col-md-4 col-form-label">Given
                                                    Date:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text name="date" placeholder="dd/mm/yyyy" type="date">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row me-2">
                                                <label for="" class="col-md-4 col-form-label">Given
                                                    Time:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text name="time" placeholder="Time" type="text">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <h3>Posting Transaction Details</h3>
                                </div>
                                <div class="repeater" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="name">Medicine Name</label>
                                        </div>
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="product">Amount Given</label>
                                        </div>
                                        <div class="col p-0 pe-1 text-center">
                                            <label for="product">Amount Given Unit</label>
                                        </div>
                                        <div class="col p-0 pe-5 text-center">
                                            <label for="quality">Note</label>
                                        </div>
                                    </div>

                                    <div data-repeater-list="medicineAdmin">
                                        <div data-repeater-item="" class="row ms-1">
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text name="medicine_name" placeholder="Medicine Name">
                                                </x-input-text>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text name="amount_given" placeholder=" Amount Given">
                                                </x-input-text>
                                            </div>
                                            <div class=" col p-0 pe-1 pb-1">
                                                <x-input-text name="amount_given_unit" placeholder="Amount Given Unit">
                                                </x-input-text>
                                            </div>

                                            <div class=" col p-0  pb-1 me-4 d-flex">
                                                <x-input-text name="note" placeholder="Note">
                                                </x-input-text>
                                                <button class="btn btn-danger ms-2">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create="" type="button"
                                        class="btn btn-success mt-3 ms-1 mt-lg-0" value="Add">
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
                        </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <livewire:medicine-admin-list />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection