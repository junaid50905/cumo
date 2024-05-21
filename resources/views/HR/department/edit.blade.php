@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{ route ('department.update', $record->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="department_name" value="{{$record->department_name}}"
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
                                            <x-input-text name="description" value="{{$record->description}}"
                                            placeholder="Department description here">
                                        </x-input-text>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit"
                                            class="btn btn-outline-success waves-effect waves-light">Update
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection