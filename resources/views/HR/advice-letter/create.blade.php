@extends('layouts.master')

@section('title') @lang('translation.Starter_Page')@endsection
@section('css')

@endsection
@section('content')

<div class="card">
    <div class="card-boady">
        <div class="card-body p-0">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#advice_letter" role="tab">
                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-block">Add</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#advice_letter_list" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-block">Advice Letter List</span>
                    </a>
                </li>
            </ul>


            <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="advice_letter" role="tabpanel">

                    <form action="{{route('advice-letter.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Name</label>
                                    <x-input-select name="student_id" :records="$students" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Advice Letter Subject</label>
                                    <x-input-text name="adviceletter_sub" type="text" placeholder="">
                                    </x-input-text>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Advice Letter Description</label>
                                    <div class="col-md-12">
                                        <x-input-textarea name="adviceletter_des" type="text" placeholder="">
                                        </x-input-textarea>
                                    </div>
                                </div>
                            </div>
                            <div class=" d-flex justify-content-end gap-2">
                                <div class="col-md-1 ">
                                    <button class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="advice_letter_list" role="tabpanel">
                    <livewire:advice-letter-list />
                </div>
            </div>

        </div>
    </div>
</div>

@endsection