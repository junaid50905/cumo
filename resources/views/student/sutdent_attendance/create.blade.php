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
                            <form action="{{ route('student-attendance.store') }}" method="post">
                                @csrf
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Student</label>
                                                <x-input-select name="student_id" :records="$students" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Date</label>
                                                <x-input-text name="date" type="date" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Topic</label>
                                                <x-input-select name="topic" :records="[]" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Rating</label>
                                                <x-input-select name="rating" :records="['1' => 'name',]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  justify-content-end">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Notes</label>
                                                <x-input-textarea name="note" />
                                            </div>
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

                            </form>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                            <livewire:student-attendance-list />
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
