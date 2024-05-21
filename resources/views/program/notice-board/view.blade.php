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
        <div class="card apply-view-only">
            <div class="card-body p-0">
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
                                        <x-input-select :selected="$record->send_to" name="send_to"
                                            :records="$students" />
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Subject:</label>
                                    <div class="col-md-8 pe-5">
                                        <x-input-text value="{{ $record->sub }}" name="sub"
                                            placeholder="Notice Subject Here" />
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Message:</label>
                                    <div class="col-md-8 pe-5">
                                        <form method="post">
                                            <x-input-textarea value="{{ $record->area }}" name="area" />
                                        </form>
                                    </div>
                                </div>
                                {{-- --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="row modal-footer">
                                            <div class="col-md-2">
                                                <a href="{{ route('notice-board.create') }}"
                                                    class="btn btn-success w-100">Go back</a>
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
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection