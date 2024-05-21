@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Customer Type Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Customer Type List</span>
                        </a>
                    </li>
               
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <p class="mb-0">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('customer-type.store') }}" method="POST">
                                            @csrf
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Type Name</label>
                                                
                                                    <x-input-text type="text" name="type_name" placeholder="Enter your name "/>
                                                
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                                                
                                                    <x-input-textarea name="description" id="message" placeholder="Enter your description here"></x-input-textarea>
                                                
                                            </div>
                                            
                                                
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-outline-success waves-light">
                                                            Save</button>
                                                    </div>
                                                
                                            
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <livewire:customer-type-list/>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div
@endsection