@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body pt-5">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="finished_good" role="tabpanel">
                            <form class="apply-view-only" action="{{ route('category.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Parent Category</label>
                                            <x-input-select :selected="$record->parent_category_id" name="parent_category" :records="$parent_category" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <x-input-text name="name" value="{{ $record->name }}" placeholder="Category Name Here"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Sequence</label>
                                            <x-input-text name="seqence" value="{{ $record->seqence }}" placeholder="Sequence"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Tire No.</label>
                                            <x-input-text type="number" value="{{ $record->tire_no }}" name="tire_no" placeholder="Tire No.">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Description</label>
                                            <x-input-textarea value="{{ $record->description }}" name="description"></x-input-textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <button type="submit"
                                            class="btn btn-outline-success font-size-16 waves-effect waves-light w-50"
                                            id="sa-position">update</button>
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
@section('script')
@endsection
@section('script-bottom')
@endsection
