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
                          <span class="d-none d-sm-block">Product Setup</span>    
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Product List</span>    
                      </a>
                  </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel "> 
                    <livewire:create-product-setup mode="create" />
                  </div>
                  <div class="tab-pane mt-4" id="profile" role="tabpanel">
                    <livewire:create-product-list/>
                  </div>
              </div>     
          </div>
      </div>
  </div>
</div>
@endsection
@section('script')
   <!-- form repeater js -->
   <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection