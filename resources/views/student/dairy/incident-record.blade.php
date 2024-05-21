@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6">
                        <h4 class="card-title">STUDENT QAS</h4>
                    </div>
                    <div class="col-6 text-end  mb-3">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=""><i class="fa fa-user"></i> Profile</button>
                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i>
                            ADD</button>
                    </div>
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
                    <div class="table-rasponseve">
                        <table class="table table-bordered w-100">
                            <thead>
                                <tr class="table-primary">
                                    <th>Collection Date</th>
                                    <th>Student Name</th>
                                    <th>Collected By</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2022-05-17</td>
                                    <td>Abdur Rahman Sajid</td>
                                    <td>Ohidul Hassan</td>
                                    <td><small>Create: Ohidul Hassan @ 2022-05-17 15:50:24</small></td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2"
                                            data-bs-toggle="modal" data-bs-toggle="modal"
                                            data-bs-target=".bs-example-modal-lg">
                                            <i class=" fas fa-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2"
                                            data-bs-toggle="modal" data-bs-toggle="modal"
                                            data-bs-target=".bs-example-modal-lg">
                                            <i class="fas fa-pen"></i></button>
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
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Incident Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <!-- MultiStep Form -->
                <div class="">
                    <!--   Big container   -->
                    <div class="container">
                        <div class="row">
                            {{-- <div class="col-sm-3" id="horizontal_nev"></div> --}}
                            <div class="col-sm-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#incident_record_first"
                                                            data-toggle="tab">Incident
                                                            Record</a></li>
                                                    <li class="w-100"><a href="#incident_record_second"
                                                            data-toggle="tab">Incident
                                                            Record</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form action="" method="">
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="incident_record_first">
                                                        <section>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <x-input-text name="date"
                                                                                    placeholder="dd/mm/yyyy"
                                                                                    type="date">
                                                                                </x-input-text>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers"></x-input-select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="incident_record_second">
                                                        <section>
                                                            <x-input-radio-or-check name="" label="Incident Type"
                                                                :records="$incidentConstant::$incidentType">
                                                            </x-input-radio-or-check>
                                                            <div class="row border-top py-2">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Date and
                                                                            Time</label>
                                                                        <x-input-text name="date"
                                                                            placeholder="dd/mm/yyyy" type="date">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label
                                                                            class="form-check-label pb-2">Setting/Places</label>
                                                                        <x-input-text name="setting"
                                                                            placeholder="Setting">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Duration (
                                                                            in
                                                                            Minutes)</label>
                                                                        <x-input-text name="duration"
                                                                            placeholder="duration">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5>Action Taken?</h5>
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="formRadios">
                                                                                    <label
                                                                                        class="form-check-label">Yes</label>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="formRadios">
                                                                                    <label
                                                                                        class="form-check-label">No</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check name="what_is_the_previous"
                                                                type="checkbox"
                                                                label="What is the Previous cause of Incident/Antecedent Behavior?"
                                                                :records="$incidentConstant::$activityType"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                </div>
                                                <div class="wizard-footer d-flex justify-content-between">
                                                    <div class="pull-left">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-previous'
                                                            name='previous' value='Previous' />
                                                    </div>
                                                    <div class="pull-right">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-next'
                                                            name='next' value='Next' />
                                                        <input type='button' class='btn btn-finish btn-fill btn-danger'
                                                            name='finish' value='Finish' />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </div>
                        </div> <!-- row -->
                    </div> <!--  big container -->
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

@endsection

@section('script')

<!-- Custom step -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>

@endsection
