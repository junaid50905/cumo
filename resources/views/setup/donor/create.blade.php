@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Donor setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Donor List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <section>
                                <form action="{{ route('donor.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="row">
                                                    <div class="row border border-info my-3">
                                                        <div class="col-6">
                                                            <div class="mb-2 row mt-5">
                                                                <label for="example-text-input"
                                                                    class="col-md-4 col-form-label">Name:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="name"
                                                                        placeholder="Enter Donor Name Here">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-5 row">
                                                                <label for="example-text-input"
                                                                    class="col-md-4 col-form-label">Phone No 1:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="phone_1"
                                                                        placeholder="Phone One Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2 row mt-5">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Email:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="email" type="email"
                                                                        placeholder="Enter Email Address Here">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-5 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Phone No 2: </label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="phone_2"
                                                                        placeholder="Phone Two Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row border border-info my-3">
                                                        <div class="col-6">
                                                            <div class="mb-2 row mt-5">
                                                                <label for="example-email-input"
                                                                    class="col-md-4 col-form-label">Address 1:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="address_1" placeholder="Address 1">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 row">
                                                                <label for="example-email-input"
                                                                    class="col-md-4 col-form-label">City:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="city"
                                                                        placeholder="City Name Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-5 row">
                                                                <label for="example-url-input"
                                                                    class="col-md-4 col-form-label">State:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="state"
                                                                        placeholder="State Name Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2 row mt-5">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Address 2:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="address"
                                                                        placeholder="Enter Address Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Zip Code:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text type="number" name="zip_code"
                                                                        placeholder="Zip Code"></x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-5 row">
                                                                <label for="example-search-input"
                                                                    class="col-md-4 col-form-label">Country:</label>
                                                                <div class="col-md-8">
                                                                    <x-input-text name="country"
                                                                        placeholder="Country Name Here"></x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row my-2 border border-info ">
                                                            <div class="col-md-3 mt-4">
                                                                <h5 class="mb-5">Is Card Allow:
                                                                    <input class="form-check-input ms-2" type="checkbox"
                                                                    name="is_card_allow" checked>
                                                                </h5>
                                                            </div>
                                                            <label for="example-search-input"
                                                                class="col-md-2 col-form-label mt-4">
                                                                <h5>Advanced</h5>
                                                            </label>
                                                            <div class="col-md-4  mt-4">
                                                                <x-input-text name="advance"
                                                                    placeholder="Advanced Amount"></x-input-text>
                                                            </div>
                                                            <div class="col-md-3 mt-1 mt-4">
                                                                <h5 class="mb-5">Is Active:
                                                                    <input class="form-check-input ms-2" type="checkbox"
                                                                        name="is_active" checked>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-success waves-light">
                                                        Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <livewire:donor-list />
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
