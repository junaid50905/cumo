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
                        <button type="button" class="btn btn-outline-info waves-effect waves-light " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"><i class="fas fa-plus-circle"></i>Add</button>
                
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
                                                                <option value="">Select</option>
                                                                <option value="41">General Play</option>
                                                                <option value="1">Organized Play</option>
                                                                <option value="2">Balance Beam</option>
                                                                <option value="3">Ball Play</option>
                                                                <option value="4">Skipping</option>
                                                                <option value="5">Jumping</option>
                                                                <option value="6">Jump Rope</option>
                                                                <option value="7">Jumping Jacks</option>
                                                                <option value="8">Other Walks</option>
                                                                <option value="9">Rolling</option>
                                                                <option value="10">Bouncing</option>
                                                                <option value="11">Rhythms</option>
                                                                <option value="12">Fitness &amp; Physical Activity</option>
                                                                <option value="13">Movement</option>
                                                            </select>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-6 row">
                        
                                                        <label class="col-4 col-form-label">Domain Weight</label>
                                                        <div class="col-8">
                                                            <select class="form-select">
                                                                
                                                                    <option value="">Select</option>
                                                                                                    <option value="1">Domain - Distribution structure</option>
                                                                                                    <option value="3">Section B : Preparatory framework</option>
                                                                                                    <option value="4">Section C: Steps of the work process</option>
                                                                                                    <option value="5">Section D : Assessment package</option>
                                                                                                    <option value="6">Section E:  Domain 01 - Physical development</option>
                                                                                                    <option value="7">Section F:  Domain 02 : Intellectual / cognitive d</option>
                                                                                                    <option value="8">Section G : Domain 03 - Emotional development</option>
                                                                                                    <option value="9">Section H : Domain 04 - Social and ethical develop</option>
                                                                                                    <option value="10">Section I: Independent skills</option>
                                                                                                    <option value="11">Section J : Adulthood,partner selection and family</option>
                                                                                                    <option value="12">Section K : Evaluation forms</option>
                                                                                                    <option value="13">Section  L: Employment</option>
                                                                                                   
                                                                                          
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
                                                                                      
                                                                                        <option value="">Select</option>
                                                                                        <option value="P">Pre-Vocational</option>
                                                                                        <option value="V">Vocational</option>
                                                                                        <option value="I">Independent</option>
                                                                                        <option value="K">Karishma</option>
                                                                                     
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
                                    <div class="row modal-footer">
  
                                        <div class="col-md-1">
                                            <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-success w-100">Save</button>
                                        </div>
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
                                    <td> <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                            class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            <tr>
                                <td>Organized Play	</td>
                                <td>Riding a tricycle</td>
                                <td>Create: Shonod Digital @ <br> 2018-08-30 22:46:52 <br>
                                    Update: Shonod Digital @ <br> 2018-09-06 17:06:46</td>
                                    <td> <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-view">
                                        <i class=" fas fa-eye"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".student-income-modal-xl-add">
                                        <i class="fas fa-pen"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                            class="fas fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



     <!--  Extra Large modal example -->
     <div class="modal fade student-income-modal-xl-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">View Details 
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- journal form start -->
                    <div class="modal-body p-0">
                                        
                        <div class="card p-0 m-0">
                            <div class="card-body">
                                <div class="row pb-3">
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label">Activity</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="Balance Beam" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ">Domain Weight</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="Section E: Domain 01 - Physical" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row pb-3 pt-5">
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label">Task Name</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="Large steps" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ms-5">Type</label>
                                        <div class="col-6">
                                            <input class="form-control" type="text" value="Pre-Vocational" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row pb-3">
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ">Task Name</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="small steps" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ms-5">Type</label>
                                        <div class="col-6">
                                            <input class="form-control" type="text" value="Pre-Vocational" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row pb-3">
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label">Task Name</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="tiptoes" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ms-5">Type</label>
                                        <div class="col-6">
                                            <input class="form-control" type="text" value="Pre-Vocational" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row pb-3">
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label">Task Name</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="forword" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ms-5">Type</label>
                                        <div class="col-6">
                                            <input class="form-control" type="text" value="Pre-Vocational" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row pb-3">
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label">Task Name</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="backward" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ms-5">Type</label>
                                        <div class="col-6">
                                            <input class="form-control" type="text" value="Pre-Vocational" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                <div class="row pb-3">
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label">Task Name</label>
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="sideways" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    <div class="col-6 row">
        
                                        <label class="col-4 col-form-label ms-5">Type</label>
                                        <div class="col-6">
                                            <input class="form-control" type="text" value="Pre-Vocational" id="example-text-input">
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                                
                       

                            </div>
                        </div>
                    </div>

                    <!-- journal form end -->
                    <div class="row modal-footer">
  
                        <div class="col-md-1">
                            <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                        </div>
                  
                        
                    </div>
                </div>
             
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




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
