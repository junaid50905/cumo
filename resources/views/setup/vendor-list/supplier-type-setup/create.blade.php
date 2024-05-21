@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block">Supplier Type Setup</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block">Supplier Type List</span>
            </a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
          <div class="tab-pane active" id="home" role="tabpanel">
            <form action="{{ route('supplier-type.store') }}" method="post">
              @csrf
              <div class="row">
                <div class=" col-6">
                  <div class="row ">
                    <div class="col-3 mt-3 mb-3">
                      <label for="formmessage">Name:</label>
                    </div>
                    <div class="col-7 mt-3 mb-3">
                      <x-input-text name="name" placeholder="Supplier type name here"></x-input-text>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3 mt-3 mb-3">
                      <label for="formmessage">Description:</label>
                    </div>
                    <div class="col-7 mt-3 mb-3">
                      <x-input-textarea name="description" placeholder="Enter description here"></x-input-textarea>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center ">
                    <div class="me-2">

                    </div>
                    <div class="ms-2">
                      <button class="btn btn-outline-success waves-effect waves-light" type="submit">SAVE</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel">
            <livewire:supplier-type-list />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
@endsection