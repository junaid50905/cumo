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
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="add" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Wizard container -->
                                    <div class="wizard-container">
                                        <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                            <div class="col-sm-3 col-md-3">
                                                <div id="wizard-navigation">
                                                    <ul class="wizard-navigation">
                                                        <li class="w-100"><a href="#CareNeedsPart1" data-toggle="tab">CARE
                                                                needs - Part 1</a></li>
                                                        <li class="w-100"><a href="#Common" data-toggle="tab">Common</a>
                                                        </li>
                                                        <li class="w-100"><a href="#TypesOfSpecialty"
                                                                data-toggle="tab">Types of specialty / disability /
                                                                impairments</a></li>
                                                        <li class="w-100"><a href="#Assessment"
                                                                data-toggle="tab">Assessment</a></li>
                                                        <li class="w-100"><a href="#EducationalInformation"
                                                                data-toggle="tab">Educational Information</a></li>
                                                        <li class="w-100"><a href="#ChildConditionAtHisFamily"
                                                                data-toggle="tab">Child’s condition at his family </a></li>
                                                        <li class="w-100"><a href="#NumberOfChildrenInTheFamily"
                                                                data-toggle="tab">Number of children in the family</a></li>
                                                        <li class="w-100"><a href="#Schooling"
                                                                data-toggle="tab">Schooling</a></li>
                                                        <li class="w-100"><a href="#Home" data-toggle="tab"> Home</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form action="{{ route('care-need-part-one.update', $id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="tab-content apply-view-only" id="questionSerial">
                                                        <div class="tab-pane" id="CareNeedsPart1">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label>Collection Date:</label>
                                                                            <x-input-text name="collection_date"
                                                                                value="{{ $collection_date }}"
                                                                                type="date" placeholder="mm/dd/yyyy">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label>Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers" :selected="$teacher_id">
                                                                            </x-input-select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label>Candidate ID:</label>
                                                                            <x-input-select :records="$students"
                                                                                name="student_id" :selected="$student_id">
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
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Description:</label>
                                                                            <p>Parents Interview form (Part of Care needs
                                                                                assessment form) </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Instruction:</label>
                                                                            <p>Parents Interview form (Part of Care needs
                                                                                assessment form)</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Common">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter common information</p>
                                                                    </div>
                                                                </div>
                                                                <x-input-radio-or-check
                                                                :checked="$common->from_where_you_learned_about_us ?? '' "
                                                                    name="from_where_you_learned_about_us" type="checkbox"
                                                                    label="From where you learned about us?"
                                                                    :records="$projectConstants::$learnAbout" :isVertical="false" multiple="true"
                                                                    secondaryInputLabel="If other, specify name"
                                                                    secondaryInputValue="{{$common->from_where_you_learned_about_us_secondary ?? '' }}"/>
                                                                <!-- row end -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Doctor / physician (under medical treatment)
                                                                                name </h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text
                                                                                value="{{ $common->doctor_physician_under_medical_treatment_name ??'' }}"
                                                                                    name="doctor_physician_under_medical_treatment_name" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Contact Number</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text 
                                                                                value="{{ $common->contact_umber ??'' }}"
                                                                                name="contact_umber" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$common->govt_disability_registration ?? ''  "
                                                                name="govt_disability_registration"
                                                                    label="Govt.Disability registration" :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="If not, why?" secondaryInputValue="{{$common->govt_disability_registration ?? '' }}"/>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>If yes, enter registration number </h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text
                                                                                value="{{ $common->If_yes_enter_registration_number ??'' }}"
                                                                                    name="If_yes_enter_registration_number" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$common->suggestion_on_obtaining_registration ?? '' "
                                                                    name="suggestion_on_obtaining_registration"
                                                                    label="Suggestion on obtaining registration"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$common->referred_to_parents_forum ?? '' "
                                                                name="referred_to_parents_forum"
                                                                    label="Referred to Parents Forum" :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="TypesOfSpecialty">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter Types of speciality / disability /
                                                                            impairments information</p>
                                                                    </div>
                                                                </div>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->iss_she_has_autism ?? '' "
                                                                name="iss_she_has_autism"
                                                                    label="Is S/he has Autism?" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_down_syndrome ?? '' "
                                                                name="is_she_has_down_syndrome"
                                                                    label="Is S/he has Down Syndrome" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_cerebral_palsy ?? '' "
                                                                name="is_she_has_cerebral_palsy"
                                                                    label="Is S/he has Cerebral Palsy"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_intellectual_disability ?? '' "
                                                                    name="is_she_has_intellectual_disability"
                                                                    label="Is S/he has Intellectual Disability"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->

                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_dyslexia ?? '' "
                                                                name="is_she_has_dyslexia"
                                                                    label="Is S/he has Dyslexia" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_learning_disability ?? '' "
                                                                    name="is_she_has_learning_disability"
                                                                    label="Is S/he has Learning disability"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_anxiety_disorder ?? '' "
                                                                name="is_she_has_anxiety_disorder"
                                                                    label="Is S/he has Anxiety disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_adhd ?? '' "
                                                                 name="is_she_has_adhd"
                                                                    label="Is S/he has ADHD " :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_bipolar_disorder ?? '' "
                                                                name="is_she_has_bipolar_disorder"
                                                                    label="Is S/he has Bipolar Disorder "
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_he_has_speech_disorder ?? '' "
                                                                name="is_he_has_speech_disorder"
                                                                    label="Is S/he has Speech disorder "
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_language_disorder ?? '' "
                                                                 name="is_she_has_language_disorder"
                                                                    label="Is S/he has Language disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_ocd ?? '' "
                                                                name="is_she_has_ocd"
                                                                    label="Is S/he has OCD" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_eating_disorder ?? '' "
                                                                name="is_she_has_eating_disorder"
                                                                    label="Is S/he has Eating disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_schizophrenia ?? '' "
                                                                name="is_she_has_schizophrenia"
                                                                    label="Is S/he has Schizophrenia" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_multiple_personality_disorder ?? '' "
                                                                    name="is_she_has_multiple_personality_disorder"
                                                                    label="Is S/he has Multiple Personality Disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_tic_disorder ?? '' "
                                                                name="is_she_has_tic_disorder"
                                                                    label="Is S/he has TIC disorder" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_sluttering ?? '' "
                                                                name="is_she_has_sluttering"
                                                                    label="Is S/he has Sluttering" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_depression ?? '' "
                                                                name="is_she_has_depression"
                                                                    label="Is S/he has Depression" :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_writing_disorder ?? '' "
                                                                name="is_she_has_writing_disorder"
                                                                    label="Is S/he has Writing disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_reading_disorder ?? '' "
                                                                name="is_she_has_reading_disorder"
                                                                    label="Is S/he has Reading disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->

                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_match_disorder ?? '' "
                                                                name="is_she_has_match_disorder"
                                                                    label="Is S/he has Match Disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_attachment_disorder ?? '' "
                                                                    name="is_she_has_attachment_disorder"
                                                                    label="Is S/he has Attachment Disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_separation_anxiety_disorder ?? '' "
                                                                    name="is_she_has_separation_anxiety_disorder"
                                                                    label="Is S/he has Separation Anxiety Disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$types_of_specialty_disability_impairments->is_she_has_sleep_disorder ?? '' "
                                                                name="is_she_has_sleep_disorder"
                                                                    label="Is S/he has Sleep disorder"
                                                                    :records="$projectConstants::$yesNoDontknow" />
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Assessment">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter Assessment information</p>
                                                                    </div>
                                                                </div>
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_social_communication_checklist_has_completed ?? '' "
                                                                    name="is_social_communication_checklist_has_completed"
                                                                    label="Is Social Communication checklist has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_sensory_checklist_has_completed ?? '' "
                                                                    name="is_sensory_checklist_has_completed"
                                                                    label="Is Sensory Checklist has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_occupational_assessment_has_completed ?? '' "
                                                                    name="is_occupational_assessment_has_completed"
                                                                    label="Is Occupational Assessment has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_speech_and_language_assessment_has_completed ?? '' "
                                                                    name="is_speech_and_language_assessment_has_completed"
                                                                    label="Is Speech and Language Assessment has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_physiotherapy_assessment_has_completed ?? '' "
                                                                    name="is_physiotherapy_assessment_has_completed"
                                                                    label="Is Physiotherapy assessment has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_fundamental_movement_skills_has_completed ?? '' "
                                                                    name="is_fundamental_movement_skills_has_completed"
                                                                    label="Is Fundamental Movement Skills has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_functional_evaluation_has_completed ?? '' "
                                                                    name="is_functional_evaluation_has_completed"
                                                                    label="Is Functional evaluation has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_psychological_assessment_has_completed ?? '' "
                                                                    name="is_psychological_assessment_has_completed"
                                                                    label="Is Psychological assessment has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$assessment->is_cademic_assessment_has_completed ?? '' "
                                                                    name="is_cademic_assessment_has_completed"
                                                                    label="Is Academic Assessment has completed?"
                                                                    :records="$projectConstants::$yesNoWantdo" />
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="EducationalInformation">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter Educational Information</p>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$educational_information->schooling ?? '' "
                                                                name="schooling" type="checkbox"
                                                                    label="Schooling" :records="$projectConstants::$learnAbout" :isVertical="false"
                                                                    multiple="true"
                                                                    secondaryInputLabel="Please provide other school name" 
                                                                    secondaryInputValue="{{$educational_information->schooling_secondary ?? '' }}"/>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$educational_information->is_she_has_speaking_capacity ?? '' "
                                                                 name="is_she_has_speaking_capacity"
                                                                    label="Is S/he has Speaking Capacity?"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$educational_information->is_she_has_listening_capacity ?? '' "
                                                                    name="is_she_has_listening_capacity"
                                                                    label="Is S/he has Listening Capacity?"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$educational_information->is_she_has_reading_capacity ?? '' "
                                                                name="is_she_has_reading_capacity"
                                                                    label="Is S/he has Reading Capacity?"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$educational_information->is_she_has_writing_capacity ?? '' "
                                                                 name="is_she_has_writing_capacity"
                                                                    label="Is S/he has Writing capacity?"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$educational_information->is_she_has ?? '' "
                                                                 name="is_she_has"
                                                                    label="Is S/he has" :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$educational_information->is_she_has_counting_capacity ?? '' "
                                                                name="is_she_has_counting_capacity"
                                                                    label="Is S/he has Counting capacity? "
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$educational_information->is_she_has_money_concept ?? '' "
                                                                name="is_she_has_money_concept"
                                                                    label="Is S/he has Money concept?"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="ChildConditionAtHisFamily">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter Educational Information</p>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$childs_condition_at_his_family->is_she_happy_at_home ?? '' "
                                                                name="is_she_happy_at_home"
                                                                    label="Is S/he Happy at home? " :records="$projectConstants::$yesMidNo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$childs_condition_at_his_family->is_she_lonely ?? '' "
                                                                name="is_she_lonely"
                                                                    label="Is S/he Lonely?" :records="$projectConstants::$yesMidNo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->is_she_protective ?? '' "
                                                                 name="is_she_protective"
                                                                    label="Is S/he Protective?" :records="$projectConstants::$yesMidNo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->is_she_well_protective ?? '' "
                                                                 name="is_she_well_protective"
                                                                    label="Is S/he Well protective?" :records="$projectConstants::$yesMidNo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$childs_condition_at_his_family->is_she_withdrawal ?? '' "
                                                                name="is_she_withdrawal"
                                                                    label="Is S/he Withdrawal?" :records="$projectConstants::$yesMidNo" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->is_she_confident ?? '' "
                                                                 name="is_she_confident"
                                                                    label="Is S/he Confident?" :records="$projectConstants::$yesMidNo" />
                                                                <!-- end row -->

                                                                <x-input-radio-or-check 
                                                                :checked="$childs_condition_at_his_family->is_she_Communicate ?? '' "
                                                                name="is_she_Communicate"
                                                                    label="Is S/he Communicate?" :records="$projectConstants::$communicate" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->knowledge_on_aily_life_requirement ?? '' "
                                                                    name="knowledge_on_aily_life_requirement"
                                                                    type="checkbox"
                                                                    label="Knowledge on Daily life requirement. (Please select (tick) only those items s/he has knowledge)"
                                                                    :records="$projectConstants::$dailyLife" :isVertical="false"
                                                                    multiple="true" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->is_she_follow_instructions ?? '' "
                                                                 name="is_she_follow_instructions"
                                                                    label="Is S/he Follow instructions?"
                                                                    :records="$projectConstants::$followInstruction" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->is_she_has_sitting_habit_and_how_long ?? '' "
                                                                    name="is_she_has_sitting_habit_and_how_long"
                                                                    label="Is S/he has Sitting habit and how long?"
                                                                    :records="$projectConstants::$havit"
                                                                    secondaryInputLabel="If others, specify the duration"
                                                                    secondaryInputValue="{{$childs_condition_at_his_family->is_she_has_sitting_habit_and_how_long_secondary ?? '' }}" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$childs_condition_at_his_family->is_she_has_hyperness ?? '' "
                                                                name="is_she_has_hyperness"
                                                                    label="Is S/he has Hyperness? how long it remain?"
                                                                    :records="$projectConstants::$havittime"
                                                                    secondaryInputLabel="Cooling time? How much time it take to cool down." 
                                                                    secondaryInputValue="{{$childs_condition_at_his_family->is_she_has_hyperness_secondary ?? '' }}"/>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Specify the cooling process</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-textarea rows="1"
                                                                                value="{{ $childs_condition_at_his_family->specify_the_cooling_process ??'' }}"
                                                                                    name="specify_the_cooling_process" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->

                                                                <x-input-radio-or-check 
                                                                :checked="$childs_condition_at_his_family->is_she_do_tantrum ?? '' "
                                                                 name="is_she_do_tantrum"
                                                                    label="Is S/he do Tantrum ? how long it remain?"
                                                                    :records="$projectConstants::$havittime"
                                                                    secondaryInputLabel="Cooling time ( How long it takes to cool down?)" 
                                                                    secondaryInputValue="{{$childs_condition_at_his_family->is_she_do_tantrum_secondary ?? '' }}"/>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Specify the cooling process</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-textarea rows="1"
                                                                                value="{{ $childs_condition_at_his_family->specify_the_cooling_process ??'' }}"
                                                                                    name="specify_the_cooling_process" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$childs_condition_at_his_family->is_she_do_self_injury ?? '' "
                                                                name="is_she_do_self_injury"
                                                                    label="Is S/he Do Self injury?" :records="$projectConstants::$havittime"
                                                                    secondaryInputLabel="Cooling time ( How long it takes to cool down?)" 
                                                                    secondaryInputValue="{{$childs_condition_at_his_family->is_she_do_self_injury_secondary ?? '' }}"/>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Specify the cooling process</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-textarea rows="1"
                                                                                value="{{ $childs_condition_at_his_family->specify_the_cooling_process ??'' }}"
                                                                                    name="specify_the_cooling_process" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->follow_any_specific_life_style ?? '' "
                                                                    name="follow_any_specific_life_style"
                                                                    label="Follow any specific life style?"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->what_is_the_way_of_communication ?? '' "
                                                                    name="what_is_the_way_of_communication"
                                                                    type="checkbox"
                                                                    label="What is the way of Communication?"
                                                                    :records="$projectConstants::$communicate" :isVertical="false"
                                                                    multiple="true" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->how_he_she_can_follow_instructions ?? '' "
                                                                    name="how_he_she_can_follow_instructions"
                                                                    label="How he/she can Follow instructions?"
                                                                    :records="$projectConstants::$yesNoEn" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$childs_condition_at_his_family->is_she_do_temper_how_long_it_remain ?? '' "
                                                                    name="is_she_do_temper_how_long_it_remain"
                                                                    label="Is s/he do Temper? how long it remain?"
                                                                    :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="Cooling time ( How long it takes to cool down?)" 
                                                                    secondaryInputValue="{{$childs_condition_at_his_family->is_she_do_temper_how_long_it_remain_secondary ?? '' }}"/>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Specify the cooling process</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-textarea rows="1"
                                                                                value="{{ $childs_condition_at_his_family->specify_the_cooling_process ??'' }}"
                                                                                    name="specify_the_cooling_process" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$childs_condition_at_his_family->is_she_hit_others ?? '' "
                                                                     name="is_she_hit_others"
                                                                    label="Is S/he Hit Others?" :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="Cooling time ( How long it takes to cool down?)"
                                                                    secondaryInputValue="{{$childs_condition_at_his_family->is_she_hit_others_secondary ?? '' }}" />
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Specify the cooling process</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-textarea rows="1"
                                                                                value="{{ $childs_condition_at_his_family->specify_the_cooling_process ??'' }}"
                                                                                    name="specify_the_cooling_process" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="NumberOfChildrenInTheFamily">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter Number of children in the family</p>
                                                                    </div>
                                                                </div>
                                                                <x-input-radio-or-check
                                                                :checked="$number_of_children_in_the_family->is_your_other_child_support_towards_sibling ?? '' "
                                                                    name="is_your_other_child_support_towards_sibling"
                                                                    label="Is your other child support towards sibling?"
                                                                    :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="Child name and profession"
                                                                    secondaryInputValue="{{$number_of_children_in_the_family->is_your_other_child_support_towards_sibling_secondary ?? '' }}" />
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Age</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-textarea rows="1"
                                                                                value="{{ $number_of_children_in_the_family->age ??'' }}"
                                                                                    name="age" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$number_of_children_in_the_family->marriage_within_family_relative ?? '' "
                                                                    name="marriage_within_family_relative"
                                                                    label="Marriage within family/ relative?"
                                                                    :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="If yes, please share relation" 
                                                                    secondaryInputValue="{{$number_of_children_in_the_family->marriage_within_family_relative_secondary ?? '' }}" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$number_of_children_in_the_family->is_any_other_relative_have_disabilities ?? '' "
                                                                    name="is_any_other_relative_have_disabilities"
                                                                    label="Is any other relative have disabilities?"
                                                                    :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="If yes, disability type" 
                                                                    secondaryInputValue="{{$number_of_children_in_the_family->is_any_other_relative_have_disabilities_secondary ?? '' }}"/>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                :checked="$number_of_children_in_the_family->family_economical_condition ?? '' "
                                                                 name="family_economical_condition"
                                                                    label="Family Economical condition" :records="$projectConstants::$famCon"
                                                                    secondaryInputLabel="Net earning of a year" 
                                                                    secondaryInputValue="{{$number_of_children_in_the_family->family_economical_condition_secondary ?? '' }}"/>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Any other Family information that may
                                                                                relevant to share</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text rows="1"
                                                                                value="{{ $number_of_children_in_the_family->any_other_family_information_that_may_relevant_to_share ?? ''}}"
                                                                                    name="any_other_family_information_that_may_relevant_to_share" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Schooling">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter Schooling information</p>
                                                                    </div>
                                                                </div>
                                                                <x-input-radio-or-check
                                                                :checked="$schooling->going_to_school ?? '' "
                                                                 name="going_to_school"
                                                                    label="Going to school?" :records="$projectConstants::$goingSchool"
                                                                    secondaryInputLabel="Since when DD/MM/YYYY"
                                                                    secondaryInputValue="{{$schooling->going_to_school_secondary ?? '' }}" />
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>If other, enter name</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-textarea rows="1"
                                                                                value="{{ $schooling->if_other_enter_name_des ??'' }}"
                                                                                    name="if_other_enter_name_des" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Name of the school</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text name="name_of_the_school"  value="{{ $schooling->name_of_the_school ??'' }}"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$schooling->studied_till_which_class ?? '' "
                                                                name="studied_till_which_class"
                                                                    label="Studied till which class?" :records="$projectConstants::$class"
                                                                    secondaryInputLabel="If yes, please share relation"
                                                                    secondaryInputValue="{{$schooling->studied_till_which_class_secondary ?? '' }}" />
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$schooling->why_not_attending_school ?? '' "
                                                                name="why_not_attending_school"
                                                                    type="checkbox" label="Why not attending school?"
                                                                    :records="$projectConstants::$attendSchool" :isVertical="false" multiple="true"
                                                                    secondaryInputLabel="Please provide other information"
                                                                    secondaryInputValue="{{$schooling->why_not_attending_school_secondary ?? '' }}" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$schooling->any_exam_degree_achieved ?? '' "
                                                                name="any_exam_degree_achieved"
                                                                    label="Any exam/ degree achieved?" :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="Please provide degree name"
                                                                    secondaryInputValue="{{$schooling->any_exam_degree_achieved_secondary ?? '' }}" />
                                                                <!-- row end -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Home">
                                                            <section>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Instruction:</label>
                                                                        <p>Enter Home information</p>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check 
                                                                :checked="$home->separate_room ?? '' "
                                                                name="separate_room"
                                                                    label="Separate room" :records="$projectConstants::$yesNoEn" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$home->separate_bed ?? '' "
                                                                name="separate_bed"
                                                                    label="Separate bed" :records="$projectConstants::$yesNoEn" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$home->sleep_alone ?? '' "
                                                                name="sleep_alone"
                                                                    label="Sleep alone?" :records="$projectConstants::$yesNoEn" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$home->separate_cupboard ?? '' "
                                                                name="separate_cupboard"
                                                                    label="Separate Cupboard?" :records="$projectConstants::$yesNoEn" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                :checked="$home->separate_toilet ?? '' "
                                                                name="separate_toilet"
                                                                    label="Separate toilet ?" :records="$projectConstants::$yesNoEn" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$home->own_equipment ?? '' "
                                                                name="own_equipment"
                                                                    label="Own equipment" :records="$projectConstants::$Ph"
                                                                    secondaryInputLabel="Other"
                                                                    secondaryInputValue="{{$home->own_equipment_secondary ?? '' }}" />
                                                                <!-- row end -->
                                                                <x-input-radio-or-check 
                                                                :checked="$home->anything_else ?? '' "
                                                                name="anything_else"
                                                                    label="Anything else" :records="$projectConstants::$yesNoEn"
                                                                    secondaryInputLabel="Please specify"
                                                                    secondaryInputValue="{{$home->anything_else_secondary ?? '' }}" />
                                                                <!-- row end -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Teachers Signature</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text type="file"
                                                                                value="{{ $home->teachers_signature ??'' }}"
                                                                                    name="teachers_signature" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Teacher name and Designation</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text
                                                                                value="{{ $home->teacher_name_and_designation ??'' }}"
                                                                                    name="teacher_name_and_designation" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Date</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text 
                                                                                value="{{ $home->date ??'' }}"
                                                                                type="date"
                                                                                    name="date" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <!-- row end -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Parents Signature</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text 
                                                                                value="{{ $home->teachers_signature ??'' }}"
                                                                                type="file"
                                                                                    name="teachers_signature_one" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Name of parent/ guardian</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text
                                                                                value="{{ $home->teacher_name_and_designation ??'' }}"
                                                                                    name="teacher_name_and_designation" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h6>Date</h6>
                                                                            <div class="mb-2">
                                                                                <x-input-text 
                                                                                value="{{ $home->date ??'' }}"
                                                                                type="date"
                                                                                    name="date" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </section>
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
                                                                    value='Finish' /> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- wizard container -->
                                </div>
                            </div> <!-- end col -->
                            <!-- end row -->
                        </div>
                        <div class="tab-pane" id="list" role="tabpanel">
                            <livewire:care-need-part-one-list />
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
    <script>
        const parent = document.querySelector('#questionSerial');
        const children = parent.querySelectorAll('h5 > span');
    
        for (let i = 0; i < children.length; i++) {
        children[i].innerText += '('+ (i+1) +')';
        }
    </script>
@endsection
