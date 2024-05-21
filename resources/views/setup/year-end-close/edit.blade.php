@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <livewire:year-end-close-create :year="$record" mode="edit"/>
              </div>
      </div>
  </div>
</div>
@endsection

