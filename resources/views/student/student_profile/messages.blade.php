@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
    type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Student Profile @endslot
@endcomponent


@include('layouts.student_profile.header')


<div class="row">
    <div class="col-12">

        @include('layouts.student_profile.left_sidebar')

        <!-- Right Sidebar -->
        <div class="email-rightbar mb-3">
            <div class="card">
                <div class="w-100 user-chat">
                    <div class="card">
                        <div class="p-4 border-bottom ">
                            <div class="row">
                                <div class="col-md-4 col-9">
                                    <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                                    <p class="text-muted mb-0"><i
                                            class="mdi mdi-circle text-success align-middle me-1"></i> Active now</p>
                                </div>
                                <div class="col-md-8 col-3">
                                    <ul class="list-inline user-chat-nav text-end mb-0">
                                        <li class="list-inline-item d-none d-sm-inline-block">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-search-alt-2"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                                    <form class="p-3">
                                                        <div class="form-group m-0">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search ..."
                                                                    aria-label="Recipient's username">

                                                                <button class="btn btn-primary" type="submit"><i
                                                                        class="mdi mdi-magnify"></i></button>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item  d-none d-sm-inline-block">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-cog"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">View Profile</a>
                                                    <a class="dropdown-item" href="#">Clear chat</a>
                                                    <a class="dropdown-item" href="#">Muted</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else</a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="chat-conversation p-3">
                                <ul class="list-unstyled mb-0" data-simplebar style="max-height: 486px;">
                                    <li>
                                        <div class="chat-day-title">
                                            <span class="title">Today</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="conversation-list">
                                            <div class="dropdown">

                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">Steven Franklin</div>
                                                <p>
                                                    Hello!
                                                </p>
                                                <p class="chat-time mb-0"><i
                                                        class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="right">
                                        <div class="conversation-list">
                                            <div class="dropdown">

                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">Henry Wells</div>
                                                <p>
                                                    Hi, How are you? What about our next meeting?
                                                </p>

                                                <p class="chat-time mb-0"><i
                                                        class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="conversation-list">
                                            <div class="dropdown">

                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">Steven Franklin</div>
                                                <p>
                                                    Yeah everything is fine
                                                </p>

                                                <p class="chat-time mb-0"><i
                                                        class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="last-chat">
                                        <div class="conversation-list">
                                            <div class="dropdown">

                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">Steven Franklin</div>
                                                <p>& Next meeting tomorrow 10.00AM</p>
                                                <p class="chat-time mb-0"><i
                                                        class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                            </div>

                                        </div>
                                    </li>

                                    <li class=" right">
                                        <div class="conversation-list">
                                            <div class="dropdown">

                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">Henry Wells</div>
                                                <p>
                                                    Wow that's great
                                                </p>

                                                <p class="chat-time mb-0"><i
                                                        class="bx bx-time-five align-middle me-1"></i> 10:07</p>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                            <div class="p-3 chat-input-section">
                                <div class="row">
                                    <div class="col">
                                        <div class="position-relative">
                                            <input type="text" class="form-control chat-input"
                                                placeholder="Enter Message...">
                                            <div class="chat-input-links" id="tooltip-container">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a href="javascript: void(0);"
                                                            title="Emoji"><i
                                                                class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript: void(0);"
                                                            title="Images"><i
                                                                class="mdi mdi-file-image-outline"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript: void(0);"
                                                            title="Add Files"><i
                                                                class="mdi mdi-file-document-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit"
                                            class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span
                                                class="d-none d-sm-inline-block me-2">Send</span> <i
                                                class="mdi mdi-send"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card -->
        </div> <!-- end Col-9 -->
    </div>

</div>

@endsection
@section('script')
<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

<!-- form repeater js -->
<script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>


<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

<!-- Init js -->
<script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

<!-- Table Editable plugin -->
<script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/table-editable.int.js') }}"></script>
<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>


@endsection
