@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Student_Table @endslot
    @endcomponent
    {{-- code  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Add</button>
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Student Create</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="card p-0 m-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3 row">
                                                            <label class="col-md-4 col-form-label">Student:</label>
                                                            <div class="col-md-8">
                                                                <select class="form-select">
                                                                    <option>Select</option>
                                                                    <option>yousufe</option>
                                                                    <option>yamin</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3 row">
                                                            <label class="col-md-4 col-form-label">Main Teacher:</label>
                                                            <div class="col-md-8">
                                                                <select class="form-select">
                                                                    <option>Select</option>
                                                                    <option>Md Hanif</option>
                                                                    <option>Md Momin</option>
                                                                    <option>Md Rahamat</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 ">
                                                    <div class="col-2 d-flex align-items-center">
                                                        <div class=" row">
                                                            <label class=" col-form-label ">Teacher:</label>  
                                                        </div>
                                                    </div>
                                                    <div class="col-2 d-flex align-items-center">
                                                        <div class="form-check ">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Select All
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 d-flex align-items-center">
                                                        <div class="form-check ">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Deselect All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Abul hasnat
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Airin Shiddique
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Anas Bin Iqbal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Arup Mandal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Abul hasnat
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Airin Shiddique
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Anas Bin Iqbal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Arup Mandal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Abul hasnat
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Airin Shiddique
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Anas Bin Iqbal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Arup Mandal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="square-switch pt-3">
                                                    <input type="checkbox" id="square-switch1" switch="none" checked />
                                                    <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th class="">Student</th>
                                <th class="">Main Teacher</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>demo </td>
                                <td>demo</td>
                                <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td>demo</td>
                                <td>demo</td>
                                <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->




@endsection
@section('script')

<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
    <!-- fontawesome init -->
    <script src="{{ URL::asset('/assets/js/pages/fontawesome.init.js') }}"></script>

@endsection

