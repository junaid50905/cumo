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
                                                                data-toggle="tab">Case History</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Speech</a>
                                                        </li>
                                                        <li class="w-100"><a href="#PERSONAL" data-toggle="tab">Body
                                                                Language</a></li>
                                                        <li class="w-100"><a href="#Topic_Maintenance"
                                                                data-toggle="tab">Words usages / Vocabulary</a></li>
                                                        <li class="w-100"><a href="#Conversational_Structure"
                                                                data-toggle="tab">Sentence structure</a></li>
                                                        <li class="w-100"><a href="#Word_Structure"
                                                                data-toggle="tab">Relaying information</a></li>
                                                        <li class="w-100"><a href="#Manner_Effectiveness"
                                                                data-toggle="tab">Following Directions</a></li>
                                                        <li class="w-100"><a href="#Repair_Structures"
                                                                data-toggle="tab">Attention and Memory</a></li>
                                                        <li class="w-100"><a href="#Functional_Intent"
                                                                data-toggle="tab">Conversation / Social Communication</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Functional_Intent_B"
                                                                data-toggle="tab">Play skill</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9" id="questionSerial">
                                                <form method="post" action="{{ route('functional-communication.store') }}">
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
                                                                            <x-input-text name="collection_date" :required="true"
                                                                                type="date" placeholder="">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers" :required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select name="student_id"
                                                                                :records="$students" :required="true" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Description:</label>
                                                                            <p>Functional Assessment Checklist (FACTS)</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-email-input">Instruction:</label>
                                                                            <p>Functional Assessment Checklist (FACTS)</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Talk too loud for the context" :records="$constants::$D2_b_3_17"
                                                                    secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Talk too quietly for the context"
                                                                    :records="$constants::$D2_b_3_17" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Speech is hard to understand" :records="$constants::$D2_b_3_08"
                                                                    secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Speech calls attention of itself" 
                                                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <input type="hidden" disabled class="speech_calls_attention_of_itself" name="speech_calls_attention_of_itself_1" value="{{ array_key_first($constants::$D2_b_3_03) }}">
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Voice is too hard"
                                                                    :records="$constants::$D2_b_3_17" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Voice is too low"
                                                                    :records="$constants::$D2_b_3_17" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Repeats words of parts of word when talking"
                                                                    :records="$constants::$D2_b_3" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check
                                                                    label="Talks fast, causing speech to be unclear"
                                                                    :records="$constants::$D2_b_3_17" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Speech sounds monotone"
                                                                    :records="$constants::$D2_b_3_17" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <!--end row -->
                                                                <!--end row -->
                                                                <x-input-radio-or-check label="Speech sounds sign-song"
                                                                    :records="$constants::$yesNoEn" secondaryInputLabel="Excessive:">
                                                                </x-input-radio-or-check>
                                                                <input type="hidden" disabled class="speech_sounds_sign_song" name="speech_sounds_sign_song_1" value="{{ array_key_first($constants::$D2_b_3_03) }}">
                        
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="PERSONAL">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Body posture is too rigid"
                                                                        :records="$constants::$D1_a_1_14"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Body posture is too relaxed"
                                                                        :records="$constants::$D1_a_1_14"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has noticed nervous mannerisms"
                                                                        :records="$constants::$D1_a_1_14"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has limited use if gestures"
                                                                        :records="$constants::$D1_a_1_14"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrates unusual facial expressions"
                                                                        :records="$constants::$D3_a_09"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Shows little variation in facial expressions"
                                                                        :records="$constants::$D3_a_09"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty understanding facial expressions / body language"
                                                                        :records="$constants::$D2_b_3_08"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Use inappropriate body orientation or proximity in interaction"
                                                                        :records="$constants::$D2_b_1_02"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check label="Eye contact is fleeting"
                                                                        :records="$constants::$D1_a_3"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not use eye contact" :records="$constants::$D1_a_3"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Topic_Maintenance">
                                                            <section>
                                                                <div>

                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Repeats words / phrases / sentences"
                                                                        :records="$constants::$D2_b_3_17"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check name="Has_difficulties_using"
                                                                        label="Has difficulties using ad understanding non – literal meanings (proverbs, idioms, slangs, sarcasm, teasing etc),"
                                                                        :records="$constants::$D2_b_3_08"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty understanding /using humor appropriately"
                                                                        :records="$constants::$D2_b_3_08"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrate literal use and understanding of language"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <input type="hidden" disabled class="demonstrate_literal_use_and_understanding_of_language" name="demonstrate_literal_use_and_understanding_of_language_1" value="{{ array_key_first($constants::$D2_b_3_08) }}">
                        
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty with multiple meaning words"
                                                                        :records="$constants::$D2_b_3_08"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                      
                                                                    
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Uses rote / recital language"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <input type="hidden" disabled class="uses_rote_or_recital_language" name="uses_rote_or_recital_language_1" value="{{ array_key_first($constants::$D2_b_3) }}">
                        
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrate idiosyncratic word use"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <input type="hidden" disabled class="demonstrate_idiosyncratic_word_use" name="demonstrate_idiosyncratic_word_use_1" value="{{ array_key_first($constants::$D2_b_3_04) }}">
                        
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has a large vocabulary with little comprehension"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <input type="hidden" disabled class="has_a_large_vocabulary_with_little_comprehension" name="has_a_large_vocabulary_with_little_comprehension_1" value="{{ array_key_first($constants::$D2_b_3_04) }}">
                        
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Reverses personal pronouns"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <input type="hidden" disabled class="reverses_personal_pronouns" name="reverses_personal_pronouns_1" value="{{ array_key_first($constants::$D2_b_3_17) }}">
                                                                    
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Conversational_Structure">
                                                            <section>
                                                                <div>

                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Lacks variety in use of sentence structure"
                                                                        :records="$constants::$D2_b_3_17"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Word_Structure">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Leaves out important information when retelling a story, describing an event, giving directions or giving a message"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulties relaying information in a sequential way"
                                                                        :records="$constants::$D2_b_3_07"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Says too much or too little"
                                                                        :records="$constants::$D2_b_3_17"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Is slow in answering questions in class / work"
                                                                        :records="$constants::$D2_b_3_22"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Manner_Effectiveness">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty understanding what to do"
                                                                        :records="$constants::$D2_b_3_08"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Often asks for repeats/ explanations of a direction or assignment"
                                                                        :records="$constants::$D2_b_3_22"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does the wrong thing after clear directions have been given"
                                                                        :records="$constants::$D2_b_3_08"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Doesn’t appear to watch what other students are doing for information"
                                                                        :records="$constants::$D2_b_1_09"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Doesn’t seek help in following directions when it is needed"
                                                                        :records="$constants::$D2_b_3"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Appears to have difficulty understanding tone of voice"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <input type="hidden" disabled class="has_difficulty_initiating_conversations" name="has_difficulty_initiating_conversations_1" value="{{ array_key_first($constants::$D2_b_3) }}">
                                                                    
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty comprehending questions"
                                                                        :records="$constants::$D2_b_3_22"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Repair_Structures">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="has an excellent rote memory with poor comprehension"
                                                                        :records="$constants::$D2_b_1_05"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Often looks away or ‘day dreams’ during lectures"
                                                                        :records="$constants::$D2_b_3_03"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty remembering orally presented information"
                                                                        :records="$constants::$D2_b_3_10"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has a hard time picking out the main points of an oral presentation or story"
                                                                        :records="$constants::$D2_b_3_08"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrates difficulty remembering the names of teachers and class members"
                                                                        :records="$constants::$D2_b_1_05"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty shifting attention"
                                                                        :records="$constants::$D4_a_2_07"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty with joint attention"
                                                                        :records="$constants::$D2_b_3_03"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Focuses on apparently irrelevant information or details"
                                                                        :records="$constants::$D2_b_2_02"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Uses delayed r immediate echolalia"
                                                                        :records="$constants::$D2_b_3"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Repeats passages from movie, songs , commercials , cartoons etc"
                                                                        :records="$constants::$D3_b_07_01"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not responds to his name"
                                                                        :records="$constants::$D2_b_3_01"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Responds to his name inconsistently"
                                                                        :records="$constants::$D2_b_3_01"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Inconsistently attends to verbal stimuli"
                                                                        :records="$constants::$D2_b_3_01"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Response to speech is delayed"
                                                                        :records="$constants::$D2_b_3_01"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->

                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrates pragmatic difficulties despite adequate scores on standardized tests"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Looks down or away when talking"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Makes off topic comments" :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has trouble stating opinion and reason for those opinions for a varieties of age appropriate topics"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty initiating conversations"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <input type="hidden" disabled class="has_difficulty_initiating_conversations" name="has_difficulty_initiating_conversations_1" value="33">
                                                                    
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty initiating pay"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has hard time sustaining topic of conversation"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty initiating play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has a hard time sustaining topic of conversation"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has a hard time sustaining play with others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrate problems terminating a conversation"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty understanding the perspective of others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has trouble responding in an empathetic manner"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Interrupts the conversation of others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty adapting language of others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty adapting language to audience or setting"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Talks too much in a conversation with peers / adults"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Talks too little in a conversation with peers / adults"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Bringing up the same topic repeatedly"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Gives recitative / redundant information"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrates difficulty taking turns"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not use language to regulate others action"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty with greetings / departures"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty clarifying"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty asking for clarification"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty asking question"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Use obsessive questions or comments to initiate or maintain interaction"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Significant differences between interaction skills with peers vs. adults"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not evoke attention appropriately"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Difficulty comprehending social rules"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Difficulty asking for and accepting help"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Protest in inappropriate or atypical ways"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not ask permission when appropriate to do so"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Is unaware of his impact on others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrates limited range of communicative functions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Pre-suppositional skills are weak"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Appear to have difficulty judging listener interest"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Functional_Intent_B">
                                                            <section>
                                                                <div>
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Appears more interested in objectives than people"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not establish joint focus"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not anticipate social approach of other"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Shows little awareness of peers of have atypical interactions"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not observe peers with curiosity"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty with parallel play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty with associative play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has difficulty with cooperative play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Laughs for no apparent reason"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Cries for no apparent reason"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check label="Has difficulty sharing"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does thing s for himself without interacting with others"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Has limited imaginative / pretending play"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Demonstrate difficulty with cause and effect"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Play appears ritualistic / recitation / rote"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Does not response appropriately to others distress"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
                                                                    <!--end row -->
                                                                    <!--end row -->
                                                                    <x-input-radio-or-check
                                                                        label="Lack of joint attention such as showing and pointing"
                                                                        :records="$constants::$yesNoEn"
                                                                        secondaryInputLabel="Excessive:">
                                                                    </x-input-radio-or-check>
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
                            <livewire:functional-communication-list />
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
      <script>
        //if "no" single/multiple
        jQuery('input:radio').click(function() {
            let names = [
                'speech_calls_attention_of_itself',
                'speech_sounds_sign_song',
                'demonstrate_literal_use_and_understanding_of_language',
                'uses_rote_or_recital_language',
                'demonstrate_idiosyncratic_word_use',
                'has_a_large_vocabulary_with_little_comprehension',
                'reverses_personal_pronouns',
                'has_difficulty_initiating_conversations'
            ]
            let current = $(this).attr('name')
            
            if(names.includes(current)==true && $(this).val() ==='no') {
                let name = $(this).attr('name')
                let hidden_inputs = document.getElementsByClassName(name)

                Array.from(hidden_inputs).forEach(function(itm, ind) {
                    $(itm).attr('disabled', false)
                })
            }else if(names.includes(current)==true && $(this).val() ==='yes'){
                let name = $(this).attr('name')
                let hidden_inputs = document.getElementsByClassName(name)

                Array.from(hidden_inputs).forEach(function(itm, ind) {
                    $(itm).attr('disabled', true)
                })
            } 
        })

        //if yes
        jQuery('input:radio').click(function() {
            //put the name attribute values in the array
            let names = ['has_difficulty_initiating_conversations']
            let current = $(this).attr('name')
            
            if(names.includes(current)==true && $(this).val() ==='yes') {
                let name = $(this).attr('name')
                let hidden_inputs = document.getElementsByClassName(name)

                Array.from(hidden_inputs).forEach(function(itm, ind) {
                    $(itm).attr('disabled', false)
                })
            }else if(names.includes(current)==true && $(this).val() ==='no'){
                let name = $(this).attr('name')
                let hidden_inputs = document.getElementsByClassName(name)

                Array.from(hidden_inputs).forEach(function(itm, ind) {
                    $(itm).attr('disabled', true)
                })
            } 
        })
      </script>
@endsection
