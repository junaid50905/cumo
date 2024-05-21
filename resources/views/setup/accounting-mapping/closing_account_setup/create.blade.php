@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#closing_account" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#closing_account_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="closing_account" role="tabpanel">
                            <form action="{{ route('closing_account.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="row p-5 pt-0 pb-0">
                                        <div class="col-12 p-5 pb-3 pt-3">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Project
                                                    *</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                    <x-input-select name="project_id" :records="$projects" targetColumn="title" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Acc. No</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                    <x-input-text name="acc_id" type="number" />
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label pe-0 ps-0 text-center">Start
                                                    Date</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                    <x-input-text name="start_date" type="date" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label
                                                    class="col-md-4 col-form-label pe-0 ps-0 text-center">Published:</label>
                                                <div class="col-md-8 pe-0 ps-0">
                                                  <div class="square-switch">
                                                    <input name="published" type="checkbox" id="square-switch10" switch="bool"
                                                        checked />
                                                    <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class=" d-flex justify-content-end gap-2">
                                                <div class="col-md-1">
                                                    <button type="submit"
                                                        class="btn btn-outline-success w-100">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="closing_account_list" role="tabpanel">
                          <livewire:closing-account-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
