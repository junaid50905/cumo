@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Stock Count Adjustment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Stock Count List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <livewire:year-end-close-create/>
              </div>
            <div class="tab-pane" id="profile" role="tabpanel">
                <livewire:year-end-close-list/>
            </div>
      </div>
  </div>
</div>
@endsection

