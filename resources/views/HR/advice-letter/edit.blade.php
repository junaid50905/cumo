@extends('layouts.master')

@section('title') @lang('translation.Starter_Page')@endsection
@section('css')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="advice_letter" role="tabpanel">
                <form action="{{ route('advice-letter.update', $record->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <x-input-select :selected="$record->student_id" name="student_id"
                                    :records="$students" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Advice Letter Subject</label>
                                <x-input-text name="adviceletter_sub" type="text"  value="{{ $record->adviceletter_sub }}">
                                </x-input-text>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Advice Letter Description</label>
                                <div class="col-md-12">
                                    <x-input-textarea name="adviceletter_des" type="text"  value="{{ $record->adviceletter_des }}">
                                    </x-input-textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('advice-letter.create') }}"
                                class="btn btn-outline-danger waves-effect waves-light">Go Back</a>
                            <button type="submit" href="{{ route('advice-letter.create') }}" class="btn btn-outline-success waves-effect waves-light">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection