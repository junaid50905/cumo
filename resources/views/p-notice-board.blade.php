@extends('layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashbord @endslot
        @slot('title')  Notices @endslot
    @endcomponent

    <div class="col-xl-12 col-lg-12 col-sm-6 d-flex justify-content-end mb-3">
        <!-- Extra Large modal button -->
        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Add</button>
{{-- Add Content Modul --}}
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              {{--  --}}
  
            <div class="mb-3 row">
                <label for="example-email-input" class="col-md-4 col-form-label text-center">Send To:</label>
                <div class="col-md-8 pe-5">
                    <select class="form-control select2-templating">
                        
                        <optgroup label="Select">
                            <option value="CA">Accouting</option>
                            <option value="NV">Accouting Full</option>
                            <option value="OR">Admin</option>
                            <option value="WA">Angle Chet</option>
                            <option value="CA">Bakery</option>
                            <option value="NV">Doctor</option>
                            <option value="OR">Full Admin</option>
                            <option value="WA">HR And Adimin</option>
                            <option value="CA">Parent</option>
                            <option value="NV">Principal</option>
                            <option value="OR">Program Menager</option>
                            <option value="WA">Read Only User</option>
                            <option value="WA">Role For IT</option>
                            <option value="WA">Settings</option>
                            <option value="WA">Sarah</option>
                            <option value="WA">Senior Teacher</option>
                            <option value="WA">Support Staff</option>
                            <option value="WA">Teacher</option>
                            <option value="WA">Teacher With DataEntry</option>
                            <option value="WA">Therapy</option>
                            <option value="WA">Specific User</option>
                          
                            
                        </optgroup>
                    </select>
                </div>
            </div>

            {{--  --}}
            <div class="mb-3 row">
                <label for="example-search-input" class="col-md-4 col-form-label text-center">Subject:</label>
                <div class="col-md-8 pe-5">
                    <input class="form-control" type="search" placeholder="Notice Subject Here"
                        id="example-search-input">
                </div>
            </div>
            {{--  --}}

            <div class="mb-3 row">
                <label for="example-search-input" class="col-md-4 col-form-label text-center">Message:</label>
                <div class="col-md-8 pe-5">
                    <form method="post">
                        <textarea id="elm1" name="area"></textarea>
                    </form>
                </div>
            </div>


{{--  --}}

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-end">   
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary w-md">Save Changes</button></div>
        <div class="col-lg-3">  </div>
    </div>
</div>
       
                
            </div>
        </div>
    </div>
</div>

 

{{-- Add Content Modul Closd --}}
    </div>
{{-- Data Table Start --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title"></h4>
                  

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Send to Type</th>
                                <th>send By</th>
                                <th>Subject</th>
                                <th>Log</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>HR</td>
                                <td>A.K.M Shahidullah</td>
                                <td>Holiday Notice</td>
                                <td>Create: A.K.M Shahidullah @ <br>2021-08-29 12:29:20
                                    There is no update record.</td>
                                    <td><i class="fas fa-eye pe-3"></i></td>
                               
                            </tr>
                           
 
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
{{-- Data Table Closed --}}


@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
       <!--tinymce js-->
       <script src="assets/libs/tinymce/tinymce.min.js"></script>

       <!-- init js -->
       <script src="assets/js/pages/form-editor.init.js"></script>
   @endsection

