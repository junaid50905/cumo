@extends('layouts.master')
@section('content')
<div class="modal-body p-0">
    <div class="card p-0 m-0">
        <div class="card-body">
            <div class="row pb-3">
                <div class="col-6 row">

                    <label class="col-4 col-form-label">Activity</label>
                    <div class="col-8">
                        <x-input-select name="student_id" :records="[]" />
                    </div>
                </div>
                <div class="col-6 row">
                    <label class="col-4 col-form-label">Domain Weight</label>
                    <div class="col-8">
                        <x-input-select name="student_id" :records="[]" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="repeater" enctype="multipart/form-data">
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item class="row removeRow">
                                        <div class=" col-lg-6 d-flex align-self-center row">
                                            <div class="col-4">
                                                <label for="name" class="">Task Name</label>
                                            </div>
                                            <div class="col-7">
                                                <x-input-text name="hello1" placeholder="">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center d-flex">
                                            <div class="col-4">
                                                <label for="name"
                                                    class="">Type</label>
                                            </div>
                                            <div class="col-lg-9 d-flex gap-3 pt-2">
                                                <x-input-select name="student_id"
                                                    :records="[]" />
                                                <button class="btn btn-outline-danger waves-effect waves-light removeBtn">
                                                    <i class="fas fa-trash-alt"></i>
                                                
                                                </button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-1">
                                    <button data-repeater-create type="button" class="btn btn-outline-info waves-effect waves-light mt-3 ms-1  mt-lg-0"><i class="fa fa-plus"></i> Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary waves-effect"
        data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary waves-effect waves-light">Save
        changes</button>
</div>
@endsection
@section('script')
 <!-- form repeater js -->
  <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection