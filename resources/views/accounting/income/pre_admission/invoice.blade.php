@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="container mb-5 mt-3">
                    <div class="row d-flex align-items-center header__part">
                        <div class="col-xl-9">
                            <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #123-123</strong></p>
                        </div>
                        <div class="col-xl-3 d-flex align-items-center justify-content-end gap-2">
                            <a id="printButton" class="btn btn-light text-capitalize border-0"
                                data-mdb-ripple-color="dark"><i class="fas fa-print text-primary"></i> Print</a>
                        </div>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h3>CUMO</h3>
                                <p class="pt-0">cumo.com</p>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-xl-8">
                                <ul class="list-unstyled">
                                    <li class="text-muted">To: <span style="color:#5d9fc5 ;">John Lorem</span></li>
                                    <li class="text-muted">Street, City</li>
                                    <li class="text-muted">State, Country</li>
                                    <li class="text-muted"><i class="fas fa-phone"></i> 123-456-789</li>
                                </ul>
                            </div>
                            <div class="col-xl-4">
                                <p class="text-muted">Invoice</p>
                                <ul class="list-unstyled">
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="fw-bold">ID:</span>#123-456</li>
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="fw-bold">Creation Date: </span>Jun 23,2021</li>
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="me-1 fw-bold">Status:</span><span
                                            class="badge bg-warning text-black fw-bold">
                                            Unpaid</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row my-2 mx-1 justify-content-center">
                            <table class="table table-striped table-borderless">
                                <thead style="background-color:#84B0CA ;" class="text-white">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Pro Package</td>
                                        <td>4</td>
                                        <td>$200</td>
                                        <td>$800</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Web hosting</td>
                                        <td>1</td>
                                        <td>$10</td>
                                        <td>$10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Consulting</td>
                                        <td>1 year</td>
                                        <td>$300</td>
                                        <td>$300</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <p class="ms-3">Add additional notes and payment information</p>

                            </div>
                            <div class="col-xl-3">
                                <ul class="list-unstyled">
                                    <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>$1110</li>
                                    <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>$111
                                    </li>
                                </ul>
                                <p class="text-black float-start"><span class="text-black me-3"> Total
                                        Amount</span><span style="font-size: 25px;">$1221</span></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row footer__part">
                        <div class="col-xl-10">
                            <p>Thank you for your purchase</p>
                        </div>
                        <div class="col-xl-2 d-flex align-items-center justify-content-end gap-2">
                            <button type="button" class="btn btn-primary text-capitalize"
                            style="background-color:#60bdf3;" onclick="window.location.href = '{{ url()->previous() }}';">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Function to handle printing
document.getElementById('printButton').addEventListener('click', function() {
    window.print();
});
</script>
@endsection