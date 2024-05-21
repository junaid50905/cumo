@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') ASSIGN TUTORIAL FOR ONLINE TASKS @endslot
@endcomponent
{{-- code --}}



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">


                </p>
                <div class="d-flex justify-content-end pb-5">
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target=".bs-example-modal-xl">Add</button>

                    <!-- sample modal content -->
                    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Student Create</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">

                                    <div class="card p-0 m-0">
                                        <div class="card-body">
                                            <form>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputState" class="form-label">Domain
                                                                Name</label>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputState" class="form-label">Activity
                                                                Name</label>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputState" class="form-label"> Task
                                                                Name</label>
                                                            <select id="formrow-inputState" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputZip" class="form-label ">Tutorial
                                                                Name</label>
                                                            <input type="text" class="form-control"
                                                                id="formrow-inputZip"
                                                                placeholder="Enter tutorial name here">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputZip" class="form-label ">Tutorial
                                                                Link</label>
                                                            <input type="text" class="form-control"
                                                                id="formrow-inputZip"
                                                                placeholder="Enter tutorial link here">
                                                        </div>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                        changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Domain Name</th>
                            <th>Activity Name</th>
                            <th>Task Name</th>
                            <th>Tutorial Name</th>
                            <th>Tutorial Link</th>
                            <th>Log</th>
                            <th>Action</th>

                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td>ERP.com</td>
                            <td>Edinburgh</td>
                            <td>Home Work</td>
                            <td>2011</td>
                            <td>https://</td>
                            <td>$320,</td>
                            <td><i class="fas fa-pen pe-3"></i><i class="fas fa-trash-alt"></i></td>

                        </tr>
                        <tr>
                            <td>ERP.com</td>
                            <td>Edinburgh</td>
                            <td>Home Work</td>
                            <td>2011</td>
                            <td>https://</td>
                            <td>$320,</td>
                            <td><i class="fas fa-pen pe-3"></i><i class="fas fa-trash-alt"></i></td>

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
<script>
    $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
</script>
@endsection