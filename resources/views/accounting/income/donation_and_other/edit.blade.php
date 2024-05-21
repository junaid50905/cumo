@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="receive_payment" role="tabpanel">
                        <form action="{{ route('donation-and-other.update', $record->id) }}" method="post">
                            @method('put')
                            @csrf
                            <!-- form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Project</label>
                                        <x-input-select name="project_id" :records="$projects"
                                            :selected="$record->income->project->id" targetColumn="title">
                                        </x-input-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Customer</label>
                                        <x-input-select name="customer_id" :records="$customers"
                                            :selected="$record->customer->id" additional="mobile"></x-input-select>
                                    </div>
                                </div>
                            </div>
                            @php($history = $record->income->history->info)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Cash Pay</label>
                                        <x-input-text name="cash" placeholder="" value="{{ $history->cash }}">
                                        </x-input-text>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Note</label>
                                        <x-input-textarea name="note" rows="1" placeholder=""
                                            value="{{ $record->income->note }}">
                                        </x-input-textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- 8th row start  -->
                            @include('partials.cheque-pay-edit')
                            <!-- 8th row end  -->
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-lg btn-success w-100">Update</button>
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
