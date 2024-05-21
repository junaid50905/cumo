<div class="row mt-5">
    <label class="form-check-label mb-3 fs-5" for="formCheckBoxForm"><b>Cheque Pay</b></label>

    <div class="row" id="formCheckBoxForm">
        <div class="row">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <x-input-text wireModel="cheque_amount" placeholder="Enter Amount Here">
                        </x-input-text>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Cheque No</label>
                        <x-input-text wireModel="cheque_no" placeholder="Cheque No Here ">
                        </x-input-text>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label"> Acc No</label>
                        <x-input-text wireModel="cheque_account_no" placeholder="Enter Acc No">
                        </x-input-text>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Account Name</label>
                        <x-input-text wireModel="cheque_account_name" placeholder="Enter Acc.Name Here ">
                        </x-input-text>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Bank Name</label>
                        <x-input-text wireModel="cheque_bank_name" placeholder="Enter Bank Name">
                        </x-input-text>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('bottomJsStack')
{{-- <script>
    $(function() {
            $ ( "#formCheckBoxForm" ).hide ();
            $ ( "#formCheckBox" ).click ( function () {
                $ ( "#formCheckBoxForm" ).toggle ();
            } );
        });
</script> --}}
@endpush