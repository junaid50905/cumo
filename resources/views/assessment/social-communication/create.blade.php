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
                        <a class="nav-link active" data-bs-toggle="tab" href="#add" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Add</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">List</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="add" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#Social_Communication"
                                                            data-toggle="tab">Social Communication</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Pragmatic_Objective"
                                                            data-toggle="tab">Social Interaction</a>
                                                    </li>
                                                    <li class="w-100"><a href="#PERSONAL" data-toggle="tab">PERSONAL</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Topic_Maintenance"
                                                            data-toggle="tab">Topic Maintenance</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Conversational_Structure"
                                                            data-toggle="tab">Conversational
                                                            Structure</a></li>
                                                    <li class="w-100"><a href="#Word_Structure" data-toggle="tab">Word
                                                            Structure</a></li>
                                                    <li class="w-100"><a href="#Manner_Effectiveness"
                                                            data-toggle="tab">Manner/Effectiveness</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Repair_Structures"
                                                            data-toggle="tab">Repair Structures</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Functional_Intent"
                                                            data-toggle="tab">Functional Intent >
                                                            A.Responsiveness</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Functional_Intent_B"
                                                            data-toggle="tab">Functional Intent >
                                                            B.INSTRUMENTAL –
                                                            States needs</a></li>
                                                    <li class="w-100"><a href="#Functional_Intent_C"
                                                            data-toggle="tab">Functional Intent > C.
                                                            Requesting</a></li>
                                                    <li class="w-100"><a href="#Functional_Intent_D"
                                                            data-toggle="tab">Functional Intent > D.
                                                            Prosody</a></li>
                                                    <li class="w-100"><a href="#Functional_Intent_E"
                                                            data-toggle="tab">Functional Intent > E.
                                                            Protests</a></li>
                                                    <li class="w-100"><a href="#Functional_Intent_F"
                                                            data-toggle="tab">Functional Intent > F.
                                                            Protests</a></li>
                                                    <li class="w-100"><a href="#Functional_Intent_G"
                                                            data-toggle="tab">Functional Intent > G.
                                                            Humor</a></li>
                                                    <li class="w-100"><a href="#Functional_Intent_H"
                                                            data-toggle="tab">Functional Intent > H.
                                                            Greetings/Acknowledgements</a></li>
                                                    <li class="w-100"><a href="#Functional_Intent_I"
                                                            data-toggle="tab">Functional Intent > I.
                                                            Problem Solving</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Functional_Intent_J"
                                                            data-toggle="tab">Functional Intent > J.
                                                            Deceit</a></li>
                                                    <li class="w-100"><a href="#Academic_Communication"
                                                            data-toggle="tab">Academic
                                                            Communication</a></li>
                                                    <li class="w-100"><a href="#Nonverbal_Communication"
                                                            data-toggle="tab">Nonverbal
                                                            Communication</a></li>
                                                    <li class="w-100"><a href="#Perspective_Taking"
                                                            data-toggle="tab">Perspective Taking</a>
                                                    </li>
                                                    <li class="w-100"><a href="#REGULATORY" data-toggle="tab">REGULATORY
                                                            - Gives
                                                            commands</a></li>
                                                    <li class="w-100"><a href="#Social_Emotional"
                                                            data-toggle="tab">Social-Emotional</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9" id="questionSerial">
                                            <form action="{{ route('social-communication.store') }}" method="POST">
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Social_Communication">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Collection
                                                                        Date:</label>
                                                                    <x-input-text name="collection_date" type="date"
                                                                        placeholder="mm/dd/yyyy" :required='false' />
                                                                </div>

                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Teacher: <span
                                                                            class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="teacher_id"
                                                                        :records="$teachers" :required='false' />
                                                                </div>

                                                                <div class="col-lg-4 pull-left pb-2">
                                                                    <label class="p-2">Candidate ID:
                                                                        <span
                                                                            class="text-danger text-bold">*</span></label>
                                                                    <x-input-select name="student_id"
                                                                        :records="$students" :required='false' />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="col-xs-12 col-md-12 form-group pb-2">
                                                                        <label class="col-md-12">Description:</label>
                                                                        <p>Social Communication checklist</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="col-xs-12 col-md-12 form-group pb-2">
                                                                        <label class="col-md-12">Instruction:</label>
                                                                        <p> These social communication skills
                                                                            develop over time. Read the behaviors
                                                                            below and place an X in
                                                                            the appropriate column that describes
                                                                            how your child uses words/language, no
                                                                            words (gestures –
                                                                            preverbal) or does not yet show a
                                                                            behavior.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Pragmatic_Objective">
                                                        <section>
                                                            <x-input-radio-or-check label="Interaction with adults" name="interaction_with_adults"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="interaction_with_adults" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="interaction_with_adults" name="interaction_with_adults_1">
                                                          
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="age_appropriate_peers"
                                                                label="Interaction with age-appropriate peers"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="age_appropriate_peers" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="age_appropriate_peers" name="age_appropriate_peers_1">
                                                                    
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="interaction_with_younger_children"
                                                                label="Interaction with younger children"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="interaction_with_younger_children" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="interaction_with_younger_children" name="interaction_with_younger_children_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check
                                                                name="waiting_for_a_response_from_peers"
                                                                label="Waiting for a response from peers"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="waiting_for_a_response_from_peers" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_1) }}"
                                                                    class="waiting_for_a_response_from_peers" name="waiting_for_a_response_from_peers_1">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_7) }}"
                                                                    class="waiting_for_a_response_from_peers" name="waiting_for_a_response_from_peers_2">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="waiting_for_a_response_from_peers" name="waiting_for_a_response_from_peers_3">
                                                            <!-- row end -->



                                                            
                                                            <x-input-radio-or-check name="negotiating_deals" label="Negotiating deals"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="negotiating_deals" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_2) }}"
                                                                    class="negotiating_deals" name="negotiating_deals_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="taking_turns" label="Taking turns"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                               <div id="taking_turns" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_2) }}"
                                                                    class="taking_turns" name="taking_turns_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="many_individuals_simultaneously"
                                                                label="Ability to interact with many individuals simultaneously"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="many_individuals_simultaneously" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_2) }}"
                                                                    class="many_individuals_simultaneously" name="many_individuals_simultaneously_1">
                                                                     
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="many_individuals_simultaneously" name="many_individuals_simultaneously_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_establish_multiple_friendships"
                                                                label="Ability to establish multiple friendships"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_establish_multiple_friendships" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_7) }}"
                                                                    class="ability_to_establish_multiple_friendships" name="ability_to_establish_multiple_friendships_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="knowing_when_to_persist_or_let_go_of_an_idea"
                                                                label="Knowing when to persist or let go of an idea"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="knowing_when_to_persist_or_let_go_of_an_idea" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="knowing_when_to_persist_or_let_go_of_an_idea" name="knowing_when_to_persist_or_let_go_of_an_idea_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="interpreting_facial_expressions_and_voices"
                                                                label="Interpreting facial expressions and voices"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="interpreting_facial_expressions_and_voices" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_23) }}"
                                                                    class="interpreting_facial_expressions_and_voices" name="interpreting_facial_expressions_and_voices_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="understanding_the_rules_of_the_game"
                                                                label="Understanding the rules of the game"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="understanding_the_rules_of_the_game" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_23) }}"
                                                                    class="understanding_the_rules_of_the_game" name="understanding_the_rules_of_the_game_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="Expressing_various_appropriate_expressions"
                                                                label="Expressing various appropriate expressions"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="Expressing_various_appropriate_expressions" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="Expressing_various_appropriate_expressions" name="Expressing_various_appropriate_expressions_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="Receiving_and_giving_gifts" label="Receiving and giving gifts"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="Receiving_and_giving_gifts" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="Receiving_and_giving_gifts" name="Receiving_and_giving_gifts_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="understanding_sharing"
                                                                label="Understanding sharing and the concept of give and take"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="understanding_sharing" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4) }}"
                                                                    class="understanding_sharing" name="understanding_sharing_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="participation_in_group_activities"
                                                                label="Participation in group activities"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="participation_in_group_activities" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_2) }}"
                                                                    class="participation_in_group_activities" name="participation_in_group_activities_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="passive_tendencies" label="Passive tendencies"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="passive_tendencies" data-position='[4,5]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_6) }}"
                                                                    class="passive_tendencies" name="passive_tendencies_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="aggressive_tendencies" label="Aggressive tendencies"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="aggressive_tendencies" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_1) }}"
                                                                    class="aggressive_tendencies" name="aggressive_tendencies_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="responsiveness" label="Responsiveness"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="responsiveness" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind) }}"
                                                                    class="responsiveness" name="responsiveness_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b) }}"
                                                                    class="responsiveness" name="responsiveness_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_handle_being_left_out"
                                                                label="Ability to handle being “left out”"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_handle_being_left_out" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_handle_being_left_out" name="ability_to_handle_being_left_out_1">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="PERSONAL">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="expresses_feelings" label="Expresses feelings"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false" />
                                                            <div id="expresses_feelings" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="expresses_feelings" name="expresses_feelings_1">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="identifies_feelings"
                                                                label="Identifies feelings (I'm happy.)"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false" />
                                                            <div id="identifies_feelings" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="identifies_feelings" name="identifies_feelings_1">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="explains_feelings"
                                                                label="Explains feelings (I'm happy because it's my birthday)n"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="explains_feelings" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="explains_feelings" name="explains_feelings_1">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="provides_excuses_or_reasons" label="Provides excuses or reasons"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="provides_excuses_or_reasons" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="provides_excuses_or_reasons" name="provides_excuses_or_reasons_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="provides_excuses_or_reasons" name="provides_excuses_or_reasons_2">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check  name="offers_an_opinion_with_support"
                                                                label="Offers an opinion with support"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="offers_an_opinion_with_support" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="offers_an_opinion_with_support" name="offers_an_opinion_with_support_1">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_02) }}"
                                                                    class="offers_an_opinion_with_support" name="offers_an_opinion_with_support_2">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="offers_an_opinion_with_support" name="offers_an_opinion_with_support_3">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="complains" label="Complains"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="complains" data-position='[1, 2, 3, 4]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3) }}"
                                                                    class="complains" name="complains_1">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="blames_others" label="Blames others"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="blames_others" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_06) }}"
                                                                    class="blames_others" name="blames_others_1">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check
                                                                name="provides_pertinent_information_on_request"
                                                                label="Provides pertinent information on request (2 or 3 of the following: name, address, phone, birthdate)"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="provides_pertinent_information_on_request" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_18) }}"
                                                                    class="provides_pertinent_information_on_request" name="provides_pertinent_information_on_request_1">
                                                            <input type="hidden" disabled
                                                             value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                             class="provides_pertinent_information_on_request" name="provides_pertinent_information_on_request_2">       
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Topic_Maintenance">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="ability_to_establish_a_topic" label="Ability to establish a topic"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_establish_a_topic" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_establish_a_topic" name="ability_to_establish_a_topic_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_establish_a_topic" name="ability_to_establish_a_topic_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_maintain_topic_relevancy"
                                                                label="Ability to maintain topic relevancy"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_maintain_topic_relevancy" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_maintain_topic_relevancy" name="ability_to_maintain_topic_relevancy_1">
                                                                    
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_maintain_topic_relevancy" name="ability_to_maintain_topic_relevancy_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_change_a_topic_using_signals"
                                                                label="Ability to change a topic using signals"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_change_a_topic_using_signals" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_change_a_topic_using_signals" name="ability_to_change_a_topic_using_signals_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_change_a_topic_using_signals" name="ability_to_change_a_topic_using_signals_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_change_a_topic_using_verbal_means"
                                                                label="Ability to change a topic using verbal means"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_change_a_topic_using_verbal_means" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_change_a_topic_using_verbal_means" name="ability_to_change_a_topic_using_verbal_means_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="relevancy_of_information" label="Relevancy of information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="relevancy_of_information" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="relevancy_of_information" name="relevancy_of_information_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_interrupt_appropriately"
                                                                label="Ability to interrupt appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_interrupt_appropriately" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="ability_to_interrupt_appropriately" name="ability_to_interrupt_appropriately_1">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_interrupt_appropriately" name="ability_to_interrupt_appropriately_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_terminate_the_conversation"
                                                                label="Ability to terminate the conversation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_terminate_the_conversation" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_terminate_the_conversation" name="ability_to_terminate_the_conversation_1">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Conversational_Structure">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_initiate_a_conversation"
                                                                label="Ability to initiate a conversation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_initiate_a_conversation" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_initiate_a_conversation" name="ability_to_initiate_a_conversation_1">

                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_initiate_a_conversation" name="ability_to_initiate_a_conversation_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="the_interest_area"
                                                                label="Ability to establish a conversation outside of the interest area"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="the_interest_area" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="the_interest_area" name="the_interest_area_1">
     
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_3) }}"
                                                                    class="the_interest_area" name="the_interest_area_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_acknowledge_others_in_conversation"
                                                                label="Ability to acknowledge others in conversation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_acknowledge_others_in_conversation" data-position='[1, 3, 5]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_8) }}"
                                                                    class="ability_to_acknowledge_others_in_conversation" name="ability_to_acknowledge_others_in_conversation_1">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_delete"
                                                                label="Ability to delete redundant information appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_delete" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_3) }}"
                                                                    class="ability_to_delete" name="ability_to_delete_1">
                                                             <div id="ability_to_delete" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_4) }}"
                                                                    class="ability_to_delete" name="ability_to_delete_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check
                                                                name="ability_to_order_information_appropriately"
                                                                label="Ability to order information appropriately (new info follows old)"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_order_information_appropriately" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_order_information_appropriately" name="ability_to_order_information_appropriately_1">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_02) }}"
                                                                    class="ability_to_order_information_appropriately" name="ability_to_order_information_appropriately_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="use_of_pedantic_speech" label="Use of pedantic speech"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="use_of_pedantic_speech" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_23) }}"
                                                                    class="use_of_pedantic_speech" name="use_of_pedantic_speech_1">
                                                        
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Word_Structure">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_generals_or_specifics"
                                                                label="Ability to use generals/specifics"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_generals_or_specifics" data-position='[1, 5]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"
                                                                    class="ability_to_use_generals_or_specifics" name="ability_to_use_generals_or_specifics_1">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check label="Pronoun use" name="pronoun_use"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="pronoun_use" data-position='[1, 3, 5]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_6) }}"
                                                                    class="pronoun_use" name="pronoun_use_1">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check label="Use of word referents" name="use_of_word_referents"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="use_of_word_referents" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_04) }}"
                                                                    class="use_of_word_referents" name="use_of_word_referents_1">
                                                
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="ability_to_employee"
                                                                label="Ability to employ theory of mind (presuppostion)"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_employee" data-position='[1, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_23) }}"
                                                                    class="ability_to_employee" name="ability_to_employee_1">
                                                        
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Manner_Effectiveness">
                                                        <!-- Bank Details -->
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="lie_ambiguous_confusing_information_share"
                                                                label="Lie, ambiguous, confusing information share"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="lie_ambiguous_confusing_information_share" data-position='[1, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1) }}"
                                                                    class="lie_ambiguous_confusing_information_share" name="lie_ambiguous_confusing_information_share_1">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="provides_relevant_information"
                                                                label="Provides relevant information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="provides_relevant_information" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="provides_relevant_information" name="provides_relevant_information_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="provides_relevant_information" name="provides_relevant_information_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="truthfulness_of_information"
                                                                label="Truthfulness of information (grandiosity)"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="truthfulness_of_information" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1) }}"
                                                                    class="truthfulness_of_information" name="truthfulness_of_information_1">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_establish_joint_activity"
                                                                label="Ability to establish joint activity"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_establish_joint_activity" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_2_07) }}"
                                                                    class="ability_to_establish_joint_activity" name="ability_to_establish_joint_activity_1">
                                                            <div id="ability_to_establish_joint_activity" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="ability_to_establish_joint_activity" name="ability_to_establish_joint_activity_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="tendency_to_present_personal_opinions_as_factual"
                                                                label="Tendency to present personal opinions as factual"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="tendency_to_present_personal_opinions_as_factual" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_2) }}"
                                                                    class="tendency_to_present_personal_opinions_as_factual" name="tendency_to_present_personal_opinions_as_factual_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_4) }}"
                                                                    class="tendency_to_present_personal_opinions_as_factual" name="tendency_to_present_personal_opinions_as_factual_2">
                                                        
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Repair_Structures">
                                                        <section>
                                                            <!-- row end -->

                                                            <x-input-radio-or-check  name="requests_clarification_as_needed"
                                                                label="Requests clarification as needed"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="requests_clarification_as_needed" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_8) }}"
                                                                    class="requests_clarification_as_needed" name="requests_clarification_as_needed_1">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="spontaneously_provides_additional_information"
                                                                label="Spontaneously provides additional information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="spontaneously_provides_additional_information" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_8) }}"
                                                                    class="spontaneously_provides_additional_information" name="spontaneously_provides_additional_information_1">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="clarification_purposes"
                                                                label="Requests repetition of information for clarification purposes"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="clarification_purposes" data-position='[1, 2, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="clarification_purposes" name="clarification_purposes_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="clarification_purposes" name="clarification_purposes_2">
                                                        
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent">
                                                        <section>
                                                            <x-input-radio-or-check  name="looks_at_speaker_when_called" label="Looks at speaker when called"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="looks_at_speaker_when_called" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="looks_at_speaker_when_called" name="looks_at_speaker_when_called_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_09) }}"
                                                                    class="looks_at_speaker_when_called" name="looks_at_speaker_when_called_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="delay_of_response" label="Delay of response"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="delay_of_response" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="delay_of_response" name="delay_of_response_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_09) }}"
                                                                    class="delay_of_response" name="delay_of_response_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_label_information_appropriately"
                                                                label="Ability to label information appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="ability_to_label_information_appropriately" data-position='[1, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_label_information_appropriately" name="ability_to_label_information_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_10) }}"
                                                                    class="ability_to_label_information_appropriately" name="ability_to_label_information_appropriately_2">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_describe_objects_appropriately"
                                                                label="Ability to describe objects appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="ability_to_describe_objects_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_06) }}"
                                                                    class="ability_to_describe_objects_appropriately" name="ability_to_describe_objects_appropriately_1">
                                                            <div id="ability_to_describe_objects_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_describe_objects_appropriately" name="ability_to_describe_objects_appropriately_2">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_describe_objects_appropriately" name="ability_to_describe_objects_appropriately_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_describe_objects_appropriately" name="ability_to_describe_objects_appropriately_4">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_describe_events_appropriately"
                                                                label="Ability to describe events appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_describe_events_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_06) }}"
                                                                    class="ability_to_describe_events_appropriately" name="ability_to_describe_events_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_describe_events_appropriately" name="ability_to_describe_events_appropriately_2">
                                                             <div id="ability_to_describe_events_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_describe_events_appropriately" name="ability_to_describe_events_appropriately_3">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_describe_events_appropriately" name="ability_to_describe_events_appropriately_4">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_state_facts_appropriately"
                                                                label="Ability to state facts appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_state_facts_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_06) }}"
                                                                    class="ability_to_state_facts_appropriately" name="ability_to_state_facts_appropriately_1">
                                                            <div id="ability_to_state_facts_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_state_facts_appropriately" name="ability_to_state_facts_appropriately_2">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_state_facts_appropriately" name="ability_to_state_facts_appropriately_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_state_facts_appropriately" name="ability_to_state_facts_appropriately_4">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_provide_clarification_appropriately"
                                                                label="Ability to provide clarification appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_provide_clarification_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_provide_clarification_appropriately" name="ability_to_provide_clarification_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_provide_clarification_appropriately" name="ability_to_provide_clarification_appropriately_2">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_provide_clarification_appropriately" name="ability_to_provide_clarification_appropriately_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_provide_clarification_appropriately" name="ability_to_provide_clarification_appropriately_4">
                                                        
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_B">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="makes_polite_requests" label="Makes polite requests"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="makes_polite_requests" data-position='[1, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="makes_polite_requests" name="makes_polite_requests_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="makes_polite_requests" name="makes_polite_requests_2">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="makes_polite_requests" name="makes_polite_requests_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="makes_choices" label="Makes choices"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="makes_choices" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="makes_choices" name="makes_choices_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_07) }}"
                                                                    class="makes_choices" name="makes_choices_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"
                                                                    class="makes_choices" name="makes_choices_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_06) }}"
                                                                    class="makes_choices" name="makes_choices_4">
                                                        
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="gives_description_of_an_object_wanted"
                                                                label="Gives description of an object wanted"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="gives_description_of_an_object_wanted" data-position='[1, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="gives_description_of_an_object_wanted" name="gives_description_of_an_object_wanted_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_06) }}"
                                                                    class="gives_description_of_an_object_wanted" name="gives_description_of_an_object_wanted_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="expresses_a_specific_personal_need"
                                                                label="Expresses a specific personal need"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="expresses_a_specific_personal_need" data-position='[1, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="expresses_a_specific_personal_need" name="expresses_a_specific_personal_need_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="expresses_a_specific_personal_need" name="expresses_a_specific_personal_need_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="requests_help" label="Requests help"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="requests_help" data-position='[1, 3]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="requests_help" name="requests_help_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="requests_help" name="requests_help_2">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_C">
                                                        <section>
                                                            <x-input-radio-or-check name="ability_to_request_information_appropriately"
                                                                label="Ability to request information appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_information_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_information_appropriately" name="ability_to_request_information_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_15) }}"
                                                                    class="ability_to_request_information_appropriately" name="ability_to_request_information_appropriately_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_request_information_appropriately" name="ability_to_request_information_appropriately_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_request_permission_appropriately"
                                                                label="Ability to request permission appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_permission_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_permission_appropriately" name="ability_to_request_permission_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_2_08) }}"
                                                                    class="ability_to_request_permission_appropriately" name="ability_to_request_permission_appropriately_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_request_yes_no_responses_appropriately"
                                                                label="Ability to request yes-no responses appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_yes_no_responses_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_02) }}"
                                                                    class="ability_to_request_yes_no_responses_appropriately" name="ability_to_request_yes_no_responses_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_yes_no_responses_appropriately" name="ability_to_request_yes_no_responses_appropriately_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_22) }}"
                                                                    class="ability_to_request_yes_no_responses_appropriately" name="ability_to_request_yes_no_responses_appropriately_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_wh_questions_appropriately"
                                                                label="Ability to use Wh-Questions appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_wh_questions_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_22) }}"
                                                                    class="ability_to_use_wh_questions_appropriately" name="ability_to_use_wh_questions_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_use_wh_questions_appropriately" name="ability_to_use_wh_questions_appropriately_2">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_use_wh_questions_appropriately" name="ability_to_use_wh_questions_appropriately_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_request_an_action_of_another_appropriately"
                                                                label="Ability to request an action of another appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_an_action_of_another_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_an_action_of_another_appropriately" name="ability_to_request_an_action_of_another_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_2_08) }}"
                                                                    class="ability_to_request_an_action_of_another_appropriately" name="ability_to_request_an_action_of_another_appropriately_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_request_clarification_appropriately"
                                                                label="Ability to request clarification appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_clarification_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_clarification_appropriately" name="ability_to_request_clarification_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_2_08) }}"
                                                                    class="ability_to_request_clarification_appropriately" name="ability_to_request_clarification_appropriately_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_request_attention_appropriately"
                                                                label="Ability to request attention appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_attention_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_attention_appropriately" name="ability_to_request_attention_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_2_08) }}"
                                                                    class="ability_to_request_attention_appropriately" name="ability_to_request_attention_appropriately_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_request_help_appropriately"
                                                                label="Ability to request help appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_help_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_help_appropriately" name="ability_to_request_help_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_2_08) }}"
                                                                    class="ability_to_request_help_appropriately" name="ability_to_request_help_appropriately_2">
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_D">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_use_appropriate_rate_of_speech"
                                                                label="Ability to use appropriate rate of speech"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_appropriate_rate_of_speech" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_use_appropriate_rate_of_speech" name="ability_to_use_appropriate_rate_of_speech_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_15) }}"
                                                                    class="ability_to_use_appropriate_rate_of_speech" name="ability_to_use_appropriate_rate_of_speech_2">
                                                                    
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_04) }}"
                                                                    class="ability_to_use_appropriate_rate_of_speech" name="ability_to_use_appropriate_rate_of_speech_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_appropriate_tone_of_voice"
                                                                label="Ability to use appropriate tone of voice"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_appropriate_tone_of_voice" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_use_appropriate_tone_of_voice" name="ability_to_use_appropriate_tone_of_voice_1">
                                                            <div id="ability_to_use_appropriate_tone_of_voice" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_15) }}"
                                                                    class="ability_to_use_appropriate_tone_of_voice" name="ability_to_use_appropriate_tone_of_voice_2">
                                                                    <div id="ability_to_use_appropriate_tone_of_voice" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_use_appropriate_tone_of_voice" name="ability_to_use_appropriate_tone_of_voice_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_appropriate_pitch"
                                                                label="Ability to use appropriate pitch"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_appropriate_pitch" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3) }}"
                                                                    class="ability_to_use_appropriate_pitch" name="ability_to_use_appropriate_pitch_1">
                                                           
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_appropriate_loudness"
                                                                label="Ability to use appropriate loudness"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_appropriate_loudness" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_use_appropriate_loudness" name="ability_to_use_appropriate_loudness_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_15) }}"
                                                                    class="ability_to_use_appropriate_loudness" name="ability_to_use_appropriate_loudness_2">
                                                                    
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_use_appropriate_loudness" name="ability_to_use_appropriate_loudness_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="implied_meanings_via_tone_of_voice"
                                                                label="Ability to comprehend implied meanings via tone of voice"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="implied_meanings_via_tone_of_voice" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="implied_meanings_via_tone_of_voice" name="implied_meanings_via_tone_of_voice_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_09) }}"
                                                                    class="implied_meanings_via_tone_of_voice" name="implied_meanings_via_tone_of_voice_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_10) }}"
                                                                    class="implied_meanings_via_tone_of_voice" name="implied_meanings_via_tone_of_voice_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_07) }}"
                                                                    class="implied_meanings_via_tone_of_voice" name="implied_meanings_via_tone_of_voice_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="inflectional_cues"
                                                                label="Ability to comprehend implied meanings via inflectional cues"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="inflectional_cues" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="inflectional_cues" name="inflectional_cues_1">
                                                            <div id="inflectional_cues" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_09) }}"
                                                                    class="inflectional_cues" name="inflectional_cues_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_10) }}"
                                                                    class="inflectional_cues" name="inflectional_cues_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_07) }}"
                                                                    class="inflectional_cues" name="inflectional_cues_4">
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_E">
                                                        <section>
                                                            <x-input-radio-or-check name="ability_to_state_his_opinion_using_appropriate_means"
                                                                label="Ability to state his opinion using appropriate means"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_state_his_opinion_using_appropriate_means" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_17) }}"
                                                                    class="ability_to_state_his_opinion_using_appropriate_means" name="ability_to_state_his_opinion_using_appropriate_means_1">
                                                            <div id="ability_to_state_his_opinion_using_appropriate_means" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_04) }}"
                                                                    class="ability_to_state_his_opinion_using_appropriate_means" name="ability_to_state_his_opinion_using_appropriate_means_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_state_his_opinion_using_appropriate_means" name="ability_to_state_his_opinion_using_appropriate_means_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="ability_to_state_his_opinion_using_appropriate_means" name="ability_to_state_his_opinion_using_appropriate_means_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_disagree" label="Ability to disagree"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_disagree" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_01) }}"
                                                                    class="ability_to_disagree" name="ability_to_disagree_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_02) }}"
                                                                    class="ability_to_disagree" name="ability_to_disagree_2">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_F">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="conversation_according_to_person"
                                                                label="Ability to shift the style of conversation according to person"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="conversation_according_to_person" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="conversation_according_to_person" name="conversation_according_to_person_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_4) }}"
                                                                    class="conversation_according_to_person" name="conversation_according_to_person_2">

                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_3) }}"
                                                                    class="conversation_according_to_person" name="conversation_according_to_person_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_shift"
                                                                label="Ability to shift the style of conversation according to the setting"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_shift" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="ability_to_shift" name="ability_to_shift_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_4) }}"
                                                                    class="ability_to_shift" name="ability_to_shift_2">
                                                                    
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_3) }}"
                                                                    class="ability_to_shift" name="ability_to_shift_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="conversation_according_to_humor"
                                                                label="Ability to shift the style of conversation according to humor"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="conversation_according_to_humor" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_19) }}"
                                                                    class="conversation_according_to_humor" name="conversation_according_to_humor_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_4) }}"
                                                                    class="conversation_according_to_humor" name="conversation_according_to_humor_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_3) }}"
                                                                    class="conversation_according_to_humor" name="conversation_according_to_humor_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a) }}"
                                                                    class="conversation_according_to_humor" name="conversation_according_to_humor_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_engage_a_listener_appropriately"
                                                                label="Ability to engage a listener appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_engage_a_listener_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_03) }}"
                                                                    class="ability_to_engage_a_listener_appropriately" name="ability_to_engage_a_listener_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_10) }}"
                                                                    class="ability_to_engage_a_listener_appropriately" name="ability_to_engage_a_listener_appropriately_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_11) }}"
                                                                    class="ability_to_engage_a_listener_appropriately" name="ability_to_engage_a_listener_appropriately_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_12) }}"
                                                                    class="ability_to_engage_a_listener_appropriately" name="ability_to_engage_a_listener_appropriately_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="ability_to_use_politeness" label="Ability to use politeness"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_politeness" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_04) }}"
                                                                    class="ability_to_use_politeness" name="ability_to_use_politeness_1">

                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_03) }}"
                                                                    class="ability_to_use_politeness" name="ability_to_use_politeness_2">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="ability_to_use_politeness" name="ability_to_use_politeness_3">
                                                           
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="appropriateness_to_the_situation"
                                                                label="Appropriateness to the situation"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="appropriateness_to_the_situation" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="appropriateness_to_the_situation" name="appropriateness_to_the_situation_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_4,) }}"
                                                                    class="appropriateness_to_the_situation" name="appropriateness_to_the_situation_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_3) }}"
                                                                    class="appropriateness_to_the_situation" name="appropriateness_to_the_situation_3">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="appropriateness_to_the_situation" name="appropriateness_to_the_situation_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_others_moods"
                                                                label="Ability to recognize other’s moods"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_others_moods" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_recognize_others_moods" name="ability_to_recognize_others_moods_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_7) }}"
                                                                    class="ability_to_recognize_others_moods" name="ability_to_recognize_others_moods_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="ability_to_recognize_others_moods" name="ability_to_recognize_others_moods_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_06) }}"
                                                                    class="ability_to_recognize_others_moods" name="ability_to_recognize_others_moods_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_differentiate_requests_from_demands"
                                                                label="Ability to differentiate requests from demands"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_differentiate_requests_from_demands" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_10) }}"
                                                                    class="ability_to_differentiate_requests_from_demands" name="ability_to_differentiate_requests_from_demands_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09,) }}"
                                                                    class="ability_to_differentiate_requests_from_demands" name="ability_to_differentiate_requests_from_demands_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_06) }}"   
                                                                    class="ability_to_differentiate_requests_from_demands" name="ability_to_differentiate_requests_from_demands_3">
                                                            
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_G">
                                                        <section>
                                                            <x-input-radio-or-check name="comprehends_humor" label="Comprehends humor"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="comprehends_humor" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="comprehends_humor" name="comprehends_humor_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09,) }}"
                                                                    class="comprehends_humor" name="comprehends_humor_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"   
                                                                    class="comprehends_humor" name="comprehends_humor_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_01,) }}"
                                                                    class="comprehends_humor" name="comprehends_humor_4">
                                                            <div id="comprehends_humor" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a) }}"   
                                                                    class="comprehends_humor" name="comprehends_humor_5">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="uses_humor_appropriately" label="Uses humor appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="uses_humor_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_10) }}"
                                                                    class="uses_humor_appropriately" name="uses_humor_appropriately_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09,) }}"
                                                                    class="uses_humor_appropriately" name="uses_humor_appropriately_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"   
                                                                    class="uses_humor_appropriately" name="uses_humor_appropriately_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_3,) }}"
                                                                    class="uses_humor_appropriately" name="uses_humor_appropriately_4">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"   
                                                                    class="uses_humor_appropriately" name="uses_humor_appropriately_5">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_H">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="provides_greetings" label="Provides greetings"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="provides_greetings" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_c_1_07,) }}"
                                                                    class="provides_greetings" name="provides_greetings_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13,) }}"
                                                                    class="provides_greetings" name="provides_greetings_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_02) }}"   
                                                                    class="provides_greetings" name="provides_greetings_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1,) }}"
                                                                    class="provides_greetings" name="provides_greetings_4">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_2) }}"   
                                                                    class="provides_greetings" name="provides_greetings_5">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="uses_greetings"  label="Uses greetings"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="uses_greetings" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_01,) }}"
                                                                    class="uses_greetings" name="uses_greetings_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_02,) }}"
                                                                    class="uses_greetings" name="uses_greetings_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"   
                                                                    class="uses_greetings" name="uses_greetings_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1,) }}"
                                                                    class="uses_greetings" name="uses_greetings_4">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_a_1) }}"   
                                                                    class="uses_greetings" name="uses_greetings_5">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="another_individual"
                                                                label="Ability to acknowledge the presence of another individual"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="another_individual" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1) }}"   
                                                                    class="another_individual" name="another_individual_1">
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_I">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_solve_problems_affecting_himself"
                                                                label="Ability to solve problems affecting himself"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="ability_to_solve_problems_affecting_himself" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a) }}"
                                                                    class="ability_to_solve_problems_affecting_himself" name="ability_to_solve_problems_affecting_himself_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_01) }}"
                                                                    class="ability_to_solve_problems_affecting_himself" name="ability_to_solve_problems_affecting_himself_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_02) }}"   
                                                                    class="ability_to_solve_problems_affecting_himself" name="ability_to_solve_problems_affecting_himself_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_solve_problems_affecting_others"
                                                                label="Ability to solve problems affecting others"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_solve_problems_affecting_others" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_02) }}"
                                                                    class="ability_to_solve_problems_affecting_others" name="ability_to_solve_problems_affecting_others_1">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_solve_problems_affecting_others" name="ability_to_solve_problems_affecting_others_2">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_3) }}"   
                                                                    class="ability_to_solve_problems_affecting_others" name="ability_to_solve_problems_affecting_others_3">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$Ind_b_1) }}"
                                                                    class="ability_to_solve_problems_affecting_others" name="ability_to_solve_problems_affecting_others_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_problems_affecting_others"
                                                                label="Ability to recognize problems affecting others"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_problems_affecting_others" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="ability_to_recognize_problems_affecting_others" name="ability_to_recognize_problems_affecting_others_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_problems_affecting_himself"
                                                                label="Ability to recognize problems affecting himself"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_problems_affecting_himself" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_recognize_problems_affecting_himself" name="ability_to_recognize_problems_affecting_himself_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a) }}"
                                                                    class="ability_to_recognize_problems_affecting_himself" name="ability_to_recognize_problems_affecting_himself_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_01) }}"   
                                                                    class="ability_to_recognize_problems_affecting_himself" name="ability_to_recognize_problems_affecting_himself_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_establish_cause_effect"
                                                                label="Ability to establish cause-effect"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_establish_cause_effect" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_establish_cause_effect" name="ability_to_establish_cause_effect_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"
                                                                    class="ability_to_establish_cause_effect" name="ability_to_establish_cause_effect_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_c_1_07) }}"   
                                                                    class="ability_to_establish_cause_effect" name="ability_to_establish_cause_effect_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_conflict_resolution"
                                                                label="Ability to use conflict-resolution"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_conflict_resolution" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_09) }}"
                                                                    class="ability_to_use_conflict_resolution" name="ability_to_use_conflict_resolution_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"
                                                                    class="ability_to_use_conflict_resolution" name="ability_to_use_conflict_resolution_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_c_1_07) }}"   
                                                                    class="ability_to_use_conflict_resolution" name="ability_to_use_conflict_resolution_3">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Functional_Intent_J">
                                                        <section>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="uses_language_to_deceive" label="Uses language to deceive"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="uses_language_to_deceive" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="uses_language_to_deceive" name="uses_language_to_deceive_1">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="uses_language_to_deceive" name="uses_language_to_deceive_2">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_b_01) }}"   
                                                                    class="uses_language_to_deceive" name="uses_language_to_deceive_3">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"   
                                                                    class="uses_language_to_deceive" name="uses_language_to_deceive_4">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="lies" label="Lies"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="lies" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_b_02) }}"
                                                                    class="lies" name="lies_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_b_01) }}"
                                                                    class="lies" name="lies_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"   
                                                                    class="lies" name="lies_3">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_d_1) }}"   
                                                                    class="lies" name="lies_4">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Academic_Communication">

                                                        <section>
                                                            <div class="title">
                                                                <h3><b>This section is designed to compare the
                                                                        individual’s ability to communicate in an
                                                                        academic setting
                                                                        with other students.</b></h3>
                                                            </div>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="to_teacher_requests"
                                                                label="Ability to respond appropriately to teacher requests"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="to_teacher_requests" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_07) }}"
                                                                    class="to_teacher_requests" name="to_teacher_requests_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_2) }}"
                                                                    class="to_teacher_requests" name="to_teacher_requests_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_09) }}"   
                                                                    class="to_teacher_requests" name="to_teacher_requests_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="agenda_appropriately"
                                                                label="Ability to reorient to academic agenda appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="agenda_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3) }}"
                                                                    class="agenda_appropriately" name="agenda_appropriately_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="teachers_attention_appropriately"
                                                                label="Ability to obtain teacher’s attention appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="teachers_attention_appropriately" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_13) }}"
                                                                    class="teachers_attention_appropriately" name="teachers_attention_appropriately_1">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="teachers_attention_appropriately" name="teachers_attention_appropriately_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_request_clarification_from_teacher"
                                                                label="Ability to request clarification from teacher"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_request_clarification_from_teacher" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_02) }}"
                                                                    class="ability_to_request_clarification_from_teacher" name="ability_to_request_clarification_from_teacher_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_request_clarification_from_teacher" name="ability_to_request_clarification_from_teacher_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_participate_in_classroom_discussions"
                                                                label="Ability to participate in classroom discussions"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_participate_in_classroom_discussions" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_06) }}"
                                                                    class="ability_to_participate_in_classroom_discussions" name="ability_to_participate_in_classroom_discussions_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_07) }}"
                                                                    class="ability_to_participate_in_classroom_discussions" name="ability_to_participate_in_classroom_discussions_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_interact_with_classroom_peers"
                                                                label="Ability to interact with classroom peers"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="ability_to_interact_with_classroom_peers" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="ability_to_interact_with_classroom_peers" name="ability_to_interact_with_classroom_peers_1">

                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_06) }}"
                                                                    class="ability_to_interact_with_classroom_peers" name="ability_to_interact_with_classroom_peers_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_paraphrase_text" label="Ability to paraphrase text"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_paraphrase_text" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_paraphrase_text" name="ability_to_paraphrase_text_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_summarize_a_story_providing_key_information"
                                                                label="Ability to summarize a story providing key information"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_summarize_a_story_providing_key_information" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2) }}"
                                                                    class="ability_to_summarize_a_story_providing_key_information" name="ability_to_summarize_a_story_providing_key_information_1">

                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_1_11) }}"
                                                                    class="ability_to_summarize_a_story_providing_key_information" name="ability_to_summarize_a_story_providing_key_information_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="requiring_inferential_reasoning"
                                                                label="Ability to respond to questions requiring inferential reasoning"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="requiring_inferential_reasoning" data-position='[]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_02) }}"
                                                                    class="requiring_inferential_reasoning" name="requiring_inferential_reasoning_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_22) }}"
                                                                    class="requiring_inferential_reasoning" name="requiring_inferential_reasoning_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_23) }}"
                                                                    class="requiring_inferential_reasoning" name="requiring_inferential_reasoning_3">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Nonverbal_Communication">

                                                        <section>
                                                            <div class="title">
                                                                <h3><b>This section is designed to compare the
                                                                        individual’s ability to communicate with
                                                                        others using
                                                                        non-verbal means.</b></h3>
                                                            </div>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_personal_space_boundaries"
                                                                label="Ability to recognize “personal space” boundaries"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_personal_space_boundaries" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_02) }}"
                                                                    class="ability_to_recognize_personal_space_boundaries" name="ability_to_recognize_personal_space_boundaries_1">

                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_03) }}"
                                                                    class="ability_to_recognize_personal_space_boundaries" name="ability_to_recognize_personal_space_boundaries_2">
                                                           
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_touch_appropriately"
                                                                label="Ability to touch appropriately"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_touch_appropriately" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="ability_to_touch_appropriately" name="ability_to_touch_appropriately_1">
                                                           
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_14) }}"
                                                                    class="ability_to_touch_appropriately" name="ability_to_touch_appropriately_2">
                                                            
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="comprehends_facial_expression"
                                                                label="Comprehends facial expression"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="comprehends_facial_expression" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="comprehends_facial_expression" name="comprehends_facial_expression_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="comprehends_facial_expression" name="comprehends_facial_expression_2">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_09) }}"
                                                                    class="comprehends_facial_expression" name="comprehends_facial_expression_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="comprehends_eye_gaze" label="Comprehends eye gaze"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="comprehends_eye_gaze" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="comprehends_eye_gaze" name="comprehends_eye_gaze_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_09) }}"
                                                                    class="comprehends_eye_gaze" name="comprehends_eye_gaze_2">
                                                            
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="comprehends_gestures" label="Comprehends gestures"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="comprehends_gestures" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_b_3_08) }}"
                                                                    class="comprehends_gestures" name="comprehends_gestures_1">
                                                            
                                                            <!-- row end -->



                                                            <x-input-radio-or-check  name="comprehends_body_language" label="Comprehends body language"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="comprehends_body_language" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="comprehends_body_language" name="comprehends_body_language_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_facial_expression"
                                                                label="Ability to use facial expression"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_facial_expression" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_09) }}"
                                                                    class="ability_to_use_facial_expression" name="ability_to_use_facial_expression_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_eye_gaze" label="Ability to use eye gaze"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_eye_gaze" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="ability_to_use_eye_gaze" name="ability_to_use_eye_gaze_1">
                                                            <div id="ability_to_use_eye_gaze" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_09) }}"
                                                                    class="ability_to_use_eye_gaze" name="ability_to_use_eye_gaze_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_gestures" label="Ability to use gestures"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_gestures" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="ability_to_use_gestures" name="ability_to_use_gestures_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_body_language" label="Ability to use body language"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="ability_to_use_body_language" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="ability_to_use_body_language" name="ability_to_use_body_language_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_eye_contact" label="Ability to use eye contact"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_eye_contact" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_c_1) }}"
                                                                    class="ability_to_use_eye_contact" name="ability_to_use_eye_contact_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_09) }}"
                                                                    class="ability_to_use_eye_contact" name="ability_to_use_eye_contact_2">
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Perspective_Taking">

                                                        <section>
                                                            <div class="title">
                                                                <h3><b>This section is designed to compare the
                                                                        individual’s ability to recognize and use
                                                                        appropriate
                                                                        perspective taking.</b></h3>
                                                            </div>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_anothers_viewpoints"
                                                                label="Ability to recognize another’s viewpoints"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_anothers_viewpoints" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="ability_to_recognize_anothers_viewpoints" name="ability_to_recognize_anothers_viewpoints_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_anothers_interests"
                                                                label="Ability to recognize another’s interests"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_anothers_interests" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="ability_to_recognize_anothers_interests" name="ability_to_recognize_anothers_interests_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_anothers_feelings"
                                                                label="Ability to recognize another’s feelings"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="ability_to_recognize_anothers_feelings" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="ability_to_recognize_anothers_feelings" name="ability_to_recognize_anothers_feelings_1">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="concern_for_anothers_problems"
                                                                label="Ability to demonstrate concern for another’s problems"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="concern_for_anothers_problems" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="concern_for_anothers_problems" name="concern_for_anothers_problems_1">
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="REGULATORY">

                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="gives_directions_to_play_a_game"
                                                                label="Gives directions to play a game"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="gives_directions_to_play_a_game" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_b_1) }}"
                                                                    class="gives_directions_to_play_a_game" name="gives_directions_to_play_a_game_1">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_3) }}"
                                                                    class="gives_directions_to_play_a_game" name="gives_directions_to_play_a_game_2">
                                                                
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_08) }}"
                                                                    class="gives_directions_to_play_a_game" name="gives_directions_to_play_a_game_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="gives_directions_to_make_something"
                                                                label="Gives directions to make something"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="gives_directions_to_make_something" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_b_1) }}"
                                                                    class="gives_directions_to_make_something" name="gives_directions_to_make_something_1">
                                                             
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_3) }}"
                                                                    class="gives_directions_to_make_something" name="gives_directions_to_make_something_2">
                                                                
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_08) }}"
                                                                    class="gives_directions_to_make_something" name="gives_directions_to_make_something_3">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="changes_the_style"
                                                             label="Changes the style of commands or requests depending on who the child is speaking to and what the
                                                                                        child wants"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="changes_the_style" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_b_1) }}"
                                                                    class="changes_the_style" name="changes_the_style_1">

                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_3) }}"
                                                                    class="changes_the_style" name="changes_the_style_2">
   
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_08) }}"
                                                                    class="changes_the_style" name="changes_the_style_3">
                                                        </section>

                                                    </div>
                                                    <div class="tab-pane" id="Social_Emotional">
                                                        <section>
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_recognize_personal_emotional_states"
                                                                label="Ability to recognize personal emotional states"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_personal_emotional_states" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_02) }}"
                                                                    class="ability_to_recognize_personal_emotional_states" name="ability_to_recognize_personal_emotional_states_1">
                                                             
                                                            <!-- row end -->
                                                            <x-input-radio-or-check name="ability_to_recognize_emotional_states_in_others"
                                                                label="Ability to recognize emotional states in others"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_recognize_emotional_states_in_others" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_02) }}"
                                                                    class="ability_to_recognize_emotional_states_in_others" name="ability_to_recognize_emotional_states_in_others_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_01) }}"
                                                                    class="ability_to_recognize_emotional_states_in_others" name="ability_to_recognize_emotional_states_in_others_2">
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_express_personal_emotional_state"
                                                                label="Ability to express personal emotional state"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_express_personal_emotional_state" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D4_a_1_02) }}"
                                                                    class="ability_to_express_personal_emotional_state" name="ability_to_express_personal_emotional_state_1">
                                                            
                                                            <!-- row end -->



                                                            <x-input-radio-or-check name="ability_to_use_appropriate_self_control"
                                                                label="Ability to use appropriate self-control"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_use_appropriate_self_control" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_04) }}"
                                                                    class="ability_to_use_appropriate_self_control" name="ability_to_use_appropriate_self_control_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_05) }}"
                                                                    class="ability_to_use_appropriate_self_control" name="ability_to_use_appropriate_self_control_2">
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="ability_to_lose_a_game_graciously"
                                                                label="Ability to lose a game graciously"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <div id="ability_to_lose_a_game_graciously" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_04) }}"
                                                                    class="ability_to_lose_a_game_graciously" name="ability_to_lose_a_game_graciously_1">
                                                            
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_05) }}"
                                                                    class="ability_to_lose_a_game_graciously" name="ability_to_lose_a_game_graciously_2">
                                                           <!-- row end -->


                                                            <x-input-radio-or-check  name="perfectionist_quality" label="Perfectionist quality"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="perfectionist_quality" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3_a_03) }}"
                                                                    class="perfectionist_quality" name="perfectionist_quality_1">
                                                           
                                                            <!-- row end -->

                                                            <x-input-radio-or-check name="degree_of_anxiety_in_social_settings"
                                                                label="Degree of anxiety in social settings"
                                                                :records="$constants::$socialCommunication"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                             <div id="degree_of_anxiety_in_social_settings" data-position='[1]'></div>
                                                            <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D3) }}"
                                                                    class="degree_of_anxiety_in_social_settings" name="degree_of_anxiety_in_social_settings_1">
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
                    <div class="tab-pane " id="list" role="tabpanel">
                        <livewire:social-communication-list />
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
<script>
    let options = {
        'Not Present': 1,
        'Uses NO Words (Gestures - Preverbal)': 2,
        'Uses 1-3 Words / sentences': 3,
        'Able to communicate/ express opinion': 4,
        'Uses Complex Language': 5
    }
    jQuery('input:radio').click(function() {
        let name = $(this).attr('name')
        let nameplus = '#'+name
        let ar = $(nameplus).data('position')
        
        let check 
        for(let item in options){
           if(item == $(this).val()){
            check =  options[item]
           }
        }
        
        let show
        let nameplusdot = '.'+name
        if(ar.includes(check)===true){
          $(nameplusdot).attr('disabled', false)
        }else{
          $(nameplusdot).attr('disabled', true)
        }
    })
</script>
@endsection