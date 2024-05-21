@extends('layouts.master')
@section('title')
    @lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="add" role="tabpanel">
                            <p class="mb-0">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body" id="add">
                                        <form action="{{ route('account-year.update', $record->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-1 p-2">
                                                <label for="horizontal-firstname-input"
                                                    class="col-sm-4 col-form-label">Account Year Name</label>
                                                <div class="col-sm-8">
                                                    <x-input-text value="{{ $record->year_id }}" name="year_id"
                                                        placeholder="Account year here">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="row mb-1 p-2">
                                                <label for="horizontal-firstname-input"
                                                    class="col-sm-4 col-form-label">Account Year Start</label>
                                                <div class="col-sm-8">
                                                    <x-input-text value="{{ $record->year_start }}" name="year_start"
                                                        type="date">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <label for="horizontal-firstname-input"
                                                    class="col-sm-4 col-form-label">Account Year End</label>
                                                <div class="col-sm-8">
                                                    <x-input-text value="{{ $record->year_end }}" name="year_end"
                                                        type="date">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-outline-success  waves-light">
                                                    Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
        </div
        @endsection
