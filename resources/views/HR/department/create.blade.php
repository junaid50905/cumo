@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{Route('department.store')}}" method="POST">
                            @csrf
                            <div class="modal-body">
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="department_name" type="text"
                                            placeholder="Department name here">
                                        </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Head of Department:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="head_of_department" :records="[
                                            'Test Muhammad Employee' => 'Test Muhammad Employee',
                                            'Sahanaj  Akter' => 'Sahanaj  Akter',
                                            'Md. Kutub Uddin' => 'Md. Kutub Uddin',
                                            'Arup  Mandal' => 'Arup  Mandal',
                                            'Md. Rizwanur Rahman' => 'Md. Rizwanur Rahman',
                                            'Angon  Rahman' => 'Angon  Rahman',
                                            ]" />
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Description:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="description" type="text"
                                            placeholder="Department description here">
                                        </x-input-text>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"
                                            class="btn btn-outline-success waves-effect waves-light">Save
                                        </button>
                                    </div>
                            </div>
                    </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                      <livewire:department-list/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection