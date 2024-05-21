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

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <form action="{{ route('student-attendance.store') }}" method="post">
                                @csrf
                                <div class="apply-view-only">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Student</label>
                                                <x-input-select name="student_id" :selected="$record->student_id" :records="$students" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Date</label>
                                                <x-input-text name="date" type="date" placeholder="mm/dd/yyyy"
                                                    value="{{ $record->date }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Topic</label>
                                                <x-input-select name="topic" :selected="$record->topic" :records="[]" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Rating</label>
                                                <x-input-select name="rating" :selected="$record->rating" :records="[]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  justify-content-end">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Notes</label>
                                                <x-input-textarea name="note" value="{{ $record->note }}" />
                                            </div>
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
                            </form>
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
