@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Online_Class_Report @endslot
    @endcomponent
    {{-- code  --}}

 

    <div class="row">
        <div class="col-12  text-center">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Student Name</label>
                        <div class="col-md-8">
                            <select class="form-select">
                                <option>Select</option>
                                <option>Hiya</option>
                                <option>Riya</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-4 col-form-label">Date</label>
                        <div class="col-md-8">
                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                        </div>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <tr>
                                <th>Assign Teacher</th>
                                <th>Given Attendance</th>
                                <th>Complete Scoring</th>
                            </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('script')
<!-- data table js -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>


@endsection