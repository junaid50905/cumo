@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <form action="{{ route('currency.show', $record->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="modal-body apply-view-only">
                            <div class="col-12 d-flex  mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Currency Name:</label>
                                <div class="col-md-8">
                                    <x-input-text name="currency_name" value="{{ $record->currency_name }}" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Symbol:</label>
                                <div class="col-md-8">
                                    <x-input-text name="symbol" value="{{ $record->symbol }}" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Lowest Unit Name:</label>
                                <div class="col-md-8">
                                    <x-input-text name="lowest_unit_name" value="{{ $record->lowest_unit_name }}" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex  mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Converse Amount:</label>
                                <div class="col-md-8">
                                    <x-input-text name="converse_amount" value="{{ $record->converse_amount }}" type="text"
                                    placeholder="">
                                </x-input-text>
                                </div>
                            </div>
                            <div class="col-12 d-flex mb-3">
                                <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Is Default :</label>
                                <div class="col-md-8">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio1" value="{{ $record->btnradio1 }}" id="btnradio4"  >
                                        <label class="btn btn-outline-success" for="btnradio4">Yes</label>
                                        <input type="radio" class="btn-check" name="btnradio1" value="{{ $record->btnradio1 }}" id="btnradio5" checked>
                                        <label class="btn btn-outline-danger" for="btnradio5">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row modal-footer">
                                    <div class="col-md-4 d-flex">
                                        <a href="{{ route('currency.create') }}"
                                            class="btn btn-outline-danger w-100 me-3">Go back</a>
                                    </div>
                                </div>
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