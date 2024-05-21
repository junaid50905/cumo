@extends('layouts.master')
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
                      <form action="{{ route('employee-type.store') }}" method="POST">
                        @csrf
                        <div class="modal-body pb-0">
                          <div class="col-12 d-flex  mb-3">
                              <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Employee Type Name:</label>
                              <div class="col-md-8">
                                  <x-input-text name="employeetype_name" type="text" />
                              </div>
                          </div>
                          <div class="col-12 d-flex">
                              <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Type Desc:</label>
                              <div class="col-md-8">
                                  <x-input-text name="type_desc" type="text" />
                              </div>
                          </div>
                        </div>
                        <div class="d-flex row">
                            <div class="col-2 text-end"></div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class=" col-form-label text-end" >Is Contract</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input name="btnradio1" type="checkbox" id="square-switch10" switch="bool"
                                        checked />
                                    <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class=" col-form-label " >	Bonus Eligible</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input name="btnradio2" type="checkbox" id="square-switch11" switch="bool"
                                        checked />
                                    <label for="square-switch11" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class=" col-form-label text-end" >Daily Basis</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input name="btnradio3" type="checkbox" id="square-switch12" switch="bool"
                                        checked />
                                    <label for="square-switch12" data-on-label="Yes" data-off-label="No"></label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <label for="example-text-input" class="col-form-label text-start" >Service Provider</label>
                                <div class="">
                                  <div class="square-switch">
                                    <input name="btnradio4" type="checkbox" id="square-switch13" switch="bool"
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
                                    <x-input-text name="note" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-outline-success waves-effect waves-light">Save
                            </button>
                        </div>    
                      </form>                    
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                     <livewire:employee-type-list/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
