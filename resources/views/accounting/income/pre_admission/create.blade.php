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
                        <form action="{{ route('pre-admission-income-search.search') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search_id"
                                    placeholder="Search by ID (000001)" required>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card__data__box">
                    <form action="{{ route('pre-admission-income.store') }}" method="POST">
                        @csrf
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
                                                    value="{{ $studentData->student_appointment_id }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="payment_status" class="col-md-4 col-form-label">Payment
                                                Status:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="payment_status" id="payment_status"
                                                    :records="$systemStatus"
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
                                                <x-input-select name="income_type" id="income_type"
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
                                                <x-input-select name="payment_method" id="payment_method"
                                                    :records="$paymentGateways"
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
                                                    placeholder="Amount" value="{{ $studentData->amount }}">
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
                                                    value="{{ $studentData->transaction_id }}"></x-input-text>
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
@section('script')
<!-- <script>
function generatePaddedValue(value) {
    return String(value).padStart(6, '0');
}

function incrementAndSetAutoIncrementValue() {
    let counter = localStorage.getItem('counter');
    counter = counter ? parseInt(counter) + 1 : 0;

    localStorage.setItem('counter', counter);
    let formattedDate = new Date().toLocaleDateString('en-GB', {
        day: '2-digit',
        month: '2-digit',
        year: '2-digit'
    }).split('/').join('/');

    document.getElementById('auto-increment-input').value = generatePaddedValue(counter) + '-' + formattedDate;
}

window.onload = function() {
    incrementAndSetAutoIncrementValue();
};
</script> -->

<!-- <script>
document.getElementById('paymentMethod').addEventListener('change', function() {
    let selectedOption = this.value;
    let transactionIDInput = document.querySelector('#transactionIDField input');

    if (selectedOption === '5') {
        transactionIDInput.value = generateTransactionID();
        transactionIDInput.disabled = true;
    } else {
        transactionIDInput.value = '';
        transactionIDInput.disabled = false;
    }
});

function generateTransactionID() {
    let transactionID = new Date().getTime().toString();
    return 'TXN' + transactionID.slice(-8);;
}
</script> -->
@endsection