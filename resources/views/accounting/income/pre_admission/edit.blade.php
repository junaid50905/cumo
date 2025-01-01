@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__search__box">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end gap-2">
                            <div class="flex-grow-1">
                                <form action="{{ route('pre-admission-income-search.search') }}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="search_id"
                                            placeholder="Search by ID (000001)" required>
                                        <button class="btn btn-success" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="flex-shrink-0" style="min-width: 70px;">
                                <button type="button" class="btn btn-primary text-capitalize w-100 custom-back-btn"
                                    onclick="window.location.href = '{{ url()->previous() }}';" 
                                    style=".custom-back-btn {
                                        background-color: #60bdf3;
                                        border-color: #60bdf3;
                                    }

                                    .custom-back-btn:hover {
                                        background-color: #4aaee3; 
                                        border-color: #4aaee3;
                                    }">
                                    <i class="bx bx-arrow-back"></i> Back
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="card__data__box">
                    <form
                        action="{{ route('pre-admission-income.update',  ['pre_admission_income' => $studentData->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="field__data mt-2">
                            <div class="field__label">
                                <span>Payment Income</span>
                            </div>
                            <div class="input__field_data mt-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="auto-increment-input"
                                                class="col-md-4 col-form-label">Interviewee ID:</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="interviewer_id" type="text"
                                                    placeholder="Interviewer ID" id="auto-increment-input"
                                                    value="{{ $studentData->student_id }}" readOnly />
                                                <input class="form-control" name="appointment_id" type="hidden"
                                                    value="{{ $studentData->appointment_id }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="payment_status" class="col-md-4 col-form-label">Payment
                                                Status:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="payment_status" :records="$systemStatus"
                                                    :selected="$studentData->payment_status ?? null"
                                                    :firstLabel="'Select Payment Status'" required>
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="income_type" class="col-md-4 col-form-label">Income
                                                Type:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="income_type"
                                                    :records="$pre_admission_payment_type"
                                                    :selected="$studentData->income_type ?? null"
                                                    :firstLabel="'Select Payment Type'" required>
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="payment_method" class="col-md-4 col-form-label">Payment
                                                Method:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="payment_method" :records="$paymentGateways"
                                                    :selected="$studentData->payment_method ?? null"
                                                    :firstLabel="'Select Payment Method'" required>
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="amount" class="col-md-4 col-form-label">Payment Amount:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="amount" id="amount" type="number"
                                                    placeholder="Amount" value="{{ $studentData->amount }}" required>
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="transaction_id" class="col-md-4 col-form-label">Transaction
                                                ID:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="transaction_id" id="transaction_id" type="text"
                                                    placeholder="Enter Transaction ID"
                                                    value="{{ $studentData->transaction_id }}" required></x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <button type="submit" class="btn btn-success w-100">Save</button>
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
@endsection