@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card apply-view-only">
            <div class="card-body p-0">
              <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                          <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-6 d-flex mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Department:</label>
                                    <div class="col-md-8">
                                      <x-input-select :selected="$record->department" name="department"
                                        :records="$departments" targetColumn="department_name"/>
                                    </div>
                                </div>
                                 <div class="col-6 d-flex  mb-3">
                                    <label for="example-text-input" class="col-md-4 col-form-label  pe-2">Name:</label>
                                    <div class="col-md-8">
                                        <x-input-select :selected="$record->name" name="name" :records="$students" />
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
                                      <x-input-text name="joining_date" value="{{ $record->joining_date }}"/>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection