@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form>
                            {{-- @dd($records) --}}
                            <div class="modal-body">
                                <!-- journal form start -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Select Name</label>
                                            <x-input-select :selected="$records->student_id" name="student_id"
                                                :records="$students" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Select Date</label>
                                            <x-input-text value="{{ $records->date }}" name="date" type="date"
                                                placeholder="mm/dd/yyyy">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <h2 class=" text-center mb-4">Assign Tesks</h2>
                                                <div class="repeater">
                                                    <div class="row px-3">
                                                        <div class="col-lg-2 p-0 ">
                                                            <label class="m-0">Category Name </label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">No of Production</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Target</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Wastage</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Time Taken</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Work Quality</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Delivery Complete</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Follow Ins.</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Generalizatio</label>
                                                        </div>
                                                        <div class="col p-0 ">
                                                            <label class="m-0">Adaption</label>
                                                        </div>
                                                        <div class="col-lg-2 p-0 ">
                                                            <label class="m-0">Remarks</label>
                                                        </div>
                                                    </div>
                                                    <div data-repeater-list="vocational">
                                                        @foreach ($records->details as $detail)
                                                        <div data-repeater-item class="row px-3">
                                                            <div class="col-lg-2 d-flex p-0 pb-1 align-items-center">
                                                                <div class="w-100">
                                                                    <select class="form-control form-select"
                                                                        name="category_id">
                                                                        <option>--Select--</option>
                                                                        @foreach($categories as $category)
                                                                        <optgroup label="{{$category['name']}}">
                                                                            @foreach($category['children'] as
                                                                            $childCategory)
                                                                            <option value="{{$childCategory['id']}}"
                                                                                @if(($childCategory['id'])==($detail->
                                                                                category_id))selected @endif>
                                                                                {{$childCategory['name']}}
                                                                            </option>
                                                                            @endforeach
                                                                        </optgroup>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->production }}"
                                                                    name="production" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->target }}"
                                                                    name="target" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->wastage }}"
                                                                    name="wastage" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->time_taken }}"
                                                                    name="time_taken" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->work_quality }}"
                                                                    name="work_quality" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->delivery_complete }}"
                                                                    name="delivery_complete" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->follow_ins }}"
                                                                    name="follow_ins" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->generalizatio }}"
                                                                    name="generalizatio" />
                                                            </div>
                                                            <div class=" col p-0 pb-1">
                                                                <x-input-text value="{{ $detail->adaption }}"
                                                                    name="adaption" />
                                                            </div>
                                                            <div class="col-lg-2 p-0 pb-1 align-self-center d-flex">
                                                                <x-input-text value="{{ $detail->remarks }}"
                                                                    name="remarks" />
                                                                <button class="btn btn-danger btn-rounded ms-2">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="">
                                                        <button data-repeater-create type="button"
                                                            class="btn btn-success font-size-16 waves-effect waves-light">
                                                            Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- journal form end -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn font-size-16 btn-danger" data-bs-dismiss="modal">
                                    <i class="bx bx-exit"></i>Close</button>
                                <button type="submit" class="btn font-size-16 btn-success">
                                    <i class="bx bx-save"></i>Save
                                </button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<!-- form repeater js -->
<script src="{{ asset('assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
@endsection