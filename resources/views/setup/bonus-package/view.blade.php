@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <form action="{{ route('bonus-package.update', $record->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="modal-body apply-view-only">
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Package
                                            Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text value="{{$record->package_name}}" name="package_name" type="text" placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-2 col-form-label  pe-2">Description:</label>
                                        <div class="col-md-8">
                                            <x-input-text value="{{ $record->description }}" name="description" type="text" placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <label for="example-text-input"
                                            class="col-md-2 col-form-label  pe-2">Amount:</label>
                                        <div class="col-md-8">
                                            <x-input-text value="{{ $record->amount}}" name="amount" type="number" placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Is In Percent
                                            :</label>
                                        <div class="square-switch">
                                            <input name="is_in_percent" type="checkbox" id="square-switch10" switch="bool"
                                            @if($record->is_in_percent) checked @else  @endif />
                                            <label for="square-switch10" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex  mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Sal Head
                                            Id:</label>
                                        <div class="col-md-8">
                                            <x-input-select :selected="$record->sal_head" name="sal_head" :records="$salHeadId" />
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Total Amount
                                            Each
                                            Year:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="total_amount" value="{{ $record->total_amount }}"  type="text" placeholder="">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex mb-3">
                                        <label for="example-text-input" class="col-md-2 col-form-label  pe-2">Curnc
                                            Id:</label>
                                        <div class="col-md-8">
                                            <x-input-select :selected="$record->curnc_id" name="curnc_id" :records="$curncId" />
                                        </div>
                                    </div>
                                    <div class=" d-flex justify-content-end gap-2">
                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-success w-100">save</button>
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
