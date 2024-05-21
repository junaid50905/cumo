@extends('layouts.master')
@section('title') @endsection
@section('content')
<div class="row apply-view-only">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <img id="head" src="{{ asset('assets/images/header.png') }}" style="width: 100%; display: none;" alt="">

                        <form action="{{ route('referral.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div>
                                    <!-- Seller Details -->
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input">Collection
                                                        Date:</label>
                                                    <x-input-text value="{{ $record->date }}" name="date" type="date"
                                                        placeholder="mm/dd/yyyy">
                                                    </x-input-text><!-- input-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-lastname-input">Teacher:</label>
                                                    <x-input-select :selected="$record->teacher_id" name="teacher_id"
                                                        :records="$teachers">
                                                    </x-input-select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-phoneno-input">Candidate
                                                        ID:</label>
                                                    <x-input-select :selected="$record->candidate_id"
                                                        name="candidate_id" :records="$students">
                                                    </x-input-select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="basicpill-phoneno-input">Referral To
                                                        Dr.</label>
                                                    <x-input-select :selected="$record->doctor_id" name="doctor_id"
                                                        :records="$doctors">
                                                    </x-input-select>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <label for="basicpill-phoneno-input">Experties</label>
                                                <input type="text" readonly class="form-control">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="basicpill-phoneno-input">Organization</label>
                                                <input type="text" readonly class="form-control">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="basicpill-phoneno-input">Contact</label>
                                                <input type="text" readonly class="form-control">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="basicpill-phoneno-input">Address</label>
                                                <textarea class="form-control" readonly rows="1"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="verticalnav-phoneno-input">Description:</label>
                                                    <p>Referral form : diet, psychology, doctor, counseling,
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="verticalnav-phoneno-input">Instruction:</label>
                                                    <p>This form should be used for all contacts with Doctor
                                                        in
                                                        times of illness or
                                                        emergency. The
                                                        completed form should be kept with the client's
                                                        records
                                                        and made available
                                                        only to those who need
                                                        the Information :</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container">
                                     <div class="row">
                                         <div class="row modal-footer">
                                             <div class="col-md-4 d-flex">
                                                 <button onClick="printdiv('div_print');"  class="btn btn-danger w-100 me-3" id="print_button">Print</button>
                                             </div>
                                             <div class="col-md-4 d-flex">
                                                 <a href="{{ route('referral.create') }}"
                                                     class="btn btn-success w-100 me-3" id="goback_button">Go back</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>
                            {{-- <div class="modal-footer">
                                <a href="{{ route('referral.create') }}"
                                    class="btn btn-outline-primary waves-effect waves-light">Go Back</a>
                            </div> --}}
                        </form>

                        

                        <img id="footer" src="{{ asset('assets/images/footer.png') }}" style="width: 100%; display: none;" alt="">
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
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