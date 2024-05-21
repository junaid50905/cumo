@extends('layouts.master')
@section('title', 'TRIP')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') ?? '' }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <div class="row">
                        <div class="col-12 apply-view-only">
                            <form >
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#trip"
                                                                data-toggle="tab">Trip</a></li>
                                                    <li class="w-100"><a href="#ActivitiesofDailyLiving"
                                                            data-toggle="tab">Activities of Daily Living (ADLs) দৈনন্দিন
                                                            কার্যাবলী</a></li>
                                                    <li class="w-100"><a href="#justForstaff" data-toggle="tab">শুধু
                                                            স্টাফ এর জন্য প্রযোজ্য</a></li>
                                                    <li class="w-100"><a href="#HomeAssessmentWorksheet"
                                                            data-toggle="tab">বাড়ীর এসেসমেন্ট ওয়ার্কসিট >
                                                            কার্যক্রম</a></li>
                                                    <li class="w-100"><a href="#securityandsafety" data-toggle="tab">
                                                            বাড়ীর আসেসমেন্টের ওয়ার্কসিট > নিরাপত্তা এবং সুরক্ষা</a></li>
                                                    <li class="w-100"><a href="#Equipment" data-toggle="tab">বাড়ীর
                                                            আসেসমেন্টের
                                                            ওয়ার্কসিট > সাজসরঞ্জাম</a></li>
                                                    <li class="w-100"><a href="#light" data-toggle="tab">বাড়ীর
                                                            আসেসমেন্টের ওয়ার্কসিট > আলো</a></li>
                                                    <li class="w-100"><a href="#kitchen" data-toggle="tab">বাড়ীর
                                                            আসেসমেন্টের ওয়ার্কসিট > রান্নাঘর</a></li>
                                                    <li class="w-100"><a href="#bathroom" data-toggle="tab">বাড়ীর
                                                            আসেসমেন্টের ওয়ার্কসিট > বাথরুম</a></li>
                                                    <li class="w-100"><a href="#floor" data-toggle="tab">বাড়ীর
                                                            আসেসমেন্টের ওয়ার্কসিট > মেঝে</a></li>
                                                    <li class="w-100"><a href="#InstrumentalActivitiesofDailyLiving"
                                                            data-toggle="tab">Instrumental Activities of Daily Living
                                                            (IADLs)</a></li>
                                                    <li class="w-100"><a href="#Neighbor" data-toggle="tab">Environmental
                                                            Safety > প্রতিবেশি</a></li>
                                                    <li class="w-100"><a href="#steps" data-toggle="tab">Environmental
                                                            Safety > সিঁড়ি</a></li>
                                                    <li class="w-100"><a href="#wokeUpmorning"
                                                            data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন >
                                                            সকালে ঘুম থেকে উঠে</a></li>
                                                    <li class="w-100"><a href="#readingWriting"
                                                            data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন >
                                                            লিখাপড়া</a></li>
                                                    <li class="w-100"><a href="#dailyWork" data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন >
                                                            দৈনন্দিন কাজ</a></li>
                                                    <li class="w-100"><a href="#wonWork" data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন > নিজের কাজ</a></li>
                                                    <li class="w-100"><a href="#lunch" data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন > দুপুরের খাবারের সময়</a></li>
                                                    <li class="w-100"><a href="#Resttime" data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন >
                                                            রেস্ট টাইম</a></li>
                                                    <li class="w-100"><a href="#afternoon" data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন >
                                                            বিকেলে</a></li>
                                                    <li class="w-100"><a href="#evening" data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন > সন্ধ্যা</a></li>
                                                    <li class="w-100"><a href="#Constructivework" data-toggle="tab">
                                                            শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > গঠনমূলক কাজ</a></li>
                                                    <li class="w-100"><a href="#dinner" data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন > রাতের খাবার</a>
                                                    </li>
                                                    <li class="w-100"><a href="#afterdinner"
                                                            data-toggle="tab">শিক্ষার্থীদের
                                                            দৈনন্দিন রুটিনের সাজেশন >
                                                            রাতে শোবার আগে</a></li>
                                                    <li class="w-100"><a href="#Signature" data-toggle="tab">Signature</a>
                                                    </li>
                                                    <li class="w-100"><a href="#TripEvaluationSignature"
                                                            data-toggle="tab">Trip Evaluation Signature</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <div class="tab-content">
                                                <div class="tab-pane" id="trip">
                                                    <section>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-firstname-input">Collection
                                                                        Date:</label>
                                                                    <x-input-text value="{{ $collection_date }}"
                                                                        name="collection_date" type="date"
                                                                        placeholder="mm/dd/yyyy">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-lastname-input">Teacher:</label>
                                                                    <x-input-select :selected="$teacher_id" name="teacher_id"
                                                                        :records="$teachers">
                                                                    </x-input-select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="ActivitiesofDailyLiving">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->bath ?? ''" name="bath"
                                                            label="গোসল" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->bath_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->wearing_cloth ?? ''" name="wearing_cloth"
                                                            label="কাপড় পরা" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->wearing_cloth_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->wrooming ?? ''" name="wrooming"
                                                            label="গ্রুমিং" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->wrooming_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন"></x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->do_toilet ?? ''" name="do_toilet"
                                                            label="টয়লেট করা" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->do_toilet_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন"></x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->eating_healthy_food ?? ''"
                                                            name="eating_healthy_food" label="পুষ্টিকর খাদ্য খাওয়া"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->eating_healthy_food_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->wakeup_from_bed ?? ''" name="wakeup_from_bed"
                                                            label="বিছানা থেকে ওঠা" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->wakeup_from_bed_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->get_up_from_the_chair ??
                                                            ''"
                                                            name="get_up_from_the_chair" label="চেয়ার থেকে ওঠা"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->get_up_from_the_chair_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activitiesOfDailyLiving->walk ?? ''" name="walk"
                                                            label="হাটা" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $activitiesOfDailyLiving->walk_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন"></x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="justForstaff">
                                                    <section>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Instruction:</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <p>ট্রিপ পরিকল্পনা ও ট্রিপ সম্বন্ধে আপনার অভিজ্ঞতা
                                                                    লিখুন ও রেট করুনঃ</p>
                                                            </div><!-- input-group -->

                                                            <x-input-radio-or-check :checked="$onlyForStaff->taking_trip_materials_and_preparation ??
                                                                ''"
                                                                name="taking_trip_materials_and_preparation"
                                                                label="ট্রিপ উপকরণ ও প্রস্তুতি গ্রহণ" :records="$tripReportConstants::$observation"
                                                                secondaryInputValue="{{ $onlyForStaff->taking_trip_materials_and_preparation_secondary ?? '' }}"
                                                                secondaryInputLabel="মতামত">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->whether_the_trainee_has_been_contacted ??
                                                                ''"
                                                                name="whether_the_trainee_has_been_contacted"
                                                                label="প্রশিক্ষণার্থীর সাথে যোগাযোগ করা হয়েছে কিনা"
                                                                :records="$tripReportConstants::$observation"
                                                                secondaryInputValue="{{ $onlyForStaff->whether_the_trainee_has_been_contacted_secondary ?? '' }}"
                                                                secondaryInputLabel="মতামত">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->communicate_with_other_members_of_the_team ??
                                                                ''"
                                                                name="communicate_with_other_members_of_the_team"
                                                                label="দলের অন্য সদস্যদের সঙ্গে যোগাযোগ" :records="$tripReportConstants::$observation"
                                                                secondaryInputValue="{{ $onlyForStaff->communicate_with_other_members_of_the_team_secondary ?? '' }}"
                                                                secondaryInputLabel="মতামত">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->where_visits ?? ''" name="where_visits"
                                                                label="ট্যুর বা ভিজিট কোথায়" :records="$tripReportConstants::$observation"
                                                                secondaryInputValue="{{ $onlyForStaff->where_visits_secondary ?? '' }}"
                                                                secondaryInputLabel="মতামত">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->who_were_driving_cars_or_other_assistants ??
                                                                ''"
                                                                name="who_were_driving_cars_or_other_assistants"
                                                                label="গাড়ি ড্রাইভিং বা অন্যান্য সহায়তাকারি যারা ছিলেন"
                                                                :records="$tripReportConstants::$observation"
                                                                secondaryInputValue="{{ $onlyForStaff->who_were_driving_cars_or_other_assistants_secondary ?? '' }}"
                                                                secondaryInputLabel="মতামত">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->overall_tour_like ?? ''"
                                                                name="overall_tour_like"
                                                                label="অভারঅল / সার্বিক ট্যুর বা সফর কেমন ছিল"
                                                                :records="$tripReportConstants::$observation"
                                                                secondaryInputValue="{{ $onlyForStaff->overall_tour_like_secondary ?? '' }}"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->this_trip ?? ''" name="this_trip"
                                                                label="এই ট্রিপ" :records="$tripReportConstants::$expectation"
                                                                secondaryInputValue="{{ $onlyForStaff->this_trip_secondary ?? '' }}"
                                                                secondaryInputLabel="বিস্তারিত লিখুন">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->tour_presented_and_managed_professionally ??
                                                                ''"
                                                                name="tour_presented_and_managed_professionally"
                                                                label="পেশাদারী ভাবে ট্রিপ বা সফর উপস্থাপন ও পরিচালনা করা হয়েছিল কিনা?"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputValue="{{ $onlyForStaff->tour_presented_and_managed_professionally_secondary ?? '' }}"
                                                                secondaryInputLabel="সাজেশনবিস্তারিত লিখুন">
                                                            </x-input-radio-or-check>


                                                            <x-input-radio-or-check :checked="$onlyForStaff->teacher_went_alone_or_in_the_team ??
                                                                ''"
                                                                name="teacher_went_alone_or_in_the_team"
                                                                label="টিচার একা গিয়েছিলেন নাকি দলে?" :records="$tripReportConstants::$situation"
                                                                secondaryInputValue="{{ $onlyForStaff->teacher_went_alone_or_in_the_team_secondary ?? '' }}"
                                                                secondaryInputLabel="দলের তৈরির কথা কেন বিবেচনা করা হয়েছে?">
                                                            </x-input-radio-or-check>


                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">ট্রিপ টির
                                                                    ব্যাপারে আপনার ধারনা, মতামত বা কেমন
                                                                    বোধ করছিলেন? ট্রিপের সাফল্যের জন্য আপনি কি
                                                                    সাজেশন দিবেন?</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="trip_description"
                                                                        value="{{ $onlyForStaff->trip_description ?? '' }}">
                                                                    </x-input-text>
                                                                </div><!-- input-group -->
                                                            </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="HomeAssessmentWorksheet">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$activities->home_environment ?? ''" name="home_environment"
                                                            label="বাসার পরিবেশ" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->home_environment_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activities->do_need_separate_room ?? ''"
                                                            name="do_need_separate_room"
                                                            label="শিক্ষার্থীর জন্য আলাদা রুম" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->do_need_separate_room_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activities->separate_bed ?? ''" name="separate_bed"
                                                            label="আলাদা বিছানা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->separate_bed_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activities->for_cloth_separate_elmira ?? ''"
                                                            name="for_cloth_separate_elmira"
                                                            label="জামাকাপড় জন্য আলাদা আলমারি" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->for_cloth_separate_elmira_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activities->separate_place_for_change_cloth ?? ''"
                                                            name="separate_place_for_change_cloth"
                                                            label="জামাকাপড় পরিবর্তনের আলাদা জায়গা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->separate_place_for_change_cloth_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activities->attach_bathroom ?? ''" name="attach_bathroom"
                                                            label="সংযুক্ত বাথরুম" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->attach_bathroom_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activities->attach_balcony ?? ''" name="attach_balcony"
                                                            label="সংযুক্ত ব্যালকনি / বারান্দা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->attach_balcony_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$activities->separate_reading_environment ?? ''"
                                                            name="separate_reading_environment"
                                                            label="আলাদা স্টাডি টেবিল, চেয়ার এবং বইয়ের তাক"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $activities->separate_reading_environment_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="securityandsafety">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$securitySafety->large_lock_on_the_outer_door ?? ''"
                                                            name="large_lock_on_the_outer_door"
                                                            label="বাইরের দরজায় বড় লক / তালা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $securitySafety->large_lock_on_the_outer_door_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$securitySafety->front_door_leaks ?? ''" name="front_door_leaks"
                                                            label="সামনের দরজা দরজার ফুটো/পিহোল" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $securitySafety->front_door_leaks_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$securitySafety->lock_windows ?? ''" name="lock_windows"
                                                            label="উইন্ডো বার/গ্রিল বা তালা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $securitySafety->lock_windows_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$securitySafety->alarm_system ?? ''" name="alarm_system"
                                                            label="স্মোক এলার্ম ইনস্টল বা জরুরী ক্ষেত্রে অন্য কোন এলার্ম সিস্টেম"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $securitySafety->alarm_system_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$securitySafety->walk_or_other_obstacles ?? ''"
                                                            name="walk_or_other_obstacles"
                                                            label="প্যাসেজ ওয়ে বা হাটার জায়গায় তার বা অন্য কোন বাধা"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $securitySafety->walk_or_other_obstacles_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">ছাত্রের যদি
                                                                আলাদা রুম না থাকে তবে বিকল্প
                                                                সমাধানঃ</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text name="for_room_alternative_solution"
                                                                    value="{{ $securitySafety->for_room_alternative_solution ?? '' }}">
                                                                </x-input-text>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Equipment">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$equipment->using_bed_or_chair_are_easy ?? ''"
                                                            name="using_bed_or_chair_are_easy"
                                                            label="বিছানা এবং চেয়ার ব্যবহার করা সহজ" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $equipment->using_bed_or_chair_are_easy_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$equipment->correct_height_chair ?? ''"
                                                            name="correct_height_chair" label="টেবিলের সঠিক উচ্চতা"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $equipment->correct_height_chair_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$equipment->up_down_form_bed_easy ?? ''"
                                                            name="up_down_form_bed_easy" label="সহজে বিছানায় নামা ও উঠা"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $equipment->up_down_form_bed_easy_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Light">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$light->easily_lights_on_and_off ?? ''"
                                                            name="easily_lights_on_and_off"
                                                            label="সহজে লাইটের সুইচ অন অফ করা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $light->easily_lights_on_and_off_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$light->enough_light_study_area ?? ''"
                                                            name="enough_light_study_area"
                                                            label="পড়াশোনার জায়গায় যথেষ্ট আলো" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $light->enough_light_study_area_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$light->night_lights_passage_way ?? ''"
                                                            name="night_lights_passage_way"
                                                            label="প্যাসেজ ওয়েতে রাতে জালিয়ে রাখার লাইট আছে"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $light->night_lights_passage_way_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="kitchen">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$kitchen->tap_the_basin_within_reach ?? ''"
                                                            name="tap_the_basin_within_reach"
                                                            label="নাগালের মধ্যে বেসিনে ট্যাপ / হ্যান্ডল"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->tap_the_basin_within_reach_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$kitchen->plate_rack_within_reach ?? ''"
                                                            name="plate_rack_within_reach"
                                                            label="নাগালের মধ্যে প্লেট র‍্যাক" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->plate_rack_within_reach_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন"></x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$kitchen->items_are_within_reach ?? ''"
                                                            name="items_are_within_reach"
                                                            label="প্রায়ই ব্যবহৃত আইটেম গুলি হাতের নাগালে"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->items_are_within_reach_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$kitchen->cooking_items_within_reach ?? ''"
                                                            name="cooking_items_within_reach"
                                                            label="রান্নার ব্যবহৃত আইটেম গুলি হাতের নাগালের মধ্যে"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->cooking_items_within_reach_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$kitchen->store_is_easily_accessible ?? ''"
                                                            name="store_is_easily_accessible"
                                                            label="স্টোরে সহজে যাওয়া যায়" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->store_is_easily_accessible_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$kitchen->refrigerator_within_reach ?? ''"
                                                            name="refrigerator_within_reach"
                                                            label="নাগালের মধ্যে ফ্রিজ আছে কিনা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->refrigerator_within_reach_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$kitchen->something_on_stove ?? ''"
                                                            name="something_on_stove" label="চুলার উপরে কোন কিছু আছে কিনা"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->something_on_stove_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$kitchen->enough_light ?? ''" name="enough_light"
                                                            label="পর্যাপ্ত আলো" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $kitchen->enough_light_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="bathroom">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$bathroom->stand_for_support_in_bathroom ?? ''"
                                                            name="stand_for_support_in_bathroom"
                                                            label="টয়লেট, শাওয়ার বা বাথটাব এর পাশে ধরার মত স্ট্যান্ড আছে"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $bathroom->stand_for_support_in_bathroom_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$bathroom->slippery_insulated_bathroom ?? ''"
                                                            name="slippery_insulated_bathroom" label="পিছল-নিরোধী বাথরুম"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $bathroom->slippery_insulated_bathroom_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$bathroom->hand_shower_for_bath ?? ''"
                                                            name="hand_shower_for_bath"
                                                            label="টয়লেটে এবং গোছলের জন্য হ্যান্ড শাওয়ার আছে"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $bathroom->hand_shower_for_bath_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$bathroom->soap_shampoo_brach_within_rich ?? ''"
                                                            name="soap_shampoo_brach_within_rich"
                                                            label="সাবান, শ্যাম্পু, ব্রাশ নাগালের মধ্যে" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $bathroom->soap_shampoo_brach_within_rich_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="floor">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$floor->slippery_insulated_floor ?? ''"
                                                            name="slippery_insulated_floor" label="পিছল-নিরোধী মেঝে"
                                                            :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $floor->slippery_insulated_floor_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$floor->whether_there_is_any_looseness_in_anger_or_papos ??
                                                            ''"
                                                            name="whether_there_is_any_looseness_in_anger_or_papos"
                                                            label="রাগ বা পাপোশে কোন আলগা ঝুল আছে কিনা" :records="$constants::$yesNo"
                                                            secondaryInputValue="{{ $floor->whether_there_is_any_looseness_in_anger_or_papos_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="InstrumentalActivitiesofDailyLiving">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->telephone_uses_or_video_call ??
                                                            ''"
                                                            name="telephone_uses_or_video_call"
                                                            label="টেলিফোন ব্যবহার/ ভিডিও কল" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->telephone_uses_or_video_call_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->money_manage_or_uses ??
                                                            ''"
                                                            name="money_manage_or_uses"
                                                            label="টাকা ম্যানেজ করা /টাকার ব্যবহার" :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->money_manage_or_uses_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->personal_or_favorite_things_buy ??
                                                            ''"
                                                            name="personal_or_favorite_things_buy"
                                                            label="ব্যক্তিগত জিনিসপত্র কেনাকাটা/পছন্দের জিনিস কেনাকাটা"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->personal_or_favorite_things_buy_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->transportation_uses ??
                                                            ''"
                                                            name="transportation_uses" label="পরিবহন ব্যবহার করা"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->transportation_uses_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->doing_laundry_or_separate_dirty_cloth_or_dying ??
                                                            ''"
                                                            name="doing_laundry_or_separate_dirty_cloth_or_dying"
                                                            label="লন্ড্রির কাজ করা / নোংরা কাপড় আলাদা করা / কাপড় শুকানোর হ্যাঙ্গারে ছোট কাপড় ঝুলানো"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->doing_laundry_or_separate_dirty_cloth_or_dying_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->cloth_fold_and_put_in_drawer ??
                                                            ''"
                                                            name="cloth_fold_and_put_in_drawer"
                                                            label="কাপড় ভাজ করা / ভাঁজ করা কাপড় ড্রয়ারে গুছিয়ে রাখবে।"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->cloth_fold_and_put_in_drawer_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->working_at_home_or_toy_or_playground_clean_up ??
                                                            ''"
                                                            name="working_at_home_or_toy_or_playground_clean_up"
                                                            label="ঘরের হালকা কাজ করা / নিজের খেলনা ও খেলার জায়গা গুছানো"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->working_at_home_or_toy_or_playground_clean_up_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->cooking_food_or_eat_himself ??
                                                            ''"
                                                            name="cooking_food_or_eat_himself"
                                                            label="খাবার প্রস্তুত করা/ নিজ হাতে খাবার খাওয়া"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->cooking_food_or_eat_himself_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$instrumentalActivitiesOfDaily->cutting_vegetable_or_arrange_separately ??
                                                            ''"
                                                            name="cutting_vegetable_or_arrange_separately"
                                                            label="সবজি কাটা / সবজির ধরন অনুযায়ি আলাদা করে গুছিয়ে রাখা"
                                                            :records="$tripReportConstants::$do"
                                                            secondaryInputValue="{{ $instrumentalActivitiesOfDaily->cutting_vegetable_or_arrange_separately_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Neighbor">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$environmentalSafetyRelative->security ?? ''" name="security"
                                                            label="নিরাপত্তা" :records="$tripReportConstants::$change"
                                                            secondaryInputValue="{{ $environmentalSafetyRelative->security_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$environmentalSafetyRelative->comfortable_arrangements ??
                                                            ''"
                                                            name="comfortable_arrangements"
                                                            label="স্বাচ্ছন্দ্যদায়ক ব্যবস্থা" :records="$tripReportConstants::$change"
                                                            secondaryInputValue="{{ $environmentalSafetyRelative->comfortable_arrangements_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <x-input-radio-or-check :checked="$environmentalSafetyRelative->close_friend_or_relative ??
                                                            ''"
                                                            name="close_friend_or_relative"
                                                            label="কাছাকাছি বন্ধু বা আত্মীয়দের অবস্থান"
                                                            :records="$tripReportConstants::$change"
                                                            secondaryInputValue="{{ $environmentalSafetyRelative->close_friend_or_relative_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="steps">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$environmentalSafetyStep->free_from_noise_and_obstruction ??
                                                            ''"
                                                            name="free_from_noise_and_obstruction"
                                                            label="গোলমাল ও প্রতিবন্ধকতা মুক্ত" :records="$tripReportConstants::$change"
                                                            secondaryInputValue="{{ $environmentalSafetyStep->free_from_noise_and_obstruction_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$environmentalSafetyStep->handles_on_both_sides_step ??
                                                            ''"
                                                            name="handles_on_both_sides_step"
                                                            label="সিডির দু দিকেই হাতলে যথেষ্ট আলকিত" :records="$tripReportConstants::$change"
                                                            secondaryInputValue="{{ $environmentalSafetyStep->handles_on_both_sides_step_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$environmentalSafetyStep->clearly_marked ?? ''" name="clearly_marked"
                                                            label="স্পষ্টভাবে চিহ্ন দেয়া" :records="$tripReportConstants::$change"
                                                            secondaryInputValue="{{ $environmentalSafetyStep->clearly_marked_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <x-input-radio-or-check :checked="$environmentalSafetyStep->other_if_any ?? ''" name="other_if_any"
                                                            label="অন্যান্য (যদি থাকে)" :records="$tripReportConstants::$change"
                                                            secondaryInputValue="{{ $environmentalSafetyStep->other_if_any_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text name="enter_the_details"
                                                                    value="{{ $environmentalSafetyStep->enter_the_details ?? '' }}">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="wokeUpmorning">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->wakeup_morning ?? ''" name="wakeup_morning"
                                                            label="সকালে ঘুম থেকে উঠে" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->wakeup_morning_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->wakeup_morning_time ?? '' }}"
                                                                    name="wakeup_morning_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->wakeup_morning_time_secondary ?? '' }}"
                                                                    name="wakeup_morning_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->bed_arrangement ?? ''" name="bed_arrangement"
                                                            label="বিছানা গুছানো" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->bed_arrangement_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->bed_arrangement_time ?? '' }}"
                                                                    name="bed_arrangement_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->bed_arrangement_time_secondary ?? '' }}"
                                                                    name="bed_arrangement_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->teeth_brash ?? ''" name="teeth_brash"
                                                            label="দাঁত ব্রাশ" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->teeth_brash_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->teeth_brash_time ?? '' }}"
                                                                    name="teeth_brash_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->teeth_brash_time_secondary ?? '' }}"
                                                                    name="teeth_brash_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->hand_face_washing ?? ''"
                                                            name="hand_face_washing" label="হাত মুখ ধোওয়া"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->hand_face_washing_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->hand_face_washing_time ?? '' }}"
                                                                    name="hand_face_washing_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->hand_face_washing_time_secondary ?? '' }}"
                                                                    name="hand_face_washing_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->changing_cloth ?? ''" name="changing_cloth"
                                                            label="কাপড় পালটানো" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->changing_cloth_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->changing_cloth_time ?? '' }}"
                                                                    name="changing_cloth_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->changing_cloth_time_secondary ?? '' }}"
                                                                    name="changing_cloth_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->hair_combing ?? ''" name="hair_combing"
                                                            label="চুল আঁচড়ানো" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->hair_combing_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->hair_combing_time ?? '' }}"
                                                                    name="hair_combing_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->hair_combing_time_secondary ?? '' }}"
                                                                    name="hair_combing_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->snakes_cooking_eat_or_in_table ??
                                                            ''"
                                                            name="snakes_cooking_eat_or_in_table"
                                                            label="নাস্তা তৈরি করবে ও খাবে/ টেবিলে নাস্তা খাবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->snakes_cooking_eat_or_in_table_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->snakes_cooking_eat_or_in_table_time ?? '' }}"
                                                                    name="snakes_cooking_eat_or_in_table_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->snakes_cooking_eat_or_in_table_time_secondary ?? '' }}"
                                                                    name="snakes_cooking_eat_or_in_table_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->cleaning_pleat_or_glass_or_put_in_wash_place ??
                                                            ''"
                                                            name="cleaning_pleat_or_glass_or_put_in_wash_place"
                                                            label="প্লেট গ্লাস ধুয়ে পরিস্কার করবে/ প্লেট নিয়ে সিংকে /ধোয়ার জায়গায় রাখবে।"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->cleaning_pleat_or_glass_or_put_in_wash_place_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->cleaning_pleat_or_glass_or_put_in_wash_place_time ?? '' }}"
                                                                    name="cleaning_pleat_or_glass_or_put_in_wash_place_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->cleaning_pleat_or_glass_or_put_in_wash_place_time_secondary ?? '' }}"
                                                                    name="cleaning_pleat_or_glass_or_put_in_wash_place_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wokeUpInTheMorning->clean_up_table ?? ''" name="clean_up_table"
                                                            label="টেবিল পরিস্কার করা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wokeUpInTheMorning->clean_up_table_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->clean_up_table_time ?? '' }}"
                                                                    name="clean_up_table_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wokeUpInTheMorning->clean_up_table_time_secondary ?? '' }}"
                                                                    name="clean_up_table_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="readingWriting">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$readingWriting->reading ?? ''" name="reading"
                                                            label="বই পড়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $readingWriting->reading_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন"></x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->reading_time ?? '' }}"
                                                                    name="reading_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->reading_time_secondary ?? '' }}"
                                                                    name="reading_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$readingWriting->hand_writing ?? ''" name="hand_writing"
                                                            label="হাতের লিখা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $readingWriting->hand_writing_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->hand_writing_time ?? '' }}"
                                                                    name="hand_writing_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->hand_writing_time_secondary ?? '' }}"
                                                                    name="hand_writing_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$readingWriting->drawing_picture ?? ''" name="drawing_picture"
                                                            label="ছবি আঁকা /রঙ করা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $readingWriting->drawing_picture_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->drawing_picture_time ?? '' }}"
                                                                    name="drawing_picture_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->drawing_picture_time_secondary ?? '' }}"
                                                                    name="drawing_picture_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$readingWriting->reading_paper ?? ''" name="reading_paper"
                                                            label="পেপার পড়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $readingWriting->reading_paper_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন"></x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->reading_paper_time ?? '' }}"
                                                                    name="reading_paper_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->reading_paper_time_secondary ?? '' }}"
                                                                    name="reading_paper_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$readingWriting->listening_song ?? ''" name="listening_song"
                                                            label="গান শোনা / গানের রেওয়াজ করা (গায়কদের ক্ষেত্রে)"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $readingWriting->listening_song_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->listening_song_time ?? '' }}"
                                                                    name="listening_song_time">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->listening_song_time_secondary ?? '' }}"
                                                                    name="listening_song_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$readingWriting->computer_practice ?? ''"
                                                            name="computer_practice"
                                                            label="কম্পিউটারে (কাজের) প্রাকটিস করবে" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $readingWriting->computer_practice_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->computer_practice_time ?? '' }}"
                                                                    name="computer_practice_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $readingWriting->computer_practice_time_secondary ?? '' }}"
                                                                    name="computer_practice_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="dailyWork">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$dailyWork->list_for_marketing ?? ''"
                                                            name="list_for_marketing" label="বাজারের লিস্ট করা"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dailyWork->list_for_marketing_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->list_for_marketing_time ?? '' }}"
                                                                    name="list_for_marketing_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->list_for_marketing_time_secondary ?? '' }}"
                                                                    name="list_for_marketing_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$dailyWork->marketing_with_mother_and_father ?? ''"
                                                            name="marketing_with_mother_and_father"
                                                            label="বাবার / মায়ের সাথে বাজারে যাওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dailyWork->marketing_with_mother_and_father_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->marketing_with_mother_and_father_time ?? '' }}"
                                                                    name="marketing_with_mother_and_father_time">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->marketing_with_mother_and_father_time_secondary ?? '' }}"
                                                                    name="marketing_with_mother_and_father_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <x-input-radio-or-check :checked="$dailyWork->helping_mother_for_cutting_and_cooking_food ??
                                                            ''"
                                                            name="helping_mother_for_cutting_and_cooking_food"
                                                            label="মায়ের সাথে সবজি কাটা ও রান্নাতে সাহায্য করা / মায়ের সাথে সবজি আলাদা করতে সাহায্য করা/ সেদ্ধ আলু ,ডিম ছেলা/ডিম ফেটা, ডিম ভাঙ্গা"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dailyWork->helping_mother_for_cutting_and_cooking_food_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->helping_mother_for_cutting_and_cooking_food_time ?? '' }}"
                                                                    name="helping_mother_for_cutting_and_cooking_food_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->helping_mother_for_cutting_and_cooking_food_time_secondary ?? '' }}"
                                                                    name="helping_mother_for_cutting_and_cooking_food_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$dailyWork->creating_menu_or_recognize_food_using_image ??
                                                            ''"
                                                            name="creating_menu_or_recognize_food_using_image"
                                                            label="খাবারের মেনু তৈরি করা / ছবি দেখে খাবার চিনতে পারা"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dailyWork->creating_menu_or_recognize_food_using_image_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->creating_menu_or_recognize_food_using_image_time ?? '' }}"
                                                                    name="creating_menu_or_recognize_food_using_image_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dailyWork->creating_menu_or_recognize_food_using_image_time_secondary ?? '' }}"
                                                                    name="creating_menu_or_recognize_food_using_image_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="wonWork">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$wonWork->washing_cloth_and_drying ?? ''"
                                                            name="washing_cloth_and_drying"
                                                            label="কাপড় ধোওয়া ও শুঁকাতে দেওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->washing_cloth_and_drying_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->washing_cloth_and_drying_time ?? '' }}"
                                                                    name="washing_cloth_and_drying_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->washing_cloth_and_drying_time_secondary ?? '' }}"
                                                                    name="washing_cloth_and_drying_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wonWork->clean_up_himself_room ?? ''"
                                                            name="clean_up_himself_room" label="নিজের রুম পরিস্কার করা"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->clean_up_himself_room_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->clean_up_himself_room_time ?? '' }}"
                                                                    name="clean_up_himself_room_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->clean_up_himself_room_time_secondary ?? '' }}"
                                                                    name="clean_up_himself_room_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wonWork->folding_cloth ?? ''" name="folding_cloth"
                                                            label="কাপড় ভাজ করা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->folding_cloth_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->folding_cloth_time ?? '' }}"
                                                                    name="folding_cloth_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->folding_cloth_time_secondary ?? '' }}"
                                                                    name="folding_cloth_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wonWork->tidy_wardrobe_or_cotton_drawer ?? ''"
                                                            name="tidy_wardrobe_or_cotton_drawer"
                                                            label="ওয়ার্ডরোব বা কাপরের ড্রয়ার গুছানো" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->tidy_wardrobe_or_cotton_drawer_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->tidy_wardrobe_or_cotton_drawer_time ?? '' }}"
                                                                    name="tidy_wardrobe_or_cotton_drawer_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->tidy_wardrobe_or_cotton_drawer_secondary ?? '' }}"
                                                                    name="tidy_wardrobe_or_cotton_drawer_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wonWork->iron_cloth ?? ''" name="iron_cloth"
                                                            label="কাপড় ইস্ত্রি করা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->iron_cloth_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->iron_cloth_time ?? '' }}"
                                                                    name="iron_cloth_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->iron_cloth_time_secondary ?? '' }}"
                                                                    name="iron_cloth_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wonWork->cutting_nails ?? ''" name="cutting_nails"
                                                            label="নখ কাটা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->cutting_nails_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->cutting_nails_time ?? '' }}"
                                                                    name="cutting_nails_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->cutting_nails_time_secondary ?? '' }}"
                                                                    name="cutting_nails_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wonWork->hair_cutting ?? ''" name="hair_cutting"
                                                            label="চুল কাটা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->hair_cutting_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->hair_cutting_time ?? '' }}"
                                                                    name="hair_cutting_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->hair_cutting_time_secondary ?? '' }}"
                                                                    name="hair_cutting_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$wonWork->shave ?? ''" name="shave"
                                                            label="সেভ করা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $wonWork->shave_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $wonWork->shave_time ?? '' }}"
                                                                    name="shave_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $wonWork->shave_time_secondary ?? '' }}"
                                                                    name="shave_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="lunch">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$lunchTime->give_plate_glass_on_the_table_will_help ??
                                                            ''"
                                                            name="give_plate_glass_on_the_table_will_help"
                                                            label="টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $lunchTime->give_plate_glass_on_the_table_will_help_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->give_plate_glass_on_the_table_will_help_time ?? '' }}"
                                                                    name="give_plate_glass_on_the_table_will_help_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->give_plate_glass_on_the_table_will_help_time_secondary ?? '' }}"
                                                                    name="give_plate_glass_on_the_table_will_help_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$lunchTime->give_water_in_glass ?? ''"
                                                            name="give_water_in_glass" label="গ্লাসে পানি দিবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $lunchTime->give_water_in_glass_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->give_water_in_glass_time ?? '' }}"
                                                                    name="give_water_in_glass_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->give_water_in_glass_time_secondary ?? '' }}"
                                                                    name="give_water_in_glass_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$lunchTime->bring_food_from_the_kitchen_to_the_table ??
                                                            ''"
                                                            name="bring_food_from_the_kitchen_to_the_table"
                                                            label="রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $lunchTime->bring_food_from_the_kitchen_to_the_table_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->bring_food_from_the_kitchen_to_the_table_time ?? '' }}"
                                                                    name="bring_food_from_the_kitchen_to_the_table_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->bring_food_from_the_kitchen_to_the_table_time_secondary ?? '' }}"
                                                                    name="bring_food_from_the_kitchen_to_the_table_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$lunchTime->sit_on_the_table_or_mat_and_eat_with_everyone ??
                                                            ''"
                                                            name="sit_on_the_table_or_mat_and_eat_with_everyone"
                                                            label="টেবিলে / মাদুরে বসে সবার সাথে খাবে" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $lunchTime->sit_on_the_table_or_mat_and_eat_with_everyone_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->sit_on_the_table_or_mat_and_eat_with_everyone_time ?? '' }}"
                                                                    name="sit_on_the_table_or_mat_and_eat_with_everyone_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->sit_on_the_table_or_mat_and_eat_with_everyone_time_secondary ?? '' }}"
                                                                    name="sit_on_the_table_or_mat_and_eat_with_everyone_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$lunchTime->eat_with_your_own_hands_or_spoon ?? ''"
                                                            name="eat_with_your_own_hands_or_spoon"
                                                            label="নিজের হাতে / চামচ দিয়ে খাবে" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $lunchTime->eat_with_your_own_hands_or_spoon_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->eat_with_your_own_hands_or_spoon_time ?? '' }}"
                                                                    name="eat_with_your_own_hands_or_spoon_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->eat_with_your_own_hands_or_spoon_time_secondary ?? '' }}"
                                                                    name="eat_with_your_own_hands_or_spoon_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$lunchTime->table_or_mat_will_help_clean ?? ''"
                                                            name="table_or_mat_will_help_clean"
                                                            label="টেবিল / মাদুর পরিস্কার / সহযোগিতা করবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $lunchTime->table_or_mat_will_help_clean_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->table_or_mat_will_help_clean_time ?? '' }}"
                                                                    name="table_or_mat_will_help_clean_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $lunchTime->table_or_mat_will_help_clean_time_secondary ?? '' }}"
                                                                    name="table_or_mat_will_help_clean_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Resttime">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$restTime->rest_in_bed ?? ''" name="rest_in_bed"
                                                            label="শুয়ে রেস্ট নেওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $restTime->rest_in_bed_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->rest_in_bed_time ?? '' }}"
                                                                    name="rest_in_bed_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->rest_in_bed_time_secondary ?? '' }}"
                                                                    name="rest_in_bed_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$restTime->reading_story_book ?? ''"
                                                            name="reading_story_book" label="গল্প বই পরা"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $restTime->reading_story_book_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->reading_story_book_time ?? '' }}"
                                                                    name="reading_story_book_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->reading_story_book_time_secondary ?? '' }}"
                                                                    name="reading_story_book_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$restTime->rest_time_listening_song ?? ''" name="listening_song"
                                                            label="গান শুনা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $restTime->rest_time_listening_song_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->rest_time_listening_song_time ?? '' }}"
                                                                    name="listening_song_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->rest_time_listening_song_time_secondary ?? '' }}"
                                                                    name="listening_song_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$restTime->playing_video_game ?? ''"
                                                            name="playing_video_game" label="ভিডিও গেমস খেলা"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $restTime->playing_video_game_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->playing_video_game_time ?? '' }}"
                                                                    name="playing_video_game_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $restTime->playing_video_game_time_secondary ?? '' }}"
                                                                    name="playing_video_game_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="afternoon">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$afternoon->going_for_walk ?? ''" name="going_for_walk"
                                                            label="বেড়াতে যাওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afternoon->going_for_walk_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->going_for_walk_time ?? '' }}"
                                                                    name="going_for_walk_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->going_for_walk_time_secondary ?? '' }}"
                                                                    name="going_for_walk_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$afternoon->water_in_tub ?? ''" name="water_in_tub"
                                                            label="ফুল গাছ / টবে পানি দেওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afternoon->water_in_tub_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->water_in_tub_time ?? '' }}"
                                                                    name="water_in_tub_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->water_in_tub_time_secondary ?? '' }}"
                                                                    name="water_in_tub_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$afternoon->going_to_play_in_roof_or_playground ??
                                                            ''"
                                                            name="going_to_play_in_roof_or_playground"
                                                            label="মাঠে বা ছাদে খেলতে যাওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afternoon->going_to_play_in_roof_or_playground_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->going_to_play_in_roof_or_playground_time ?? '' }}"
                                                                    name="going_to_play_in_roof_or_playground_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->going_to_play_in_roof_or_playground_time_secondary ?? '' }}"
                                                                    name="going_to_play_in_roof_or_playground_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$afternoon->play_favorite_game ?? ''"
                                                            name="play_favorite_game" label="পছন্দ অনুযায়ী খেলা"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afternoon->play_favorite_game_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->play_favorite_game_time ?? '' }}"
                                                                    name="play_favorite_game_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->play_favorite_game_time_secondary ?? '' }}"
                                                                    name="play_favorite_game_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>

                                                        <x-input-radio-or-check :checked="$afternoon->visiting_house_or_favorite_place_or_shopping ??
                                                            ''"
                                                            name="visiting_house_or_favorite_place_or_shopping"
                                                            label="শপিং / আত্মীয় স্বজনের বাসায় / প্রতিবেশীর বাসায় বা প্রিয় জায়গায় ঘুরতে যাওয়া"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afternoon->visiting_house_or_favorite_place_or_shopping_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->visiting_house_or_favorite_place_or_shopping_time ?? '' }}"
                                                                    name="visiting_house_or_favorite_place_or_shopping_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afternoon->visiting_house_or_favorite_place_or_shopping_time_secondary ?? '' }}"
                                                                    name="visiting_house_or_favorite_place_or_shopping_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="evening">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$evening->Make_sherbet_or_tea_or_snakes ?? ''"
                                                            name="Make_sherbet_or_tea_or_snakes"
                                                            label="নিজের নাস্তা / চা/ শরবত বানাবে এবং সার্ভ করবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $evening->Make_sherbet_or_tea_or_snakes_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $evening->Make_sherbet_or_tea_or_snakes_time ?? '' }}"
                                                                    name="Make_sherbet_or_tea_or_snakes_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $evening->Make_sherbet_or_tea_or_snakes_time_secondary ?? '' }}"
                                                                    name="Make_sherbet_or_tea_or_snakes_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$evening->guest_reception ?? ''" name="guest_reception"
                                                            label="অতিথি আপ্যায়ন" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $evening->guest_reception_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $evening->guest_reception_time ?? '' }}"
                                                                    name="guest_reception_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $evening->guest_reception_time_secondary ?? '' }}"
                                                                    name="guest_reception_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$evening->spending_time_with_brother_sister ?? ''"
                                                            name="spending_time_with_brother_sister"
                                                            label="ভাইবোনদের সাথে সময় কাটানো" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $evening->spending_time_with_brother_sister_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $evening->spending_time_with_brother_sister_time ?? '' }}"
                                                                    name="spending_time_with_brother_sister_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $evening->spending_time_with_brother_sister_time_secondary ?? '' }}"
                                                                    name="spending_time_with_brother_sister_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Constructivework">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$constructiveWork->reading_book_and_hand_writing ??
                                                            ''"
                                                            name="reading_book_and_hand_writing"
                                                            label="বই পরা ও হাতের লিখা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $constructiveWork->reading_book_and_hand_writing_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->reading_book_and_hand_writing_time ?? '' }}"
                                                                    name="reading_book_and_hand_writing_time">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->reading_book_and_hand_writing_time_secondary ?? '' }}"
                                                                    name="reading_book_and_hand_writing_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>

                                                        <x-input-radio-or-check :checked="$constructiveWork->constructive_game ?? ''"
                                                            name="constructive_game"
                                                            label="গঠনমূলক কোন খেলা ( পাজল, লেগো, শেফ সর্টিং)"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $constructiveWork->constructive_game_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->constructive_game_time ?? '' }}"
                                                                    name="constructive_game_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->constructive_game_time_secondary ?? '' }}"
                                                                    name="constructive_game_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$constructiveWork->constructive_work_computer_practice ?? ''"
                                                            name="computer_practice"
                                                            label="কম্পিউটারে কাজের প্র্যাকটিস করবে" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $constructiveWork->constructive_work_computer_practice_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->constructive_work_computer_practice_time ?? '' }}"
                                                                    name="computer_practice_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->constructive_work_computer_practice_time_secondary ?? '' }}"
                                                                    name="computer_practice_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$constructiveWork->home_work ?? ''" name="home_work"
                                                            label="হোম ওয়ার্ক করা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $constructiveWork->home_work_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->home_work_time ?? '' }}"
                                                                    name="home_work_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->home_work_time_secondary ?? '' }}"
                                                                    name="home_work_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>

                                                        <x-input-radio-or-check :checked="$constructiveWork->packing_the_bag_for_the_next_day ??
                                                            ''"
                                                            name="packing_the_bag_for_the_next_day"
                                                            label="পরের দিনের কাজের জন্য ব্যাগ গুছানো" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $constructiveWork->packing_the_bag_for_the_next_day_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->packing_the_bag_for_the_next_day_time ?? '' }}"
                                                                    name="packing_the_bag_for_the_next_day_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->packing_the_bag_for_the_next_day_time_secondary ?? '' }}"
                                                                    name="packing_the_bag_for_the_next_day_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>

                                                        <x-input-radio-or-check :checked="$constructiveWork->watching_tv ?? ''" name="watching_tv"
                                                            label="টিভি দেখা (সবার সাথে)" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $constructiveWork->watching_tv_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->watching_tv_time ?? '' }}"
                                                                    name="watching_tv_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->watching_tv_time_secondary ?? '' }}"
                                                                    name="watching_tv_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>

                                                        <x-input-radio-or-check :checked="$constructiveWork->dairy_writing ?? ''" name="dairy_writing"
                                                            label="ডায়েরি লেখা" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $constructiveWork->dairy_writing_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->dairy_writing_time ?? '' }}"
                                                                    name="dairy_writing_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $constructiveWork->dairy_writing_time_secondary ?? '' }}"
                                                                    name="dairy_writing_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="dinner">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$dinner->night_give_plate_glass_on_the_table_will_help ??
                                                            ''"
                                                            name="night_give_plate_glass_on_the_table_will_help"
                                                            label="টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dinner->night_give_plate_glass_on_the_table_will_help_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_give_plate_glass_on_the_table_will_help_time ?? '' }}"
                                                                    name="night_give_plate_glass_on_the_table_will_help_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_give_plate_glass_on_the_table_will_help_time_secondary ?? '' }}"
                                                                    name="night_give_plate_glass_on_the_table_will_help_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$dinner->night_Give_water_in_glass ?? ''"
                                                            name="night_Give_water_in_glass" label="গ্লাসে পানি দিবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dinner->night_Give_water_in_glass_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_Give_water_in_glass_time ?? '' }}"
                                                                    name="night_Give_water_in_glass_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_Give_water_in_glass_time_secondary ?? '' }}"
                                                                    name="night_Give_water_in_glass_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$dinner->night_bring_food_from_the_kitchen_to_the_table ??
                                                            ''"
                                                            name="night_bring_food_from_the_kitchen_to_the_table"
                                                            label="রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dinner->night_bring_food_from_the_kitchen_to_the_table_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_bring_food_from_the_kitchen_to_the_table_time ?? '' }}"
                                                                    name="night_bring_food_from_the_kitchen_to_the_table_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_bring_food_from_the_kitchen_to_the_table_time_secondary ?? '' }}"
                                                                    name="night_bring_food_from_the_kitchen_to_the_table_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$dinner->night_sit_on_table_or_mat_and_eat_with_everyone ??
                                                            ''"
                                                            name="night_sit_on_table_or_mat_and_eat_with_everyone"
                                                            label="খাওয়ার আগে ও পরে সাবান দিয়ে হাত ধোয়া"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dinner->night_sit_on_table_or_mat_and_eat_with_everyone_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_sit_on_table_or_mat_and_eat_with_everyone_time ?? '' }}"
                                                                    name="night_sit_on_table_or_mat_and_eat_with_everyone_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_sit_on_table_or_mat_and_eat_with_everyone_time_secondary ?? '' }}"
                                                                    name="night_sit_on_table_or_mat_and_eat_with_everyone_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$dinner->night_sit_on_table_or_mat_and_eat_with_everyone ??
                                                            ''"
                                                            name="night_sit_on_the_table_or_mat_and_eat_with_everyone"
                                                            label="টেবিলে বসে সবার সাথে খাবে" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dinner->night_sit_on_table_or_mat_and_eat_with_everyone_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_sit_on_table_or_mat_and_eat_with_everyone_time ?? '' }}"
                                                                    name="night_sit_on_the_table_or_mat_and_eat_with_everyone_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_sit_on_table_or_mat_and_eat_with_everyone_time_secondary ?? '' }}"
                                                                    name="night_sit_on_the_table_or_mat_and_eat_with_everyone_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$dinner->night_eat_with_your ??
                                                            ''"
                                                            name="night_eat_with_your"
                                                            label="নিজের হাতে / চামচ দিয়ে খাবে" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $dinner->night_eat_with_your_own_hands_or_spoon_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_eat_with_your_own_hands_or_spoon_time ?? '' }}"
                                                                    name="night_eat_with_your_own_hands_or_spoon_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $dinner->night_eat_with_your_own_hands_or_spoon_time_secondary ?? '' }}"
                                                                    name="night_eat_with_your_own_hands_or_spoon_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="afterdinner">
                                                    <section>
                                                        <x-input-radio-or-check :checked="$afterDinner->night_eating_medicine ?? ''"
                                                            name="night_eating_medicine"
                                                            label="ঔষদ খাওয়া/ খাওয়ানো (যখন প্রয়োজন)" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afterDinner->night_eating_medicine_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->night_eating_medicine_time ?? '' }}"
                                                                    name="night_eating_medicine_time">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <!-- input-group -->
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->night_eating_medicine_time_secondary ?? '' }}"
                                                                    name="night_eating_medicine_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                        </div>
                                                        <!-- input-group -->


                                                        <x-input-radio-or-check :checked="$afterDinner->night_teeth_brash ?? ''"
                                                            name="night_teeth_brash" label="দাঁত ব্রাশ করবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afterDinner->night_teeth_brash_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->night_teeth_brash_time ?? '' }}"
                                                                    name="night_teeth_brash_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->night_teeth_brash_time_secondary ?? '' }}"
                                                                    name="night_teeth_brash_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$afterDinner->night_changing_cloth ?? ''"
                                                            name="night_changing_cloth"
                                                            label="ড্রেস চেঞ্জ করবে/ রাতে শোবার ড্রেস পরবে"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afterDinner->night_changing_cloth_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->night_changing_cloth_time ?? '' }}"
                                                                    name="night_changing_cloth_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->night_changing_cloth_time_secondary ?? '' }}"
                                                                    name="night_changing_cloth_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$afterDinner->put_to_bed ?? ''" name="put_to_bed"
                                                            label="বিছানা করা/ করে দেওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afterDinner->put_to_bed_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->put_to_bed_time ?? '' }}"
                                                                    name="put_to_bed_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->put_to_bed_time_secondary ?? '' }}"
                                                                    name="put_to_bed_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <x-input-radio-or-check :checked="$afterDinner->hanging_mosquito_nets ?? ''"
                                                            name="hanging_mosquito_nets" label="মশারি খাটানো/টাঙ্গানো"
                                                            :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afterDinner->hanging_mosquito_nets_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>

                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->hanging_mosquito_nets_time ?? '' }}"
                                                                    name="hanging_mosquito_nets_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->hanging_mosquito_nets_time_secondary ?? '' }}"
                                                                    name="hanging_mosquito_nets_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>

                                                        <x-input-radio-or-check :checked="$afterDinner->turn_off_the_lights_and_go_to_bed ??
                                                            ''"
                                                            name="turn_off_the_lights_and_go_to_bed"
                                                            label="লাইট বন্ধ করে শুতে যাওয়া" :records="$tripReportConstants::$help"
                                                            secondaryInputValue="{{ $afterDinner->turn_off_the_lights_and_go_to_bed_secondary ?? '' }}"
                                                            secondaryInputLabel="সাজেশন">
                                                        </x-input-radio-or-check>


                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সময়</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->turn_off_the_lights_and_go_to_bed_time ?? '' }}"
                                                                    name="turn_off_the_lights_and_go_to_bed_time">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">বিস্তারিত
                                                                লিখুন</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text
                                                                    value="{{ $afterDinner->turn_off_the_lights_and_go_to_bed_time_secondary ?? '' }}"
                                                                    name="turn_off_the_lights_and_go_to_bed_time_secondary">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="Signature">
                                                    <section>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Special Educator
                                                                Team</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text  value="{{ $signature->special_educator_team ?? '' }}"
                                                                    name="special_educator_team" type="file">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Special Educator
                                                                Team Name</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $signature->special_educator_team_name ?? '' }}"
                                                                    name="special_educator_team_name">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Guardian</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $signature->guardian_img ?? '' }}"
                                                                    name="guardian_img" type="file">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Guardian
                                                                Name</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $signature->guardian_name ?? '' }}" name="guardian_name">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">Note, If
                                                                any</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $signature->note_if_any ?? '' }}" name="note_if_any">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="tab-pane" id="TripEvaluationSignature">
                                                    <section>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">স্বাক্ষর-
                                                                টিচার</label>
                                                            <x-input-text value="{{ $tripEvaluationSignature->signature_teacher ?? '' }}" name="signature_teacher"
                                                                type="file">
                                                            </x-input-text>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">নাম এবং
                                                                পদবী</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $tripEvaluationSignature->signature_teacher_name_or_designation ?? '' }}"
                                                                    name="signature_teacher_name_or_designation">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">সুপারভাইজার
                                                                এর স্বাক্ষর</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $tripEvaluationSignature->supervisor_signature ?? '' }}" name="supervisor_signature"
                                                                    type="file">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input">নাম এবং
                                                                পদবী</label>
                                                            <div class="input-group" id="datepicker2">
                                                                <x-input-text value="{{ $tripEvaluationSignature->supervisor_signature_name_or_designation ?? '' }}"
                                                                    name="supervisor_signature_name_or_designation">
                                                                </x-input-text>
                                                            </div>
                                                            <!-- input-group -->
                                                        </div>
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
                                                        <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                            value='Finish' />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </form>
                        </div>
                    </div> <!-- end col -->
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <!-- Custom step -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') ?? '' }}"></script>
@endsection
