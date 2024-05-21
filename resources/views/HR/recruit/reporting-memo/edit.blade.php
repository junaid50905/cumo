@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-xl-12 p-0">
    <div class="card">
      <div class="card-body p-0">

        <form action="{{ route('reporting-memo.update', $record->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-6 d-flex mb-3">
              <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Department:</label>
              <div class="col-md-8">
                <x-input-select name="department" :selected="$record->department" 
                  :records="$departments" targetColumn="department_name"/>
              </div>
            </div>
            <div class="col-6 d-flex  mb-3">
              <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Name:</label>
              <div class="col-md-8">
                <x-input-select name="name" :selected="$record->name" :records="$students" />
              </div>
            </div>
            <div class="col-6 d-flex  mb-3">
              <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Designation:</label>
              <div class="col-md-8">
                <x-input-text name="designation" value="{{ $record->designation }}"/>
              </div>
            </div>
            <div class="col-6 d-flex mb-3">
              <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Joining Date:</label>
              <div class="col-md-8">
                <x-input-text name="joining_date" type="date" value="{{ $record->joining_date }}"/>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="{{ route('reporting-memo.create') }}" class="btn btn-outline-danger waves-effect waves-light">Go
              Back</a>
            <button type="submit" href="{{ route('reporting-memo.create') }}"
              class="btn btn-outline-success waves-effect waves-light">Update</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection