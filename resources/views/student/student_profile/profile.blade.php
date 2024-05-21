@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')
<link href="{{ asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/libs/datepicker/datepicker.min.css') }}">

<!-- DataTables -->
<link href="{{ asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Student Profile @endslot
@endcomponent


@include('layouts.student_profile.header')


<div class="row">
    <div class="col-12">

        @include('layouts.student_profile.left_sidebar')

        <!-- Right Sidebar -->
        <div class="email-rightbar mb-3">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Personal Information</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Status: </th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Student ID:</th>
                                            <td>T-0003</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Name:</th>
                                            <td>SAFWAT NASIF</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">DoB:</th>
                                            <td>1998-12-27</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Gender:</th>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Blood Group:</th>
                                            <td>B+</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Date Of Assessment:</th>
                                            <td>2018-09-18</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td>477/1 Malibag, DIT Road, Dhaka 1219</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Diagonosis:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Approved in P.A:</th>
                                            <td>N</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Created By:</th>
                                            <td>PFDA C COMMON at 2018-09-19 01:28:37</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Updated By:</th>
                                            <td>Nusrat Jahan at 2021-12-26 14:57:12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Father's Information</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Father's Name:</th>
                                            <td>MD.ABUL KASHEM</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Father's Profession:</th>
                                            <td>01721680501</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Father's NID #:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Father's Mobile </th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Mother's Information</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Mother's Name:</th>
                                            <td>BEGUM NURJAHAN DIPA</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mother's Profession</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mother's Mobile #</th>
                                            <td>01731258647</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mother's NID #: </th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end Col-9 -->
    </div>

</div>

@endsection
@section('script')
<!-- form advanced init -->
<script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
<script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('assets/libs/datepicker/datepicker.min.js') }}"></script>

<!-- form repeater js -->
<script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>


<!-- Required datatable js -->
<script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

<!-- Init js -->
<script src="{{ asset('assets/js/pages/table-responsive.init.js') }}"></script>

<!-- Table Editable plugin -->
<script src="{{ asset('assets/libs/table-edits/table-edits.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/table-editable.int.js') }}"></script>
<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>


@endsection