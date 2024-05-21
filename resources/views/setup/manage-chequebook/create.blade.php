@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block">ChequeBook Setup</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block">ChequeBook List</span>
            </a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
          <div class="tab-pane active" id="home" role="tabpanel">
            <div class="col-xl-6">
              <div class="card">
                <div class="card-body">
                  <form action="{{ route('cheque.store') }}" method="POST">
                    @csrf
                    <div class="row mb-1">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Checkbook Name</label>
                      <div class="col-sm-9">
                        <x-input-text name="title" placeholder="Checkbook Name"></x-input-text>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Bank Account</label>
                      <div class="col-sm-9">
                        <x-input-select name="bank_account_id" :records="$bankAccount" targetColumn="bank" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Start Page</label>
                      <div class="col-sm-9">
                        <x-input-text name="start_page" placeholder="Enter Start Page"></x-input-text>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">End Page</label>
                      <div class="col-sm-9">
                        <x-input-text name="end_page" placeholder="Enter End Page"></x-input-text>
                      </div>
                    </div>
                    <div class="row">
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-lg btn-success  waves-light">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- end card body -->
              </div>
              <!-- end card -->
            </div>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel">
            <livewire:cheque-list />
          </div>
        </div>
      </div>
    </div>
  </div>
</div @endsection