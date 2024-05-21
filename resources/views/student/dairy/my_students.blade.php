@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />   
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard  @endslot
        @slot('title') STUDENT @endslot
    @endcomponent
    {{-- code  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">STUDENTS</h4>
                    <div class="d-flex justify-content-end pb-3">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target=".bs-example-modal-xl"><i class="fa fa-plus"></i> ADD</button>
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
                                                            <label for="example-text-input" class="col-md-4 col-form-label">Student ID:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="number" placeholder="Input your ID" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Name:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your Name" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="" class="col-md-4 col-form-label">Date of Birth:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="" class="col-md-4 col-form-label">Date of Assesment:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-tel-input" class="col-md-4 col-form-label">NID:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="number" placeholder="Enter National ID" id="example-tel-input">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-3 row">
                                                            <label for="example-password-input" class="col-md-4 col-form-label">Present Address:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Enter your address" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-password-input" class="col-md-4 col-form-label">Parmanent Address:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Enter your parmanent address" id="example-password-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                        
                                                        <div class="mb-3 row">
                                                            <label class="col-md-4 col-form-label">Gender:</label>
                                                            <div class="col-md-8">
                                                                <select class="form-select">
                                                                    <option>Select</option>
                                                                    <option>Female</option>
                                                                    <option>Male</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-md-4 col-form-label">Blood Group:</label>
                                                            <div class="col-md-8">
                                                                <select class="form-select">
                                                                    <option>Select</option>
                                                                    <option>A+</option>
                                                                    <option>A-</option>
                                                                    <option>B+</option>
                                                                    <option>B-</option>
                                                                    <option>O+</option>
                                                                    <option>O-</option>
                                                                    <option>AB+</option>
                                                                    <option>AB-</option>
                                                                    <option>Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-email-input" class="col-md-4 col-form-label">Suborno Card No:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="number" placeholder="Enter Card No" id="example-email-input">
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                        <div class="mb-3 row">
                                                            <label for="example-tel-input" class="col-md-4 col-form-label">Diagonosis:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text"  placeholder="" id="example-tel-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-password-input" class="col-md-4 col-form-label d-flex align-items-center">Photo:</label>
                                                            <div class=" col-md-8">
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-number-input" class="col-md-4 col-form-label">Approved for Observation:</label>
                                                            <div class="col-md-8 d-flex align-items-center">
                                                                <input type="checkbox" id="switch1" switch="none" checked />
                                                                <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3 row">
                                                            <label for="example-password-input" class="col-md-12 col-form-label text-center"><h4>Father's Name:</h4></label>
                                                            
                                                        </div>
                                                
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Father's name" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="number" placeholder="Enter your Father's number" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Father's profession" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Father's Email" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Father's Document" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Father's FB link" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3 row">
                                                            <label for="example-password-input" class="col-md-12 col-form-label text-center"><h4>Mother's Name:</h4></label>
                                                            
                                                        </div>
                                                
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Mother's name" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="number" placeholder="Enter your Mother's number" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Mother's profession" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Mother's Email" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Mother's Document" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" type="text" placeholder="Enter your Mother's FB link" id="example-password-input">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex pb-3">
                                                        <label for="example-datetime-local-input" class=" pe-2 col-form-label"><h4 class="pb-0 mb-0">Is interested in job:</h4></label>
                                                        <div class="form-check d-flex align-items-center ">
                                                            <input class="form-check-input" id="container" type="checkbox" 
                                                                name="container">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row hide">
                                                    <div class="col-6">
                                        
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Disability Type:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="What type of disability do you have" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Work Interest:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Where is your interest" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Transport:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="What type of transport do you prefer?" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Device Name:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your device name" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Prefer Work Area:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your prefareble area" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Local Guardian:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your local guardian" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Position:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your position" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Duration:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Duration" id="example-search-input">
                                                            </div>
                                                        </div>
                                                       
                                                    
                                                    </div>
                                                    <div class="col-6">
                        
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Skill/Strength of work:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your strength of work" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-1 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label pt-0 ">Reasonable accommodation :</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your accommodation " id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Device Use:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="  " id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Qualification:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your qualification" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Training:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="What type of training do you have" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Organization:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your organization name" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Phone Number:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="number" placeholder="Your phone number" id="example-search-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label">Cause of Leave:</label>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" placeholder="Your causes of leave" id="example-search-input">
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
                                <th>Name & ID</th>
                                <th>DoA</th>
                                <th>DoB</th>
                                <th>B.G.</th>
                                <th>Mobile #</th>
                                <th>Is A.PA?</th>
                                <th>Student Status</th>
                                <th>Log</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>Suhel Ahmed Chowdhury
                                    (ID: REG-102)</td>
                                <td>2019-04-28</td>
                                <td>1999-07-05</td>
                                <td>AB+</td>
                                <td>Mother: 01790138852
                                    Father: 01799374646</td>
                                <td>Y</td>
                                <td>Wages</td>
                                <td>Create: Habibur Rahman @ 2019-04-28 15:52:23</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class=" fas fa-eye"></i>
                                        </button>
                                        <button type="button"
                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                        data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                        <i class="fas fa-pen"></i></button>
                                        <button type="button"
                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2"> <i
                                        class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

  <!--  Large modal example -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">SAFWAT NASIF
                    (T-0003)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <tbody>
                        <tr>
                       <td class="fw-bold">Status:</td>
                       <td>Regular</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Student ID:</td>
                       <td>T-0003</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Name:</td>
                       <td>SAFWAT NASIF</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">DoB:</td>
                       <td>1998-12-27</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Gender:</td>
                       <td>Male</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Blood Group:</td>
                       <td>B+</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Date Of Assessment:</td>
                       <td>2018-09-18</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">National ID No:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Suborno Card ID:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Father's Name:</td>
                       <td>MD.ABUL KASHEM</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Father's Profession:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Father's Mobile #:</td>
                       <td>01721680501</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Father's NID #:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Mother's Name:</td>
                       <td>BEGUM NURJAHAN DIPA</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Mother's Profession:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Mother's Mobile #:</td>
                       <td>01731258647</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Mother's NID #:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Address:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">477/1 Malibag, DIT Road, Dhaka 1219</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Diagonosis:</td>
                       <td></td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Approved in P.A:</td>
                       <td>	N</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Created By:</td>
                       <td>	PFDA C COMMON at 2018-09-19 01:28:37</td>
                        </tr>
                        <tr>
                       <td class="fw-bold">Updated By:</td>
                       <td>Nusrat Jahan at 2021-12-26 14:57:12</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row modal-footer">
                <div class="col-md-2">
                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



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
<script src="{{ URL::asset('/assets/js/pages/fontawesome.init.js') }}"></script>
@endsection




