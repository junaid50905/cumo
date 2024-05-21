@extends('layouts.master')
@section('title')
    @lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Tab Panes One -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <form action="{{ route('attendance-policy.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="apply-view-only">
                                    <div class="modal-body ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Policy Name</label>
                                                    <x-input-text value="{{ $record->policy_name }}" name="policy_name"
                                                        placeholder="Enter Policy Name Here">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Over Time Start Grace</label>
                                                    <x-input-text value="{{ $record->over_time_start_grace }}"
                                                        name="over_time_start_grace" placeholder="Enter time in minute">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Arrival Grace</label>
                                                    <x-input-text value="{{ $record->arrival_grace }}" name="arrival_grace"
                                                        placeholder="Enter arrival grace in minute">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Lunch Break:</label>
                                                    <x-input-text value="{{ $record->lunch_break }}" name="lunch_break"
                                                        placeholder="Lunch Break in minute">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Lunch Time</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->lunch_time }}" name="lunch_time"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Working Hour </label>
                                                    <x-input-text value="{{ $record->working_hour }}" name="working_hour"
                                                        placeholder="Enter working hour">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div>
                                                        <label class="form-label">Sun In</label>
                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <x-input-text value="{{ $record->sun_in }}" name="sun_in"
                                                                type="time"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Sun Out</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->sun_out }}" name="sun_out"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Is Next Day</label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="sun_is_next_day" id="square-switch3"
                                                            switch="bool"
                                                            @if ($record->sun_is_next_day) checked @else @endif />
                                                        <label for="square-switch3" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div>
                                                        <label class="form-label">Mon In</label>
                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <x-input-text value="{{ $record->mon_in }}" name="mon_in"
                                                                type="time"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Mon Out</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->mon_out }}" name="mon_out"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label mt-3"></label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="mon_is_next_day" id="square-switch4"
                                                            switch="bool"
                                                            @if ($record->mon_is_next_day) checked @else @endif />
                                                        <label for="square-switch4" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div>
                                                        <label class="form-label">Thu In</label>
                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <x-input-text value="{{ $record->thu_in }}" name="thu_in"
                                                                type="time"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Thu Out</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->thu_out }}" name="thu_out"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label mt-3"></label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="thu_is_next_day" id="square-switch5"
                                                            switch="bool"
                                                            @if ($record->thu_is_next_day) checked @else @endif />
                                                        <label for="square-switch5" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div>
                                                        <label class="form-label">Wed in</label>
                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <x-input-text value="{{ $record->wed_in }}" name="wed_in"
                                                                type="time"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Wed Out</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->wed_out }}" name="wed_out"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label mt-3"></label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="wed_is_next_day" id="square-switch6"
                                                            switch="bool"
                                                            @if ($record->wed_is_next_day) checked @else @endif />
                                                        <label for="square-switch6" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div>
                                                        <label class="form-label">Thu In</label>
                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <x-input-text value="{{ $record->th_in }}" name="th_in"
                                                                type="time"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Thu Out</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->th_out }}" name="th_out"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label mt-3"></label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="th_is_next_day" id="square-switch9"
                                                            switch="bool"
                                                            @if ($record->th_is_next_day) checked @else @endif />
                                                        <label for="square-switch9" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div>
                                                        <label class="form-label">Fri In</label>
                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <x-input-text value="{{ $record->fri_in }}" name="fri_in"
                                                                type="time"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Fri out</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->fri_out }}" name="fri_out"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label mt-3"></label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="fri_is_next_day" id="square-switch11"
                                                            switch="bool"
                                                            @if ($record->fri_is_next_day) checked @else @endif />
                                                        <label for="square-switch11" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div>
                                                        <label class="form-label">Sat In</label>
                                                        <div class="input-group" id="timepicker-input-group3">
                                                            <x-input-text value="{{ $record->sat_in }}" name="sat_in"
                                                                type="time"></x-input-text>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Sat Out</label>
                                                    <div class="input-group" id="timepicker-input-group3">
                                                        <x-input-text value="{{ $record->sat_out }}" name="sat_out"
                                                            type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label mt-3"></label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="sat_is_next_day" id="square-switch12"
                                                            switch="bool"
                                                            @if ($record->sat_is_next_day) checked @else @endif />
                                                        <label for="square-switch12" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Deduct Leave for</label>
                                                    <div class="square-switch">
                                                        <input type="checkbox" name="deduct_Leave_for" id="square-switch10"
                                                            switch="bool"
                                                            @if ($record->deduct_Leave_for) checked @else @endif />
                                                        <label for="square-switch10" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Deduct in minute</label>
                                                    <x-input-text value="{{ $record->deduct_in_minute }}"
                                                        name="deduct_in_minute" type="number"
                                                        placeholder="Enter Deduct in minute "></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="mb-3">
                                                    <label class="form-label">Policy Desc</label>
                                                    <div>
                                                        <x-input-textarea value="{{ $record->policy_desc }}"
                                                            name="policy_desc"></x-input-textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('attendance-policy.create') }}"
                                            class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
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
