@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <form action="{{ route('salary-head.update', $record->id) }}"   method="POST">
                                @csrf
                                @method('PUT')
                                <!-- Tab panes One Add  -->
                                <div class="modal-body">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Head Name</label>
                                            <x-input-text value="{{ $record->head_name }}" name="head_name"  placeholder="Enter Head Name Here">
                                            </x-input-text>
                                        </div>
                                        <div class="col-md-6 ms-2 mb-3">
                                            <label class="form-label">Head Name Bangla</label>
                                            <x-input-text value="{{ $record->head_name_bangla }}" name="head_name_bangla" placeholder="Enter Head Name Bangla Here">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Default Amount</label>
                                            <x-input-text value="{{ $record->default_amount }}" name="default_amount" type="number"
                                                placeholder="Enter Default Amount Here"></x-input-text>
                                        </div>
                                        <div class="col-md-6 ps-2  mb-3">
                                            <label class="form-label">Account</label>
                                            <x-input-select name="account" :records="$account" targetColumn="account_name" :selected="$record->account"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6 mb-3 p-3">
                                            <div>
                                                <x-input-radio-or-check :checked="$record->head_nature" name="head_nature" label="Head Nature" :records="$constants::$setup" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div>
                                                <x-input-radio-or-check :checked="$record->is_other_payment" name="is_other_payment" label="Is Other Payment" :records="$constants::$salaryHead" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pe-3 ps-3 mb-3">
                                        <label class="form-label">Description</label>
                                        <x-input-textarea value="{{ $record->description }}" name="description" placeholder="Enter salary head description">
                                        </x-input-textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ route('salary-head.create') }}"
                                        class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                                    <button type="submit"
                                        class="btn btn-outline-success waves-effect waves-light">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
