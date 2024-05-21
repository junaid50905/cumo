@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <form action="{{ route('attendence-card.update', $record->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row m-auto">
                          <div class="col-lg-6">
                              <label class="form-label">Student</label>
                              <x-input-select :selected="$record->student_id" name="student_id"
                              :records="$students" />
                          </div>
                          <div class="col-lg-6">
                              <label class="form-label">Card Number</label>
                              <x-input-text type="number" name="card_number" value="{{ $record->card_number }}">
                              </x-input-text>
                          </div>
                          <div class="modal-footer">
                            <a href="{{ route('attendence-card.create') }}"
                                class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                            <button type="submit"
                                class="btn btn-outline-success waves-effect waves-light">Update</button>
                        </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>


@endsection
