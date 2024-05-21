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
                            <div class="modal-body p-0">
                                <div class="card p-0 m-0">
                                    <div class="card-body">
                                        <form action="{{ route('chartof-accounts.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Reporting
                                                    Connection</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="reporting_connection" :records="[
                                                        'BALANCE' => 'Balance Sheet',
                                                        'INCOME' => 'Income Statement',
                                                        'ACCOUNT' => 'P&L Account',
                                                    ]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                                    Category</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="account_category" :records="[
                                                        'ASSET' => 'Asset',
                                                        'LIABILITY' => 'Liability',
                                                        'INCOME' => 'Income',
                                                        'EXPENSE' => 'Expense',
                                                    ]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Budget
                                                    Link</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="budget_link" :records="[
                                                        'YES' => 'Yes',
                                                        'NO' => 'No',
                                                    ]" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                                    Code
                                                </label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="account_code" type="number"
                                                        placeholder="Enter Account number Here" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                                    Group</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="account_group" :records="[
                                                        'ASSET' => 'Asset',
                                                        'LIABILITY' => 'Liability',
                                                        'INCOME' => 'Income',
                                                        'EXPENSE' => 'Expense',
                                                    ]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Parent
                                                    Account
                                                </label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="parent_account" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                                    Name
                                                </label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="account_name" placeholder="Account name Here" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Opening
                                                    Balance:</label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="opening_balance" type="number"
                                                        placeholder="Opening Balance number Here" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Current
                                                    Balance:</label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="current_balance" type="number"
                                                        placeholder="Current Balance here" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Sequence
                                                    No:</label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="sequence_no" type="number"
                                                        placeholder="Sequence No Here" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Tier No.:
                                                </label>
                                                <div class="col-md-9 ">
                                                    <x-input-text name="tier_no" type="number" placeholder="Tier No" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-3 col-form-label ">Account
                                                    Type</label>
                                                <div class="col-md-9 ">
                                                    <x-input-select name="account_type" :records="[
                                                        'DEBIT' => 'Debit',
                                                        'CREDIT' => 'Credit',
                                                    ]" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-3 col-form-label ">Published:</label>
                                                <div class="btn-group btn-group-sm p-2 col-md-1" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio4" autocomplete="off" checked>
                                                    <label class="btn btn-outline-success" for="btnradio4">Yes</label>

                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio5" autocomplete="off">
                                                    <label class="btn btn-outline-success " for="btnradio5">No</label>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <div class="modal-footer">
                                                        <button type="submit"
                                                            class="btn btn-outline-success waves-light">
                                                            Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Panes Two -->
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <livewire:chartof-accounts-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
