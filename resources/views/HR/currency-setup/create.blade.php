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
                      <form action="{{ route('currency.store') }}" method="POST">
                        @csrf
                          <div class="modal-body">
                            <div class="col-12 d-flex  mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Currency Name:</label>
                                <div class="col-md-8">
                                    <x-input-text name="currency_name" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Symbol:</label>
                                <div class="col-md-8">
                                    <x-input-text name="symbol" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Lowest Unit Name:</label>
                                <div class="col-md-8">
                                    <x-input-text name="lowest_unit_name" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex  mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Converse Amount:</label>
                                <div class="col-md-8">
                                    <x-input-text name="converse_amount" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Is Default :</label>
                                <div class="square-switch">
                                    <input name="btnradio1" type="checkbox" id="square-switch10" switch="bool"
                                        checked />
                                    <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-outline-success  waves-light">
                                  Save</button>
                            </div>
                        </div> 
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">   
                      <livewire:currency-list/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection