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
                            <span class="d-none d-sm-block">Income Expense View</span>
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
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                            </div>
                                            <div class="col-sm-12 col-md-6 text-end">
                                            <label style="display: inline-flex;align-items: center;">Search:
                                                <x-input-text type="search" name="search" />
                                            </label>
                                            </div>
                                         </div>
                                        <div class="table-responsive">
                                            <table class="table  w-100">
                                            <thead>
                                                <tr class="">
                                                    <th>Revenues:</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Assessment fees</td>
                                                    <td>5000.00	</td>
                                                </tr>
                                                <tr>
                                                    <td>Block Salwar, Kamiz, Dipattta</td>
                                                    <td>75200.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Donations - Mutual Trust bank</td>
                                                    <td>125000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Donations - Shahjalal Islami Bank</td>
                                                    <td>100000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Gift and Presents</td>
                                                    <td>13490.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Parents Consultancy Fees</td>
                                                    <td>700.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Revenue from Carpet Slipper</td>
                                                    <td>203065.57</td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr class="">
                                                    <th>Total Revenues:</th>
                                                    <th>3375581.57</th>
                                                </tr>
                                            </thead>
                                            </table>
                                            <table class="table  w-100">
                                            <thead>
                                                <tr class="">
                                                    <th>Expenses:</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Accounting /Tally/ Audit/Legal expenses</td>
                                                    <td>135000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Accounts Staff Salary</td>
                                                    <td>137667.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Administration Staff Salary</td>
                                                    <td>224890.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Art and Craft Teachers Salary</td>
                                                    <td>24000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Charges</td>
                                                    <td>630.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Block and tie-dye Section staff Salary</td>
                                                    <td>38700.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Bonus to Operations Staff</td>
                                                    <td>84572.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Carpet slipper raw materials</td>
                                                    <td>462780.00</td>
                                                </tr>
                                            </tbody>
                                            <thead>
                                                <tr class="">
                                                    <th>Total Expenses:</th>
                                                    <th>14350490.00</th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr class="">
                                                    <th>Net Loss:</th>
                                                    <th>-10974908.43</th>
                                                </tr>
                                            </thead>
                                            </table>
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