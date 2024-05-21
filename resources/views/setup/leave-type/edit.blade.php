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
                            <form action="{{ route('leave-type.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <x-input-text value="{{ $record->name }}" name="name"
                                                    placeholder="Enter Name here"></x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <div>
                                                    <x-input-textarea value="{{ $record->description }}" name="description"
                                                        placeholder=""></x-input-textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <x-input-radio-or-check name="calculation_type" label="Calculation Type"
                                                :checked="$record->calculation_type" :records="$constants::$flatCalculative">
                                            </x-input-radio-or-check>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Calculation Interval</label>
                                                <x-input-text value="{{ $record->calculation_interval }}"
                                                    name="calculation_interval" type="number"
                                                    placeholder="Enter Calculation Interval"></x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <x-input-radio-or-check :checked="$record->calculation_base" name="calculation_base"
                                                    label="Calculation Base" :records="$constants::$calculativeBase">
                                                </x-input-radio-or-check>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <x-input-radio-or-check :checked="$record->measurement_unit" name="measurement_unit"
                                                        label="Measurement Unit" :records="$constants::$unit">
                                                    </x-input-radio-or-check>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Leave TTL</label>
                                                    <x-input-text value="{{ $record->leave_ttl }}" name="leave_ttl"
                                                        type="number" placeholder="Enter Leave TTL here"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <label class="form-label">Max Carry Cash Day</label>
                                                    <x-input-text value="{{ $record->max_carry_cash_day }}"
                                                        name="max_carry_cash_day" type="number"
                                                        placeholder="Enter Max Carry Cash Day here"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <x-input-radio-or-check :checked="$record->leave_nature" name="leave_nature"
                                                        label="Leave Nature" :records="$constants::$leave">
                                                    </x-input-radio-or-check>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Is Active</label>
                                                    <div class="square-switch">
                                                        <input name="is_active" type="checkbox" id="square-switch10"
                                                            switch="bool"@if ($record->is_active) checked @endif />
                                                        <label for="square-switch10" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('leave-type.create') }}"
                                            class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                                        <button type="submit"
                                            class="btn btn-outline-success waves-effect waves-light">Update</button>
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
