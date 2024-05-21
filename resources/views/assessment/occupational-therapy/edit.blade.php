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
                    <!-- Wizard container -->
                    <div class="wizard-container">
                        <div class="card_stap wizard-card row" data-color="red" id="wizard">
                            <div class="col-sm-3 col-md-3">
                                <div id="wizard-navigation">
                                    <ul class="wizard-navigation">
                                        <li class="w-100"><a href="#Occupational_Therapy" data-toggle="tab">Occupational
                                                Therapy</a></li>
                                        <li class="w-100"><a href="#General" data-toggle="tab">General</a>
                                        </li>
                                        <li class="w-100"><a href="#Muscle_Tone" data-toggle="tab">Muscle
                                                Tone</a></li>
                                        <li class="w-100"><a href="#Range_of_movement" data-toggle="tab">Range of
                                                movement</a>
                                        </li>
                                        <li class="w-100"><a href="#Functional_gross_motor" data-toggle="tab">Functional
                                                Gross Motor</a>
                                        </li>
                                        <li class="w-100"><a href="#Transitional_movement" data-toggle="tab">Transitional
                                                Movements</a>
                                        </li>
                                        <li class="w-100"><a href="#Fine_motor_skil" data-toggle="tab">
                                                Fine
                                                motor Skill</a></li>
                                        <li class="w-100"><a href="#Automatic_reaction" data-toggle="tab">Automatic
                                                Reaction</a></li>
                                        <li class="w-100"><a href="#Sensory_Skill" data-toggle="tab">
                                                Sensory Skill (Normal/Hypo response)</a></li>
                                        <li class="w-100"><a href="#Visual_Perception" data-toggle="tab">Visual
                                                Perception</a></li>
                                        <li class="w-100"><a href="#Activities_of_Daily_living" data-toggle="tab">
                                                Activities of Daily living (ADL’s)</a>
                                        </li>
                                        <li class="w-100"><a href="#Strength" data-toggle="tab">Strength</a>
                                        </li>
                                        <li class="w-100"><a href="#Signature" data-toggle="tab">Signature</a></li>
                                        <li class="w-100"><a href="#Cognitive_Skills" data-toggle="tab">
                                                Cognitive Skills</a></li>
                                        <li class="w-100"><a href="#Treatment_Plan" data-toggle="tab">Treatment Plan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-9 col-md-9" id="questionSerial">
                                <form action="{{ route('occupational-therapy.update', $id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <div class="tab-content">
                                        <div class="tab-pane" id="Occupational_Therapy">
                                            <section>
                                                <div class="row">
                                                    <div class="col-lg-4 pull-left pb-2">
                                                        <label class="p-2">Collection Date:</label>
                                                        <x-input-text value="{{ $date }}" name="date"
                                                            type="date" placeholder="mm/dd/yyyy">
                                                        </x-input-text>
                                                    </div>
                                                    <div class="col-lg-4 pull-left pb-2">
                                                        <label class="p-2">Teacher: <span
                                                                class="text-danger text-bold">*</span>
                                                        </label>
                                                        <x-input-select :selected="$teacher_id" name="teacher_id"
                                                            :records="$teachers" />
                                                    </div>
                                                    <div class="col-lg-4 pull-left pb-2">
                                                        <label class="p-2">Student ID:
                                                            <span class="text-danger text-bold">*</span></label>
                                                        <x-input-select name="student_id" :selected="$student_id"
                                                            :records="$students" />
                                                    </div>
                                                    <div class="col-lg-12 p-0 pb-2">
                                                        <label class="col-md-12 px-1">Description:</label>
                                                        <p>Occupational Therapy assessment form</p>
                                                    </div>

                                                    <div class="col-lg-12 p-0 pb-2">
                                                        <label class="col-md-12 px-1">Instruction:</label>
                                                        <p>Occupational Therapy assessment form</p>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="General">
                                            <section>
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Birth history</label>
                                                                            <x-input-text name="birth_history"
                                                                                value="{{ $general->birth_history ?? '' }}"
                                                                                placeholder="Birth history">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- row end -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Before birth</label>
                                                                            <x-input-text name="before_birth"
                                                                                value="{{ $general->before_birth ?? '' }}"
                                                                                placeholder="Before birth">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- row end -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Pregnancy</label>
                                                                            <x-input-text name="pregnancy"
                                                                                value="{{ $general->pregnancy ?? '' }}"
                                                                                placeholder="Pregnancy">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- row end -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">Delivery</label>
                                                                            <x-input-text name="delivery"
                                                                                value="{{ $general->delivery ?? '' }}"
                                                                                placeholder="Delivery">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- row end -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">During Birth</label>
                                                                            <x-input-text name="during_birth"
                                                                                value="{{ $general->during_birth ?? '' }}"
                                                                                placeholder="During Birth">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- row end -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">After Birth</label>
                                                                            <x-input-text name="after_birth"
                                                                                value="{{ $general->after_birth ?? '' }}"
                                                                                placeholder="After Birth">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- row end -->
                                                                        <div class="mb-3">
                                                                            <label for="formrow-firstname-input"
                                                                                class="form-label">History</label>
                                                                            <x-input-text name="history"
                                                                                value="{{ $general->history ?? '' }}"
                                                                                placeholder="History">
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- row end -->
                                                                        <label class="form-check-label pb-2">Medication
                                                                            Treatment </label>
                                                                        <x-input-text name="medication_treatment"
                                                                            value="{{ $general->medication_treatment ?? '' }}"
                                                                            placeholder="Medication Treatment">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Any
                                                                            present medicines</label>
                                                                        <x-input-text name="any_present_medicines"
                                                                            value="{{ $general->any_present_medicines ?? '' }}"
                                                                            placeholder="Any present medicines">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <x-input-radio-or-check label="Separate Home equipment" :checked="$general->separate_home_equipment ?? ''"
                                                    :records="$constants::$D3_c_5_02">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <x-input-radio-or-check label="Communication" :checked="$general->communication ?? ''" name="communication"
                                                    :records="$constants::$D3_c_5_02">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <x-input-radio-or-check label="Communication" :checked="$general->communication_one ?? ''" name="communication_one"
                                                    :records="$therapyConstants::$communication">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Muscle_Tone">
                                            <section>
                                                <x-input-radio-or-check label="Upper limbs" :checked="$muscle_tone->upper_limbs ?? ''"
                                                    :records="$therapyConstants::$lowerLimbs">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Left</label>
                                                                        <x-input-text name="upper_left"
                                                                            value="{{ $muscle_tone->upper_left ?? '' }}"
                                                                            placeholder="Left">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Right</label>
                                                                        <x-input-text name="upper_right"
                                                                            value="{{ $muscle_tone->upper_right ?? '' }}"
                                                                            placeholder="Right">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <x-input-radio-or-check label="Lower Limbs" name="lower_limbs_one"
                                                    :checked="$muscle_tone->lower_limbs_one ?? ''" :records="$therapyConstants::$lowerLimbs">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <x-input-radio-or-check label="Trunk/neck" name="trunk_or_neck"
                                                    :checked="$muscle_tone->trunk_or_neck ?? ''" :records="$therapyConstants::$trunkNeck">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                {{-- <x-input-radio-or-check label="Lower Limbs" name="lower_limbs_two"
                                                :checked="$muscle_tone->lower_limbs_two ?? ''"
                                                :records="$therapyConstants::$lowerLimbsTone">
                                            </x-input-radio-or-check> --}}
                                                <!-- row end -->
                                                {{-- <div class="row py-2 pt-0">
                                                <div class="col-xl-12 col-sm-12">
                                                    <div class="m-0">
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <div class="me-5 ">
                                                                    <label class="form-check-label pb-2">Left</label>
                                                                    <x-input-text name="trunk_or_neck_left"
                                                                        value="{{ $muscle_tone->trunk_or_neck_left ?? '' }}"
                                                                        placeholder="Left">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class="me-5 ">
                                                                    <label class="form-check-label pb-2">Right</label>
                                                                    <x-input-text name="trunk_or_neck_right"
                                                                        value="{{ $muscle_tone->trunk_or_neck_right ?? '' }}"
                                                                        placeholder="Right">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                                {{-- <x-input-radio-or-check label="Upper Limbs" :checked="$range_of_movement->range_upper_limbs ??
                                                                        ''" :records="$therapyConstants::$trunkNeck">
                                            </x-input-radio-or-check>
                                            <div class="row py-2 pt-0">
                                                <div class="col-xl-12 col-sm-12">
                                                    <div class="m-0">
                                                        <div class="row">
                                                            <div class="form-check">
                                                                <div class="me-5 ">
                                                                    <label class="form-check-label pb-2">Left</label>
                                                                    <x-input-text name="left"
                                                                        value="{{ $range_of_movement->range_or_neck_left ?? '' }}"
                                                                        placeholder="Left">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class="me-5 ">
                                                                    <label class="form-check-label pb-2">Right</label>
                                                                    <x-input-text name="right"
                                                                        value="{{ $range_of_movement->range_or_neck_left ?? '' }}"
                                                                        placeholder="Right">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Range_of_movement">
                                            <section>
                                                <x-input-radio-or-check label="Upper limbs" name="range_upper_limbs"
                                                    :checked="$range_of_movement->range_upper_limbs ?? ''" :records="$therapyConstants::$upperLimbs">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <h5></h5>
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Left</label>
                                                                        <x-input-text name="range_or_neck_left"
                                                                            value="{{ $range_of_movement->range_or_neck_left ?? '' }}"
                                                                            placeholder="Left">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Right</label>
                                                                        <x-input-text name="range_or_neck_right"
                                                                            value="{{ $range_of_movement->range_or_neck_right ?? '' }}"
                                                                            placeholder="Right">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <x-input-radio-or-check name="range_lower_limbs_two" label="Lower limbs"
                                                    :checked="$range_of_movement->range_lower_limbs_two ?? ''" :records="$therapyConstants::$upperLimbs">
                                                </x-input-radio-or-check>
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Functional_gross_motor">
                                            <section>
                                                <x-input-radio-or-check :checked="$functional_gross_motor->sitting ?? ''" label="Sitting"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$functional_gross_motor->standing ?? ''" label="Standing"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$functional_gross_motor->ball_skill ?? ''" label="Ball skill"
                                                    :records="$constants::$D1_a_1_04">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$functional_gross_motor->crawling ?? ''" label="Crawling"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$functional_gross_motor->walking ?? ''" label="Walking"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$functional_gross_motor->running ?? ''" label="Running"
                                                    :records="$constants::$D1_a_1_01">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$functional_gross_motor->jumping ?? ''" label="Jumping"
                                                    :records="$constants::$D1_a_1_06">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Transitional_movement">
                                            <section>
                                                <x-input-radio-or-check :checked="$transitional_movements->rolling_supine_to_prone_one ?? ''" label="Rolling supine to prone"
                                                    name="rolling_supine_to_prone_one" :records="$constants::$D1_a_1_10">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$transitional_movements->continuous_rolling ?? ''" label="Continuous Rolling"
                                                    :records="$constants::$D1_a_1_10">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$transitional_movements->box_sit_to_stand ?? ''" label="Box sit to stand"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$transitional_movements->kneeling_to_stand ?? ''" label="Kneeling to stand"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$transitional_movements->prone_to_supine ?? ''" label="Prone to Supine"
                                                    :records="$constants::$D1_a_1_10">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$transitional_movements->lying_to_sit ?? ''" label="Lying to Sit"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$transitional_movements->cross_sit_to_stand ?? ''" label="Cross sit to stand"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>

                                        <div class="tab-pane" id="Fine_motor_skil">
                                            <section>
                                                <x-input-radio-or-check label="Dominance" :checked="$fine_motor_skill->dominance ?? ''"
                                                    :records="$constants::$yesNoEn">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <h5></h5>
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Left</label>
                                                                        <x-input-text name="dominance_left"
                                                                            value="{{ $fine_motor_skill->dominance_left ?? '' }}"
                                                                            placeholder="Left">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Right</label>
                                                                        <x-input-text name="dominance_right"
                                                                            value="{{ $fine_motor_skill->dominance_right ?? '' }}"
                                                                            placeholder="Right">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <x-input-radio-or-check :checked="$fine_motor_skill->reach ?? ''" label="Reach"
                                                    :records="$constants::$D1_a_2">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$fine_motor_skill->release ?? ''" label="Release"
                                                    :records="$constants::$D1_a_2">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$fine_motor_skill->symmetrical_use ?? ''" label="Symmetrical use"
                                                    :records="$constants::$D1_a_2_03">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$fine_motor_skill->bilateral_use ?? ''" label="Bilateral use"
                                                    :records="$constants::$D1_a_2_11">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$fine_motor_skill->in_hand_manipulation ?? ''" label="In-hand manipulation"
                                                    :records="$constants::$D1_a_2">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$fine_motor_skill->eye_hand_co_ordination ?? ''" label="Eye hand co-ordination"
                                                    :records="$constants::$D1_a_2_06">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$fine_motor_skill->transfer ?? ''" label="Transfer"
                                                    :records="$constants::$D1_a_2_11">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$fine_motor_skill->writing_skills ?? ''" label="Writing skills"
                                                    :records="$constants::$D2_b_2_05">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$fine_motor_skill->grasp_type ?? ''" label="Grasp type"
                                                    :records="$constants::$D1_a_2_07">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Automatic_reaction">
                                            <section>
                                                <x-input-radio-or-check label="Protective reactions" :checked="$automatic_reaction->protective_reactions ?? ''"
                                                    :records="$constants::$D2_b_1_02">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check label="Equilibrium reaction" :checked="$automatic_reaction->equilibrium_reaction ?? ''"
                                                    :records="$constants::$D2_b_1_05">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Sensory_Skill">
                                            <section>
                                                <x-input-radio-or-check :checked="$sensory_skill->tactile ?? ''" label="Tactile"
                                                    :records="$constants::$D2_a_1_04">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$sensory_skill->visual ?? ''" label="Visual"
                                                    :records="$constants::$D2_a_2">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$sensory_skill->auditory ?? ''" label="Auditory"
                                                    :records="$constants::$D2_a_1_03">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$sensory_skill->proprioceptive ?? ''" label="Proprioceptive"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$sensory_skill->vestibular ?? ''" label="Vestibular"
                                                    :records="$constants::$D1_a_1_14">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Visual_Perception">
                                            <section>
                                                <x-input-radio-or-check :checked="$visual_perception->visual_discrimination ?? ''" label="Visual Discrimination"
                                                    :records="$constants::$D2_a_2_01">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$visual_perception->visual_memory ?? ''" name="visual_memory"
                                                    label="Visual Memory" :records="$constants::$D2_a_2_01">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$visual_perception->visual_figure_ground ?? ''" label="Visual Figure ground"
                                                    :records="$constants::$D2_a_2_01">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check label="Visual Spatial" :checked="$visual_perception->visual_spatial ?? ''" name="visual_spatial"
                                                    :records="$constants::$D2_a_2_01">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label
                                                                            class="form-check-label pb-2">Behavior</label>
                                                                        <x-input-text name="behavior"
                                                                            value="{{ $visual_perception->behavior ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$visual_perception->social_interaction ?? ''" label="Social interaction"
                                                    :records="$constants::$yesNoEn">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Activities_of_Daily_living">
                                            <section>
                                                <x-input-radio-or-check label="Eating" :checked="$activities_of_daily_living->eating ?? ''"
                                                    :records="$constants::$D3_c_1_11">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check label="Brushing teeth" :checked="$activities_of_daily_living->brushing_teeth ?? ''"
                                                    :records="$constants::$D3_c_1_02">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check label="Dressing" :checked="$activities_of_daily_living->dressing ?? ''"
                                                    :records="$constants::$D3_c_1_08">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check label="Toilet" :checked="$activities_of_daily_living->toilet ?? ''"
                                                    :records="$constants::$D3_c_1_03">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check label="Bathing" :checked="$activities_of_daily_living->bathing ?? ''"
                                                    :records="$constants::$D3_c_1_02">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check label="Does the child attend school?" name="attend_school"
                                                    :checked="$activities_of_daily_living->attend_school ?? ''" :records="$constants::$yesNoEn">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <div class="row py-2 pt-0">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Any
                                                                            more information</label>
                                                                        <x-input-text
                                                                            value="{{ $activities_of_daily_living->any_more_information ?? '' }}"
                                                                            name="any_more_information" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Leisure/Play:
                                                                            activities of interest</label>
                                                                        <x-input-text name="leisure"
                                                                            value="{{ $activities_of_daily_living->leisure ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Strength">
                                            <section>
                                                <x-input-radio-or-check :checked="$strength->physical ?? ''" name="physical"
                                                    label="Physical (Gross motor/Fine motor)" :records="$constants::$D1_a_1">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label
                                                                            class="form-check-label pb-2">Cognitive</label>
                                                                        <x-input-text
                                                                            value="{{ $strength->cognitive ?? '' }}"
                                                                            name="cognitive" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->


                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label
                                                                            class="form-check-label pb-2">Behavioral</label>
                                                                        <x-input-text name="strength_behavioral"
                                                                            value="{{ $strength->strength_behavioral ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$strength->strength_communication ?? ''" label="Communication" Name="strength_communication"
                                                    :records="$constants::$D2_b_3">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check :checked="$strength->social ?? ''" label="Social"
                                                    :records="$constants::$D4_c">
                                                </x-input-radio-or-check>
                                                <!-- row end -->


                                                <x-input-radio-or-check label="ADL’s" :checked="$strength->adls ?? ''"
                                                    :records="$constants::$D3_c">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Signature">
                                            <section>
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Therapist
                                                                            Signature</label>
                                                                        <x-input-text type="file"
                                                                            value="{{ $signature->therapist_signature ?? '' }}"
                                                                            name="therapist_signature" placeholder="Therapist Signature">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <div class="row py-2 pt-0">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">
                                                                            Designation and organizations
                                                                            name</label>
                                                                        <x-input-text
                                                                            value="{{ $signature->designation_organization ?? '' }}"
                                                                            name="designation_organization"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <div class="row py-2 pt-0">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Supervisor’s
                                                                            Signature</label>
                                                                        <x-input-text type="file"
                                                                            value="{{ $signature->supervisor_signature ?? '' }}"
                                                                            name="supervisor_signature" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Designation
                                                                            and organizations name</label>
                                                                        <x-input-text name="designation_name"
                                                                            value="{{ $signature->designation_name ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Cognitive_Skills">
                                            <section>
                                                <x-input-radio-or-check label="Attention" :checked="$cognitive_skills->attention ?? ''"
                                                    :records="$constants::$D2_b_3_03">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <x-input-radio-or-check label="Problem Solving" :checked="$cognitive_skills->problem_solving ?? ''"
                                                    :records="$constants::$D2">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <x-input-radio-or-check :checked="$cognitive_skills->able_to_follow_instruction ?? ''"
                                                    label="Able to Follow instruction" :records="$constants::$D2_b_3_07">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Memory</label>
                                                                        <x-input-text name="skills_memory"
                                                                            value="{{ $cognitive_skills->skills_memory ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$cognitive_skills->perceptual_motor ?? ''" label="Perceptual Motor"
                                                    :records="$constants::$D2">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$cognitive_skills->body_awareness ?? ''" label="Body Awareness"
                                                    :records="$constants::$D3_a_03">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$cognitive_skills->body_co_ordination ?? ''" label="Body Co-ordination"
                                                    :records="$constants::$D1_a_2_06">
                                                </x-input-radio-or-check>
                                                <!-- row end -->

                                                <x-input-radio-or-check :checked="$cognitive_skills->bilateral_integration ?? ''" label="Bilateral Integration"
                                                    :records="$constants::$D1_a_2_11">
                                                </x-input-radio-or-check>
                                                <!-- row end -->
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="Treatment_Plan">
                                            <section>
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Problem
                                                                            List</label>
                                                                        <x-input-text name="problem_list"
                                                                            value="{{ $treatment_Plan->problem_list ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label class="form-check-label pb-2">Treatment
                                                                            Plan & Implementation</label>
                                                                        <x-input-text name="treatment_plan"
                                                                            value="{{ $treatment_Plan->treatment_plan ?? '' }}"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
                                                <div class="row border-top py-2">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="m-0">
                                                            <div class="row">
                                                                <div class="form-check">
                                                                    <div class="me-5 ">
                                                                        <label
                                                                            class="form-check-label pb-2">Progress</label>
                                                                        <x-input-text
                                                                            value="{{ $treatment_Plan->progress ?? '' }}"
                                                                            name="progress" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row end -->
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
                                                class='btn btn-primary waves-effect waves-light btn-next' name='next'
                                                value='Next' />
                                            <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                wire:click='save' value='Update' />
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
    <!-- end col -->
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
