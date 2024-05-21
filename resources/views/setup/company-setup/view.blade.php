@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="add" role="tabpanel">
                            <form action="{{ route('company.show', $record->id) }}" method="POST">
                              @csrf
                              @method('PUT')
                                <div class="modal-content apply-view-only">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Company Name </label>
                                                    <x-input-text value="{{ $record->company_name }}" name="company_name"  placeholder="Company Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Total Department:</label>
                                                    <x-input-text value="{{ $record->total_department }}"  name="total_department" placeholder="Total Department">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Manager </label>
                                                    <x-input-text value="{{ $record->manager }}"  name="manager" placeholder="Manager"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Street 1</label>
                                                    <x-input-text value="{{ $record->street_1 }}"  name="street_1" placeholder="Street 1"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Street 2</label>
                                                    <x-input-text value="{{ $record->street_2 }}"  name="street_2" placeholder="Street 2"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">City </label>
                                                    <x-input-text value="{{ $record->city }}"  name="city" placeholder="City"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Zip Code </label>
                                                    <x-input-text value="{{ $record->zip_code }}"  type="number" name="zip_code" placeholder="Zip Code">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">State </label>
                                                    <x-input-text value="{{ $record->state }}"  name="state" placeholder="State"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Country </label>
                                                    <x-input-text value="{{ $record->country }}"  name="country" placeholder="Country"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Email </label>
                                                    <x-input-text value="{{ $record->email }}"  name="email" placeholder="Email"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone 1:</label>
                                                    <x-input-text value="{{ $record->phone_1 }}"  name="phone_1" placeholder="Phone 1"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone 2: </label>
                                                    <x-input-text value="{{ $record->phone_2 }}"  name="phone_2" placeholder="Phone 2"></x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Fax: </label>
                                                    <x-input-text value="{{ $record->fax }}"  name="fax" placeholder="Fax"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Mobile: </label>
                                                    <x-input-text value="{{ $record->mobile }}"  name="mobile" placeholder="Mobile"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Website Address: </label>
                                                    <x-input-text value="{{ $record->website_address }}"  name="website_address" placeholder="Website Address">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Project </label>
                                                    <x-input-select value="{{ $record->project_id }}"  name="project_id" :records="[]" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Logo </label>
                                                    <x-input-text value="{{ $record->logo }}"  type="file" name="logo" placeholder="Logo">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="container">
                                              <div class="row">
                                                  <div class="row modal-footer">
                                                      <div class="col-md-4 d-flex">
                                                          <a href="{{ route('company.create') }}"
                                                              class="btn btn-outline-danger w-100 me-3">Go back</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <!-- journal form end -->
                                    </div>
                                </div><!-- /.modal-content -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
