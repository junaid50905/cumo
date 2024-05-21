@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')TASK ACTIVITIES @endslot
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
                                                <div class="row pb-3">
                                                    <div class="col-6 row">
                        
                                                        <label class="col-4 col-form-label">Activity</label>
                                                        <div class="col-8">
                                                            <select class="form-select">
                                                                <option>Select</option>
                                                                <option>2222</option>
                                                                <option>55555</option>
                                                            </select>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-6 row">
                        
                                                        <label class="col-4 col-form-label">Domain Weight</label>
                                                        <div class="col-8">
                                                            <select class="form-select">
                                                                <option>Select</option>
                                                                <option>2222</option>
                                                                <option>55555</option>
                                                            </select>
                                                        </div>
                                                    
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                
                                                                <form class="repeater" enctype="multipart/form-data">
                                                                    <div data-repeater-list="group-a">
                                                                        <div data-repeater-item class="row mt-3">

                                                                            <div class=" col-lg-6 d-flex row">
                                                                                <div class="col-4">
                                                                                    <label for="name" class="">Task Name</label>
                                                                                </div>
                                                                                <div class="col-7">
                                                                                    <input type="text" id="name" name="untyped-input" class="form-control " placeholder="Enter Your Name" />
                                                                                </div>
                                                                            </div>
                                                                            <div class=" col-lg-4 d-flex row">
                                                                                <div class="col-4">
                                                                                    <label for="name" class="">Type</label>
                                                                                </div>
                                                                                <div class="col-7">
                                                                                    <select class="form-select">
                                                                                        <option>Select</option>
                                                                                        <option>2222</option>
                                                                                        <option>55555</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>                                                                  
                                                                        </div>
                                                                    </div>
                                                                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                <th class="col-3 bold"> Activity</th>
                                <th class="col-5 bold"> task</th>
                                <th class="col-2 text-center">Log</th>
                                <th class="col-2 text-center">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>General Play</td>
                                <td>Push and Pull Doors open and closed</td>
                                <td>Create: Nusrat Jahan @ <br> 2019-06-09 22:22:54 <br>
                                    There is no update record.</td>
                                    <td><i class="fas fa-eye pe-3"></i> <i class="fas fa-check pe-3"></i> <i class="fas fa-pen pe-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td>Organized Play	</td>
                                <td>Riding a tricycle</td>
                                <td>Create: Shonod Digital @ <br> 2018-08-30 22:46:52 <br>
                                    Update: Shonod Digital @ <br> 2018-09-06 17:06:46</td>
                                    <td><i class="fas fa-eye pe-3"></i> <i class="fas fa-check pe-3"></i> <i class="fas fa-pen pe-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('script')
<!-- Required datatable js -->
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

<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
