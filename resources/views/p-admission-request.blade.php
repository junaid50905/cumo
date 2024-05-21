@extends('layouts.master')

@section('title') @lang('translation.Form_Editors') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1')  @endslot
        @slot('title')  @endslot
    @endcomponent                      
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Admission Request Setup</span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Admission Request List</span>    
                            </a>
                        </li> 
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <p class="mb-0">
                                <div Id="part1" class="border border-info border-4">
                                    <div class="row  container pt-3">
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-3 col-form-label">Student Id</label>
                                                <div class="col-9">
                                                    <select class="form-select">
                                                        <option selected></option>
                                                        <option>a</option>
                                                        <option>b</option>
                                                        <option>c</option>
                                                        <option>d</option>
                                                        <option>e</option>
                                                        <option>f</option>
                                                        <option>g</option>
                                                        <option>h</option>   
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-3 col-form-label">Project</label>
                                                <div class="col-9">
                                                    <select class="form-select">
                                                        <option selected>--Select--</option>
                                                        <option>a</option>
                                                        <option>b</option>
                                                        <option>c</option>
                                                        <option>d</option>
                                                        <option>e</option>
                                                        <option>f</option>
                                                        <option>g</option>
                                                        <option>h</option>   
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                            
                                      <div class="row">
                                              <div class="col-2">
                                                <div class="d-flex justify-content-end"><h5 class=" pt-3">Report</h5></div>
                                              </div>
                                            <div class="col-10">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form method="post">
                                                                    <textarea id="elm1" name="area"></textarea>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </div>                                          
                                      </div>
                                     <div class="row container"> 
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    {{-- from start --}}
                                                    <form class="repeater" enctype="multipart/form-data">
                                                        <div class="row">
                                                           <div class="col-6 p-0 pe-1">
                                                               <label class="pe-2 pb-1">SL</label>
                                                               <label for="name">Courses</label>
                                                            </div>
                                                           <div class="col-2  ps-4 pe-1">
                                                                <label for="text">Monthly Fee</label>
                                                           </div>
                                                           <div class="col-4 p-0 pe-1">
                                                            <label for="subject">Remark</label>
                                                           </div>
                                                        
                                                        </div>
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item="" class="row">
                                                                <div class=" col-6 d-flex p-0 p-0 pe-1 pb-1 align-items-center">
                                                                    <span class="pe-2 pb-1">01</span>
                                                                    <select class="form-select">
                                                                        <option>--Select--</option>
                                                                        <option>Admission for Assessment /Observation</option>
                                                                        <option>Pre-Vocational Course</option>
                                                                        <option>Vocational Course</option>
                                                                        <option>Karishma Cultural Group</option>
                                                                        <option>Cricket Course</option>
                                                                        <option>Therapy Course</option>     
                                                                  </select>
                                                                </div>
                                                                <div class=" col-2 p-2 ps-5 pb-1 ">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                        </label>
                                                                </div>
            
                                                               
            
                                                                <div class=" col-4 p-0 pe-1 pb-1  align-self-center d-flex">
                                                                    <input  type="text" id="subject" class="form-control" placeholder="">
                                                                    <input data-repeater-delete type="button" class="btn btn-primary ms-3" value="Delete" />
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input data-repeater-create="" type="button" class="btn btn-success  mt-3 px-4 " value="Add">
                                                    </form>
                                                    {{-- from end --}}

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                                                                             
                            
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-success w-25">Save </button>
                                        <button type="button" class="btn btn-danger w-25" data-bs-dismiss="modal">Reset</button>
                                    </div>
                                </div>
                            </p>
                        </div>
                       
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <p class="mb-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                           <div class="card-body">
                                            <table id="myTable" class="table table-striped sd-datatable dataTable no-footer border border-info border-1" role="grid" aria-describedby="myTable_info">
                                            <thead>
                                                    <tr role="row">
                                                        <th  rowspan="1" colspan="1"> </th>
                                                        <th  rowspan="1" colspan="1">
                                                        <div class="checkbox checkbox-danger">
                                                        <input type="checkbox" value="Y">   
                                                        </div>
                                                        </th>
                                                    <th  >StudentID</th>
                                                    <th  rowspan="1" colspan="1">Project</th>
                                                    <th  rowspan="1" colspan="1">Date</th>
                                                    <th  rowspan="1" colspan="1">Send For Approve</th>
                                                    <th  rowspan="1" colspan="1">Is Approved</th>
                                                    <th  rowspan="1" colspan="1">action</th>
                                                </tr>
                                            </thead>

                                                <tbody>
                                                    <tr class="odd " role="row">
                                                        <td class="hidden"> </td>
                                                        <td></td>
                                                        <td>Tausif Yameen</td>
                                                        <td>Angel Chef Bakery </td>
                                                        <td>2019-12-07 18:53:11</td>
                                                        <td>Y</td>
                                                        <td>N</td>

                                                        <!-- action menu -->
                                                            <td class="ds-actions-rows text-right hidden">
                                                                <!-- Edit -->
                                                                
                                                                    <i class="fas fa-pen fa-lg pe-3"></i>
                                                                
                                                            
                                                                
                                                                    <i class="fas fa-eye fa-lg "></i>
                                                               
                                                               
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                                        <div class="row">
                                                            <div class="col-8"><p>Showing 1 to 1 of 1 entries</p></div>
                                                            <div class="col-4">
                                                                <nav aria-label="Page navigation example">
                                                                <ul class="pagination justify-content-end">
                                                                  <li class="page-item"><a class="page-link" href="#">Previous</a>
                                                                 </li>
                                                                 <li class="page-item active" aria-current="page">
                                                                    <span class="page-link color-info">1</span>
                                                                  </li>
                                                                  <li class="page-item"><a class="page-link" href="#">Next</a>
                                                                </li>
                                                                </ul>
                                                              </nav></div>
                                                          </div>                
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div> <!-- container-fluid -->  
                                </div>   <!-- End Page-content -->
                            </p>
                        </div>    
                    </div>
                </div>
            </div>
        </div>      
 </div>
 
@endsection
@section('script')
    <!--tinymce js-->
    <script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>


    <!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection
