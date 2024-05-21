@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#designation-setup" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#designation-setup_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="designation-setup" role="tabpanel">
                        <form action="{{Route ('designation.store')}}" method="POST">
                            @csrf
                        <div class="modal-body p-0">
                            <div class="container">
                                <div class="row d-flex">
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2"> Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="institute_name" >
                                            </x-input-text>
                                        </div>
                                    </div> 
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Description:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="address" >
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success  waves-light">
                                            Save</button>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="tab-pane" id="designation-setup_list" role="tabpanel">
                 <livewire:designation-setup-list/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
