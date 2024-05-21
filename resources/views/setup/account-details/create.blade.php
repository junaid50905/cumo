@extends('layouts.master')
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
                        <form action="{{ route('bank-account.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <!-- journal form start -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Bank:</label>
                                        <x-input-select name="bank" :records="$bankList" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Account Name :</label>
                                        <x-input-text name="account_name" placeholder="Account Name"></x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Account No :</label>
                                        <x-input-text name="account_no" placeholder="Account No" type="number">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Initial Balance :</label>
                                        <x-input-text type="number" name="initial_balance"
                                            placeholder="Initial Balance">
                                        </x-input-text>
                                    </div>
                                </div>
                                {{-- Show Cause Description --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Show Cause Description</label>
                                        <div class="col-md-12">
                                            <x-input-textarea name="note"></x-input-textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="col-md-12 text-center">
                                            <button type="submit"
                                                class="btn btn-lg btn-success  waves-light w-25">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- journal form end -->
                            </div>
                        </form>
                    </div>
                    <!-- Tab Panes Two -->
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <livewire:bank-account-list />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div @endsection