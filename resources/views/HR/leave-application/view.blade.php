@extends('layouts.master')
@section('content')
  <div class="card">
      <div class="card-body">
          <div class="tab-content p-3 text-muted">
              <div class="tab-pane active" id="home" role="tabpanel">
                    <livewire:leave-application-details :leave_application="$record" mode="show"/> 
              </div>
          </div>
      </div>
  </div>
@endsection