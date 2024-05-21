@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') Create ITP @endslot
    @endcomponent
    {{-- code  --}}


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    
                    </p>
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
                                                <form>
                                
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="formrow-inputState" class="form-label">Student Name</label>
                                                                <select id="formrow-inputState" class="form-select">
                                                                    <option selected>Choose...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="formrow-inputZip" class="form-label ">ITP Name</label>
                                                                <input type="text" class="form-control" id="formrow-inputZip" placeholder="Enter Your Zip Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="example-date-input" class="col-md-4 col-form-label p-0 pb-2">Start Date</label>
                                                                
                                                                <input class="form-control" type="date" value="2022-04-24" id="example-date-input">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="example-date-input" class="col-md-4 col-form-label p-0 pb-2">End Date</label>
                                                                
                                                                <input class="form-control" type="date" value="2022-04-24" id="example-date-input">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="formrow-inputZip" class="form-label ">Instruction</label>
                                                                <input type="text" class="form-control" id="formrow-inputZip" placeholder="Enter Instruction here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>Selected Task </th>
                                                                    <th>Comment </th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </form>
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
                                <th class="">ITP Name</th>
                                <th>Type</th>
                                <th>Is Closed</th>
                                <th>Instruction</th>
                                <th>Log</th>
                                <th>Action</th>


                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>demo </td>
                                <td>Edinburgh</td>
                                <td>Number</td>
                                <td>No </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i class="fas fa-trash-alt"></i></td>

                            </tr>
                            <tr>
                                <td>demo </td>
                                <td>Edinburgh</td>
                                <td>Number</td>
                                <td>No </td>
                                <td>Edinburgh</td>
                                <td>61</td>
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

@endsection




