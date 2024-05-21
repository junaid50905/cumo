@extends('layouts.master')
@section('title') @lang('translation.Tabs_&_Accordions') @endsection
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Supplier Type Setup</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Supplier Type List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <section>
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="card-body">
                                                        <div class="mb-2 row">
                                                                <label for="example-text-input" class="col-md-4 col-form-label text-end">Name</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="name"  placeholder="Enter your supplier name"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Contact Person</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="contact_person" type="search" placeholder="Contact Person Name Here"></x-input-text>
                                                            </div>
                                                         </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-email-input" class="col-md-4 col-form-label text-end">Address 1</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="address_1" type="email" placeholder="Enter Address Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-email-input" class="col-md-4 col-form-label text-end">City</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="city" placeholder="City Name Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-5 row">
                                                            <label for="example-url-input" class="col-md-4 col-form-label text-end">State</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="state" placeholder="State Name Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-text-input" class="col-md-4 col-form-label text-end">Phone 1</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="phone" placeholder="Phone One Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Fax</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="fax" placeholder="Enter Fax Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="card-body">
                                                        <div class="mb-2  row">
                                                            <label class="col-md-4 col-form-label text-end">Type</label>
                                                            <div class="col-md-8">
                                                                <x-input-select name="type" :records="[]" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label for="example-text-input" class="col-md-4 col-form-label text-end">Designation</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="designation" placeholder="Enter designation here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        {{-- Address --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Address</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="address" placeholder="Enter  Address two Here"></x-input-text>
                                                            </div>
                                                        </div> 
                                                        {{-- Zip Code --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end ">Zip Code</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="zip_code" type="number" placeholder="Enter Zip code here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        {{-- Country --}}
                                                        <div class="mb-5 row">
                                                            <label for="example-search-input text-end" class="col-md-4 col-form-label text-end">Country</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="country" placeholder="Country Name Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        {{-- Phone2 --}}
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Phone2 </label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="phone_2" type="number" placeholder="Phone Two Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 row">
                                                            <label for="example-search-input" class="col-md-4 col-form-label text-end">Email</label>
                                                            <div class="col-md-8">
                                                                <x-input-text name="email" placeholder="Email Address Here"></x-input-text>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- note --}}
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-2 row">
                                                        <label for="example-search-input" class="col-md-2 col-form-label text-end ps-5">Note</label>
                                                        <div class="col-md-6">
                                                            <x-input-text name="note"></x-input-text>
                                                        </div>
                                                        <div class="form-check col-md-3 ms-5">
                                                            <label class="form-check-label ms-3" for="formCheck2">
                                                                Is Active
                                                            </label>
                                                            <input class="form-check-input" type="checkbox" id="formCheck2" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- note end  --}}
                                        <div class="d-flex justify-content-end ">
                                            <div class="me-2"> 
                                                <button class="btn btn-outline-danger waves-effect waves-light" type="submit">RESET</button>
                                            </div>
                                            <div class="ms-2">
                                                <button class="btn btn-outline-success waves-effect waves-light" type="submit">SAVE</button>
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
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                              <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                                  class="form-control form-control-sm form-select form-select-sm">
                                                  <option value="10">10</option>
                                                  <option value="25">25</option>
                                                  <option value="50">50</option>
                                                  <option value="100">100</option>
                                                </select> entries
                                              </label>
                                            </div>
                                            <div class="col-sm-12 col-md-6 text-end">
                                              <label style="display: inline-flex;align-items: center;">Search:
                                                  <x-input-text type="search" name="search" />
                                              </label>
                                            </div>
                                          </div>
                                          <div class="table-responsive">
                                            <table class="table w-100 table-bordered">
                                              <thead>
                                                <tr class="table-primary">
                                                  <th> Name</th>
                                                  <th> Description</th>
                                                  <th> Log</th>
                                                  <th> Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <tr>
                                                      <td>Whole Sell</td>
                                                      <td></td>
                                                      <td>Create: Shonod Digital @ 2018-12-01 17:51:02
                                                          There is no update record</td>
                                                   <td>
                                                       <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                        <i class="mdi mdi-pencil"></i>
                                                      </button>
                                                      <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                                        <i class="fas fa-trash-alt"></i>
                                                      </button> 
                                                   </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                          <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                              Showing 1 to 2 of 2 entries
                                            </div>
                                            <div class="col-sm-12 col-md-6 text-end">
                                              <nav>
                                                <ul class="pagination" style="justify-content: end;">
                                                  <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                  </li>
                                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item active">
                                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                  </li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                  </li>
                                                </ul>
                                              </nav>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->     
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection