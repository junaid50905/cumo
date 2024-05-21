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
                                                    <li class="w-100"><a href="#Occupational_Therapy"
                                                            data-toggle="tab">Occupational Therapy</a></li>
                                                    <li class="w-100"><a href="#General" data-toggle="tab">General</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Muscle_Tone" data-toggle="tab">Muscle
                                                            Tone</a></li>
                                                    <li class="w-100"><a href="#Range_of_movement"
                                                            data-toggle="tab">Range of movement</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Functional_gross_motor"
                                                            data-toggle="tab">Functional Gross Motor</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Transitional_movement"
                                                            data-toggle="tab">Transitional Movements</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Fine_motor_skil" data-toggle="tab"> Fine
                                                            motor Skill</a></li>
                                                    <li class="w-100"><a href="#Automatic_reaction"
                                                            data-toggle="tab">Automatic Reaction</a></li>
                                                    <li class="w-100"><a href="#Sensory_Skill" data-toggle="tab">
                                                            Sensory Skill (Normal/Hypo response)</a></li>
                                                    <li class="w-100"><a href="#Visual_Perception"
                                                            data-toggle="tab">Visual Perception</a></li>
                                                    <li class="w-100"><a href="#Activities_of_Daily_living"
                                                            data-toggle="tab"> Activities of Daily living (ADL’s)</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Strength" data-toggle="tab">Strength</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Signature"
                                                            data-toggle="tab">Signature</a></li>
                                                    <li class="w-100"><a href="#Cognitive_Skills" data-toggle="tab">
                                                            Cognitive Skills</a></li>
                                                    <li class="w-100"><a href="#Treatment_Plan"
                                                            data-toggle="tab">Treatment Plan</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9" id="questionSerial">
                                            <form action="{{ route('occupational-therapy.store') }}" method="POST">
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Occupational_Therapy">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Collection Date:</label>
                                                                    <x-input-text name="date" type="date" :required='true'
                                                                        placeholder="mm/dd/yyyy">
                                                                    </x-input-text>
                                                                </div>
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Teacher: <span
                                                                            class="text-danger text-bold">*</span>
                                                                    </label>
                                                                    <x-input-select name="teacher_id"
                                                                        :records="$teachers" :required='true'/>
                                                                </div>
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Candidate ID:
                                                                        <span
                                                                            class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="student_id"
                                                                        :records="$students" :required='true'/>
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
                                                                                        class="form-label">Delivery</label>
                                                                                    <x-input-text name="delivery" placeholder="">
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
                                                                                <div class="me-5 mb-3 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Medication
                                                                                        Treatment </label>
                                                                                    <x-input-text
                                                                                        name="medication_treatment"
                                                                                        placeholder="Medication Treatment">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5  ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Any
                                                                                        present medicines</label>
                                                                                    <x-input-text
                                                                                        name="separate_home_equipment"
                                                                                        placeholder="Any present medicines">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Separate Home equipment"
                                                                :records="$constants::$D3_c_5_02">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Communication" name="communication"
                                                                :records="$constants::$D3_c_5_02">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Communication" name="communication_one"
                                                                :records="$therapyConstants::$communication">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Muscle_Tone">
                                                        <section>
                                                            <x-input-radio-or-check label="Upper limbs"
                                                                :records="$therapyConstants::$lowerLimbs">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text
                                                                                        name="upper_limbs_left"
                                                                                        placeholder="Left">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Lower Limbs"
                                                                :records="$therapyConstants::$lowerLimbs">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Trunk/neck"
                                                                :records="$therapyConstants::$trunkNeck">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            {{-- <x-input-radio-or-check label="Lower Limbs"
                                                                :records="$therapyConstants::$lowerLimbsTone">
                                                            </x-input-radio-or-check> --}}
                                                            <!-- row end -->
                                                            {{-- <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check label="Upper Limbs"
                                                                :records="$therapyConstants::$trunkNeck">
                                                            </x-input-radio-or-check>
                                                            <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
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
                                                            <x-input-radio-or-check label="Upper limbs"
                                                                :records="$therapyConstants::$upperLimbs">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h5></h5>
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Lower limbs"
                                                                :records="$therapyConstants::$upperLimbs">
                                                            </x-input-radio-or-check>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_gross_motor">
                                                        <section>
                                                            <x-input-radio-or-check label="Sitting"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Standing"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Ball skill"
                                                                :records="$constants::$D1_a_1_04">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Crawling"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Walking"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Running"
                                                                :records="$constants::$D1_a_1_01">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Jumping"
                                                                :records="$constants::$D1_a_1_06">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Transitional_movement">
                                                        <section>
                                                            <x-input-radio-or-check label="Rolling supine to prone"
                                                                :records="$constants::$D1_a_1_10">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Continuous Rolling"
                                                                :records="$constants::$D1_a_1_10">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Box sit to stand"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Kneeling to stand"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Prone to Supine"
                                                                :records="$constants::$D1_a_1_10">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Lying to Sit"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Cross sit to stand"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Rolling supine to prone"
                                                                :records="$constants::$D1_a_1_10">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Fine_motor_skil">
                                                        <section>
                                                            <x-input-radio-or-check label="Dominance"
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
                                                                                    <label
                                                                                        class="form-check-label pb-2">Left</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="Left">
                                                                                    </x-input-text>
                                                                                </div>
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Right</label>
                                                                                    <x-input-text name="right"
                                                                                        placeholder="Right">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check label="Reach"
                                                                :records="$constants::$D1_a_2">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Release"
                                                                :records="$constants::$D1_a_2">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Symmetrical use"
                                                                :records="$constants::$D1_a_2_03">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Bilateral use"
                                                                :records="$constants::$D1_a_2_11">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="In-hand manipulation"
                                                                :records="$constants::$D1_a_2">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Eye hand co-ordination"
                                                                :records="$constants::$D1_a_2_06">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Transfer"
                                                                :records="$constants::$D1_a_2_11">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Writing skills"
                                                                :records="$constants::$D2_b_2_05">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Grasp type"
                                                                :records="$constants::$D1_a_2_07">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Automatic_reaction">
                                                        <section>
                                                            <x-input-radio-or-check label="Protective reactions"
                                                                :records="$constants::$D2_b_1_02">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Equilibrium reaction"
                                                                :records="$constants::$D2_b_1_05">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Sensory_Skill">
                                                        <section>
                                                            <x-input-radio-or-check label="Tactile"
                                                                :records="$constants::$D2_a_1_04">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Visual"
                                                                :records="$constants::$D2_a_2">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Auditory"
                                                                :records="$constants::$D2_a_1_03">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Proprioceptive"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Vestibular"
                                                                :records="$constants::$D1_a_1_14">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Visual_Perception">
                                                        <section>
                                                            <x-input-radio-or-check label="Visual Discrimination"
                                                                :records="$constants::$D2_a_2_01">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Visual Memory"
                                                                :records="$constants::$D2_a_2_01">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Visual Figure ground"
                                                                :records="$constants::$D2_a_2_01">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Visual Spatial"
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
                                                                                    <x-input-text name="left"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Social interaction"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Activities_of_Daily_living">
                                                        <section>
                                                            <x-input-radio-or-check label="Eating"
                                                                :records="$constants::$D3_c_1_11">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Brushing teeth"
                                                                :records="$constants::$D3_c_1_02">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Dressing"
                                                                :records="$constants::$D3_c_1_08">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Toilet"
                                                                :records="$constants::$D3_c_1_03">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Bathing"
                                                                :records="$constants::$D3_c_1_02">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check
                                                                label="Does the child attend school?"
                                                                :records="$constants::$yesNoEn">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <div class="row py-2 pt-0">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Any
                                                                                        more information</label>
                                                                                    <x-input-text name="left"
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
                                                                                        class="form-check-label pb-2">Leisure/Play:
                                                                                        activities of interest</label>
                                                                                    <x-input-text name="left"
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
                                                            <x-input-radio-or-check
                                                                label="Physical (Gross motor/Fine motor)"
                                                                :records="$constants::$D1_a_1">
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
                                                                                    <x-input-text name="left"
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
                                                                                        class="form-check-label pb-2">Behavioral</label>
                                                                                    <x-input-text name="left"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Communication"
                                                                :records="$constants::$D2_b_3">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Social"
                                                                :records="$constants::$D4_c">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="ADL’s"
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
                                                                                    <label
                                                                                        class="form-check-label pb-2">Therapist
                                                                                        Signature</label>
                                                                                    <x-input-text type="file"
                                                                                        name="therapist_signature"
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
                                                                                    <label
                                                                                        class="form-check-label pb-2">
                                                                                        Designation and organizations
                                                                                        name</label>
                                                                                    <x-input-text
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
                                                                                    <label
                                                                                        class="form-check-label pb-2">Supervisor’s
                                                                                        Signature</label>
                                                                                    <x-input-text type="file"
                                                                                        name="supervisor_signature"
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
                                                                                        class="form-check-label pb-2">Designation
                                                                                        and organizations name</label>
                                                                                    <x-input-text
                                                                                        name="designation_name"
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
                                                            <x-input-radio-or-check label="Attention"
                                                                :records="$constants::$D2_b_3_03">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Problem Solving"
                                                                :records="$constants::$D2">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Able to Follow instruction"
                                                                :records="$constants::$D2_b_3_07">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <div class="row">
                                                                            <div class="form-check">
                                                                                <div class="me-5 ">
                                                                                    <label
                                                                                        class="form-check-label pb-2">Memory</label>
                                                                                    <x-input-text name="memory"
                                                                                        placeholder="">
                                                                                    </x-input-text>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Perceptual Motor"
                                                                :records="$constants::$D2">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Body Awareness"
                                                                :records="$constants::$D3_a_03">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->


                                                            <x-input-radio-or-check label="Body Co-ordination"
                                                                :records="$constants::$D1_a_2_06">
                                                            </x-input-radio-or-check>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check label="Bilateral Integration"
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
                                                                                    <label
                                                                                        class="form-check-label pb-2">Problem
                                                                                        List</label>
                                                                                    <x-input-text name="problem_list"
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
                                                                                        class="form-check-label pb-2">Treatment
                                                                                        Plan & Implementation</label>
                                                                                    <x-input-text name="treatment_plan"
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
                                                                                    <x-input-text name="progress"
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
                        </div> <!-- end col -->
                    </div>
                    <div class="tab-pane " id="case-histroy_list" role="tabpanel">
                        
                        <livewire:occupational-therapy-list />
                        <!-- end row -->
                    </div>
                </div>

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