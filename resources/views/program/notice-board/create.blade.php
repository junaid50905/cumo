@extends('layouts.master')
@section('title')
@lang('translation.Data_Tables')
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
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
                        <form action="{{ route('notice-board.store') }}" method="post">
                            @csrf
                            <div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-4 col-form-label text-center">Send
                                        To:</label>
                                    <div class="col-md-8 pe-5">
                                        <x-input-select name="send_to" :records="$students" />
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Subject:</label>
                                    <div class="col-md-8 pe-5">
                                        <x-input-text name="sub" placeholder="Notice Subject Here" />
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Message:</label>
                                    <div class="col-md-8 pe-5">
                                        <form method="post">
                                            <x-input-textarea name="area" />
                                        </form>
                                    </div>
                                </div>
                                {{-- --}}
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
                        <livewire:notice-board-list />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection