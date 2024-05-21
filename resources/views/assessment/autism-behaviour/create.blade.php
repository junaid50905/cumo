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
                                                        <li class="w-100"><a href="#AutismBehaviorChecklist"
                                                                data-toggle="tab">Autism Behavior
                                                                Checklist (ABC)</a></li>
                                                        <li class="w-100"><a href="#SensoryBehaviors"
                                                                data-toggle="tab">Sensory Behaviors</a></li>
                                                        <li class="w-100"><a href="#RelatingBehaviors"
                                                                data-toggle="tab">Relating Behaviors</a></li>
                                                        <li class="w-100"><a href="#BodyandObjectUseBehaviors"
                                                                data-toggle="tab">Body and Object Use
                                                                Behaviors</a></li>
                                                        <li class="w-100"><a href="#LanguageBehaviors"
                                                                data-toggle="tab">Language Behaviors</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9" id="questionSerial">
                                                <form action="{{ route('autisum-behaviour.store') }}" method="POST">
                                                    @csrf
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="AutismBehaviorChecklist">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <x-input-text name="date" type="date" :required='false' 
                                                                                placeholder=""></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teacher_id" :required='false'
                                                                                :records="$teachers" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select name="student_id" :required='false'
                                                                                :records="$students" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Instruction:</label>
                                                                            <p>The Autism Behavior Checklist (ABC) is a
                                                                                checklist of non-adaptive behaviors;
                                                                                capable of
                                                                                providing how an individual “Looks” in
                                                                                comparison to others. This checklist
                                                                                reflects an
                                                                                individual’s challenges to respond
                                                                                appropriately to daily life situation.
                                                                                Parents and the
                                                                                educational team to complete the check
                                                                                lists.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        
                                                        <div class="tab-pane" id="SensoryBehaviors">
                                                            <section>
                                                                <x-input-radio-or-check 
                                                                    name="poor_use_of_visual_discrimination_when_learning"
                                                                    label="Poor use of visual discrimination when learning"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                
                                                                <input type="hidden" disabled
                                                                    value="{{ array_key_first($constants::$D2_a_2_01) }}"
                                                                    class="poor_use_of_visual_discrimination_when_learning" name="poor_use_of_visual_discrimination_when_learning_1">
                                                          
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="seems_not_to_hear"
                                                                    label="Seems not to hear, so that a hearing loss is suspected"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="sometimes_shows_no_startle_response"
                                                                    label="Sometimes shows no “startle response” to ”loud noise”"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="sometimes_painful_stimuli_such_as_bruises"
                                                                    label="Sometimes painful stimuli such as bruises, cuts, and injections evoke no reaction"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="is_directed_toward_eyes"
                                                                    label="Often will not blink when bright light is directed toward eyes"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="covers_ears_at_many_sounds"
                                                                    label="Covers ears at many sounds" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="squints_frowns_covers_eyes_when_in_the_presence_of_natural_light"
                                                                    label="Squints, frowns, or covers eyes when in the presence of natural light"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="frequently_has_no_visual_reaction"
                                                                    label="Frequently has no visual reaction to a “new” person"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="stares_into_space_for_long_periods_of_time"
                                                                    label="Stares into space for long periods of time"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="RelatingBehaviors">
                                                            <section>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Frequently does not attend to social/environmental stimuli"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check label="Has no social smile"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Does not reach out when reached for "
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Not responsive to other people’s facial expressions/feelings"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check label="Actively avoids eye contact"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Resists being touched or held"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Is flaccid when held in arms"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check label="Is stiff and hard to held"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Does not imitate other children at play "
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Has not developed any friendships"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    label="Often frightened or very anxious "
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check label="Looks through people"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="BodyandObjectUseBehaviors">
                                                            <section>
                                                                <x-input-radio-or-check
                                                                    name="whirls_self_for_long_periods_time"
                                                                    label="Whirls self for long periods of time"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="does_not_use_toys_appropriately"
                                                                    label="Does not use toys appropriately"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->

                                                                <x-input-radio-or-check
                                                                    name="insists_on_keeping_certain_objects"
                                                                    label="Insists on keeping certain objects with him/ her"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="rocks_self_for_long_periods_time"
                                                                    label="Rocks self for long periods of time"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="does_lot_lunging_and_darting"
                                                                    label="Does a lot of lunging and darting"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="flaps_hands"
                                                                    label="Flaps hands" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="walks_on_toes"
                                                                    label="Walks on toes" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="hurts_self_banging_head"
                                                                    label="Hurts self by banging head, biting hand, etc…"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="twirls_spins_bangs_objects_lot"
                                                                    label="Twirls, spins, and bangs objects a lot"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="will_feel_smell_taste_objects_environment"
                                                                    label="Will feel, smell, and/or taste objects in the environment"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="gets_involved_complicated"
                                                                    label="Gets involved in complicated “rituals” such as lining things up, etc…"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="is_very_destructive"
                                                                    label="Is very destructive" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="LanguageBehaviors">
                                                            <section>
                                                                <x-input-radio-or-check
                                                                    name="does_not_follow_simple_commands_given_once"
                                                                    label="Does not follow simple commands given once"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="has_pronoun_reversal"
                                                                    label="Has pronoun reversal" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="atonalspeech_pattern"
                                                                    label="Atonal Speech pattern" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="does_not_respond_to_own_name_when_called_out_among_two_others"
                                                                    label="Does not respond to own name when called out among two others"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="seldom_says_yes_or_I"
                                                                    label="Seldom says “yes” or “I”" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="does_not_follow_simple_commands_involving_prepositions"
                                                                    label="Does not follow simple commands involving prepositions"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="gets_desired_objects_by_gesturing"
                                                                    label="Gets desired objects by gesturing"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="repeats_phrases_over_and_over"
                                                                    label="Repeats phrases over and over"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="cannot_point_to_more_than_five_named_objects"
                                                                    label="Cannot point to more than five named objects"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="uses_5_spontaneous_words_per_day"
                                                                    label="Uses 0-5 spontaneous words per day to communicate wants and needs"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="repeats_sounds_or_words"
                                                                    label="Repeats sounds or words" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="echoes_questions_or_statements"
                                                                    label="Echoes questions or statements made by others"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="uses_at_least_15_but_less_than_30"
                                                                    label="Uses at least 15 but less than 30 spontaneous phrases daily to communicate"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="learns_a_simple_task"
                                                                    label="Learns a simple task but “forgets” quickly"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="strong_reactions_changes_in_routine_environment"
                                                                    label="Strong reactions to changes in routine-environment"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="has_special_abilities_in_one_area_of_development"
                                                                    label="Has “special abilities” in one area of development, which seems to rule out mental
                                retardation"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="severe_temper_tantrums"
                                                                    label="Severe temper tantrums and-or frequent minor tantrums"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="hurts_others_by_biting_hitting_kicking"
                                                                    label="Hurts others by biting, hitting, kicking, etc…"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="does_not_wait_for_needs_to_be_met"
                                                                    label="Does not wait for needs to be met"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check name="difficulties_with_toileting"
                                                                    label="Difficulties with toileting" :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="does_not_dress_self_without_frequent_help"
                                                                    label="Does not dress self without frequent help"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="frequently_unaware_surroundings"
                                                                    label="Frequently unaware of surroundings, and may be oblivious to dangerous situations"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="prefers_to_manipulate_and_be_occupied_with_inanimate_things"
                                                                    label="Prefers to manipulate and be occupied with inanimate things"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
                                                                <x-input-radio-or-check
                                                                    name="a_developmental_delay_was_identified"
                                                                    label="A developmental delay was identified at or before 30 months of age"
                                                                    :records="$constants::$autismBehaviorCheck">
                                                                </x-input-radio-or-check>
                                                                <!-- row end -->
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
                            <livewire:autisum-behibehaviour-list>
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
  <script>
    let options = {
        'Do regularly': 1,
        'Sometimes': 2,
        'In special occasion': 3
    }
    jQuery('input:radio').click(function() {
        let name = $(this).attr('name')
        let ar = [1, 2, 3]
        
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
