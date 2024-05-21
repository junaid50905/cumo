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
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>

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
                                                                data-toggle="tab">Sensory Checklist</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">General</a></li>
                                                        <li class="w-100"><a href="#PERSONAL" data-toggle="tab">Visual
                                                                Perception</a></li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                data-toggle="tab">Activities of Daily living</a></li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                data-toggle="tab">Strength</a></li>
                                                        <li class="w-100"><a href="#Word_Structure"
                                                                data-toggle="tab">Functional Gross Motor</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                data-toggle="tab">Transitional Movements</a></li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                data-toggle="tab">Fine motor Skill</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent"
                                                                data-toggle="tab">Automatic Reaction</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_B"
                                                                data-toggle="tab">Sensory Skill (Normal /Hypo response)</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_C"
                                                                data-toggle="tab">Cognitive Skills</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_D"
                                                                data-toggle="tab">Treatment</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent_E"
                                                                data-toggle="tab">Signature</a></li>
                                                        <li class="w-100"><a href="#mp" data-toggle="tab">Muscle
                                                                Power</a></li>
                                                        <li class="w-100"><a href="#mt" data-toggle="tab">Muscle
                                                                tone</a></li>
                                                        <li class="w-100"><a href="#Be" data-toggle="tab">Behavior</a>
                                                        </li>
                                                        <li class="w-100"><a href="#DA" data-toggle="tab">Domain
                                                                Area</a></li>
                                                        <li class="w-100"><a href="#Range_of_movement"
                                                                data-toggle="tab">Range of movement</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9" id="questionSerial">
                                                <form action="{{ route('physiotherapy.store') }}" method="POST">
                                                    @csrf
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <x-input-text name="collection_date" :required='true'
                                                                                type="date"
                                                                                placeholder="Collection Date">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers" :required='true'/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select name="student_id"
                                                                                :records="$students" :required='true'/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Description:</label>
                                                                            <p>Physiotherapy assessment form</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-email-input">Instruction:</label>
                                                                            <p>Physiotherapy assessment form</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Birth history</label>
                                                                    <x-input-text name="birth_history" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Before birth</label>
                                                                    <x-input-text name="before_birth" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Pregnancy</label>
                                                                    <x-input-text name="pregnancy" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">During Birth</label>
                                                                    <x-input-text name="during_birth" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Delivery</label>
                                                                    <x-input-text name="delivery" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">After Birth</label>
                                                                    <x-input-text name="after_birth" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">History</label>
                                                                    <x-input-text name="history" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check label="Medication Treatment"
                                                                    :records="$constants::$general_health">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check label="Any present medicines"
                                                                    :records="$constants::$general_health">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label class="form-label">Home equipment</label>
                                                                    <x-input-text name="home_equipment"
                                                                        placeholder="Home equipment">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Visual Discrimination"
                                                                        :records="$constants::$activities_to_improve_visual_perception">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Visual Memory"
                                                                        :records="$constants::$activities_to_improve_visual_perception">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Visual Figure ground"
                                                                        :records="$constants::$activities_to_improve_visual_perception">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Visual Spatial"
                                                                        :records="$constants::$activities_to_improve_visual_perception">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Oral Motor"
                                                                        :records="$constants::$oral_motor_activities">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Sucking"
                                                                        :records="$constants::$sucking_foods">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Drooling"
                                                                        :records="$constants::$oral_motor_activities">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Swollen"
                                                                        :records="$constants::$oral_motor_activities">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Chewing"
                                                                        :records="$constants::$chew">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Choking"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Drinking"
                                                                        :records="$constants::$eating_and_drinking">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Eating"
                                                                        :records="$constants::$eating_and_drinking">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Brushing teeth"
                                                                        :records="$constants::$wash">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Dressing"
                                                                        :records="$constants::$dressing">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Toilet"
                                                                        :records="$constants::$Toileting">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Bathing"
                                                                        :records="$constants::$wash">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does The Child attend school?"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">If Yes, Enter school
                                                                            name</label>
                                                                        <x-input-text name="enter_your_name"
                                                                            placeholder="Enter school
                                                                            name">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Leisure/ Play: activities of interest."
                                                                        :records="$constants::$Leisure">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Please explain
                                                                            strength area</label>
                                                                        <x-input-text name="please_explain_strength_area"
                                                                            placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Sitting"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Crawling"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Standing"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Walking"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Jumping"
                                                                        :records="$constants::$Jumping">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Running"
                                                                        :records="$constants::$general_play">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Ball skill"
                                                                        :records="$constants::$Ball_Play">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Rolling supine to prone"
                                                                        :records="$constants::$rolling">
                                                                    </x-input-radio-or-check>
                                                                    <x-input-radio-or-check label="Prone to Supine"
                                                                        :records="$constants::$rolling">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Continuous Rolling"
                                                                        :records="$constants::$rolling">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Lying to Sit"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Box sit to stand"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Cross sit to stand"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <x-input-radio-or-check label="Kneeling to stand"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Dominance"
                                                                        :records="$constants::$yesNoEn">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text name="left" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text name="right" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Reach"
                                                                        :records="$constants::$fine_motor">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Release"
                                                                        :records="$constants::$fine_motor">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Symmetrical use"
                                                                        :records="$constants::$Construction_toys">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Bilateral use"
                                                                        :records="$constants::$Two_Handed_Activities">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="In-hand manipulation"
                                                                        :records="$constants::$fine_motor">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Eye hand co-ordination"
                                                                        :records="$constants::$Eye_hand_coordination_games">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Transfer"
                                                                        :records="$constants::$Two_Handed_Activities">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Writing skill"
                                                                        :records="$constants::$writing">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Protective reactions"
                                                                        :records="$constants::$Body_Awareness">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Equilibrium reaction"
                                                                        :records="$constants::$Assertiveness">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Tactile"
                                                                        :records="$constants::$Touch">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Auditory"
                                                                        :records="$constants::$Auditory">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Vestibular"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Proprioceptive"
                                                                        :records="$constants::$Movement">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_C">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Attention"
                                                                        :records="$constants::$Attentive_Listening">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Problem Solving"
                                                                        :records="$constants::$D2">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Able to Follow instruction"
                                                                        :records="$constants::$Comprehension">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Memory"
                                                                        :records="$constants::$D2">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Perceptual Motor"
                                                                        :records="$constants::$D2">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Body Awareness"
                                                                        :records="$constants::$Self_Awareness">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Body Co-ordination"
                                                                        :records="$constants::$Eye_hand_coordination_games">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Bilateral integration"
                                                                        :records="$constants::$Two_Handed_Activities">
                                                                    </x-input-radio-or-check>
                                                                    <!-- end row -->
                                                                    <!-- end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_D">
                                                            <section>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Problem List</label>
                                                                    <x-input-text name="problam_list" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Treatment plan</label>
                                                                    <x-input-text name="treatment_plan" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Treatment plan
                                                                        implementation details</label>
                                                                    <x-input-text name="treatment_plann" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Progress</label>
                                                                    <x-input-text name="progress" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_E">
                                                            <section>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Therapist
                                                                        Signature</label>
                                                                    <x-input-text name="therapist_signature"
                                                                        type="file" placeholder=""></x-input-text>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Designation and
                                                                        organizations name</label>
                                                                    <x-input-text name="designation" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="mp">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Upper limbs" name="musical_power_upper_limbs"
                                                                        :records="$physiotherapyConstants::$limbs">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text name="musical_power_upper_left" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text name="musical_power_upper_right" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Lower Limbs"
                                                                    name="musicle_power_lower_limbs"
                                                                        :records="$physiotherapyConstants::$limbs">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text  name="musicle_power_lower_left" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text name="musicle_power_lower_right" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Trunk/neck</label>
                                                                        <x-input-text name="trunk_and_neck" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="mt">
                                                            <section>
                                                                <div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Upper limbs"
                                                                    name="musicle_tone_upper_limbs"
                                                                        :records="$constants::$muscle_tone_upper_limb">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label" >Left</label>
                                                                        <x-input-text name="musicle_tone_upper_left" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text name="musicle_tone_upper_right" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check label="Lower Limbs" name="musicle_tone_lower_limbs"
                                                                        :records="$constants::$muscle_tone_lower_limb">
                                                                    </x-input-radio-or-check>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Left</label>
                                                                        <x-input-text name="musicle_tone_lower_left" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formrow-firstname-input"
                                                                            class="form-label">Right</label>
                                                                        <x-input-text name="musicle_tone_lower_right" placeholder="">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Be">
                                                            <section>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Independence"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Social interaction"
                                                                    :records="$constants::$Social_Interaction">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Social Communication"
                                                                    :records="$constants::$Social_Communication_skills">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Interpersonal"
                                                                    :records="$constants::$Intrapersonal_skills">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="DA">
                                                            <section>
                                                                <!-- end row -->
                                                                <h5 class=""><span></span> Physical (Gross motor/ Fine motor)</h5>
                                                                <input type="radio" name="physical_gross_motor_or_fine_motor" value="Gross Motor Skills">
                                                                <label for="vehicle1">Yes</label>
                                                                <input type="radio" name="physical_gross_motor_or_fine_motor" value="No">
                                                                <label for="vehicle1">No</label>
                                                                <!-- end row -->
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Cognitive"
                                                                    :records="$constants::$D2">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <div class="mb-3">
                                                                    <label for="form row-firstname-input"
                                                                        class="form-label">If yes write
                                                                        below</label>
                                                                    <x-input-text name="if_yes" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <div class="mb-3">
                                                                    <h5 class=""><span></span> Behavioral</h5>    
                                                                    <x-input-text name="behavioral" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- row end -->
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Communication"
                                                                    :records="$constants::$communication_skills">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Social" :records="$constants::$Social_Communication_skills">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Emotional"
                                                                    :records="$constants::$yesNoEn">
                                                                </x-input-radio-or-check>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Range_of_movement">
                                                            <section>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Upper limbs"
                                                                    :records="$physiotherapyConstants::$range">
                                                                </x-input-radio-or-check>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Left</label>
                                                                    <x-input-text name="left" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Right</label>
                                                                    <x-input-text name="right" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Lower Limbs"
                                                                    :records="$physiotherapyConstants::$range">
                                                                </x-input-radio-or-check>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Left</label>
                                                                    <x-input-text name="left" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formrow-firstname-input"
                                                                        class="form-label">Right</label>
                                                                    <x-input-text name="right" placeholder="">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Neck" :records="$physiotherapyConstants::$range">
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
                                                            <input type="submit"
                                                                class='btn btn-finish btn-fill btn-danger'
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
                        <div class="tab-pane " id="case-histroy_list" role="tabpanel">
                            <livewire:physiotherapy-list />
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
