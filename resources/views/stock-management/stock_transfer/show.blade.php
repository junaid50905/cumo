@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">

            <img id="head" src="{{ asset('assets/images/header.png') }}" style="width: 100%; display: none;" alt="">


            <div class="card-body p-5 apply-view-only">
                <livewire:stock-transfer-create :stockTransfer="$records" mode="show" />
            </div>

            <img id="footer" src="{{ asset('assets/images/footer.png') }}" style="width: 100%; display: none;" alt="">


        </div>
    </div>
</div>
@endsection
@section('script')
<script language="javascript">

    function printdiv(printpage) {


            let header_image = document.getElementById('head')
            let footer_image = document.getElementById('footer')
            header_image.style.display = 'block';
            footer_image.style.display = 'block';
            
            let print_button = document.getElementById('print_button')
            print_button.style.display = 'none'
            goback_button.style.display = 'none'
            window.print();
            print_button.style.display = 'inline'
            goback_button.style.display = 'inline'
            header_image.style.display = 'none'
            footer_image.style.display = 'none'
        }
</script>
@endsection
