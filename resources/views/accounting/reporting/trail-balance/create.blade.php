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
                            <span class="d-none d-sm-block">Transaction Analysis View</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->

                <img id="head" src="{{ asset('assets/images/header.png') }}" style="width: 100%; display: none;" alt="">

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
                                                    <x-input-text type="date" name="to" placeholder="dd/mm/yyyy"/>
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
                                      <table class="table w-100 table-bordered">
                                        <thead>
                                          <tr>
                                        <th>Label</th>
                                        <th>Debit</th>
                                        <th>Credit</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                          <td>Accounting /Tally/ Audit/Legal expenses</td>
                                          <td>135000.00</td>
                                          <td></td>
                                          </tr>
                                          <tr>
                                          <td>Accounts Staff Salary</td>
                                          <td>67667.00</td>
                                          <td></td>
                                          </tr>
                                          <tr>
                                          <td>Administration Staff Salary</td>
                                          <td>192090.00</td>
                                          <td></td>
                                          </tr>
                                          <tr>
                                          <td>Art and Craft Teachers Salary</td>
                                          <td>16000.00</td>
                                          <td></td>
                                          </tr>
                                          <tr>
                                          <td>Art, Crafts and Painting class related expenses</td>
                                          <td>56000.00</td>
                                          <td></td>
                                          </tr>
                                          <tr>
                                          <td>Assessment fees</td>
                                          <td></td>
                                          <td>(5000)</td>
                                          </tr>
                                          <tr>
                                          <td>Bank - Brac Bank (A/c # 1555204025093001)</td>
                                          <td>743889.00</td>
                                          <td></td>
                                          </tr>
                                          <tr>
                                          <td>Bank - FSIB Ltd. (010311100012296)</td>
                                          <td></td>
                                          <td>(310000)</td>
                                          </tr>
                                          <tr>
                                          <td>Bank - SCB (01-1308636-01)</td>
                                          <td></td>
                                          <td>(700000)</td>
                                          </tr>
                                          <tr>
                                          <td>Bank-The City Bank Ltd (3101829023001)</td>
                                          <td></td>
                                          <td>(16567073.43)</td>
                                          </tr>
                                          <tr>
                                          <td>Block and tie-dye Section staff Salary</td>
                                          <td>25800.00</td>
                                          <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12 col-md-6">
                                        Showing 1 to 2 of 2 entries
                                      </div>
                                      <div class="col-sm-12 col-md-6 text-end">
                                        <nav>
                                          <ul class="pagination" style="justify-content: end;">
                                            <li class="page-item disabled">
                                              <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active">
                                              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                              <a class="page-link" href="#">Next</a>
                                            </li>
                                          </ul>
                                        </nav>
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