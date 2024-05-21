@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
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
            <div class="card">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <button type="button" class="btn btn-danger btn-block waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                            <i class="mdi mdi-plus me-2"></i> Vocational Trade Score
                        </button>
                    </div>
                </div>
            </div><!-- card -->
        </div> <!-- end Col-9 -->
    </div>
</div>
<!--  Extra Large modal example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myExtraLargeModalLabel">ITP Scoring</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="basicpill-phoneno-input">Student</label>
                      <select class="form-control select2 form-select">
                        <option value="0">Select</option>
                      </select>
                    </div>
                  </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="basicpill-phoneno-input">Teacher</label>
                      <select class="form-control select2 form-select">
                        <option value="0">Select</option>
                      </select>
                    </div>
                  </div>

                {{-- <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="teacher_id" :records="$teachers"></x-input-select>
                  </div>
                </div> --}}
              </div>
              <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label for="basicpill-phoneno-input">Vocational Trade Task</label>
                  <select class="form-control select2 form-select">
                    <option value="0">Select</option>
                  </select>
                </div>
              </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="basicpill-firstname-input">Collection Date:</label>
                <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy"></x-input-text>
              </div>
            </div>
        </div>
        <p>(1) Full physical prompt (2) Partial Support (3) Pectoral guidance / follow others (4) Verbal Instruction (5) Independent</p>
        <div class="row">
            <div class="col-sm-12 col-md-6">
              <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                  class="form-control form-control-sm form-select form-select-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> entries
              </label>
            </div>
            <div class="col-sm-12 col-md-6 text-end">
              <label style="display: inline-flex;align-items: center;">Search:
                <input type="search" class="form-control form-control-sm" placeholder="">
              </label>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table w-100 table-bordered">
              <thead>
                <tr class="table-primary">
                  <th>SL</th>
                  <th>Product</th>
                  <th>Target</th>
                  <th>No. of Production</th>
                  <th>Target Achieved</th>
                  <th>Wastage</th>
                  <th>Time Taken</th>
                  <th>Quality of Work</th>
                  <th>Completeness of Delivery</th>
                  <th>Follow Instruction</th>
                  <th>Generalization</th>
                  <th>Adaption</th>
                  <th>Remarks</th>
                  <th>Source Store</th>
                  <th>Destination Store</th>
                </tr>
              </thead>
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

@endsection
@section('script')
<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>


<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

<!-- Init js -->
<script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

<!-- Table Editable plugin -->
<script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/table-editable.int.js') }}"></script>
<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>


@endsection
