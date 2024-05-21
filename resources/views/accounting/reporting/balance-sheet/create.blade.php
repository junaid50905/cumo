@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Balance Sheet View</span>
                        </a>
                    </li>
                </ul>

                <img id="head" src="{{ asset('assets/images/header.png') }}" style="width: 100%; display: none;" alt="">


                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="modal-body p-0">
                            <div class="card p-0 m-0">
                                <div class="card-body">
                                    <div class="row d-flex">
                                        <div class="col-5 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">From:</label>
                                            <div class="col-md-8">
                                                <div class="w-100">
                                                    <x-input-text type="date" name="form" placeholder="dd/mm/yyyy"/>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex mb-3">
                                            <label for="example-text-input" class="col-md-4 col-form-label  pe-2">To:</label>
                                            <div class="col-md-8">
                                                <div class="w-100">
                                                    <x-input-text type="date" name="form" placeholder="dd/mm/yyyy"/>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary" type="button" id="expend">Show</button>
                                        </div>
                                        <div class="col-2">
                                            <button onClick="printdiv('div_print');"  class="btn btn-danger" id="print_button">Print</button>
                                        </div>

                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-6">
                                            <div class="table-responsive">
                                                <table class="table  w-100">
                                                <thead>
                                                    <tr class="">
                                                        <th> Assets:</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Bank - Brac Bank (A/c # 1555204025093001)</td>
                                                            <td>743889.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bank - FSIB Ltd. (010311100012296)</td>
                                                            <td>310000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bank - SCB (01-1308636-01)</td>
                                                            <td>700000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bank-The City Bank Ltd (3101829023001)</td>
                                                            <td>16932953.43</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cash Operating Account</td>
                                                            <td>495575.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Celling Fan</td>
                                                            <td>20500.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Deposits</td>
                                                            <td>200000.00</td>
                                                        </tr>
                                                    </tbody>
                                                    <thead>
                                                        <tr style="border-bottom: 1px solid black; border-top: none; border-left: none; border-right: none;">
                                                            <th>Total Assets:</th>
                                                            <th>3375581.57</th>
                                                        </tr>
                                                        <tr class="">
                                                            <th>Total</th>
                                                            <th>24523684.43</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="table-responsive">
                                                <table class="table  w-100">
                                                    <thead>
                                                        <tr class="">
                                                            <th>Liabilities:</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Loan Payable</td>
                                                            <td>400000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loan payable</td>
                                                            <td>500000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payable - Staff Salary</td>
                                                            <td>24650.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payables</td>
                                                            <td>764055.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telephone & communications - Provisions</td>
                                                            <td>49339.00</td>
                                                        </tr>
                                                    </tbody>
                                                    <thead>
                                                        <tr class="">
                                                            <th>Total Liabilities:</th>
                                                            <th>1738044.00</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <table class="table  w-100 mt-5">
                                                    <thead>
                                                        <th>Profit / Loss:</th>
                                                        <th></th>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="border-bottom: 1px solid black; border-top: none; border-left: none; border-right: none;">
                                                            <th>Total Loss</th>
                                                            <th>11152288.43</th>
                                                        </tr>
                                                        <tr class="">
                                                            <th>Total</th>
                                                            <th>12890332.43</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <img id="footer" src="{{ asset('assets/images/footer.png') }}" style="width: 100%; display: none;" alt="">

            </div>
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
            // goback_button.style.display = 'none'
            window.print();
            print_button.style.display = 'inline'
            // goback_button.style.display = 'inline'
            header_image.style.display = 'none'
            footer_image.style.display = 'none'
        }
</script>
@endsection
