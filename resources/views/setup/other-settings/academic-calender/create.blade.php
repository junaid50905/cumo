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
                        <form action="{{ route('academic-calender.store') }}" method="POST">
                            @csrf
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6">
                              <label class="form-label">Event Name</label>
                              <x-input-text name="event_name" placeholder="Enter Event Name Here">
                            </x-input-text>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Event Type</label>
                              <x-input-select name="event_type"
                                :records="$eventType" />
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6">
                              <label class="form-label">Start Date</label>
                              <x-input-text name="start_date" placeholder="dd/mm/yyyy" type="date">
                            </x-input-text>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">End Date</label>
                              <x-input-text name="end_date" placeholder="dd/mm/yyyy" type="date">
                              </x-input-text>
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6">
                              <label class="form-label">Start Time</label>
                              <x-input-text name="start_time" placeholder="dd/mm/yyyy" type="time">
                            </x-input-text>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">End Time</label>
                              <x-input-text name="end_time" placeholder="dd/mm/yyyy" type="time">
                              </x-input-text>
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                            <div class="col-md-6">
                                <label class="form-label">Event Label</label>
                                <x-input-select name="event_label"
                                :records="$eventLabel" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Event Duration</label>
                                <x-input-text name="duration" placeholder="Event Duration Here"></x-input-text>
                            </div>
                        </div>
                        <div class="col-md-12 p-4 pt-1 pb-1 pe-3">
                            <label class="form-label">Description</label>
                            <x-input-textarea name="description"></x-input-textarea>
                        </div>
                        <!-- Tab panes One Add  -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                         </div>
                        <!-- Tab panes One Close  -->
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <livewire:academic-calender-list/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
