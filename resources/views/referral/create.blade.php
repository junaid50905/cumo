@extends('layouts.master')

@section('title') @endsection

@section('css')

@endsection

@section('content')


<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#add" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="add" role="tabpanel">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
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
                                                            <x-input-text name="date" type="date"
                                                                placeholder="mm/dd/yyyy">
                                                            </x-input-text><!-- input-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="basicpill-lastname-input">Teacher:</label>
                                                            <x-input-select name="teacher_id" :records="$teachers">
                                                            </x-input-select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Candidate
                                                                ID:</label>
                                                            <x-input-select name="candidate_id" :records="$students">
                                                            </x-input-select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Referral To
                                                                Dr.</label>
                                                            <x-input-select name="doctor_id" :records="$doctors">
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
                                    <div class="modal-footer">
                                        <button type="submit"
                                            class="btn btn-outline-primary waves-effect waves-light">Referral</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <div class="tab-pane" id="list" role="tabpanel">
                        <livewire:referral-form-list />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- form wizard init -->
<script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>

@endsection