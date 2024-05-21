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
                                                        <li class="w-100"><a href="#Fundamental_Movement_Skills"
                                                                data-toggle="tab">Fundamental Movement Skills</a></li>
                                                        <li class="w-100"><a href="#Social_Communication"
                                                                data-toggle="tab">General</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Foot</a></li>
                                                        <li class="w-100"><a href="#PERSONAL" data-toggle="tab">Ankle</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                data-toggle="tab">Knee</a></li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                data-toggle="tab">Hip</a></li>
                                                        <li class="w-100"><a href="#Word_Structure" data-toggle="tab">Low
                                                                Back</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                data-toggle="tab">Mid Back</a></li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                data-toggle="tab">Shoulder</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9" id="questionSerial">
                                                <form method="post"
                                                    action="{{ route('functional-movement-skill.store') }}">
                                                    @csrf
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="Fundamental_Movement_Skills">
                                                            <h3>Fundamental Movement Skills</h3>
                                                            <section>
                                                                <div class="row mb-3 mt-3">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label>Collection Date:</label>
                                                                            <x-input-text type="date"
                                                                                name="collection_date"
                                                                                placeholder="dd,mm,yyyy" :required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label>Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers" :required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label>Student ID:</label>
                                                                            <x-input-select name="student_id"
                                                                                :records="$students" :required="true" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label>Description:</label>
                                                                            <p>Sensory checklist</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-email-input">Instruction:</label>
                                                                            <p>Parents can use this checklist to identify
                                                                                potential sensory challenges for their
                                                                                Child. The checklist is designed to target
                                                                                specific areas of potential dysfunction
                                                                                and to give you an opportunity to look at
                                                                                child’s environment and assess potential
                                                                                triggers for challenging behaviors. Read the
                                                                                statements and put a check mark or an
                                                                                X next to any statements that are true.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <h3>General</h3>
                                                            <section>
                                                                <div class="row mb-3 mt-3">
                                                                    <div class="col-md-4"><img
                                                                            src="{{ asset('images/movement/general_1.jpg') }}"
                                                                            alt="image" class="w-100"></div>
                                                                    <div class="col-md-8">On the left is the Deep Squat test
                                                                        from the Functional Movement
                                                                        Screen.
                                                                        Note that the stick is maintained vertically aligned
                                                                        with the feet, representing good
                                                                        mobility/stability through the trunk and shoulders.
                                                                        For the max score of “3”, this is the position you
                                                                        must achieve. On the right, the
                                                                        stick is well forward of the body, indicating
                                                                        deficits in mobility, stability, or
                                                                        both. Pls check 4 times :</div>
                                                                </div>
                                                                
                                                                <input type="checkbox" id="11" name="functional_movement_general_1" value=1 >
                                                                <label for="11">Try 1: Can Do</label>
                                                                <input type="checkbox" id="12" name="functional_movement_general_2" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                <label for="12">Try 1: Can not Do</label>
                                                                    
                                                                <input type="checkbox" id="13" name="functional_movement_general_3" value=1 >
                                                                <label for="13">Try 2: Can Do</label>
                                                                <input type="checkbox" id="14" name="functional_movement_general_4" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                <label for="14">Try 2: Can not Do</label>

                                                                <input type="checkbox" id="15" name="functional_movement_general_5" value=1 >
                                                                <label for="15">Try 3: Can Do</label>
                                                                <input type="checkbox" id="16" name="functional_movement_general_6" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                <label for="16">Try 3: Can not Do</label>

                                                               <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div id="" class="">
                                                                        <div class="row mb-3 mt-3">
                                                                            <div class="col-md-4"><img
                                                                                    src="{{ asset('images/movement/general_2.jpg') }}"
                                                                                    alt="image" class="w-100"></div>
                                                                            <div class="col-md-8">
                                                                                In these pictures, the Hurdle Step evaluates
                                                                                mobility of the right hip and
                                                                                stability of the trunk and left leg. Optimal
                                                                                execution is shown on the left. The
                                                                                picture on the right demonstrates</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div id="" class="">
                                                                        <div class="row mb-3 mt-3">
                                                                            <div class="col-md-4"><img
                                                                                    src="{{ asset('images/movement/general_3.jpg') }}"
                                                                                    alt="image" class="w-100"></div>
                                                                            <div class="col-md-8">
                                                                                In these pictures, the Hurdle Step evaluates
                                                                                mobility of the right hip and
                                                                                stability of the trunk and left leg. Optimal
                                                                                execution is shown on the left. The
                                                                                picture on the right demonstrates
                                                                            </div>
                                                                        </div>
                                                                        <input type="checkbox" id="17" name="functional_movement_general_7" value=1 >
                                                                        <label for="17">Try 3: Can Do</label>
                                                                        <input type="checkbox" id="18" name="functional_movement_general_8" value="{{ array_key_first($constants::$D1_a_1) }}">
                                                                        <label for="18">Try 3: Can not Do</label>
                                                                    </div>
                                                                </div>        
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <h3>Foot</h3>
                                                            <section>
                                                                <div>
                                                                    <div id="" class="">
                                                                        <div class="row mb-3 mt-3">
                                                                            <div class="col-md-4"><img
                                                                                    src="{{ asset('images/movement/foot_1.jpg') }}"
                                                                                    alt="image" class="w-100"></div>
                                                                            <div class="col-md-8">To improve the stability
                                                                                of the feet, single-leg stance
                                                                                exercises with bare feet are useful.
                                                                                Shown here are diagonal leg whips on the
                                                                                left and rotational reaches on the right.
                                                                                Gently grip the ground with the toes. Keep a
                                                                                tall posture and limit trunk sway.
                                                                                Start with short, slow movements and
                                                                                gradually add the range of motion and speed
                                                                                as proficiency improves.</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <input type="checkbox" id="11" name="functional_movement_foot_1" value=1 >
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_foot_2" value="{{ array_key_first($constants::$D1_a_1_06) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_foot_3" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_foot_4" value="{{ array_key_first($constants::$D1_a_1_06) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_foot_5" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_foot_6" value="{{ array_key_first($constants::$D1_a_1_06) }}">
                                                                    <label for="16">Try 3: Can not Do</label>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">
                                                            <h3>Ankle</h3>
                                                            <section>
                                                                <div class="row mb-3 mt-3">
                                                                    <div class="col-md-4"><img
                                                                            src="{{ asset('images/movement/ankle.jpg') }}"
                                                                            alt="image" class="w-100"></div>
                                                                    <div class="col-md-8">Ankle: The picture on the left
                                                                        shows optimal ankle flexion just
                                                                        before the heel rises during the walking stride. The
                                                                        picture on the right shows
                                                                        limited ankle flexion and is associated with an
                                                                        inefficient stride. </div>
                                                                </div>
                                                                <!-- <x-input-radio-or-check name="functional_movement_ankle_1"
                                                                    :records="$movementSkillsConstants::$accidentOrIncidentThree" /> -->
                                                                <input type="checkbox" id="11" name="functional_movement_ankle_1" value=1 >
                                                                <label for="11">Try 1: Can Do</label>
                                                                <input type="checkbox" id="12" name="functional_movement_ankle_2" value="{{ array_key_first($constants::$D1_a_1_09) }}">
                                                                <label for="12">Try 1: Can not Do</label>
                                                                    
                                                                <input type="checkbox" id="13" name="functional_movement_ankle_3" value=1 >
                                                                <label for="13">Try 2: Can Do</label>
                                                                <input type="checkbox" id="14" name="functional_movement_ankle_4" value="{{ array_key_first($constants::$D1_a_1_09) }}">
                                                                <label for="14">Try 2: Can not Do</label>

                                                                <input type="checkbox" id="15" name="functional_movement_ankle_5" value=1 >
                                                                <label for="15">Try 3: Can Do</label>
                                                                <input type="checkbox" id="16" name="functional_movement_ankle_6" value="{{ array_key_first($constants::$D1_a_1_09) }}">
                                                                <label for="16">Try 3: Can not Do</label>
                                                                
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">
                                                            <h3>Knee</h3>
                                                            <section>
                                                                <div>
                                                                    <div id="" class="">
                                                                        <div class="row mb-3 mt-3">
                                                                            <div class="col-md-4"><img
                                                                                    src="{{ asset('images/movement/knee_1_1.jpg') }}"
                                                                                    alt="image" class="w-100"></div>
                                                                            <div class="col-md-8">On the left, side
                                                                                stepping against the elastic band builds
                                                                                lateral hip stability and thus better
                                                                                control of knee motion. Ensure that the
                                                                                trunk doesn't sway.
                                                                                On the right, the medial pull of the elastic
                                                                                band adds challenge to lunges or
                                                                                single-leg squats. Ensure that the knee of
                                                                                the stance leg does not drift inward.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <input type="checkbox" id="11" name="functional_movement_knee_11" value=1 >
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_knee_12" value="{{ array_key_first($constants::$D1_a_1_05) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_knee_13" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_knee_14" value="{{ array_key_first($constants::$D1_a_1_05) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_knee_15" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_knee_16" value="{{ array_key_first($constants::$D1_a_1_05) }}">
                                                                    <label for="16">Try 3: Can not Do</label>
                                                                    <!-- end row -->
                                                                    <div id="" class="">
                                                                        <div class="row mb-3 mt-3">
                                                                            <div class="col-md-4"><img
                                                                                    src="{{ asset('images/movement/knee_2_1.jpg') }}"
                                                                                    alt="image" class="w-100"></div>
                                                                            <div class="col-md-8"> 
                                                                            On the left, side stepping against
                                                                            the elastic band builds lateral hip stability
                                                                            and thus better control of knee motion.
                                                                            Ensure that the trunk doesn&#39;t sway.
                                                                            On the right, the medial pull of the elastic
                                                                            band adds challenge to lunges or single-
                                                                            leg squats. Ensure that the knee of the
                                                                            stance leg does not drift inward.
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    
                                                                    <input type="checkbox" id="11" name="functional_movement_knee_21" value=1 >
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_knee_22" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_knee_23" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_knee_24" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_knee_25" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_knee_26" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="16">Try 3: Can not Do</label> 
                                                                        <!-- end row -->
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-md-4"><img
                                                                                src="{{ asset('images/movement/knee_3_1.jpg') }}"
                                                                                alt="image" class="w-100"></div>
                                                                        <div class="col-md-8"> 
                                                                            Use a weight as shown to counterbalance bodyweight and allow the trunk
                                                                            to stay perpendicular to the ground. The pictures on the left and center show optimal knee position.
                                                                            The picture on the right demonstrates poor right leg stability, as the knee drifts too far inward.
                                                                        </div>        
                                                                    </div>
                                                                    
                                                                    <input type="checkbox" id="11" name="functional_movement_knee_31" value=1 >
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_knee_32" value="{{ array_key_first($constants::$D1_a_1_07) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_knee_33" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_knee_34" value="{{ array_key_first($constants::$D1_a_1_07) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_knee_35" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_knee_36" value="{{ array_key_first($constants::$D1_a_1_07) }}">
                                                                    <label for="16">Try 3: Can not Do</label> 
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">
                                                            <h3>Hip</h3>
                                                            <section>
                                                                <div>
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-md-4"><img
                                                                                src="{{ asset('images/movement/hip_1_1.jpg') }}"
                                                                                alt="image" class="w-100"></div>
                                                                        <div class="col-md-8">The single-leg squat
                                                                            variation shown on the left is a strong
                                                                            challenge to the hip stabilizers. The picture on
                                                                            the right shows excellent mobility
                                                                            of the right hip into extension during a lunge.
                                                                            This is also the position for
                                                                            stretch of the hip flexors of the right leg.
                                                                        </div>
                                                                    </div>
                                                                    <input type="checkbox" id="13" name="functional_movement_hip_11" value=1 >
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_hip_12" value="{{ array_key_first($constants::$D1_a_1_14) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_hip_13" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_hip_14" value="{{ array_key_first($constants::$D1_a_1_14) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_hip_15" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_hip_16" value="{{ array_key_first($constants::$D1_a_1_14) }}">
                                                                    <label for="16">Try 3: Can not Do</label> 
                                                                       
                                                                    <!-- end row -->
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-md-4"><img
                                                                                src="{{ asset('images/movement/hip_2_1.jpg') }}"
                                                                                alt="image" class="w-100"></div>
                                                                        
                                                                        <div class="col-md-8">HIP 2: Balance and reach drills. The picture on
                                                                            the left demonstrates reach to the posterior left
                                                                            quadrant. The picture on the right shows reach to
                                                                            the posterior right quadrant. Both challenge hip
                                                                            mobility and stability. Note that the trunk and
                                                                            arms are forward for counterbalance. The rear
                                                                            foot does not touch the ground. This drill can also
                                                                            be used to assess side-to-side difference that might
                                                                            indicate an imbalance.
                                                                        </div>
                                                                    </div>
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_hip_22" value="{{ array_key_first($constants::$D1_a_1_14) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_hip_23" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_hip_24" value="{{ array_key_first($constants::$D1_a_1_14) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_hip_25" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_hip_26" value="{{ array_key_first($constants::$D1_a_1_14) }}">
                                                                    <label for="16">Try 3: Can not Do</label>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">
                                                            <h3>Low Back</h3>
                                                            <section>
                                                                <div>
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-md-4"><img
                                                                                src="{{ asset('images/movement/low_back_1_1.jpg') }}"
                                                                                alt="image" class="w-100"></div>
                                                                        <div class="col-md-8"> Walking lunges with
                                                                            a plate overhead demands control
                                                                            of the core.
                                                                            Keep the core engaged throughout to limit trunk
                                                                            sway.
                                                                        </div>
                                                                    </div>
                                                                    <input type="checkbox" id="12" name="functional_movement_low_back_11" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_low_back_12" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_low_back_13" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_low_back_14" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_low_back_15" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_low_back_16" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="16">Try 3: Can not Do</label>    

                                                                    <!-- end row -->
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-md-4"><img
                                                                                src="{{ asset('images/movement/low_back_2_1.jpg') }}"
                                                                                alt="image" class="w-100">
                                                                        </div>
                                                                        <div class="col-md-8"> 
                                                                        Rotating the plate across the forward leg adds further challenge to
                                                                        core stability. Keep the core engaged throughout to limit trunk sway.
                                                                        </div>        
                                                                    </div>
                                                                    <input type="checkbox" id="12" name="functional_movement_low_back_21" value="1">
                                                                    <label for="11">Try 1: Can Do</label>
                                                                    <input type="checkbox" id="12" name="functional_movement_low_back_22" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="12">Try 1: Can not Do</label>
                                                                        
                                                                    <input type="checkbox" id="13" name="functional_movement_low_back_23" value=1 >
                                                                    <label for="13">Try 2: Can Do</label>
                                                                    <input type="checkbox" id="14" name="functional_movement_low_back_24" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="14">Try 2: Can not Do</label>

                                                                    <input type="checkbox" id="15" name="functional_movement_low_back_25" value=1 >
                                                                    <label for="15">Try 3: Can Do</label>
                                                                    <input type="checkbox" id="16" name="functional_movement_low_back_26" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                    <label for="16">Try 3: Can not Do</label>   
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">
                                                            <h3>Mid Back</h3>
                                                            <section>
                                                                <div class="row mb-3 mt-3">
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-md-4"><img
                                                                                src="{{ asset('images/movement/mid_back.jpg') }}"
                                                                                alt="image" class="w-100"></div>
                                                                        <div class="col-md-8">The foam roll can be used as
                                                                            shown to mobilize stiff thoracic joints and
                                                                            massage the mid back muscles.
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <div>
                                                                        <input type="checkbox" id="12" name="functional_movement_mid_back_1" value="1">
                                                                        <label for="11">Try 1: Can Do</label>
                                                                        <input type="checkbox" id="12" name="functional_movement_mid_back_2" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                        <label for="12">Try 1: Can not Do</label>
                                                                            
                                                                        <input type="checkbox" id="13" name="functional_movement_mid_back_3" value=1 >
                                                                        <label for="13">Try 2: Can Do</label>
                                                                        <input type="checkbox" id="14" name="functional_movement_mid_back_4" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                        <label for="14">Try 2: Can not Do</label>

                                                                        <input type="checkbox" id="15" name="functional_movement_mid_back_5" value=1 >
                                                                        <label for="15">Try 3: Can Do</label>
                                                                        <input type="checkbox" id="16" name="functional_movement_mid_back_6" value="{{ array_key_first($constants::$D1_a_1_03) }}">
                                                                        <label for="16">Try 3: Can not Do</label> 
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">
                                                            <h3>Shoulder </h3>
                                                            <section>
                                                                <div class="row mb-3 mt-3">
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-md-4"><img
                                                                                src="{{ asset('images/movement/shoulder_blade.jpg') }}"
                                                                                alt="image" class="w-100"></div>
                                                                        <div class="col-md-8">
                                                                            Tight muscles around the shoulder
                                                                            blades can limit overhead motion. Here the foam
                                                                            roll is used to increase extensibility of the teres
                                                                            major.
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <div class="form-check d-flex">
                                                                                    <div class="me-5">
                                                                                        <input type="checkbox" id="12" name="functional_movement_shoulder_11" value="1">
                                                                                        <label for="11">Try 1: Can Do</label>
                                                                                        <input type="checkbox" id="12" name="functional_movement_shoulder_12" value="{{ array_key_first($constants::$D1_a_1_04) }}">
                                                                                        <label for="12">Try 1: Can not Do</label>
                                                                                            
                                                                                        <input type="checkbox" id="13" name="functional_movement_shoulder_13" value=1 >
                                                                                        <label for="13">Try 2: Can Do</label>
                                                                                        <input type="checkbox" id="14" name="functional_movement_shoulder_14" value="{{ array_key_first($constants::$D1_a_1_04) }}">
                                                                                        <label for="14">Try 2: Can not Do</label>

                                                                                        <input type="checkbox" id="15" name="functional_movement_shoulder_15" value=1 >
                                                                                        <label for="15">Try 3: Can Do</label>
                                                                                        <input type="checkbox" id="16" name="functional_movement_shoulder_16" value="{{ array_key_first($constants::$D1_a_1_04) }}">
                                                                                        <label for="16">Try 3: Can not Do</label> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="row mb-3 mt-3">
                                                                            <div class="col-md-4"><img
                                                                                    src="{{ asset('images/movement/shoulder_1_1.jpg') }}"
                                                                                    alt="image" class="w-100"></div>
                                                                            <div class="col-md-8">Overhead squatting is a
                                                                                challenge to stability throughout the
                                                                                core and shoulder girdle. Ensure you have
                                                                                sufficient shoulder mobility to keep the
                                                                                weight vertically aligned with the feet, not
                                                                                in front of the body.
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <input type="checkbox" id="12" name="functional_movement_shoulder_21" value="1">
                                                                            <label for="11">Try 1: Can Do</label>
                                                                            <input type="checkbox" id="12" name="functional_movement_shoulder_22" value="{{ array_key_first($constants::$D1_a_1_04) }}">
                                                                            <label for="12">Try 1: Can not Do</label>
                                                                                
                                                                            <input type="checkbox" id="13" name="functional_movement_shoulder_23" value=1 >
                                                                            <label for="13">Try 2: Can Do</label>
                                                                            <input type="checkbox" id="14" name="functional_movement_shoulder_24" value="{{ array_key_first($constants::$D1_a_1_04) }}">
                                                                            <label for="14">Try 2: Can not Do</label>

                                                                            <input type="checkbox" id="15" name="functional_movement_shoulder_25" value=1 >
                                                                            <label for="15">Try 3: Can Do</label>
                                                                            <input type="checkbox" id="16" name="functional_movement_shoulder_26" value="{{ array_key_first($constants::$D1_a_1_04) }}">
                                                                            <label for="16">Try 3: Can not Do</label> 
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
                            <!-- form start -->
                            <livewire:functional-movement-skill-list />
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
    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>


    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
    <script>
        const parent = document.querySelector('#questionSerial');
        const children = parent.querySelectorAll('h5 > span');

        for (let i = 0; i < children.length; i++) {
            children[i].innerText += '(' + (i + 1) + ')';
        }
    </script>
@endsection
