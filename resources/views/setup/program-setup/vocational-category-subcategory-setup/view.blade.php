@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="card  apply-view-only">
        <div class="card-body">
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <form action="{{ route('vocational-sub-category.show', $record->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row m-auto">
                        <div class="col-lg-6">
                            <label class="form-label">Categories</label>
                            <x-input-select name="category_id" :records="$category" :selected="$record->category_id" targetColumn="category_name" />
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Sub Categories</label>
                            <x-input-text name="sub_categories" value="{{$record->sub_categories}}">
                            </x-input-text>
                        </div>
                        <div class="container">
                          <div class="row">
                              <div class="row modal-footer">
                                  <div class="col-md-4 d-flex">
                                      <a href="{{ route('vocational-sub-category.create') }}"
                                          class="btn btn-outline-danger w-100 me-3">Go back</a>
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
@endsection
