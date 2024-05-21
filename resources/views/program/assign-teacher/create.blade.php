@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{ route('assign-teacher.store') }}" method="post">
                            @csrf
                            <div class="modal-body p-0">
                                <div class="card p-0 m-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 col-form-label">Student:</label>
                                                    <div class="col-md-8">
                                                        <x-input-select name="student_name" :records="$students" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 col-form-label">Main Teacher:</label>
                                                    <div class="col-md-8">
                                                        <x-input-select name="teachar_name" :records="$teachers" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3 ">
                                            <div class="col-2 d-flex align-items-center">
                                                <div class=" row">
                                                    <label class=" col-form-label">Teachers:</label>
                                                </div>
                                            </div>
                                            
                                            <div class="col-2 d-flex align-items-center">
                                                <div class="form-check ">
                                                    <input class="form-check-input" name="chk" :records="['Select All']"
                                                        type="checkbox" onclick='selects()'>
                                                    <label class="form-check-label" for="formCheck1">
                                                        Select All
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex align-items-center">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox"
                                                        onclick='deSelect()'>
                                                    <label class="form-check-label" for="formCheck1">
                                                        Deselect All
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <x-input-radio-or-check name="subject"
                                            :records="$projectConstants::$assignTeacher" type="checkbox"
                                            :multiple="true" :isVertical="false">
                                            </x-input-radio-or-check>
                                        </div>

                                        {{-- <div class="row pt-3">
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck1">
                                                        Boutique
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck2">
                                                        Paperwork
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck3">
                                                        Elementary
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck4">
                                                        Music
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck5">
                                                        Tailoring
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck6">
                                                        Starter
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck7">
                                                        Yoga
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck8">
                                                        Dance
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck9">
                                                        Online Chess class
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck10">
                                                        Jewelry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck11">
                                                        Radial
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" name="chk">
                                                    <label class="form-check-label" for="formCheck12">
                                                        Physical Exercise(PE)
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="square-switch pt-3">
                                            <h6>Published:</h6>
                                            <input type="checkbox" id="square-switch1" switch="none" checked />
                                            <label for="square-switch1" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="row modal-footer">
                                                    <div class="col-md-2">
                                                        <button type="submit"
                                                            class="btn btn-success w-100">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">

                        <livewire:assign-teacher-list />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    function selects() {
    var ele = document.getElementsById('chk');
    for (var i = 0; i < ele.length; i++) 
    { if (ele[i].type=='checkbox' )
     ele[i].checked=true; } 
    }
    function deSelect() 
    {
        var ele=document.getElementsById('chk'); 
        for (var i=0; i < ele.length; i++) 
        { if (ele[i].type=='checkbox' )
        ele[i].checked=false; }
    }
</script>
@endsection