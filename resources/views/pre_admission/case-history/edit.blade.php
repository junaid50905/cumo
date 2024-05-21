@extends('layouts.master')

@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@component('components.breadcrumb')

    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <!-- Wizard container -->
                            <div class="wizard-container">
                                <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                    <div class="col-sm-3 col-md-3">
                                        <div id="wizard-navigation">
                                            <ul class="wizard-navigation">
                                                <li class="w-100"><a href="#caseHistoryInit" data-toggle="tab">Case History
                                                        Init</a></li>
                                                <li class="w-100"><a href="#referralInformation" data-toggle="tab">রেফারাল
                                                        তথ্য</a></li>
                                                <li class="w-100"><a href="#TheTrendOfEvolution"
                                                        data-toggle="tab">ক্রমউন্নয়নের ধারা</a></li>
                                                <li class="w-100"><a href="#HistoryOfDevelopment"
                                                        data-toggle="tab">উন্নয়নের
                                                        ইতিহাস</a></li>
                                                <li class="w-100"><a href="#LanguageSkills" data-toggle="tab">ভাষার
                                                        দক্ষতা</a></li>
                                                <li class="w-100"><a href="#WorkingSkills" data-toggle="tab">কাজ করার
                                                        দক্ষতা</a></li>
                                                <li class="w-100"><a href="#SocialSkills" data-toggle="tab">সামাজিক
                                                        দক্ষতা</a></li>
                                                <li class="w-100"><a href="#LearningSkills" data-toggle="tab">শেখার
                                                        দক্ষতা</a></li>
                                                <li class="w-100"><a href="#Self-reliance"
                                                        data-toggle="tab">স্বনির্ভরতা</a>
                                                </li>
                                                <li class="w-100"><a href="#Matters" data-toggle="tab">জীবন ধারনের
                                                        বিষয়গুলি</a>
                                                </li>
                                                <li class="w-100"><a href="#report" data-toggle="tab">সর্বশেষ
                                                        পরিক্ষার তথ্য/রিপোর্ট</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                        <form action="{{ route('case-history.update', $caseHistory->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="tab-content">
                                                <div class="tab-pane" id="caseHistoryInit">
                                                    <section>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-firstname-input">Collection
                                                                        Date:</label>
                                                                    <div class="input-group" id="datepicker2">
                                                                        <x-input-text type="date" name="date"
                                                                            placeholder="mm/dd/yyyy"
                                                                            value="{{ $caseHistory->date }}">
                                                                        </x-input-text>
                                                                    </div><!-- input-group -->
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label>Teacher:</label>
                                                                    <x-input-select :records="$teachers" name="teacher_id"
                                                                        :selected="$caseHistory->teacher_id">
                                                                    </x-input-select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label>Candidate
                                                                        ID:</label>
                                                                    <x-input-select :records="$students" name="student_id"
                                                                        :selected="$caseHistory->student_id">
                                                                    </x-input-select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="referralInformation">
                                                    <section>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h3>Instruction:</h3>
                                                                <p>আপনার জানা তথ্য ও জ্ঞান অনুযায়ী নিচের
                                                                    তথ্যাবলী প্রেরণ করুন। সঠিক উত্তর না
                                                                    জানা থাকলে ‘জানি না’
                                                                    লিখুন। উত্তরের জন্য প্রয়োজনীয় জায়গা না থাকলে
                                                                    আলাদা কাগজ ব্যবহার করে উত্তর
                                                                    বিস্তারিত ভাবে লিখুন।
                                                                <p>
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$caseHistory->has_adjustment_capability"
                                                            name="has_adjustment_capability"
                                                            label="সমন্বয় দক্ষতা আছে কি? <br>(Join Coordination এর মাধ্যমে কাজ করা যেমন- doe / আটা দিয়ে রুটি বানানো বলে জোড়ে কিক দেয়া)"
                                                            :records="$constants::$yesNo"
                                                             secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_adjustment_capability_secondary" />
                                                        {{-- @dump($caseHistory); --}}
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_move_ability" name="has_move_ability"
                                                            label="চলাফেরার ক্ষেত্রে ভারসাম্য আছে কি? <br>(যেমন-হাটার সময় পড়ে যাওয়া, হাটার সময় শরীর দোলানো, থপ থপ জোরে হাটা, বেখাপ্পা ভাবে হাটা)"
                                                            :records="$constants::$yesNo"
                                                             secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_move_ability_secondary" />

                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_fine_equipment_use_ability"
                                                            name="has_fine_equipment_use_ability"
                                                            label="সূক্ষ্ম যন্ত্রপাতি ব্যবহার করা সহ ফাইন মটরের দক্ষতা আছে কি?"
                                                            :records="$constants::$yesNo"
                                                             secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_fine_equipment_use_ability_secondary" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_write_ability" name="has_write_ability"
                                                            label="লিখার পদ্ধতি ঠিক আছে কিনাঃ?" :records="$caseConstants::$hasWriteAbilities"
                                                            type="checkbox" :isVertical="false" :multiple="true"
                                                             secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_write_ability_secondary" />

                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_education_intersted"
                                                            name="has_education_intersted"
                                                            label="পড়াশুনা সহ শিক্ষার বিষয়ের উদ্বেগ আছে কিনা <br> (যেমন-পড়তে – লিখবে অনাগ্রহ / দেখে পড়া / সঠিক ভাবে দেখে লেখার সমস্যা)"
                                                            :records="$constants::$yesNo"
                                                             secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_education_intersted_secondary" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_self_work_capabelity"
                                                            name="has_self_work_capabelity"
                                                            label="স্বনির্ভরতার (নিজে নিজে কাজ করার ) দক্ষতা আছে কিনা (যেমন-বয়স অনুযায়ী নিজের কাজ করতে পারা / রুটিন জানা)"
                                                            :records="$constants::$yesNo"
                                                             secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_self_work_capabelity_secondary" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_abil_to_comminite_socilely"
                                                            name="has_abil_to_comminite_socilely"
                                                            label="সামাজিক যোগাযোগ করতে পারে কিনা (যেমন-বয়স অনুযায়ী সামাজিক যোগাযোগ)"
                                                            :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_abil_to_comminite_socilely_secondary" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->is_ableto_paly_others"
                                                            name="is_ableto_paly_others"
                                                            label="খেলার মাধ্যমে যোগাযোগ করে কিনা? অন্যের সাথে মিলে মিশে খেলাধুলা করে কিনা? (যেমন-বয়স অনুযায়ী খেলা / সঠিক ভাবে খেলা / খেলার প্রতি আগ্রহ / খেলার উপকরন চাওয়া)"
                                                            :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->is_ableto_paly_others_secondary" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_any_learning_obstacle"
                                                            name="has_any_learning_obstacle"
                                                            label="শেখার প্রতিবন্ধকতা আছে কি? নীচের বিষয়গুলি সম্মন্ধে কোন ধারনা আছে কিনা? (যেমন-অক্ষর / বর্ণ শব্দ বাক্য পড়তে লিখতে সমস্যা অস্বাভাবিক তা, অংক শিখতে না পারা, অংকে অনাগ্রহ, গ্রাফ / চিত্র সম্পর্কে অনাগ্রহ)"
                                                            :records="$caseConstants::$hasAnyLerningAbstagol" type="checkbox" :isVertical="false"
                                                            :multiple="true" secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_any_learning_obstacle_secondary" />
                                                        <!-- end row -->

                                                        <x-input-radio-or-check :checked="$caseHistory->has_control_over_body"
                                                            name="has_control_over_body"
                                                            label="শরীরের ওপর সাধারণ নিয়ন্ত্রন আছে কিনা?" :records="$caseConstants::$dengrous"
                                                            type="checkbox" :isVertical="false" :multiple="true"
                                                            secondaryInputLabel="বিস্তারিত লিখুন।" :secondaryInputValue="$caseHistory->has_control_over_body_secondary" />

                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_speaking_problem"
                                                            name="has_speaking_problem" label="কথা বলার সমস্যা আছে কিনাঃ"
                                                            :records="$constants::$yesNo" secondaryInputLabel="থাকলে উল্লেখ করুন"
                                                            :secondaryInputValue="$caseHistory->has_speaking_problem_secondary" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->is_able_to_understand_tense"
                                                            name="is_able_to_understand_tense"
                                                            label="ভাষা বুঝতে পারে কিনা (যেমন-অতীত – ভবিষ্যৎ কাল, এক বচন – বহুবচন, পুরুষ (আপনি, তুমি) বুঝতে পারে )"
                                                            :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->is_able_to_understand_tense_secondary" />

                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->is_able_to_use_correct_word_in_sentence"
                                                            name="is_able_to_use_correct_word_in_sentence"
                                                            label="ভাষা এবং শব্দের ব্যবহার পারে" :records="$caseConstants::$isAbleToUseCurrectWordInSentanse"
                                                            secondaryInputLabel="সমস্যা থাকলে উল্লেখ করুন"
                                                            :secondaryInputValue="$caseHistory->is_able_to_use_correct_word_in_sentence_secondary" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_past_assessment_by_specialist"
                                                            name="has_past_assessment_by_specialist"
                                                            label="অতীতে আপনার সন্তানের কোন স্পেশালিষ্ট এর মাধ্যমে অ্যাসেসমেন্ট হয়েছিল কিনা ?"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputLabel="স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।"
                                                            :secondaryInputValue="$caseHistory->has_past_assessment_by_specialist_secondary" />
                                                        <!-- end row -->
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="mb-2">
                                                                <h5 class="">পারিবারিক প্রতিবন্ধীতার কোন ইতিহাস আছে
                                                                    কিনা ?</h5>
                                                                <div class="input-group">
                                                                    <x-input-text type="text"
                                                                        value="{{ $caseHistory->is_there_any_family_history_of_disability }}"
                                                                        name='is_there_any_family_history_of_disability'>
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-->
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$caseHistory->has_family_learning_disability"
                                                            name="has_family_learning_disability"
                                                            label="লার্নিং ডিজাবিলিটি বা কোন কিছু শিখতে পারাতে কোন সমস্যা পরিবারে কারো ছিল কিনা?"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputLabel="বিস্তারিত লিখুন।" :secondaryInputValue="$caseHistory->has_family_learning_disability_secondary" />
                                                        <x-input-radio-or-check :checked="$caseHistory->do_you_have_any_learning_difficulties_in_learning_the_language"
                                                            name="do_you_have_any_learning_difficulties_in_learning_the_language"
                                                            label="ভাষা শিখতে কোন শেখার সমস্যা আছে কিনা?"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputLabel="বিস্তারিত লিখুন।" :secondaryInputValue="$caseHistory->do_you_have_any_learning_difficulties_in_learning_the_language_secondary" />
                                                        <!-- end row -->
                                                        {{-- <x-input-radio-or-check :checked="$caseHistory->has_instability" name="has_instability"
                                                            label="সন্তানের মধ্যে অস্থিরতা আছে কিনা" :records="$constants::$yesNo" /> --}}
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="TheTrendOfEvolution">
                                                    <section>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->child_description" name="child_description"
                                                            label="আপনি আপনার শিশুকে কি ভাবে বর্ণনা করবেন ?"
                                                            :records="$caseConstants::$childDesctiption" type="checkbox" :multiple="true"
                                                            secondaryInputLabel="বিস্তারিত লিখুন।" :secondaryInputValue="$caseHistory->child_description_secondary">
                                                        </x-input-radio-or-check>

                                                        {{-- TODO: need to fix style --}}
                                                        <!-- end row -->
                                                        <x-input-radio-or-check :checked="$caseHistory->has_sleep_patten_problem"
                                                            name="has_sleep_patten_problem"
                                                            label="ঘুমের প্যাটার্নে কোন সমস্যা আছে কিনা ?"
                                                            :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন"
                                                            :secondaryInputValue="$caseHistory->has_sleep_patten_problem_secondary">
                                                        </x-input-radio-or-check>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="HistoryOfDevelopment">
                                                    <section>
                                                        <div>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->is_able_to_lick"
                                                                name='is_able_to_lick' label="চুষে খেতে পারে কিনা ?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->is_able_to_eat_hard_thing"
                                                                name='is_able_to_eat_hard_thing'
                                                                label="শক্ত খাবার খেতে পারে কিনা?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->is_able_to_control_breathing"
                                                                name='is_able_to_control_breathing'
                                                                label="শ্বাস-প্রশ্বাস নিয়ন্ত্রন করতে পারে কিনা?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_swallow_food_at_once"
                                                                name='does_swallow_food_at_once'
                                                                label="খাবার একবারে গিলে ফেলে কিনা?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_take_longer_time_while_eating"
                                                                name='does_take_longer_time_while_eating'
                                                                label="খাবার খেতে লম্বা সময় নেয় কিনা?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->is_any_problem_in_chewing_food"
                                                                name='is_any_problem_in_chewing_food'
                                                                label="চিবিয়ে খাবার খেতে কোন সমস্যা ছিল কিনা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।"
                                                                :secondaryInputValue="$caseHistory->is_any_problem_in_chewing_food_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->sat_alone_in" name='sat_alone_in'
                                                                label="কোন বয়সে একা একা বসতে শিখেছে?" :records="$caseConstants::$inWhichAgeLearnedToSitAlone"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->learned_to_chewing_in"
                                                                name='learned_to_chewing_in'
                                                                label="কোন বয়সে চাবানো শিখেছে ?" :records="$caseConstants::$inWhichAgeLearnedToChewing"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->learned_to_scrolling_in"
                                                                name='learned_to_scrolling_in'
                                                                label="কোন বয়সে হামাগুরি দিতে শিখেছে ? পেছন দিক ছেঁচড়ে বা চার হাতপা ব্যবহার করে দিয়েছে"
                                                                :records="$caseConstants::$inWhichAgeLearnedToCroling" :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->learned_to_walk_alone_in"
                                                                name='learned_to_walk_alone_in'
                                                                label="কোন বয়সে নিজে নিজে একা হাটতে শিখেছে"
                                                                :records="$caseConstants::$inWhichAgeLearnedToWoakAlone" :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->

                                                            <x-input-radio-or-check :checked="$caseHistory->learned_thestructure"
                                                                name='learned_thestructure'
                                                                label="তিন বা চার চাকার বাইসাইকেল চালানো শিখেছে ?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>

                                                            <x-input-radio-or-check :checked="$caseHistory->is_able_to_swimming"
                                                                name='is_able_to_swimming' label="শিশু কি সাঁতার জানে ?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->dose_like_play_outside"
                                                                name='dose_like_play_outside'
                                                                label="শিশু বাইরে খেলার উপকরন পছন্দ করে কিনা? (যেমন ফুটবল , ক্রিকেট )"
                                                                :records="$constants::$yesNo"></x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->dose_get_tired_soon"
                                                                name='dose_get_tired_soon'
                                                                label="শিশু কি খুব সহজেই. ক্লান্ত হয়ে যায়?"
                                                                :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন"
                                                                :secondaryInputValue="$caseHistory->dose_get_tired_soon_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->dose_have_balancing_problem"
                                                                name='dose_have_balancing_problem'
                                                                label="ভারসাম্য হীনতা আছে কিনা?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->dose_have_muscle_pain"
                                                                name='dose_have_muscle_pain'
                                                                label="পেশী ব্যথা সব সময় থাকে কিনা?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="LanguageSkills">
                                                    <section>
                                                        <div>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->first_voice_lang"
                                                                name='first_voice_lang'
                                                                label="শিশুর কথা বলার প্রথম ভাষা কোনটি?" :records="$caseConstants::$firstVoiceLang"
                                                                secondaryInputLabel="অন্য ভাষা হলে তা লিখুন"
                                                                :secondaryInputValue="$caseHistory->first_voice_lang_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->in_which_age_spoke_the_first_word"
                                                                name='in_which_age_spoke_the_first_word'
                                                                label="কোন বয়সে শিশু প্রথম শব্দ বলেছে ?" :records="$caseConstants::$inWhichAgeSpokeTheFirstWord"
                                                                secondaryInputLabel="অন্য ভাষা হলে তা লিখুন"
                                                                :isVertical="false" :secondaryInputValue="$caseHistory->in_which_age_spoke_the_first_word_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->is_able_spake_simple_sentence"
                                                                name='is_able_spake_simple_sentence'
                                                                label="সহজ বাক্য বলতে পারে কি?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->how_many_word_use_in_a_sentence_max"
                                                                name='how_many_word_use_in_a_sentence_max'
                                                                label="কয় শব্দে বাক্য বলে?" :records="$caseConstants::$howManyWordUseInASentaceMax">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_you_speak_any_other_language"
                                                                name='can_you_speak_any_other_language'
                                                                label="অন্য কোন ভাষায় কথা বলতে পারে কি?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->dose_spake_in_other_lang"
                                                                name='dose_spake_in_other_lang'
                                                                label="অন্য কোন ভাষা বলতে পারে?" :records="$caseConstants::$doseSpakeInOtherLang"
                                                                secondaryInputLabel="অন্য ভাষা হলে তা লিখুন"
                                                                :secondaryInputValue="$caseHistory->dose_spake_in_other_lang_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->from_which_year_learning_other_lang"
                                                                name='from_which_year_learning_other_lang'
                                                                label="কোন বয়স থেকে শিখেছে ?" :records="$caseConstants::$fromWhichYearLearnigOtherLang"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>

                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->from_where_learn_other_lang"
                                                                name='from_where_learn_other_lang'
                                                                label="কোথা থেকে সেই ভাষা শিখেছে ?" :records="$caseConstants::$fromWhereLearnOtherLang"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_he_response_if_call_by_his_name"
                                                                name='does_he_response_if_call_by_his_name'
                                                                label="নাম ধরে ডাকলে শিশু সারা দেয় কি?"
                                                                :records="$caseConstants::$doesHeResponseIfCallByHisName">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_give_simple_instruction_and_follow_direction"
                                                                name='can_give_simple_instruction_and_follow_direction'
                                                                label="প্রাথমিক ও সহজ ভাষায় নির্দেশ ও দিক নির্দেশনা অনুসরণ করতে পারে ?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->dose_use_wrong_word_while_speaking"
                                                                name='dose_use_wrong_word_while_speaking'
                                                                label="শিশু কোন কোন শব্দ ভুল উচ্চারণ করে কিনা"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->in_which_sound_child_react"
                                                                name='in_which_sound_child_react'
                                                                label="কোন কোন শব্দে শিশু প্রতিক্রিয়াশিলতা"
                                                                :records="$caseConstants::$inWhichSoundChildReact" type="checkbox" :isVertical="false"
                                                                :multiple="true">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="WorkingSkills">
                                                    <section>
                                                        <div>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_use_spoon"
                                                                name='can_use_spoon'
                                                                label="শিশু কি চাকু বা কাটা চামচ ব্যবহার করেতে পারে ?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_wear_cloth_alone"
                                                                name='can_wear_cloth_alone'
                                                                label="নিজে একা একা কাপড় পরতে পারে ?" :records="$caseConstants::$canWearClothAlone"
                                                                secondaryInputLabel="বিস্তারিত লিখুন" :isVertical="false"
                                                                :secondaryInputValue="$caseHistory->can_wear_cloth_alone_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_arrange_own_things"
                                                                name='can_arrange_own_things'
                                                                label="শিশু নিজের জিনিষ গুছিয়ে রাখে ?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->in_which_age_got_toilet_training"
                                                                name='in_which_age_got_toilet_training'
                                                                label="কোন বয়সে টয়লেট ট্রেনিং পেয়েছে?" :records="$caseConstants::$inWhichAgeGotToyletTreaining"
                                                                :isVertical="false">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_go_to_toilet_himself"
                                                                name='does_go_to_toilet_himself'
                                                                label="বাড়িতে কি নিজে নিজে টয়লেটে যায়?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_go_to_toilet_in_unknown_place"
                                                                name='does_go_to_toilet_in_unknown_place'
                                                                label="অপরিচত জায়গায় টয়লেটে যায়?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_like_drawing_and_writing_in_home"
                                                                name='does_like_drawing_and_writing_in_home'
                                                                label="বাড়িতে কি ছবি আঁকতে, কাটাকাঁটি করতে পছন্দ করে?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_like_play"
                                                                name='does_like_play' label="খেলাধুলা করতে পছন্দ করে ?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_play_independently"
                                                                name='can_play_independently'
                                                                label="সে কি স্বাধীনভাবে খেলতে পারে ?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->favorite_games"
                                                                name='favorite_games' label="কি খেলা পছন্দ করে?"
                                                                :records="$caseConstants::$faveriteGames" :isVertical="false"
                                                                secondaryInputLabel="অন্যান্য হলে তা লিখুন"
                                                                :secondaryInputValue="$caseHistory->favorite_games_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_obey_elder_commends"
                                                                name='can_obey_elder_commends'
                                                                label="বড়দের নির্দেশ মেনে বা মানিয়ে চলতে পারে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->do_you_things_obey_elder_elder_is_heard"
                                                                name='do_you_things_obey_elder_elder_is_heard'
                                                                label="আপনি কি মনে করেন এটা একটি খুবই কঠিন কাজ"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check name='does_the_toilet_use_alone'
                                                                label="টয়লেট কি একা একা ব্যাবহার করে?" :records="$constants::$yesNo"
                                                                :checked="$caseHistory->does_the_toilet_use_alone">
                                                            </x-input-radio-or-check>
                                                            <x-input-radio-or-check :checked="$caseHistory->can_clean_himself_after_properly"
                                                                name='can_clean_himself_after_properly'
                                                                label="টয়লেট থেকে কি একা একা পরিস্কার হয়ে বের হয়ে আসতে পারে?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_wear_cloth_himself_after_properly"
                                                                name='can_wear_cloth_himself_after_properly'
                                                                label="টয়লেট থেকে কি একা একা নিজের কাপড় পরে বের হয়ে আসতে পারে?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="SocialSkills">
                                                    <section>
                                                        <div>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_play_with_siblings"
                                                                name='does_play_with_siblings'
                                                                label="বাসায় ভাইবোনদের সাথে খেলাধুলা করে কি?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_friend_come_to_play_in_home"
                                                                name='does_friend_come_to_play_in_home'
                                                                label="সন্তানের বন্ধুরা কি বাসায় খেলতে আসে ?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_share_toys"
                                                                name='does_share_toys'
                                                                label="বন্ধুদের সাথে খেলনা শেয়ার করে কি নাকি বড়দের সহায়তা লাগে?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_wait_for_his_turn"
                                                                name='does_wait_for_his_turn'
                                                                label="গেমস বা খেলাধুলায় অথবা কথা বলার সময় তার নিজের পালা বা টার্ন এর জন্য অপেক্ষা করে?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_careless_for_others"
                                                                name='does_careless_for_others'
                                                                label="বড়দের সাথে বা অন্য শিশুদের ব্যপারে আগ্রহ দেখায় নাকি উদাসীন থাকে?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->are_you_tense_for_specific_behaviour"
                                                                name='are_you_tense_for_specific_behaviour'
                                                                label="আপনি কি সন্তানের বিশেষ কোন আচরন নিয়ে চিন্তিত ?"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="হ্যাঁ হলে বিস্তারিত লিখুন"
                                                                :secondaryInputValue="$caseHistory->are_you_tense_for_specific_behaviour_secondary">
                                                            </x-input-radio-or-check>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="LearningSkills">
                                                    <section>
                                                        <div>
                                                            <!-- end row -->
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="mb-2">
                                                                        <h5 class="">স্কুলের কাজের ক্ষেত্রে আপনার
                                                                            সন্তানের প্রধান উদ্বেগের কারন/বিষয়
                                                                            গুলি কি কি ? উল্লেখ
                                                                            করুন-</h5>
                                                                        <div class="input-group" id="datepicker2">
                                                                            <x-input-text type="text"
                                                                                value="{{ $caseHistory->concerning_points_of_child_school_work }}"
                                                                                name='concerning_points_of_child_school_work'>
                                                                            </x-input-text>
                                                                        </div>
                                                                        <!-- input-->
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->is_curious_to_learn_new_things"
                                                                    name='is_curious_to_learn_new_things'
                                                                    label="নতুন নতুন বিষয় শেখার আগ্রহ আছে কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->can_understand_simple_things_right_way"
                                                                    name='can_understand_simple_things_right_way'
                                                                    label="যেকোনো সাধারণ বিষয় সঠিকভাবে বুঝতে পারে কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->can_learn_word_spelling"
                                                                    name='can_learn_word_spelling'
                                                                    label="শব্দের বানান শিখতে পারে কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->can_write_himself"
                                                                    name='can_write_himself' label="নিজে নিজে লিখতে পারে?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->working_speed"
                                                                    name='working_speed' label="কাজ করার গতি কেমন ?"
                                                                    :records="$caseConstants::$workingSpeed">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->how_long_child_can_remember_after_teaching"
                                                                    name='how_long_child_can_remember_after_teaching'
                                                                    label="আপনার সন্তানের কোন ও বিষয়ে বোঝার ক্ষমতা বোঝানোর পর কতদিন পর্যন্ত থাকে?"
                                                                    :records="$caseConstants::$howLongChildCanManageAfterTeaching" :isVertical="false">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->is_home_work_a_simple_things"
                                                                    name='is_home_work_a_simple_things'
                                                                    label="হোমওয়ার্ক কি তার কাছে সাধারণ কাজ?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->does_change_behaviour_during_homework"
                                                                    name='does_change_behaviour_during_homework'
                                                                    label="স্কুলের কাজ করার সময় কি তার ব্যবহার/আচরণ অন্যরকম হয়ে যায়?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->is_he_angry"
                                                                    name='is_he_angry' label="তাকে কি উত্তেজিত মনে হয়?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->does_feel_messy_about_paper_and_books"
                                                                    name='does_feel_messy_about_paper_and_books'
                                                                    label="কাগজপত্র বা বই খাতায় অগোছালো মনে হয়?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->does_lose_different_things_from_bags_regularly"
                                                                    name='does_lose_different_things_from_bags_regularly'
                                                                    label="সে কি নিয়মিত পেন্সিল বক্স থেকে বিভিন্ন্য আইটেম বা স্কুল ব্যাগ থেকে বিভিন্ন জিনিষ হারায়?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <x-input-radio-or-check name='can_use_language_correctly'
                                                                    :checked="$caseHistory->can_use_language_correctly"
                                                                    label="ভাষার সঠিক ব্যবহার করে লিখতে পারে কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <x-input-radio-or-check :checked="$caseHistory->does_follow_verbal_commend"
                                                                    name='does_follow_verbal_commend'
                                                                    label="মৌখিক নির্দেশ মেনে চলে" :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check :checked="$caseHistory->is_able_to_use_right_word_for_right_sentence"
                                                                    name='is_able_to_use_right_word_for_right_sentence'
                                                                    label="বাক্য গঠনে সঠিক শব্দের সঠিক ব্যবহার পারে?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                            </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Self-reliance">
                                                    <section>
                                                        <div>
                                                            <p>আপনার সন্তানের মাঝে নিচের বিষয়গুলির নিয়ে কোন অসুবিধা পরিলক্ষন
                                                                করেছেন কি? করে থাকলে,
                                                                কমেন্টে বিস্তারিত
                                                                লিখুন। এই বিষয়গুলি মুলত স্কুলে যাওয়ার বয়সের জন্য প্রযোজ্যঃ
                                                            </p>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_irrelevant_work_during_meal"
                                                                name='does_irrelevant_work_during_meal'
                                                                label="খাওয়াদাওয়ার সময় বিশ্রী/বেমানান কাজ করে কিনা যেটা পিতামাতার জন্য বিরক্তি সৃষ্টি করে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_scream_during_wearing_cloth"
                                                                name='does_scream_during_wearing_cloth'
                                                                label="কাপড় পরিধানঃ বেশি কান্নাকাটি/ চিৎকার করে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->how_you_will_describe_you_child"
                                                                name='how_you_will_describe_you_child' type="checkbox"
                                                                label="আপনি আপনার শিশুকে কি ভাবে বর্ণনা করবেন?"
                                                                :records="$caseConstants::$howToDiscriveYourChild" :isVertical="false" :multiple="true">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->bath" name='bath'
                                                                label="গোসল" type="checkbox" :records="$caseConstants::$bath"
                                                                secondaryInputLabel="বিস্তারিত লিখুন" :isVertical="false"
                                                                :multiple="true" :secondaryInputValue="$caseHistory->bath_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->necessary_things"
                                                                name='necessary_things' label="প্রয়োজনীয় জিনিস"
                                                                type="checkbox" :records="$caseConstants::$necessaryThings"
                                                                secondaryInputLabel="বিস্তারিত লিখুন" :secondaryInputValue="$caseHistory->necessary_things_secondary"
                                                                :isVertical="false" :multiple="true">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_have_the_navigation_capability"
                                                                name='does_have_the_navigation_capability'
                                                                label="দিক নির্ণয়ের দক্ষতা আছে কি?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->play" name='play'
                                                                label="খেলা" type="checkbox" :records="$caseConstants::$game"
                                                                :isVertical="false" :multiple="true">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->mobility" name='mobility'
                                                                label="মবিলিটি" type="checkbox" :records="$caseConstants::$mobility"
                                                                :isVertical="false" :multiple="true">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_like_routine"
                                                                name='does_like_routine' label="রুটিন পছন্দ করে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>

                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_accept_routing_change"
                                                                name='does_accept_routing_change'
                                                                label="রুটিনে কোন পরিবর্তন মেনে নেয় কি?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_like_new_situation"
                                                                name='does_like_new_situation'
                                                                label="নতুন পরিস্থিতি পছন্দ করে?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_not_obey_regularity"
                                                                name='can_not_obey_regularity'
                                                                label="ধারাবাহিক নির্দেশ ঠিক মত পালন করতে পারে না"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_get_angry_quickly"
                                                                name='does_get_angry_quickly'
                                                                label="মেজাজ খুব তাড়াতাড়ি পরিবর্তিত হয়"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_get_disappointed_quickly"
                                                                name='does_get_disappointed_quickly'
                                                                label="সহজে হতাশাগ্রস্থ হয়" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_stop_working"
                                                                name='does_stop_working' label="কাজ করা বন্ধ করে দেয়"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->is_there_instability"
                                                                name='is_there_instability' label="অস্থিরতা আছে কি?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->can_stay_longer_if_needed"
                                                                name='can_stay_longer_if_needed'
                                                                label="একজায়গায় ঠিক মত বসতে পারে (পরিবেশ - পরিস্থিতির প্রয়োজনে দীর্ঘ সময় বসে থাকা )"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_have_tremendous_behaviors_at_home"
                                                                name='does_have_tremendous_behaviors_at_home'
                                                                label="বাসায় ধ্বংসাত্মক বা আক্রমণাত্মক ব্যাবহার আছে কি?"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="থাকলে কি ধরনের আচরন প্রদর্শন করে?"
                                                                :secondaryInputValue="$caseHistory->does_have_tremendous_behaviors_at_home_secondary">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->seems_like_not_interested_in_playing"
                                                                name='seems_like_not_interested_in_playing'
                                                                label="খেলাধুলায় মনে হয় মনোযোগ নেই, শুধু বসে থাকে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_have_time_sense"
                                                                name='does_have_time_sense'
                                                                label="আপনার সন্তানের সময় সম্পর্কে জ্ঞান আছে কি?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->doest_have_knowledge_problem_about_day_monty_and_time"
                                                                name='doest_have_knowledge_problem_about_day_monty_and_time'
                                                                label="দিন, মাস ও সময় জ্ঞান অর্জনে সমস্যা আছে কি?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->response" name='response'
                                                                label="সারা প্রদান" :records="$caseConstants::$answerTheCall">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->day_dreamer" name='day_dreamer'
                                                                label="দিবাস্বপ্নচারী মনে হয় । ঘোরের মধ্যে থাকা, কল্পনার জগতে থাকে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_move_in_one_place"
                                                                name='does_move_in_one_place' label="এক জায়গায় ঘোরে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_move" name='does_move'
                                                                label="ঘোরাঘুরি করে" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_move_all_time"
                                                                name='does_move_all_time'
                                                                label="সবসময়ই নড়াচড়া বা চলাফেরার মধ্যে থাকে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_like_to_sit_straight"
                                                                name='does_like_to_sit_straight'
                                                                label="সোজা হয়ে বসতে পছন্দ করে কি?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->is_expert_play_with_ball"
                                                                name='is_expert_play_with_ball'
                                                                label="বল নিয়ে খেলার ক্ষেত্রে পারদর্শী"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_ignore_playing_with_ball"
                                                                name='does_ignore_playing_with_ball'
                                                                label="বল নিয়ে যে কোন ধরনের খেলা এড়িয়ে চলে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_like_to_destroy"
                                                                name='does_like_to_destroy'
                                                                label="ভাংচুর করতে পছন্দ করে (জিনিষ পত্র নষ্ট করে )"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_run_in_wrong_way"
                                                                name='does_run_in_wrong_way'
                                                                label="বেমানান ভঙ্গিতে দৌঁড়ায়" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->does_height_movement_be_careful_when_going_down_stairs"
                                                                name='does_height_movement_be_careful_when_going_down_stairs'
                                                                label="উচ্চতা, নড়াচড়া, সিঁড়ি দিয়ে নামার ক্ষেত্রে সাবধান থাকে"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <x-input-radio-or-check :checked="$caseHistory->staying_in_motion_all_the_time"
                                                                name='staying_in_motion_all_the_time'
                                                                label="সারাক্ষণ নড়াচড়ার মধ্যে থাকে?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->try_to_ignore_task"
                                                                name='try_to_ignore_task' label="কাজ এড়িয়ে চলতে চায়"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->which_kind_of_task_he_try_to_skip"
                                                                name='which_kind_of_task_he_try_to_skip'
                                                                label="কোন ধরনের কাজ এড়িয়ে চলে?" :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check :checked="$caseHistory->lost_again_and_again"
                                                                name='lost_again_and_again' label="বার বার হারিয়ে যায়?"
                                                                :records="$constants::$yesNo">
                                                            </x-input-radio-or-check>
                                                            <!-- end row -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Matters">
                                                    <section>
                                                        <p>শিশু নিচে বর্ণিত খেলাধুলা ও শারীরিক কসরত বা সঙ্গীত
                                                            সংক্রান্ত
                                                            বিষয়ে অংশগ্রহণ করে</p>
                                                        <x-input-radio-or-check :checked="$caseHistory->i_listen_to_the_baby_later"
                                                            name='i_listen_to_the_baby_later' label="আমি শিশুকে পরে শুনাই"
                                                            :records="$caseConstants::$absolutely">
                                                        </x-input-radio-or-check>
                                                        <x-input-radio-or-check :checked="$caseHistory->how_would_you_describe_the_child"
                                                            name="how_would_you_describe_the_child"
                                                            label="আপনি সন্তানকে কি ভাবে বর্ণনা করবেন ?"
                                                            :records="$caseConstants::$activeFirends" type="checkbox" :isVertical="false"
                                                            :multiple="true">
                                                        </x-input-radio-or-check>
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="mb-2">
                                                                <h5 class="">তিনটি প্রধান উদ্বেগের বিষয়গুলি
                                                                    লিখুনঃ</h5>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        value="{{ $caseHistory->three_main_concerns }}"
                                                                        name='three_main_concerns'>
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-->
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="report">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$caseHistory->whether_the_eyes_were_examined"
                                                            name="whether_the_eyes_were_examined"
                                                            label="চোখের পরিক্ষা হয়েছিল কিনা? (রিপোর্ট সংযুক্ত করুন)"
                                                            :records="$constants::$yesNo" secondaryInputLabel="থাকলে উল্লেখ করুন"
                                                            :secondaryInputValue="$caseHistory->whether_the_eyes_were_examined_secondary">
                                                        </x-input-radio-or-check>
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="mb-2">
                                                                <h5 class="">চোখের পরিক্ষা হয়ে থাকলে রিপোর্ট
                                                                    সংযুক্ত করুন</h5>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        value="{{ $caseHistory->report_if_eye_examination_has_been_done }}"
                                                                        type="file"
                                                                        name='report_if_eye_examination_has_been_done'>
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$caseHistory->hearing_attach_report_if_checked"
                                                            name='hearing_attach_report_if_checked'
                                                            label="শ্রবণ ( Hearing)পরিক্ষা হয়েছিল কিনা?"
                                                            :records="$constants::$yesNo">
                                                        </x-input-radio-or-check>
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="mb-2">
                                                                <h5 class="">শ্রবণ ( Hearing)পরিক্ষা হয়ে
                                                                    থাকলে রিপোর্ট সংযুক্ত করুন</h5>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        value="{{ $caseHistory->hearing_attach_report_if_checked_secondary }}"
                                                                        type="file"
                                                                        name='hearing_attach_report_if_checked_secondary'>
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-->
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$caseHistory->any_problems_during_pregnancy_or_at_birth"
                                                            name="any_problems_during_pregnancy_or_at_birth"
                                                            label="প্রেগন্যান্ট অবস্থায় বা শিশুর জন্মের সময়ে কোন সমস্যা ছিল কি?"
                                                            :records="$constants::$yesNo" secondaryInputLabel="কি ধরনের সমস্যাছিল"
                                                            :secondaryInputValue="$caseHistory->any_problems_during_pregnancy_or_at_birth_secondary">
                                                        </x-input-radio-or-check>
                                                        <x-input-radio-or-check :checked="$caseHistory->whether_the_child_received_any_head_injuries"
                                                            name='whether_the_child_received_any_head_injuries'
                                                            label="শিশু মাথায় কোন আঘাত পেয়েছিল কিনা?" :records="$caseConstants::$pre">
                                                        </x-input-radio-or-check>
                                                        <x-input-radio-or-check :checked="$caseHistory->whether_there_is_caesar"
                                                            name='whether_there_is_caesar' label="সিজার আছে কিনা"
                                                            :records="$constants::$yesNo">
                                                        </x-input-radio-or-check>
                                                        <x-input-radio-or-check :checked="$caseHistory->the_baby_had_an_ear_infection_or_a_problem"
                                                            name="the_baby_had_an_ear_infection_or_a_problem"
                                                            label="শিশুর কানে ইনফেকশন বা কোন সমস্যা হয়েছিল কিনাঃ"
                                                            :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন"
                                                            :secondaryInputValue="$caseHistory->the_baby_had_an_ear_infection_or_a_problem_secondary">
                                                        </x-input-radio-or-check>
                                                        <x-input-radio-or-check :checked="$caseHistory->what_kind_of_ear_problems"
                                                            name="what_kind_of_ear_problems"
                                                            label="কানে কি ধরনের সমস্যা - অন্তকর্ণ / মধ্যকর্ণ/ বহিঃকর্ণ"
                                                            :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন"
                                                            :secondaryInputValue="$caseHistory->what_kind_of_ear_problems_secondary">
                                                        </x-input-radio-or-check>
                                                        <x-input-radio-or-check :checked="$caseHistory->no_illness_or_hospitalization_was_required"
                                                            name='no_illness_or_hospitalization_was_required'
                                                            label="কোন অসুখ বা হসপিটালে ভর্তি হতে হয়েছিল?"
                                                            :records="$constants::$yesNo">
                                                        </x-input-radio-or-check>
                                                        <x-input-radio-or-check :checked="$caseHistory->whether_there_is_other_relevant_treatment_information"
                                                            name="whether_there_is_other_relevant_treatment_information"
                                                            label="অন্যান্য প্রাসঙ্গিক চিকিৎসার তথ্য আছে কিনা"
                                                            :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন"
                                                            :secondaryInputValue="$caseHistory->whether_there_is_other_relevant_treatment_information_secondary">
                                                        </x-input-radio-or-check>
                                                        <div class="col-xl-12 col-sm-12">
                                                            <div class="mb-2">
                                                                <h5 class="">অন্যান্য প্রাসঙ্গিক চিকিৎসার তথ্য থাকলে
                                                                    রিপোর্ট
                                                                    সংযুক্ত করুন-</h5>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        value="{{ $caseHistory->attach_the_report_if_you_have_other_relevant }}"
                                                                        type="file"
                                                                        name='attach_the_report_if_you_have_other_relevant'>
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-->
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
                                                        value='Update' />
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
