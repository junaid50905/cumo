@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#notice-template-setup" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#notice-template-setup_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="notice-template-setup" role="tabpanel">
                            <form action="{{ route('notice-template-setup.store') }}" method="post">
                                @csrf
                                <div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label text-center">Title</label>
                                        <div class="col-md-8 pe-5">
                                            <x-input-text name="title" placeholder="Notice Title Here" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-4 col-form-label text-center">Send
                                            To:</label>
                                        <div class="col-md-8 pe-5">
                                            <x-input-select name="type" :records="$students" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label text-center">Message:</label>
                                        <div class="col-md-8 pe-5">
                                            <form method="post">
                                                <x-input-textarea name="area" />
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success  waves-light">
                                            Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="notice-template-setup_list" role="tabpanel">
                            <livewire:notice-template-setup-list />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
