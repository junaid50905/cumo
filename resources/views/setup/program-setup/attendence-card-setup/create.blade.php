@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
    
@endsection

@section('content')
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Student Card Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Student Card List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <form action="{{ route('attendence-card.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 row m-auto">
                          <div class="col-lg-6">  
                              <label class="form-label">Student</label>
                              <x-input-select name="student_id"
                              :records="$students" />
                          </div>
                          <div class="col-lg-6">
                              <label class="form-label"> Card Number</label>
                              <x-input-text type="number" name="card_number"  placeholder="Enter amount">
                              </x-input-text> 
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success waves-light">
                                Save</button>
                        </div>
                        </div>

                      </form>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                      <livewire:attendence-card-list/>
                    </div>   
                </div>
            </div>
        </div>
 

@endsection
