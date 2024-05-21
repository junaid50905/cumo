@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Student_attendance_card_setup @endslot
    @endcomponent
    {{-- code  --}}

 
        <div class="card">
            <div class="card-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Student Card Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Student Card List</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Student</label>
                            <div class="col-md-10">
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>
                                    <option>Alamin Islam</option>

                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label"> Card Number</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number"  placeholder="Enter Number" id="example-number-input">
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">Reset</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Card Number</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>System </td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i class="fas fa-trash-alt"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection