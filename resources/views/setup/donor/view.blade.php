@extends('layouts.master')
@section('title')
@lang('translation.Starter_Page')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <section>
                            <img id="head" src="{{ asset('assets/images/header.png') }}"
                                style="width: 100%; display: none;" alt="">
                            <div class="row apply-view-only pt-3" style="width: 100%;">
                                <div class="col-4 col-md-4 d-flex">
                                    <b for="example-name-input" class="col-md-4 px-3">Name:</b>
                                    <p>{{ $record->name }}</p>
                                </div>
                                <div class="col-4 col-md-4 d-flex">
                                    <b for="example-email-input" class="col-md-4 px-3">Email:</b>
                                    <p>{{ $record->email }}</p>
                                </div>

                                <div class="col-4 col-md-4 d-flex">
                                    <b for="example-phone-input" class="col-md-4 px-3">Phone No:</b>
                                    <p>{{ $record->phone_2 }}</p>
                                </div>
                            </div>

                            <div class="row d-flex apply-view-only mt-5">
                                <div class="col-6 col-md-6 d-flex">
                                    <b for="example-email-input" class="col-md-4 px-3">Address 1:</b>
                                    <p>{{ $record->address_1 }}</p>
                                </div>

                                <div class="col-6 col-md-6 d-flex">
                                    <b for="example-email-input" class="col-md-4 px-3">Address 2:</b>
                                    <p>{{ $record->address }}</p>
                                </div>

                                <div class="col-6 col-md-6 d-flex">
                                    <b for="example-email-input" class="col-md-4 px-3">City:</b>
                                    <p>{{ $record->city }}</p>
                                </div>

                                <div class="col-6 col-md-6 d-flex">
                                    <b for="example-email-input" class="col-md-4 px-3">Zip Code:</b>
                                    <p>{{ $record->zip_code }}</p>
                                </div>

                                <div class="col-6 col-md-6 d-flex">
                                    <b for="example-email-input" class="col-md-4 px-3">State:</b>
                                    <p>{{ $record->state }}</p>
                                </div>

                                <div class="col-6 col-md-6 d-flex">
                                    <b for="example-email-input" class="col-md-4 px-3">Country:</b>
                                    <p>{{ $record->country }}</p>
                                </div>
                            </div>

                            <div class="row d-flex apply-view-only mt-5">
                                <div class="col-4 col-md-4 d-flex">
                                    <h5>Is Card Allow:</h5>
                                    <input class="form-check-input ms-2" type="checkbox" name="is_card_allow"
                                        value="{{ $record->is_card_allow }}" checked>
                                </div>

                                <div class="col-4 col-md-4 d-flex">
                                    <h5 class="col-md-5 px-3">Advanced:</h5>
                                    <p>{{ $record->advance}}</p>
                                </div>

                                <div class="col-4 col-md-4 d-flex">
                                    <h5>Is Active:</h5>
                                    <input class="form-check-input ms-2" type="checkbox" name="is_active"
                                        value="{{ $record->is_active }}" checked>
                                </div>
                            </div>


                        </section>
                    </div>


                    <img id="footer" src="{{ asset('assets/images/footer.png') }}" style="width: 100%; display: none; position: fixed; bottom: 0;"
                        alt="">

                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="row modal-footer">
                                    <div class="col-md-4 d-flex">
                                        <button onClick="printdiv('div_print');" class="btn btn-danger w-100 me-3"
                                            id="print_button">Print</button>
                                    </div>
                                    <div class="col-md-4 d-flex">
                                        <a href="{{ route('donor.create') }}" class="btn btn-success w-100 me-3"
                                            id="goback_button">Go back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('script')
<script language="javascript">
    function printdiv(printpage) {


            let header_image = document.getElementById('head')
            let footer_image = document.getElementById('footer')
            header_image.style.display = 'block';
            footer_image.style.display = 'block';
            
            let print_button = document.getElementById('print_button')
            print_button.style.display = 'none'
            goback_button.style.display = 'none'
            window.print();
            print_button.style.display = 'inline'
            goback_button.style.display = 'inline'
            header_image.style.display = 'none'
            footer_image.style.display = 'none'
        }
</script>
@endsection