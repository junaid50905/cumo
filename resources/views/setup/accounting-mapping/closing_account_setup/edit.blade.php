@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="closing_account" role="tabpanel">
                            <form action="{{ route('closing_account.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="row p-5 pt-0 pb-0">
                                        <div class="col-12 p-5 pb-3 pt-3">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Project
                                                    *</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                    <x-input-select name="project_id" :selected="$record->project_id" :records="$projects" targetColumn="title" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Acc. No</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                    <x-input-text name="acc_id" value="{{$record->acc_id}}" type="number" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Start
                                                    Date</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                    <x-input-text name="start_date" value="{{$record->start_date}}" type="date" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label
                                                    class="col-md-4 col-form-label pe-0 ps-0 text-center">Published:</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                  <div class="square-switch">
                                                    <input name="published" type="checkbox" id="square-switch10" switch="bool"
                                                        @if($record->published) {{ 'checked' }} @else  @endif />
                                                    <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <a href="{{ route('closing_account.create') }}"
                                                  class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                                              <button type="submit"
                                                  class="btn btn-outline-success waves-effect waves-light">Update</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
