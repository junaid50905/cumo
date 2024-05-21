@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
    <style>
        .wizard .steps>ul>li a {
            padding-right: 0 !important;
        }

        .wizard .steps>ul>li a {
            padding-left: 5px !important;
        }
    </style>
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
                                        <div class="card_stap  wizard-card row" data-color="red" id="wizard">
                                            <div class="col-sm-3 col-md-3">
                                                <div id="wizard-navigation">
                                                    <ul class="wizard-navigation">
                                                        <li class="w-100"><a href="#Social_Communication"
                                                                data-toggle="tab">Individual Risk Assessment Form</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Risk Assessment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9" id="questionSerial">
                                                <form action="">
                                                    <div class="tab-content apply-view-only">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <x-input-text name="collection_date" type="date"
                                                                                placeholder="mm/dd/yyyy"
                                                                                value="{{ $record->collection_date }}">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers" :selected="$record->teacher_id" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select name="student_id"
                                                                                :records="$students" :selected="$record->student_id" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <x-input-radio-or-check name="hazard_spotted"
                                                                    type="checkbox" label="Hazard spotted/Type"
                                                                    :records="$IRAConstants::$riskAssessment" :isVertical="false" :checked="$record->hazard_spotted">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Cause of Hazzard</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="causeof_hazzard"
                                                                                    placeholder=""
                                                                                    value="{{ $record->causeof_hazzard }}">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Accident/ incident?"
                                                                    :records="$IRAConstants::$accidentOrIncident" :checked="$record->accident_or_incident">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Possible Concerns</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="possible_concerns"
                                                                                    placeholder=""
                                                                                    value="{{ $record->possible_concerns }}">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Risk Rating (Overall risk level
                                                                                identified: 1-10 )</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="risk_rating"
                                                                                    placeholder=""
                                                                                    value="{{ $record->risk_rating }}">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Action to Reduce Hazard</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="action_to_reduce_hazard"
                                                                                    placeholder=""
                                                                                    value="{{ $record->action_to_reduce_hazard }}">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Level of risk (1-25)</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="level_of_risk"
                                                                                    placeholder=""
                                                                                    value="{{ $record->level_of_risk }}">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <x-input-radio-or-check name="likelihood" label="Likelihood"
                                                                    :records="$IRAConstants::$likelihood" :checked="$record->likelihood">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}
                                                                <x-input-radio-or-check name="consequences"
                                                                    label="Consequences" :records="$IRAConstants::$consu"
                                                                    :checked="$record->consequences">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Staff signature</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="staff_signature"
                                                                                    placeholder="" type="file"
                                                                                    value="{{ $record->staff_signature }}" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Staff name</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="staff_name"
                                                                                    placeholder=""
                                                                                    value="{{ $record->staff_name }}">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Signature of support worker</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text type="file"
                                                                                    name='signature_of_support_worker'
                                                                                    value="{{ $record->signature_of_support_worker }}" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>Support worker name</h5>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="support_worker_name"
                                                                                    placeholder=""
                                                                                    value="{{ $record->support_worker_name }}">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
    <!-- end row -->
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
    <script>
        const parent = document.querySelector('#questionSerial');
        const children = parent.querySelectorAll('h5 > span');
    
        for (let i = 0; i < children.length; i++) {
        children[i].innerText += '('+ (i+1) +')';
        }
    </script>
@endsection
