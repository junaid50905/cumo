@extends('layouts.master')
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
                            <form action="{{ route('salary-head.store') }}"   method="POST">
                                @csrf
                                <!-- Tab panes One Add  -->
                                <div class="modal-body">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Head Name</label>
                                            <x-input-text name="head_name" placeholder="Enter Head Name Here">
                                            </x-input-text>
                                        </div>
                                        <div class="col-md-6 ms-2 mb-3">
                                            <label class="form-label">Head Name Bangla</label>
                                            <x-input-text name="head_name_bangla" placeholder="Enter Head Name Bangla Here">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Default Amount</label>
                                            <x-input-text name="default_amount" type="number"
                                                placeholder="Enter Default Amount Here"></x-input-text>
                                        </div>
                                        <div class="col-md-6 ps-2  mb-3">
                                            <label class="form-label">Account</label>
                                            <x-input-select name="account"  :records="$account" targetColumn="account_name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-6 mb-3 p-3">
                                            <div>
                                                <x-input-radio-or-check name="head_nature" label="Head Nature" :records="$constants::$setup" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div>
                                                <x-input-radio-or-check name="is_other_payment" label="Is Other Payment" :records="$constants::$salaryHead" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pe-3 ps-3 mb-3">
                                        <label class="form-label">Description</label>
                                        <x-input-textarea name="description" placeholder="Enter salary head description">
                                        </x-input-textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-success  waves-light"
                                        data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                                </div>
                                <!-- Tab panes One Close  -->
                            </form>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                            <livewire:salary-head-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
