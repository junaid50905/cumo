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
                                                        <li class="w-100"><a href="#Occupational_Therapy"
                                                                data-toggle="tab">
                                                                OT Assessment In
                                                                Computer Trainee</a>
                                                        </li>
                                                        <li class="w-100"><a href="#General" data-toggle="tab">General</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Muscle_Tone" data-toggle="tab">Physical
                                                                skill
                                                                Tone</a></li>
                                                        <li class="w-100"><a href="#Range_of_movement"
                                                                data-toggle="tab">Cognitive, Behavior &
                                                                social Skill</a>
                                                        </li>
                                                        <li class="w-100"><a href="#work" data-toggle="tab">Work
                                                                place adjustability</a></li>
                                                        <li class="w-100"><a href="#signature"
                                                                data-toggle="tab">Signature</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form action="{{ route('ot-assessment.update', $record->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Occupational_Therapy">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <x-input-text type="date" name="date"
                                                                                    value="{{ $record->date }}" />
                                                                            </div><!-- input-group -->
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
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="General">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Type of
                                                                                disability</label>
                                                                            <x-input-text name="type_of_disability"
                                                                                placeholder=""
                                                                                value="{{ $record->type_of_disability }}">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Educational
                                                                                Status</label>
                                                                            <x-input-text name="educational_status"
                                                                                placeholder=""
                                                                                value="{{ $record->educational_status }}">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Muscle_Tone">
                                                            <section>
                                                                <x-input-radio-or-check name="sitting_posture_maintain"
                                                                    label="Sitting posture maintain" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->sitting_posture_maintain">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="oint_mobility_shoulder"
                                                                    label="oint mobility shoulder" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->oint_mobility_shoulder">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="elbow" label="Elbow"
                                                                    :records="$otassessmentConstants::$maintain" :checked="$record->elbow">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="wrist" label="Wrist"
                                                                    :records="$otassessmentConstants::$maintain" :checked="$record->wrist">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="finger" label="Finger"
                                                                    :records="$otassessmentConstants::$maintain" :checked="$record->finger">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="body_flexibility"
                                                                    label="Body flexibility (Trunk)" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->body_flexibility">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="dynamic_balance_maintain"
                                                                    label="Dynamic balance maintain" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->dynamic_balance_maintain">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="eye_hand_co_ordination"
                                                                    label="Eye hand co ordination to press the key board button"
                                                                    :records="$otassessmentConstants::$maintain" :checked="$record->eye_hand_co_ordination">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="mouse_operater"
                                                                    label="Mouse operater" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->mouse_operater">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="muscle_strength_in_hand"
                                                                    label="Muscle strength in hand and finger"
                                                                    :records="$otassessmentConstants::$strength" :checked="$record->muscle_strength_in_hand">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="hand_function"
                                                                    label="Hand function" :records="$otassessmentConstants::$ability"
                                                                    :checked="$record->hand_function">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="grasp" label="Grasp"
                                                                    :records="$otassessmentConstants::$ability" :checked="$record->grasp">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="manipulation"
                                                                    label="Manipulation" :records="$otassessmentConstants::$ability"
                                                                    :checked="$record->manipulation">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="opp_one" label="Opposition"
                                                                    :records="$otassessmentConstants::$ability" :checked="$record->opp_one">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="transfer" label="Transfer"
                                                                    :records="$otassessmentConstants::$ability" :checked="$record->transfer">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="weight_carry"
                                                                    label="Weight Carry" :records="$otassessmentConstants::$ability"
                                                                    :checked="$record->weight_carry">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="sensory" label="Sensory"
                                                                    :records="$otassessmentConstants::$hyper" :checked="$record->sensory">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="tactile" label="Tactile "
                                                                    :records="$otassessmentConstants::$hyper" :checked="$record->tactile">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="visual" label="Visual"
                                                                    :records="$otassessmentConstants::$hyper" :checked="$record->visual">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="auditory" label="Auditory"
                                                                    :records="$otassessmentConstants::$hyper" :checked="$record->auditory">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Range_of_movement">
                                                            <section>
                                                                <x-input-radio-or-check name="sitting_habit_in_specific"
                                                                    label="Sitting habit in specific place"
                                                                    :records="$otassessmentConstants::$time" :checked="$record->sitting_habit_in_specific">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="keep_attention"
                                                                    label="Keep attention/concentration to work"
                                                                    :records="$constants::$yesNoEn" :checked="$record->keep_attention">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="follow_instruction"
                                                                    label="Follow instruction" :records="$otassessmentConstants::$follow"
                                                                    :checked="$record->follow_instruction">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="response_skill"
                                                                    label="Response skill" :records="$otassessmentConstants::$response"
                                                                    :checked="$record->response_skill">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="understand_or_follow"
                                                                    label="Understand or follow the work sequence"
                                                                    :records="$otassessmentConstants::$maintain" :checked="$record->understand_or_follow">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="interest_of_work"
                                                                    label="Interest of work" :records="$otassessmentConstants::$show"
                                                                    :checked="$record->interest_of_work">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="information_receives_ability"
                                                                    label="Information receives ability" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->information_receives_ability">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="memorizing_the_information"
                                                                    label="Memorizing the information" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->memorizing_the_information">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="awareness_of_risk_hazard"
                                                                    label="Awareness of Risk & hazard" :records="$otassessmentConstants::$maintain"
                                                                    :checked="$record->awareness_of_risk_hazard">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="opposition_two"
                                                                    label="Sitting chair" :records="$otassessmentConstants::$appropriate"
                                                                    :checked="$record->opposition_two">
                                                                </x-input-radio-or-check>

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="work">
                                                            <section>
                                                                <x-input-radio-or-check name="working_table"
                                                                    label="Working table/ desk" :records="$otassessmentConstants::$appropriate"
                                                                    :checked="$record->working_table">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="Keyboard_and_mouse"
                                                                    label="Keyboard and mouse place" :records="$otassessmentConstants::$appropriate"
                                                                    :checked="$record->Keyboard_and_mouse">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="monitor_place"
                                                                    label="Monitor place" :records="$otassessmentConstants::$appropriate"
                                                                    :checked="$record->monitor_place">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="cpu"
                                                                    label="CPU, Stabilizer, and multi pluck place"
                                                                    :records="$otassessmentConstants::$appropriate" :checked="$record->cpu">
                                                                </x-input-radio-or-check>

                                                                <x-input-radio-or-check name="communication_style"
                                                                    label="Communication Style" :records="$otassessmentConstants::$sign"
                                                                    :checked="$record->communication_style">
                                                                </x-input-radio-or-check>

                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="signature">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Therapist
                                                                                comment’s/ advice:</label>
                                                                            <x-input-text name="therapist_comments"
                                                                                placeholder=""
                                                                                value="{{ $record->therapist_comments }}">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Signature
                                                                                of Therapist</label>
                                                                            <x-input-text type="file"
                                                                                name="signature_of_therapist"
                                                                                value="{{ $record->signature_of_therapist }}" />
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Name
                                                                                and
                                                                                date</label>
                                                                            <x-input-text name="name_and_date"
                                                                                placeholder=""
                                                                                value="{{ $record->name_and_date }}">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Organization
                                                                                Name</label>
                                                                            <x-input-text name="organization_Name"
                                                                                placeholder=""
                                                                                value="{{ $record->organization_Name }}">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-check">
                                                                        <div class="me-5 ">
                                                                            <label class="form-check-label pb-2">Signature
                                                                                of Supervisor</label>
                                                                            <x-input-text class="form-control"
                                                                                type="file" id="formFile"
                                                                                name="signature_of_supervisor"
                                                                                value="{{ $record->signature_of_supervisor }}" />
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Name</label>
                                                                            <x-input-text name="name" placeholder=""
                                                                                value="{{ $record->name }}">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <div class="me-5 ">
                                                                            <label
                                                                                class="form-check-label pb-2">Designation</label>
                                                                            <x-input-text name="designation"
                                                                                placeholder=""
                                                                                value="{{ $record->designation }}">
                                                                            </x-input-text>
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
                                                            <input type="submit"
                                                                class='btn btn-finish btn-fill btn-danger'
                                                                wire:click='save' value='Finish' />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection
