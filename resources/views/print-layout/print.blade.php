@extends('layouts.master')
@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/print_layout_custom.css') }}">  
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body pt-5">
                <div class="page" >
                    <div class="full_section" size="A4">
                        {{-- header_section start --}}
                        <div class="header_section">
                            <div class="row">
                                <div class="col-8">
                                    <div class="logo">
                                         <img src="http://127.0.0.1:8000/assets/images/logo-light.png" alt="" height="19">
                                    </div>
                                    <div class="invoice_to">
                                        <h4><b>Invoice To:</b></h4>
                                        <h5><b>Mr.John Doe</b></h5>
                                        <p>Akshya Nagar 1st Block 1st Cross, Rammurthy nagar,<br> Bangalore-560016</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text">
                                        <h1>Invoice</h1>
                                        <div class="date d-flex justify-content-between">
                                           <span>Invoice No:</span><span>INV323546456233</span>
                                        </div>
                                        <div class="date d-flex justify-content-between">
                                            <span>Date:</span><span>02/02/2022</span>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- header_section end --}}
                        {{-- footer_section start --}}
                        <div class="footer_section">
                            <div class="bottom_text">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class=" d-flex justify-content-between">
                                            <div class="left_text">
                                                <div class="one">
                                                    <h1>Thank You for your business</h1>
                                                    <p><span><b>Terms & conditions</b></span> <br> Payment is due within 15 days <br> Please make checks payable to: Company Name</p>
                                                </div>
                                                <div class="two">
                                                    <p><span><b>Terms & conditions</b></span> <br> Payment is due within 15 days <br> Please make checks payable to: Company Name</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="signature">
                                            <h5>Signature</h5>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="footer_text text-center">
                                <p>Powered by <span>Billto</span> </p>
                            </div> 
                        </div>
                        {{-- footer_section end --}}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection