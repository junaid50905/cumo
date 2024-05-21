@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <!-- form start -->

                    <livewire:direct-payment-create />
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
{{-- <script>
    function paymentChange(payment){
        if(payment.value === 2)
        {
            document.getElementById("from_account").style.display = "block";
            document.getElementById("to_account").style.display = "block";
        }
        else{
            document.getElementById("from_account").style.display = "none";
            document.getElementById("to_account").style.display = "none";
        }
       }
</script> --}}
@section('script-bottom')
@endsection