<div class="row">
    <div class="form-check form-check-primary mb-3">
        <input class="form-check-input" name="cheque" type="checkbox" id="formCheckBox" {{ $history->cheque ? 'checked'
        : '' }}>
        <label class="form-check-label" for="formCheckcolor1">Cheque
            Pay</label>
    </div>
    <div class="row" id="formCheckBoxForm" >
        <div class="row">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <x-input-text name="cheque_amount" value="{{$history->cheque_amount}}"
                            placeholder="Enter Bank Name Here">
                        </x-input-text>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Cheque No</label>
                        <x-input-text name="cheque_no" value="{{$history->cheque_no}}" placeholder="Phone One Here ">
                        </x-input-text>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label"> Acc No</label>
                        <x-input-text name="cheque_account_no" value="{{$history->cheque_account_no}}"
                            placeholder="Enter Acc No">
                        </x-input-text>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Account Name</label>
                        <x-input-text name="cheque_account_name" value="{{$history->cheque_account_name}}"
                            placeholder="Enter Acc.Name Here ">
                        </x-input-text>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Bank Name</label>
                        <x-input-text name="cheque_bank_name" value="{{$history->cheque_bank_name}}"
                            placeholder="Enter Bank Name">
                        </x-input-text>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('bottomJsStack')
@if ($history->cheque)
<script>
    $(function() {
            $ ( "#formCheckBoxForm" ).show ();
            $ ( "#formCheckBox" ).click ( function () {
                $ ( "#formCheckBoxForm" ).toggle ();
            } );
        });
</script>
@else
<script>
    $(function() {
            $ ( "#formCheckBoxForm" ).hide ();
            $ ( "#formCheckBox" ).click ( function () {
                $ ( "#formCheckBoxForm" ).toggle ();
            } );
        });
</script>
@endif

@endpush