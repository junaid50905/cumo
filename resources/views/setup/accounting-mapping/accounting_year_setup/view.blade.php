@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Tab panes -->
              <div class="tab-content p-3 text-muted">
              <div class="tab-pane active" id="home" role="tabpanel">
                  <p class="mb-0">
                      <div class="col-xl-8">
                          <div class="card">
                              <div class="card-body">
                                <form action="{{ route('account-year.show', $record->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <div class="row mb-1 p-2">
                                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year Name</label>
                                            <div class="col-sm-8">
                                                <x-input-text value="{{ $record->year_id }}" name="year_id" placeholder="Account year here">
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="row mb-1 p-2">
                                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year Start</label>
                                            <div class="col-sm-8">
                                                <x-input-text value="{{ $record->year_start }}" name="year_start" type="date" >
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year End</label>
                                            <div class="col-sm-8">
                                                <x-input-text value="{{ $record->year_end }}" name="year_end" type="date" >
                                                </x-input-text>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="row modal-footer">
                                                <div class="col-md-4 d-flex">
                                                    <a href="{{ route('account-year.create') }}"
                                                        class="btn btn-outline-danger w-100 me-3">Go back</a>
                                                </div>
                                            </div>
                                        </div>
                                  </form>
                              </div>
                              <!-- end card body -->
                          </div>
                          <!-- end card -->
                      </div>
                  </p>
            </div>
        </div>
    </div> 
  </div> 
    </div> 
</div
@endsection