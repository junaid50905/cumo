@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="case-histroy" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#Social_Communication"
                                                            data-toggle="tab">Incident
                                                            Record step 1</a></li>
                                                    <li class="w-100"><a href="#Pragmatic_Objective"
                                                            data-toggle="tab">Incident
                                                            Record step 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9 apply-view-only">
                                            <form action="{{ route('incident-record.update', $record->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Social_Communication">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <div class="input-group" id="datepicker2">
                                                                            <x-input-text name="collection_date"
                                                                                placeholder="dd/mm/yyyy" type="date"
                                                                                value="{{ $record->collection_date }}" />
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select name="teacher_id"
                                                                            :records="$teachers"
                                                                            :selected="$record->teacher_id" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Candidate ID:</label>
                                                                        <x-input-select name="candidate_id"
                                                                            :records="$students"
                                                                            :selected="$record->candidate_id" />
                                                                    </div>
                                                                </div>                
                                                            </div>

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Pragmatic_Objective">
                                                        <section>
                                                            <x-input-radio-or-check label="Incident Type"
                                                                :records="$incidentConstant::$incidentType"
                                                                :checked="$record->incident_type">
                                                            </x-input-radio-or-check>
                                                            <div class="row border-top py-2">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Date and
                                                                            Time</label>
                                                                        <x-input-text name="date_and_time"
                                                                            placeholder="dd/mm/yyyy" type="date"
                                                                            value="{{ $record->date_and_time }}">
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
                                                                            placeholder="Setting"
                                                                            value="{{ $record->setting }}">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Duration (
                                                                            in Minutes)</label>
                                                                        <x-input-text name="duration"
                                                                            placeholder="duration"
                                                                            value="{{ $record->duration }}">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check label="Action Taken?"
                                                                :records="$constants::$yesNoEn" :isVertical="false"
                                                                :checked="$record->action_taken">
                                                            </x-input-radio-or-check>
                                                            <x-input-radio-or-check type="checkbox"
                                                                name="previous_causes"
                                                                label="What is the Previous cause of Incident/Antecedent Behavior?"
                                                                :records="$incidentConstant::$activityType"
                                                                :isVertical="false" :checked="$record->previous_causes"
                                                                multiple="true">
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
                                                        <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                            value='Finish' />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Custom step -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection