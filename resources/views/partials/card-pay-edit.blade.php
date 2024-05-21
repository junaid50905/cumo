<div class="row">
    <div class="form-check form-check-primary mb-3">
        <input class="form-check-input" name="card" type="checkbox"
               id="formCheckBox2" value="{{$history->card ?? ''}}">
        <label class="form-check-label" for="formCheckcolor1"> Credit
            Card
            Pay</label>
    </div>
    <div class="row" id="formCheckBoxForm2">
        <div class="row">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <x-input-text name="card_amount"
                                      value="{{$history->card_amount ?? ''}}"
                                      placeholder="Enter  Amount">
                        </x-input-text>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label"> Card No</label>
                        <x-input-text name="card_no"
                                      value="{{$history->card_no ?? ''}}"
                                      placeholder="Enter  Credit Card Number">
                        </x-input-text>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Card Name</label>
                        <x-input-text name="card_name"
                                      value="{{$history->card_name ?? ''}}"
                                      placeholder="Enter  Card Name">
                        </x-input-text>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Card Type</label>
                        <x-input-text name="card_type"
                                      value="{{$history->card_type ?? ''}}"
                                      placeholder="Enter  Card Type here">
                        </x-input-text>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('bottomJsStack')
    <script>
        $(function () {
            $ ( "#formCheckBoxForm2" ).hide ();
            $ ( "#formCheckBox2" ).click ( function () {
                $ ( "#formCheckBoxForm2" ).toggle ();
            } );
        });
    </script>
@endpush
