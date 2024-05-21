@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title') ONLINE WEEKLY TASK PLAN NEW @endslot
    @endcomponent
    {{-- code  --}}

    <div class="card p-0">
        <div class="card-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-block">Weekly Task Setup</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-block">weekly Task List</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content m-3 text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                    
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label class="col-md-4 col-form-label">Class Name</label>
                            <div class="col-md-8">
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="example-date-input" class="col-md-4 col-form-label">Start Date</label>
                            <div class="col-md-8">
                                <input class="form-control" type="date" value="2022-04-24" id="example-date-input">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        
                        <div class="col-6">
                            <label for="example-date-input" class="col-md-4 col-form-label">End Date</label>
                            <div class="col-md-8">
                                <input class="form-control" type="date" value="2022-04-24" id="example-date-input">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="col-md-4 col-form-label"> Assign Teacher</label>
                            <div class="col-md-8">
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label class="col-md-4 col-form-label"> Supervisor Teacher</label>
                            <div class="col-md-8">
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="card">
                                <div class="card-body p-0">
                                    
                                    <form class="repeater pt-5" enctype="multipart/form-data">
                                        <div class="row">
                                           <div class="col-lg-1  p-0 pe-1">
                                               <label for="name">Domain Name</label>
                                            </div>
                                           <div class="col-lg-1 p-0 pe-1">
                                                <label for="name">Activity Name</label>
                                           </div>
                                           <div class="col-lg-1 p-0 pe-1">
                                                <label for="name">Task Name</label>
                                           </div>
                                           <div class="col-lg-1  p-0 pe-1">
                                                <label for="link">Education Link</label>
                                           </div>
                                           <div class="col-lg-1  p-0 pe-1">
                                                <label for="name">রুটিন প্রস্তুতের ক্ষেত্রে যেসব বিষয় বিবেচনায় আনা হয়েছে</label>
                                            </div>
                                            <div class="col-lg-1  p-0 pe-1">
                                                <label for="name">শিক্ষার্থীর কাজের আগ্রহ বাড়ানোর লক্ষ্যে যেসব করা যেতে পারে</label>
                                            </div>
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="name">ক্লাস চলাকালীন সময়ে কোন কোন ক্ষেত্রে অভিভাবকের অংশগ্রহণ প্রয়োজন হবে</label>
                                            </div>
                                            <div class="col-lg-2 p-0 pe-1">
                                                <label for="link">অনলাইন ক্লাস পরিচালনায় শিখন উপযোগী পরিবেশ তৈরীর লক্ষ্যে যেসব বিষয় শিক্ষক ও প্যারেন্টস এর লক্ষ্য রাখতে হবে</label>
                                            </div>
                                            <div class="col-lg-1  p-0 pe-1">
                                                <label for="link">অনলাইন ক্লাস চলাকালীন সময় অন্যান্য সংলিষ্ট বিষয়সমুহ</label>
                                            </div>
                                           
                                        </div>
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div class=" col-lg-1 d-flex p-0 p-0 pe-1 pb-1">
                                                    
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                </div>

                                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                </div>

                                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                </div>
                                                <div class=" col-lg-1 d-flex p-0 p-0 pe-1 pb-1">
                                                    
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                </div>

                                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                </div>

                                                <div class=" col-lg-1 p-0 pe-1 pb-1">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                </div>

                                                <div class=" col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class=" col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class=" col-lg-1 p-0 pe-1 pb-1 align-self-center d-flex">
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>2222</option>
                                                        <option>55555</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class=" col-lg-1 p-0 pe-1 pb-1 align-self-center d-flex">
                                                    <button class="btn btn-danger btn-rounded ms-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <div class="pt-3">
                                            <input data-repeater-create type="button"
                                            class="btn btn-success mt-3 px-4 mt-lg-0" value="Add" />
                                            
                                        </div>
                                    </form>
                                    <div class="d-flex flex-wrap gap-2 pt-5">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- journal form end -->
                <div class="tab-pane" id="profile" role="tabpanel">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th class="">Class Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>End Date</th>
                                <th>Assign Teacher</th>
                                <th>Supervisor Teacher</th>
                                <th>Log</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>System </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>System </td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>System </td>
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
    <!-- form repeater js -->
    <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>


<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

@endsection




