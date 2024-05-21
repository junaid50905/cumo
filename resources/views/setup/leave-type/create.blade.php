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
                            <form action="{{ route('leave-type.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <x-input-text name="name" placeholder="Enter Name here"></x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <div>
                                                    <x-input-textarea name="description" placeholder=""></x-input-textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <x-input-radio-or-check name="calculation_type" label="Calculation Type"
                                                :records="$constants::$flatCalculative">
                                            </x-input-radio-or-check>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Calculation Interval</label>
                                                <x-input-text name="calculation_interval" type="number"
                                                    placeholder="Enter Calculation Interval"></x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <x-input-radio-or-check name="calculation_base" label="Calculation Base"
                                                    :records="$constants::$calculativeBase">
                                                </x-input-radio-or-check>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <x-input-radio-or-check name="measurement_unit" label="Measurement Unit"
                                                        :records="$constants::$unit">
                                                    </x-input-radio-or-check>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Leave TTL</label>
                                                    <x-input-text name="leave_ttl" type="number"
                                                        placeholder="Enter Leave TTL here"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <label class="form-label">Max Carry Cash Day</label>
                                                    <x-input-text name="max_carry_cash_day" type="number"
                                                        placeholder="Enter Max Carry Cash Day here"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <x-input-radio-or-check name="leave_nature" label="Leave Nature"
                                                        :records="$constants::$leave">
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
                                                            switch="bool" checked />
                                                        <label for="square-switch10" data-on-label="Yes"
                                                            data-off-label="No"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn  btn-outline-success" data-bs-dismiss="modal">
                                            Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Tab Panes Two -->
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <livewire:leave-type-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
