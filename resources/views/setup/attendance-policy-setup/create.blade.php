@extends('layouts.master')
@section('title')
    @lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block"> List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab Panes One -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <form action="{{ route('attendance-policy.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Policy Name</label>
                                                <x-input-text name="policy_name" placeholder="Enter Policy Name Here">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Over Time Start Grace</label>
                                                <x-input-text name="over_time_start_grace"
                                                    placeholder="Enter time in minute">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Arrival Grace</label>
                                                <x-input-text name="arrival_grace"
                                                    placeholder="Enter arrival grace in minute">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Lunch Break:</label>
                                                <x-input-text name="lunch_break" placeholder="Lunch Break in minute">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Lunch Time</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="lunch_time" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Working Hour </label>
                                                <x-input-text name="working_hour" placeholder="Enter working hour">
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
                                                        <x-input-text name="sun_in" type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Sun Out</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="sun_out" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Is Next Day</label>
                                                <div class="square-switch">
                                                    <input type="checkbox" name="sun_is_next_day" id="square-switch3"
                                                        switch="bool" checked />
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
                                                        <x-input-text name="mon_in" type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Mon Out</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="mon_out" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label mt-3"></label>
                                                <div class="square-switch">
                                                    <input type="checkbox" name="mon_is_next_day" id="square-switch4"
                                                        switch="bool" checked />
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
                                                        <x-input-text name="thu_in" type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Thu Out</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="thu_out" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label mt-3"></label>
                                                <div class="square-switch">
                                                    <input type="checkbox" name="thu_is_next_day" id="square-switch5"
                                                        switch="bool" checked />
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
                                                        <x-input-text name="wed_in" type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Wed Out</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="wed_out" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label mt-3"></label>
                                                <div class="square-switch">
                                                    <input type="checkbox" name="wed_is_next_day" id="square-switch6"
                                                        switch="bool" checked />
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
                                                        <x-input-text name="th_in" type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Thu Out</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="th_out" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label mt-3"></label>
                                                <div class="square-switch">
                                                    <input type="checkbox" name="th_is_next_day" id="square-switch9"
                                                        switch="bool" checked />
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
                                                        <x-input-text name="fri_in" type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Fri out</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="fri_out" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label mt-3"></label>
                                                <div class="square-switch">
                                                    <input type="checkbox" name="fri_is_next_day" id="square-switch11"
                                                        switch="bool" checked />
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
                                                        <x-input-text name="sat_in" type="time"></x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Sat Out</label>
                                                <div class="input-group" id="timepicker-input-group3">
                                                    <x-input-text name="sat_out" type="time"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label mt-3"></label>
                                                <div class="square-switch">
                                                    <input type="checkbox" name="sat_is_next_day" id="square-switch12"
                                                        switch="bool" checked />
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
                                                        switch="bool" checked />
                                                    <label for="square-switch10" data-on-label="Yes"
                                                        data-off-label="No"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Deduct in minute</label>
                                                <x-input-text name="deduct_in_minute" type="number"
                                                    placeholder="Enter Deduct in minute "></x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="mb-3">
                                                <label class="form-label">Policy Desc</label>
                                                <div>
                                                    <x-input-textarea name="policy_desc"></x-input-textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-success  waves-light"
                                        data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- Tab Panes Two -->
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <livewire:attendance-policies-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

