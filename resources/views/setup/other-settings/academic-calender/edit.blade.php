@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{ route('academic-calender.update', $record->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6">
                              <label class="form-label">Event Name</label>
                              <x-input-text value="{{$record->event_name}}" name="event_name" placeholder="Enter Event Name Here">
                            </x-input-text>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Event Type</label>
                              <x-input-select name="event_type"
                                :records="$eventType" :selected="$record->event_type"  />
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6">
                              <label class="form-label">Start Date</label>
                              <x-input-text value="{{$record->start_date}}" name="start_date" placeholder="dd/mm/yyyy" type="date">
                            </x-input-text>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">End Date</label>
                              <x-input-text value="{{$record->end_date}}" name="end_date" placeholder="dd/mm/yyyy" type="date">
                              </x-input-text>
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                          <div class="col-md-6">
                              <label class="form-label">Start Time</label>
                              <x-input-text value="{{$record->start_time}}" name="start_time" placeholder="dd/mm/yyyy" type="time">
                            </x-input-text>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">End Time</label>
                              <x-input-text value="{{$record->end_time}}" name="end_time" placeholder="dd/mm/yyyy" type="time">
                              </x-input-text>
                          </div>
                        </div>
                        <div class="col-md-12 d-flex p-4 pt-1 pb-1 gap-2">
                            <div class="col-md-6">
                                <label class="form-label">Event Label</label>
                                <x-input-select name="event_label"
                                :records="$eventLabel" :selected="$record->event_label" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Event Duration</label>
                                <x-input-text value="{{$record->duration}}" name="duration" placeholder="Event Duration Here"></x-input-text>
                            </div>
                        </div>
                        <div class="col-md-12 p-4 pt-1 pb-1 pe-3">
                            <label class="form-label">Description</label>
                            <x-input-textarea value="{{$record->description}}" name="description"></x-input-textarea>
                        </div>
                        <!-- Tab panes One Add  -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view">Update</button>
                         </div>
                        <!-- Tab panes One Close  -->
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
