@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

<link href="{{ asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Student_Table @endslot
@endcomponent
{{-- code --}}



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light mb-5"
                            data-bs-toggle="modal" data-bs-target=".journal-modal-xl-add"> <i
                                class="fas fa-plus-circle"></i> Add</button>
                    </div>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>Voucher Date</th>
                            <th>Particulars</th>
                            <th>Trans. Amount</th>
                            <th>Log</th>
                            <th>Action</th>

                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td>Core Programme</td>
                            <td>$30-09-2021</td>
                            <td>Payment for Student. Student ID: 220, Name: Ishmam Reza</td>
                            <td>700</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 14:15:54</td>
                            <td>
                                <button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                    data-bs-toggle="modal" data-bs-target=".journal-view"><i
                                        class="fas fa-eye"></i></button>
                            </td>

                        </tr>
                        <tr>
                            <td>Pre-Vocational</td>
                            <td>30-09-2021</td>
                            <td>Payment for Student. Student ID: 113, Name: Arjun Aldrin Rozario</td>
                            <td>24300</td>
                            <td>Create: A.K.M Shahidullah @ 2021-09-30 13:54:46</td>
                            <td><button type="button"
                                    class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                    data-bs-toggle="modal" data-bs-target=".journal-view"><i
                                        class="fas fa-eye"></i></button></td>

                        </tr>
                    </tbody>
                </table>
                <!-- sample modal content -->
                <div class="modal fade journal-view" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title text-primary">Journal Voucher Approve Details
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- journal form start -->
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Project</label>
                                                <p class="form-control">Core Programme</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Voucher Date</label>
                                                <p class="form-control">2021-09-30 00:00:00</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Trans. Amount </label>
                                                <div class="input-group" id="datepicker1">
                                                    <p class="form-control">700</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Particulars</label>
                                                <p class="form-control">Payment for Student. Student ID: 220, Name:
                                                    Ishmam Reza</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Reference</label>
                                                <p class="form-control">6</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5>Posting Transaction Details</h5>
                                                    <div class="table-responsive">
                                                        <table class="table nowrap mb-0">

                                                            <thead>
                                                                <tr class="table-primary text-center">
                                                                    <th>Acc. Number</th>
                                                                    <th>Acc. Particular</th>
                                                                    <th>Credit</th>
                                                                    <th>Debit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="text-center">
                                                                    <td>Parents Consultancy Fees::4225</td>
                                                                    <td>Payment for Student. Student ID: 220, Name:
                                                                        Ishmam Reza</td>
                                                                    <td>700 </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr class="text-center">
                                                                    <td>Cash Operating Account::1010</td>
                                                                    <td>Payment for Student. Student ID: 220, Name:
                                                                        Ishmam Reza</td>
                                                                    <td></td>
                                                                    <td>700</td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr class=" text-center">
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr class="text-center">
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th>700</th>
                                                                    <th>700</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!-- journal form end -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success waves-effect waves-light">Save
                                    changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="modal fade journal-modal-xl-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">............
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-danger" data-bs-dismiss="modal"> Close</button>
                <button type="button" class="btn  btn-success" id="sa-position"> Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


@endsection
@section('script')
<script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

<!-- form repeater js -->
<script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
</script>
<script src="{{ asset('assets/js/pages/fontawesome.init.js') }}"></script>
@endsection