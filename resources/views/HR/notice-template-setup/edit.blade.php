@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="notice-template-setup" role="tabpanel">
                            <form action="{{ route('notice-template-setup.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Title</label>
                                    <div class="col-md-8 pe-5">
                                        <x-input-text name="title" value="{{$record->title}}"
                                            placeholder="Notice Title Here" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-4 col-form-label text-center">Send
                                        To:</label>
                                    <div class="col-md-8 pe-5">
                                        <x-input-select :selected="$record->type" name="type" :records="$students" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-search-input"
                                        class="col-md-4 col-form-label text-center">Message:</label>
                                    <div class="col-md-8 pe-5">
                                        <form method="post">
                                            <x-input-textarea value="{{ $record->area }}" name="area" />
                                        </form>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="row modal-footer">
                                                <div class="col-md-4 d-flex">
                                                    <a href="{{ route('notice-template-setup.create') }}"
                                                        class="btn btn-outline-danger w-100 me-3">Go back</a>
                                                    <button type="submit" class="btn btn-outline-success  waves-light">
                                                        Save</button>
                                                </div>
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
    </div>
@endsection
