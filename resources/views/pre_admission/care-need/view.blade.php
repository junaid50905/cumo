@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection
@section('content')
<div class="row apply-view-only">
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-12">
                        <!-- Wizard container -->
                        <div class="wizard-container">
                            <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                <div class="col-sm-3 col-md-3">
                                    <div id="wizard-navigation">
                                        <ul class="wizard-navigation">
                                            <li class="w-100"><a href="#case_history_init" data-toggle="tab">CARE
                                                    Needs</a>
                                            </li>
                                            <li class="w-100"><a href="#referral_information"
                                                    data-toggle="tab">Assessment</a>
                                            </li>
                                            <li class="w-100"><a href="#Personal_Care_Needs" data-toggle="tab">Personal
                                                    Care Needs</a>
                                            </li>
                                            <li class="w-100"><a href="#Medical_history" data-toggle="tab">Medical
                                                    history</a></li>
                                            <li class="w-100"><a href="#Physical_Health_Needs"
                                                    data-toggle="tab">Physical Health Needs</a>
                                            </li>
                                            <li class="w-100"><a href="#Social_Needs" data-toggle="tab">Social
                                                    Needs</a></li>
                                            <li class="w-100"><a href="#Signature" data-toggle="tab">Signature</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                    <form action="{{route('care-need.update', $record->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="tab-content" id="questionSerial">
                                            <div class="tab-pane" id="case_history_init">
                                                <section>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label>Collection Date:</label>
                                                                <x-input-text name="collection_date"
                                                                    value="{{ $record->collection_date }}" type="date"
                                                                    placeholder="mm/dd/yyyy">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label>Teacher:</label>
                                                                <x-input-select name="teacher_id" :records="$teachers"
                                                                    :selected="$record->teacher_id">
                                                                </x-input-select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label>Candidate ID:</label>
                                                                <x-input-select :records="$students" name="student_id"
                                                                    :selected="$record->student_id">
                                                                </x-input-select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label>Instruction:</label>
                                                                    <p>This form will be used after
                                                                        admission</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="referral_information">
                                                <section>
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Instruction:</h5>
                                                                <div class="form-check d-flex p-2">
                                                                    <h6>Enter Assessment</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Case History form submitted?</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->

                                                    <x-input-radio-or-check
                                                        :checked="$record->has_the_individual_had_a_previous_needs_assessment"
                                                        label="Has the individual had a previous needs assessment?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check
                                                        :checked="$record->if_so_has_a_copy_been_obtained"
                                                        name="if_so_has_a_copy_been_obtained"
                                                        label="If so, has a copy been obtained?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->psychological_assessment"
                                                        label="Psychological assessment"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->if_yes_report_attached"
                                                        name="if_yes_report_attached" label="if Yes, report attached"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->functional_assessment"
                                                        label="Functional Assessment" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->sensory_checklist"
                                                        label="Sensory checklist" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>


                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->social_communication"
                                                        label="Social Communication" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    <x-input-radio-or-check :checked="$record->Therapy_assessment"
                                                        name="Therapy_assessment"
                                                        label="Therapy assessment: OT, SLT, Physio"
                                                        :records="$careConstants::$therapyAssessment"
                                                        multiline="true" />
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Personal_Care_Needs">
                                                <section>
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Instruction:</h5>
                                                                <div class="form-check d-flex p-2">
                                                                    <h6>Enter Personal Care Needs</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <x-input-radio-or-check :checked="$record->self_understanding"
                                                        type="checkbox" :multiple="true" label="Self-understanding"
                                                        :records="$careConstants::$selfUnderstanding"
                                                        :isVertical="false"></x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->eat_drink_swallow"
                                                        name="eat_drink_swallow" type="checkbox" :multiple="true"
                                                        label="Eat /drink/ swallow"
                                                        :records="$careConstants::$eatDrinking" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <div class="row border-top py-2 mt-3">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>How many fingers use to eat</h5>
                                                                <div class="mb-2">
                                                                    <x-input-text name="how_many_fingers_use_to_eat"
                                                                        value="{{ $record->how_many_fingers_use_to_eat }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->food_allergy"
                                                        label="Food allergy" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    <div class="mt-3">
                                                        <label>Give details</label>
                                                        <textarea class="form-control" rows="1"
                                                            placeholder="Enter Answer"></textarea>
                                                    </div>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->any_special_diet"
                                                        label="Any special diet?" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->preparation_of_meal"
                                                        label="Preparation of meal" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->washing_and_bathing"
                                                        type="checkbox" :multiple="true" label="Washing and bathing"
                                                        :records="$careConstants::$washingBathing" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->brushing_teeth"
                                                        name="brushing_teeth" type="checkbox" :multiple="true"
                                                        label="Brushing teeth/mouth care"
                                                        :records="$careConstants::$teethMouthCare" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->

                                                    <x-input-radio-or-check :checked="$record->hair_cut"
                                                        label="Hair Cut" :records="$careConstants::$selfNeedHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->shaving" label="Shaving"
                                                        :records="$careConstants::$selfNeedHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->foot_care"
                                                        label="Foot care" :records="$careConstants::$selfNeedHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->nails" label="Nails"
                                                        :records="$careConstants::$selfNeedHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->toilet_training"
                                                        type="checkbox" :multiple="true" label="Toilet Training"
                                                        :records="$careConstants::$toiletTraining" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->

                                                    <!-- end row -->
                                                    <x-input-radio-or-check
                                                        :checked="$record->separate_type_of_toilet_need"
                                                        label="Separate type of toilet Need"
                                                        :records="$careConstants::$urinStool">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->dressing" type="checkbox"
                                                        :multiple="true" label="Dressing"
                                                        :records="$careConstants::$dressing" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->getting_up"
                                                        name="getting_up" label="Getting up/going to bed"
                                                        :records="$careConstants::$yesNoHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->managing_own_money"
                                                        label="Managing own money"
                                                        :records="$careConstants::$yesNoHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->shopping"
                                                        label="Shopping" :records="$careConstants::$yesNoHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->transportation"
                                                        label="Transportation" :records="$careConstants::$yesNoHelp">
                                                    </x-input-radio-or-check>

                                                    <!-- end row -->
                                                    <div class="row border-top py-2 mt-3">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Other personal care/activities of daily
                                                                    living
                                                                </h5>
                                                                <div class="mb-2">
                                                                    <x-input-text
                                                                        value="{{ $record->other_personal_care_of_daily_living }}"
                                                                        name="other_personal_care_of_daily_living"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->intrapersonal_skills"
                                                        type="checkbox" :multiple="true" label="Intrapersonal skills"
                                                        :records="$careConstants::$interpersonal" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->

                                                    <x-input-radio-or-check :checked="$record->communication_skills"
                                                        type="checkbox" :multiple="true" label="Communication Skills"
                                                        :records="$careConstants::$communicationSkill"
                                                        :isVertical="false"></x-input-radio-or-check>
                                                    <!-- end row -->

                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Medical_history">
                                                <section>
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Instruction:</h5>
                                                                <div class="form-check d-flex p-2">
                                                                    <h6>Enter Medical history</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row border-top py-2 mt-3">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span> Details of current medical treatment
                                                                </h5>
                                                                <div class="mb-2">
                                                                    <x-input-text
                                                                        value="{{ $record->details_of_current_medical_treatment }}"
                                                                        name="details_of_current_medical_treatment"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row border-top py-2 mt-3">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span> Details of past/long term medical
                                                                    conditions
                                                                </h5>
                                                                <div class="mb-2">
                                                                    <x-input-text
                                                                        value="{{ $record->details_of_past_or_long_term_medical_conditions }}"
                                                                        name="details_of_past_or_long_term_medical_conditions"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->managing_medication"
                                                        label="Managing medication" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check
                                                        :checked="$record->does_the_individual_have_any_history_of_the_following"
                                                        type="checkbox" :multiple="true"
                                                        label="Does the individual have any history of the following?"
                                                        :records="$careConstants::$history" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->

                                                    <!-- end row -->
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span> Vaccination records?</h5>
                                                                <div class="mt-3">
                                                                    <div>
                                                                        <x-input-text
                                                                            value="{{ $record->vaccination_records }}"
                                                                            name="vaccination_records"
                                                                            value="{{ $record->vaccination_records }}"
                                                                            type="file">
                                                                        </x-input-text>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- ---- --}}
                                                    <div class="row border-top py-2 mt-3">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span> More information</h5>
                                                                <div class="mb-2">
                                                                    <x-input-text
                                                                        value="{{ $record->more_information }}"
                                                                        name="more_information"
                                                                        value="{{ $record->more_information }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- -------- --}}
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span> Any other records, Please attach</h5>
                                                                <div class="mt-3">
                                                                    <div>
                                                                        <x-input-text
                                                                            value="{{ $record->any_other_records }}"
                                                                            name="any_other_records"
                                                                            value="{{ $record->any_other_records }}"
                                                                            type="file">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- -------- --}}
                                                    <div class="row border-top py-2 mt-3">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span> Enter more info , if any</h5>
                                                                <div class="mb-2">
                                                                    <x-input-text
                                                                        value="{{ $record->enter_more_info_if_any }}"
                                                                        name="enter_more_info_if_any"
                                                                        value="{{ $record->enter_more_info_if_any }}"
                                                                        placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Physical_Health_Needs">
                                                <section>
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Instruction:</h5>
                                                                <div class="form-check d-flex p-2">
                                                                    <h6>Enter Physical Health Needs</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <x-input-radio-or-check :checked="$record->sight_aids_required"
                                                        label="Sight Aids required?" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check :checked="$record->hearing_aids_required"
                                                        label="Hearing aids required?" :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check
                                                        :checked="$record->mobility_or_walking_aids_required"
                                                        label="Mobility/Walking Aids required?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check
                                                        :checked="$record->handling_objects_or_grip_aids_required"
                                                        label="Handling objects/Grip Aids required?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check
                                                        :checked="$record->wheel_chair_or_any_other_aids_required"
                                                        label="Wheel chair /any other Aids required?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}
                                                    <x-input-radio-or-check
                                                        :checked="$record->physical_pressure_areas_aids_required"
                                                        label="Physical Pressure areas Aids required?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}
                                                    <x-input-radio-or-check
                                                        :checked="$record->weight_or_aids_or_care_required"
                                                        label="Weight/Aids/Care required?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}
                                                    <x-input-radio-or-check :checked="$record->breathing_aids_required"
                                                        label="Breathing Aids required?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}
                                                    <x-input-radio-or-check
                                                        :checked="$record->oral_health_aids_required"
                                                        label="Oral health Aids required?"
                                                        :records="$constants::$yesNoEn">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}
                                                    <x-input-radio-or-check :checked="$record->any_sensory_issues"
                                                        name="any_sensory_issues" type="checkbox" :multiple="true"
                                                        label="Any sensory issues? ( Tick, if the child has it)"
                                                        :records="$careConstants::$sensoryIssue" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->gross_motor_skills"
                                                        type="checkbox" :multiple="true" label="Gross Motor Skills"
                                                        :records="$careConstants::$grossMotorSkill" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->fine_motor_skills"
                                                        type="checkbox" :multiple="true" label="Fine Motor Skills"
                                                        :records="$careConstants::$fineMotorSkill" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->eye_movements"
                                                        type="checkbox" :multiple="true" label="Eye Movements"
                                                        :records="$careConstants::$eyeMovement" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check :checked="$record->oral_motor_activities"
                                                        type="checkbox" :multiple="true" label="Oral-motor activities"
                                                        :records="$careConstants::$oralMotoractivities"
                                                        :isVertical="false"></x-input-radio-or-check>
                                                    <!-- end row -->
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Social_Needs">
                                                <section>
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Instruction:</h5>
                                                                <div class="form-check d-flex p-2">
                                                                    <h6>Please Enter Social Needs</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <x-input-radio-or-check :checked="$record->relationship_management"
                                                        type="checkbox" :multiple="true" label="Relationship management"
                                                        :records="$careConstants::$relationshipManagement"
                                                        :isVertical="false"></x-input-radio-or-check>
                                                    <!-- end row -->
                                                    <x-input-radio-or-check
                                                        :checked="$record->social_communication_skills" type="checkbox"
                                                        :multiple="true" label="Social Communication skills"
                                                        :records="$careConstants::$socialSkill" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->

                                                    <x-input-radio-or-check
                                                        :checked="$record->demonstrating_respect_for_self__others"
                                                        label="Demonstrating respect for self & others"
                                                        :records="$constants::$yesNoEn" secondaryInputLabel="Explain"
                                                        secondaryInputValue="{{$record->demonstrating_respect_for_self__others_secondary ?? '' }}">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check
                                                        :checked="$record->Recognizing_Managing_basic_Emotions"
                                                        name="Recognizing_Managing_basic_Emotions"
                                                        label="Recognizing / Managing basic Emotions"
                                                        :records="$constants::$yesNoEn"
                                                        secondaryInputLabel="Give details, if any"
                                                        secondaryInputValue="{{$record->Recognizing_Managing_basic_Emotions_secondary ?? '' }}">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check :checked="$record->transition_and_changes"
                                                        label="Transition and Changes" :records="$constants::$yesNoEn"
                                                        secondaryInputLabel="Give details, if any"
                                                        secondaryInputValue="{{$record->transition_and_changes_secondary ?? '' }}">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}

                                                    <x-input-radio-or-check :checked="$record->work_habit"
                                                        type="checkbox" :multiple="true" label=" Work Habit"
                                                        :records="$careConstants::$workHabit" :isVertical="false">
                                                    </x-input-radio-or-check>
                                                    <!-- end row -->

                                                    <x-input-radio-or-check :checked="$record->additional_information"
                                                        label="Additional information" :records="$constants::$yesNoEn"
                                                        secondaryInputLabel="Give details, if any"
                                                        secondaryInputValue="{{$record->additional_information_secondary ?? '' }}">
                                                    </x-input-radio-or-check>
                                                    {{-- end row --}}
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="Signature">
                                                <section>
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5>Instruction:</h5>
                                                                <div class="form-check d-flex p-2">
                                                                    <h6>Enter Signature information</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row border-top py-2">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span> I confirmed that all above
                                                                    information I
                                                                    have provided are correct
                                                                    and genuine. For any
                                                                    wrong and false information, may lead
                                                                    cancellation of the admission.</h5>
                                                                <div class="mt-3">
                                                                    <div>
                                                                        <x-input-text name="confirmed_all_information"
                                                                            value="{{ $record->confirmed_all_information }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row border-top py-2 mt-3">
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="m-0">
                                                                <h5><span></span>Name of parent/ guardian</h5>
                                                                <div class="mb-2">
                                                                    <x-input-text name="name_of_parent"
                                                                        value="{{ $record->name_of_parent }}"
                                                                        placeholder="">
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
                                                    wire:click='save' value='Finish' />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- wizard container -->
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
<script>
    const parent = document.querySelector('#questionSerial');
    const children = parent.querySelectorAll('h5 > span');

    for (let i = 0; i < children.length; i++) {
    children[i].innerText += '('+ (i+1) +')';
    }
</script>
@endsection