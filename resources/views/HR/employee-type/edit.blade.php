@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                      <form action="{{ route ('employee-type.update', $record->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body pb-0">
                          <div class="col-12 d-flex  mb-3">
                              <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Employee Type Name:</label>
                              <div class="col-md-8">
                                  <x-input-text value="{{$record->employeetype_name}}" name="employeetype_name" type="text" />
                              </div>
                          </div>
                          <div class="col-12 d-flex">
                              <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Type Desc:</label>
                              <div class="col-md-8">
                                  <x-input-text value="{{$record->type_desc}}" name="type_desc" type="text" />
                              </div>
                          </div>
                        </div>
                        <div class="d-flex row">
                            <div class="col-2 text-end"></div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class=" col-form-label text-end" >Is Contract</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input value="{{$record->btnradio1}}" name="btnradio1" type="checkbox" id="square-switch10" switch="bool"
                                        checked />
                                    <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class=" col-form-label " >	Bonus Eligible</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input value="{{$record->btnradio2}}" name="btnradio2" type="checkbox" id="square-switch11" switch="bool"
                                        checked />
                                    <label for="square-switch11" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class=" col-form-label text-end" >Daily Basis</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input value="{{$record->btnradio3}}" name="btnradio3" type="checkbox" id="square-switch12" switch="bool"
                                        checked />
                                    <label for="square-switch12" data-on-label="Yes" data-off-label="No"></label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class="col-form-label text-start" >Service Provider</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input value="{{$record->btnradio4}}" name="btnradio4" type="checkbox" id="square-switch13" switch="bool"
                                        checked />
                                    <label for="square-switch13" data-on-label="Yes" data-off-label="No"></label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-3 text-end"></div>
                        </div>
                        <div class="">
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label text-center pe-2 ">Note:</label>
                                <div class="col-md-8">
                                    <x-input-text value="{{$record->note}}" name="note" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class=" d-flex justify-content-end gap-2">
                          <div class="col-md-1">
                            <button class="btn btn-success">Update</button>
                          </div>
                        </div>    
                      </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
