@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
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
                                                            data-toggle="tab">Drama Diary Evaluation</a></li>
                                                    <li class="w-100"><a href="#Pragmatic_Objective"
                                                            data-toggle="tab">বেসিক
                                                            / ফাংশনাল এরিয়া</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Outing" data-toggle="tab">অন্যান
                                                            এরিয়া</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form>
                                                <div class="tab-content apply-only-view">
                                                    <div class="tab-pane" id="Social_Communication">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <div class="input-group" id="datepicker2">
                                                                            <x-input-text value="{{ $date }}"
                                                                                type="date" name="date" />
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select :selected="$teacher_id" name="teacher_id"
                                                                            :records="$teachers" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-phoneno-input">Candidate
                                                                            ID:</label>
                                                                        <x-input-select :selected="$candidate_id"
                                                                            name="candidate_id" :records="$students" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="verticalnav-phoneno-input">Description:</label>
                                                                        <p>Kashima Cultural Group ড্রামা / নাটক</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Pragmatic_Objective">
                                                        <section>
                                                            <!-- Start row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->understanding_the_character ??
                                                                ''"
                                                                name="understanding_the_character" label="চরিত্র বুঝতে পারা"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->understanding_the_character_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->being_able_to_understand_the_character_and_act ??
                                                                ''"
                                                                name="being_able_to_understand_the_character_and_act"
                                                                label="চরিত্র বুঝে অভিনয় করতে পারা" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->being_able_to_understand_the_character_and_act_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->say_three_lines_clearly_about_yourself ??
                                                                ''"
                                                                name="say_three_lines_clearly_about_yourself"
                                                                label="নিজের সম্পর্কে তিন লাইন স্পষ্ট করে বলবে"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->say_three_lines_clearly_about_yourself_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->be_able_to_present_fluently ??
                                                                ''"
                                                                name="be_able_to_present_fluently"
                                                                label="সাবলীল ভাবে উপস্থাপনা করতে পারবে" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->be_able_to_present_fluently_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->the_vowel_will_be_pronounced_clearly ??
                                                                ''"
                                                                name="the_vowel_will_be_pronounced_clearly"
                                                                label="স্বরধনি স্পষ্ট করে উচ্চারণ করবে" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->the_vowel_will_be_pronounced_clearly_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->be_able_to_memorize ??
                                                                ''"
                                                                name="be_able_to_memorize" label="মুখস্থ করতে পারা"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->be_able_to_memorize_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->being_able_to_speak_with_open_mouth ??
                                                                ''"
                                                                name="being_able_to_speak_with_open_mouth"
                                                                label="মুখ খুলে কথা বলতে পারা" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->being_able_to_speak_with_open_mouth_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->mouth_tongue_exercises ??
                                                                ''"
                                                                name="mouth_tongue_exercises" label="মুখ / জিহ্বার ব্যায়াম"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->mouth_tongue_exercises_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->being_able_to_tell_a_minute_story ??
                                                                ''"
                                                                name="being_able_to_tell_a_minute_story"
                                                                label="১/২ মিনিটের গল্প বলতে পারা" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->being_able_to_tell_a_minute_story_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->being_able_to_bring_variation_in_words ??
                                                                ''"
                                                                name="being_able_to_bring_variation_in_words"
                                                                label="কথায় Variation আনতে পারা" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->being_able_to_bring_variation_in_words_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->being_able_to_speak_in_regional_tenses_or_other_accents ??
                                                                ''"
                                                                name="being_able_to_speak_in_regional_tenses_or_other_accents"
                                                                label="আঞ্চলিক টানে বা অন্য অচ্চারনে কথা বলতে পারা"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->being_able_to_speak_in_regional_tenses_or_other_accents_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue ??
                                                                ''"
                                                                name="after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue"
                                                                label="সহশিল্পির ডায়লগ শুনে নিজের ডায়লগ দিবে"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->will_act_using_body_gestures ??
                                                                ''"
                                                                name="will_act_using_body_gestures"
                                                                label="শারিরিক অঙ্গভঙ্গি ব্যবহার করে অভিনয় করবে"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->will_act_using_body_gestures_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->will_wait_for_his_turn_to_act ??
                                                                ''"
                                                                name="will_wait_for_his_turn_to_act"
                                                                label="অভিনয়ে নিজের turn এর জন্য অপেক্ষা করবে"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->will_wait_for_his_turn_to_act_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->will_help_the_coartist ??
                                                                ''"
                                                                name="will_help_the_coartist"
                                                                label="সহশিল্পিকে সাহায্য করবে" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->will_help_the_coartist_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$basic_functional_area->respect_for_the_coartist ??
                                                                ''"
                                                                name="respect_for_the_coartist"
                                                                label="সহশিল্পীর প্রতি শ্রদ্ধাশীলতা" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $basic_functional_area->respect_for_the_coartist_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Outing">
                                                        <section>
                                                            <!-- Start row -->
                                                            <x-input-radio-or-check :checked="$other_areas->hold_attention ?? ''"
                                                                name="hold_attention" label="মনোযোগ ধরে রাখা"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $other_areas->hold_attention_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$other_areas->presentation ?? ''" name="presentation"
                                                                label="প্রেজেন্টেশান" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $other_areas->presentation_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$other_areas->perticipating_drama ?? ''"
                                                                name="perticipating_drama"
                                                                label="সবার সাথে নাটকে অংশ নিবে" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $other_areas->perticipating_drama_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$other_areas->self_doing_ownwork ?? ''"
                                                                name="self_doing_ownwork"
                                                                label="ব্যক্তিগত অংশ স্বনির্ভর ভাবে করতে পারা"
                                                                :records="$diaryConstant::$diaryType" secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $other_areas->self_doing_ownwork_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$other_areas->others ?? ''" name="others"
                                                                label="অন্যান্য" :records="$diaryConstant::$diaryType"
                                                                secondaryInputLabel="শিক্ষক এর মন্তব্য"
                                                                secondaryInputValue="{{ $other_areas->others_secondary ?? '' }}">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
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
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Custom step -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection
