@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Accounting Year Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Accounting Year List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
              <div class="tab-content p-3 text-muted">
              <div class="tab-pane active" id="home" role="tabpanel">
                  <p class="mb-0">
                      <div class="col-xl-8">
                          <div class="card">
                              <div class="card-body">
                                <form action="{{ route('account-year.store') }}" method="POST">
                                    @csrf
                                      <div class="row mb-1 p-2">
                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year Name</label>
                                          <div class="col-sm-8">
                                            <x-input-text name="year_id" placeholder="Account year here">
                                            </x-input-text>
                                          </div>
                                      </div>
                                      <div class="row mb-1 p-2">
                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year Start</label>
                                          <div class="col-sm-8">
                                            <x-input-text name="year_start" type="date" >
                                            </x-input-text>
                                          </div>
                                      </div>
                                      <div class="row p-2">
                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Account Year End</label>
                                          <div class="col-sm-8">
                                            <x-input-text name="year_end" type="date" >
                                            </x-input-text>
                                          </div>
                                      </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-outline-success  waves-light">
                                                Save</button>
                                        </div>
                                  </form>
                              </div>
                              <!-- end card body -->
                          </div>
                          <!-- end card -->
                      </div>
                  </p>
              </div>
            <div class="tab-pane" id="profile" role="tabpanel">
               <livewire:accounting-year-list/>
            </div>
      </div>
  </div> 
</div
@endsection