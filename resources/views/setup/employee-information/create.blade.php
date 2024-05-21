@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
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
                          <span class="d-none d-sm-block">Employee Setup</span>    
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Employee List</span>    
                      </a>
                  </li>
                  <li class="nav-item p-0 ms-2">
                    <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> ADD</button>
                  </li>
              </ul>
              <!-- Tab panes -->
              <livewire:employee />     
          </div>
      </div>
  </div>
</div>
@endsection
@section('script')
@endsection