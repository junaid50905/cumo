@extends('layouts.master')
@section('title', 'TRIP')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
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
                                <form action="{{route('trip.store')}}" method="POST">
                                    @csrf
                                    <!-- Wizard container -->
                                    <div class="wizard-container">
                                        <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                            <div class="col-sm-3 col-md-3">
                                                <div id="wizard-navigation">
                                                    <ul class="wizard-navigation">
                                                        <li class="w-100"><a href="#trip"
                                                                data-toggle="tab">Trip</a></li>
                                                        <li class="w-100"><a href="#ActivitiesofDailyLiving"
                                                                data-toggle="tab">Activities of Daily Living (ADLs)
                                                                দৈনন্দিন
                                                                কার্যাবলী</a></li>
                                                        <li class="w-100"><a href="#justForstaff" data-toggle="tab">শুধু
                                                                স্টাফ এর জন্য প্রযোজ্য</a></li>
                                                        <li class="w-100"><a href="#HomeAssessmentWorksheet"
                                                                data-toggle="tab">বাড়ীর এসেসমেন্ট ওয়ার্কসিট >
                                                                কার্যক্রম</a></li>
                                                        <li class="w-100"><a href="#securityandsafety"
                                                                data-toggle="tab">
                                                                বাড়ীর আসেসমেন্টের ওয়ার্কসিট > নিরাপত্তা এবং সুরক্ষা</a>
                                                        </li>
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
                                                                data-toggle="tab">Instrumental Activities of Daily
                                                                Living
                                                                (IADLs)</a></li>
                                                        <li class="w-100"><a href="#Neighbor"
                                                                data-toggle="tab">Environmental Safety > প্রতিবেশি</a>
                                                        </li>
                                                        <li class="w-100"><a href="#steps"
                                                                data-toggle="tab">Environmental
                                                                Safety > সিঁড়ি</a></li>
                                                        <li class="w-100"><a href="#wokeUpmorning"
                                                                data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন
                                                                >
                                                                সকালে ঘুম থেকে উঠে</a></li>
                                                        <li class="w-100"><a href="#readingWriting"
                                                                data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন
                                                                >
                                                                লিখাপড়া</a></li>
                                                        <li class="w-100"><a href="#dailyWork"
                                                                data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন
                                                                >
                                                                দৈনন্দিন কাজ</a></li>
                                                        <li class="w-100"><a href="#wonWork"
                                                                data-toggle="tab">শিক্ষার্থীদের
                                                                দৈনন্দিন রুটিনের সাজেশন > নিজের কাজ</a></li>
                                                        <li class="w-100"><a href="#lunch"
                                                                data-toggle="tab">শিক্ষার্থীদের
                                                                দৈনন্দিন রুটিনের সাজেশন > দুপুরের খাবারের সময়</a></li>
                                                        <li class="w-100"><a href="#Resttime"
                                                                data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন
                                                                >
                                                                রেস্ট টাইম</a></li>
                                                        <li class="w-100"><a href="#afternoon"
                                                                data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন
                                                                >
                                                                বিকেলে</a></li>
                                                        <li class="w-100"><a href="#evening"
                                                                data-toggle="tab">শিক্ষার্থীদের
                                                                দৈনন্দিন রুটিনের সাজেশন > সন্ধ্যা</a></li>
                                                        <li class="w-100"><a href="#Constructivework" data-toggle="tab">
                                                                শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন > গঠনমূলক কাজ</a>
                                                        </li>
                                                        <li class="w-100"><a href="#dinner"
                                                                data-toggle="tab">শিক্ষার্থীদের
                                                                দৈনন্দিন রুটিনের সাজেশন > রাতের খাবার</a>
                                                        </li>
                                                        <li class="w-100"><a href="#afterdinner"
                                                                data-toggle="tab">শিক্ষার্থীদের দৈনন্দিন রুটিনের সাজেশন
                                                                >
                                                                রাতে শোবার আগে</a></li>
                                                        <li class="w-100"><a href="#Signature"
                                                                data-toggle="tab">Signature</a></li>
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
                                                                        <label
                                                                            for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <div class="input-group" id="datepicker2">
                                                                            <x-input-text name="collection_date"
                                                                                type="date" placeholder="mm/dd/yyyy" />
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select name="teacher_id"
                                                                            :records="$teachers" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="ActivitiesofDailyLiving">
                                                        <section>
                                                            <x-input-radio-or-check name="bath" label="গোসল"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="wearing_cloth"
                                                                label="কাপড় পরা" :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="wrooming" label="গ্রুমিং"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="do_toilet" label="টয়লেট করা"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="eating_healthy_food"
                                                                label="পুষ্টিকর খাদ্য খাওয়া"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="wakeup_from_bed"
                                                                label="বিছানা থেকে ওঠা"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="get_up_from_the_chair"
                                                                label="চেয়ার থেকে ওঠা"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="walk" label="হাটা"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="justForstaff">
                                                        <section>
                                                            <div class="mb-3">
                                                                <label
                                                                    for="basicpill-firstname-input">Instruction:</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <p>ট্রিপ পরিকল্পনা ও ট্রিপ সম্বন্ধে আপনার অভিজ্ঞতা
                                                                        লিখুন ও রেট করুনঃ</p>
                                                                </div><!-- input-group -->

                                                                <x-input-radio-or-check
                                                                    name="taking_trip_materials_and_preparation"
                                                                    label="ট্রিপ উপকরণ ও প্রস্তুতি গ্রহণ"
                                                                    :records="$tripReportConstants::$observation"
                                                                    secondaryInputLabel="মতামত">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}
                                                                {{-- end row --}}
                                                                <x-input-radio-or-check
                                                                    name="whether_the_trainee_has_been_contacted"
                                                                    label="প্রশিক্ষণার্থীর সাথে যোগাযোগ করা হয়েছে কিনা"
                                                                    :records="$tripReportConstants::$observation"
                                                                    secondaryInputLabel="মতামত">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}
                                                                {{-- end row --}}
                                                                <x-input-radio-or-check
                                                                    name="communicate_with_other_members_of_the_team"
                                                                    label="দলের অন্য সদস্যদের সঙ্গে যোগাযোগ"
                                                                    :records="$tripReportConstants::$observation"
                                                                    secondaryInputLabel="মতামত">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <x-input-radio-or-check name="where_visits"
                                                                    label="ট্যুর বা ভিজিট কোথায়"
                                                                    :records="$tripReportConstants::$observation"
                                                                    secondaryInputLabel="মতামত">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <x-input-radio-or-check
                                                                    name="who_were_driving_cars_or_other_assistants"
                                                                    label="গাড়ি ড্রাইভিং বা অন্যান্য সহায়তাকারি যারা ছিলেন"
                                                                    :records="$tripReportConstants::$observation"
                                                                    secondaryInputLabel="মতামত">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <x-input-radio-or-check name="overall_tour_like"
                                                                    label="অভারঅল / সার্বিক ট্যুর বা সফর কেমন ছিল"
                                                                    :records="$tripReportConstants::$observation"
                                                                    secondaryInputLabel="সাজেশন">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <x-input-radio-or-check name="this_trip"
                                                                    label="এই ট্রিপ"
                                                                    :records="$tripReportConstants::$expectation "
                                                                    secondaryInputLabel="বিস্তারিত লিখুন">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <x-input-radio-or-check
                                                                    name="tour_presented_and_managed_professionally"
                                                                    label="পেশাদারী ভাবে ট্রিপ বা সফর উপস্থাপন ও পরিচালনা করা হয়েছিল কিনা?"
                                                                    :records="$constants::$yesNo"
                                                                    secondaryInputLabel="সাজেশনবিস্তারিত লিখুন">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <x-input-radio-or-check
                                                                    name="teacher_went_alone_or_in_the_team"
                                                                    label="টিচার একা গিয়েছিলেন নাকি দলে?"
                                                                    :records="$tripReportConstants::$situation"
                                                                    secondaryInputLabel="দলের তৈরির কথা কেন বিবেচনা করা হয়েছে?">
                                                                </x-input-radio-or-check>
                                                                {{-- end row --}}

                                                                <div class="mb-3">
                                                                    <label for="basicpill-firstname-input">ট্রিপ টির
                                                                        ব্যাপারে আপনার ধারনা, মতামত বা কেমন
                                                                        বোধ করছিলেন? ট্রিপের সাফল্যের জন্য আপনি কি
                                                                        সাজেশন দিবেন?</label>
                                                                    <div class="input-group" id="datepicker2">
                                                                        <x-input-text name="trip_description">
                                                                        </x-input-text>
                                                                    </div><!-- input-group -->
                                                                </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="HomeAssessmentWorksheet">
                                                        <section>
                                                            <x-input-radio-or-check name="home_environment"
                                                                label="বাসার পরিবেশ" :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="do_need_separate_room"
                                                                label="শিক্ষার্থীর জন্য আলাদা রুম"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="separate_bed"
                                                                label="আলাদা বিছানা" :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="for_cloth_separate_elmira"
                                                                label="জামাকাপড় জন্য আলাদা আলমারি"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check
                                                                name="separate_place_for_change_cloth"
                                                                label="জামাকাপড় পরিবর্তনের আলাদা জায়গা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="attach_bathroom"
                                                                label="সংযুক্ত বাথরুম" :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="attach_balcony"
                                                                label="সংযুক্ত ব্যালকনি / বারান্দা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="separate_reading_environment"
                                                                label="আলাদা স্টাডি টেবিল, চেয়ার এবং বইয়ের তাক"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="securityandsafety">
                                                        <section>
                                                            <x-input-radio-or-check name="large_lock_on_the_outer_door"
                                                                label="বাইরের দরজায় বড় লক / তালা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="front_door_leaks"
                                                                label="সামনের দরজা দরজার ফুটো/পিহোল"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="lock_windows"
                                                                label="উইন্ডো বার/গ্রিল বা তালা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="alarm_system"
                                                                label="স্মোক এলার্ম ইনস্টল বা জরুরী ক্ষেত্রে অন্য কোন এলার্ম সিস্টেম"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="walk_or_other_obstacles"
                                                                label="প্যাসেজ ওয়ে বা হাটার জায়গায় তার বা অন্য কোন বাধা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">ছাত্রের যদি
                                                                    আলাদা রুম না থাকে তবে বিকল্প
                                                                    সমাধানঃ</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="for_room_alternative_solution">
                                                                    </x-input-text>
                                                                </div><!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Equipment">
                                                        <section>
                                                            <x-input-radio-or-check name="using_bed_or_chair_are_easy"
                                                                label="বিছানা এবং চেয়ার ব্যবহার করা সহজ"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="correct_height_chair"
                                                                label="টেবিলের সঠিক উচ্চতা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="up_down_form_bed_easy"
                                                                label="সহজে বিছানায় নামা ও উঠা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="light">
                                                        <section>
                                                            <x-input-radio-or-check name="easily_lights_on_and_off"
                                                                label="সহজে লাইটের সুইচ অন অফ করা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="enough_light_study_area"
                                                                label="পড়াশোনার জায়গায় যথেষ্ট আলো"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="night_lights_passage_way"
                                                                label="প্যাসেজ ওয়েতে রাতে জালিয়ে রাখার লাইট আছে"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="kitchen">
                                                        <section>
                                                            <x-input-radio-or-check name="tap_the_basin_within_reach"
                                                                label="নাগালের মধ্যে বেসিনে ট্যাপ / হ্যান্ডল"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="plate_rack_within_reach"
                                                                label="নাগালের মধ্যে প্লেট র‍্যাক"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="items_are_within_reach"
                                                                label="প্রায়ই ব্যবহৃত আইটেম গুলি হাতের নাগালে"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="cooking_items_within_reach"
                                                                label="রান্নার ব্যবহৃত আইটেম গুলি হাতের নাগালের মধ্যে"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="store_is_easily_accessible"
                                                                label="স্টোরে সহজে যাওয়া যায়"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="refrigerator_within_reach"
                                                                label="নাগালের মধ্যে ফ্রিজ আছে কিনা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="something_on_stove"
                                                                label="চুলার উপরে কোন কিছু আছে কিনা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="enough_light"
                                                                label="পর্যাপ্ত আলো" :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="bathroom">
                                                        <section>
                                                            <x-input-radio-or-check name="stand_for_support_in_bathroom"
                                                                label="টয়লেট, শাওয়ার বা বাথটাব এর পাশে ধরার মত স্ট্যান্ড আছে"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="slippery_insulated_bathroom"
                                                                label="পিছল-নিরোধী বাথরুম" :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="hand_shower_for_bath"
                                                                label="টয়লেটে এবং গোছলের জন্য হ্যান্ড শাওয়ার আছে"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check
                                                                name="soap_shampoo_brach_within_rich"
                                                                label="সাবান, শ্যাম্পু, ব্রাশ নাগালের মধ্যে"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="floor">
                                                        <section>
                                                            <x-input-radio-or-check name="slippery_insulated_floor"
                                                                label="পিছল-নিরোধী মেঝে" :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check
                                                                name="whether_there_is_any_looseness_in_anger_or_papos"
                                                                label="রাগ বা পাপোশে কোন আলগা ঝুল আছে কিনা"
                                                                :records="$constants::$yesNo"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="InstrumentalActivitiesofDailyLiving">
                                                        <section>
                                                            <x-input-radio-or-check name="telephone_uses_or_video_call"
                                                                label="টেলিফোন ব্যবহার/ ভিডিও কল"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="money_manage_or_uses"
                                                                label="টাকা ম্যানেজ করা /টাকার ব্যবহার"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check
                                                                name="personal_or_favorite_things_buy"
                                                                label="ব্যক্তিগত জিনিসপত্র কেনাকাটা/পছন্দের জিনিস কেনাকাটা"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="transportation_uses"
                                                                label="পরিবহন ব্যবহার করা"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check
                                                                name="doing_laundry_or_separate_dirty_cloth_or_dying"
                                                                label="লন্ড্রির কাজ করা / নোংরা কাপড় আলাদা করা / কাপড় শুকানোর হ্যাঙ্গারে ছোট কাপড় ঝুলানো"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="cloth_fold_and_put_in_drawer"
                                                                label="কাপড় ভাজ করা / ভাঁজ করা কাপড় ড্রয়ারে গুছিয়ে রাখবে।"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check
                                                                name="working_at_home_or_toy_or_playground_clean_up"
                                                                label="ঘরের হালকা কাজ করা / নিজের খেলনা ও খেলার জায়গা গুছানো"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="cooking_food_or_eat_himself"
                                                                label="খাবার প্রস্তুত করা/ নিজ হাতে খাবার খাওয়া"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check
                                                                name="cutting_vegetable_or_arrange_separately"
                                                                label="সবজি কাটা / সবজির ধরন অনুযায়ি আলাদা করে গুছিয়ে রাখা"
                                                                :records="$tripReportConstants::$do"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Neighbor">
                                                        <section>
                                                            <x-input-radio-or-check name="security" label="নিরাপত্তা"
                                                                :records="$tripReportConstants::$change"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="comfortable_arrangements"
                                                                label="স্বাচ্ছন্দ্যদায়ক ব্যবস্থা"
                                                                :records="$tripReportConstants::$change"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="close_friend_or_relative"
                                                                label="কাছাকাছি বন্ধু বা আত্মীয়দের অবস্থান"
                                                                :records="$tripReportConstants::$change"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="steps">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                name="free_from_noise_and_obstruction"
                                                                label="গোলমাল ও প্রতিবন্ধকতা মুক্ত"
                                                                :records="$tripReportConstants::$change"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="handles_on_both_sides_step"
                                                                label="সিডির দু দিকেই হাতলে যথেষ্ট আলকিত"
                                                                :records="$tripReportConstants::$change"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="clearly_marked"
                                                                label="স্পষ্টভাবে চিহ্ন দেয়া"
                                                                :records="$tripReportConstants::$change"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="other_if_any"
                                                                label="অন্যান্য (যদি থাকে)"
                                                                :records="$tripReportConstants::$change"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="enter_the_details">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="wokeUpmorning">
                                                        <section>
                                                            <x-input-radio-or-check name="wakeup_morning"
                                                                label="সকালে ঘুম থেকে উঠে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="wakeup_morning_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="wakeup_morning_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="bed_arrangement"
                                                                label="বিছানা গুছানো"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="bed_arrangement_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="bed_arrangement_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="teeth_brash"
                                                                label="দাঁত ব্রাশ"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="teeth_brash_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="teeth_brash_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="hand_face_washing"
                                                                label="হাত মুখ ধোওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hand_face_washing_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="hand_face_washing_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="changing_cloth"
                                                                label="কাপড় পালটানো"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="changing_cloth_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="changing_cloth_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="hair_combing"
                                                                label="চুল আঁচড়ানো"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hair_combing_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hair_combing_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check
                                                                name="snakes_cooking_eat_or_in_table"
                                                                label="নাস্তা তৈরি করবে ও খাবে/ টেবিলে নাস্তা খাবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="snakes_cooking_eat_or_in_table_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check
                                                                name="cleaning_pleat_or_glass_or_put_in_wash_place"
                                                                label="প্লেট গ্লাস ধুয়ে পরিস্কার করবে/ প্লেট নিয়ে সিংকে /ধোয়ার জায়গায় রাখবে।"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="cleaning_pleat_or_glass_or_put_in_wash_place_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="clean_up_table"
                                                                label="টেবিল পরিস্কার করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="clean_up_table_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="clean_up_table_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="readingWriting">
                                                        <section>
                                                            <x-input-radio-or-check name="reading" label="বই পড়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="reading_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="reading_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check name="hand_writing"
                                                                label="হাতের লিখা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hand_writing_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hand_writing_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check name="drawing_picture"
                                                                label="ছবি আঁকা /রঙ করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="drawing_picture_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="drawing_picture_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check name="reading_paper"
                                                                label="পেপার পড়া" :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন"></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="reading_paper_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="reading_paper_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="listening_song"
                                                                label="গান শোনা / গানের রেওয়াজ করা (গায়কদের ক্ষেত্রে)"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="listening_song_time">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="listening_song_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check name="computer_practice"
                                                                label="কম্পিউটারে (কাজের) প্রাকটিস করবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="computer_practice_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="computer_practice_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="dailyWork">
                                                        <section>
                                                            <x-input-radio-or-check name="list_for_marketing"
                                                                label="বাজারের লিস্ট করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="list_for_marketing_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="list_for_marketing_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check
                                                                name="marketing_with_mother_and_father"
                                                                label="বাবার / মায়ের সাথে বাজারে যাওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="marketing_with_mother_and_father_time">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="marketing_with_mother_and_father_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <x-input-radio-or-check
                                                                name="helping_mother_for_cutting_and_cooking_food"
                                                                label="মায়ের সাথে সবজি কাটা ও রান্নাতে সাহায্য করা / মায়ের সাথে সবজি আলাদা করতে সাহায্য করা/ সেদ্ধ আলু ,ডিম ছেলা/ডিম ফেটা, ডিম ভাঙ্গা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="helping_mother_for_cutting_and_cooking_food_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check
                                                                name="creating_menu_or_recognize_food_using_image"
                                                                label="খাবারের মেনু তৈরি করা / ছবি দেখে খাবার চিনতে পারা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="creating_menu_or_recognize_food_using_image_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="wonWork">
                                                        <section>
                                                            <x-input-radio-or-check name="washing_cloth_and_drying"
                                                                label="কাপড় ধোওয়া ও শুঁকাতে দেওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="washing_cloth_and_drying_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="washing_cloth_and_drying_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="clean_up_himself_room"
                                                                label="নিজের রুম পরিস্কার করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="clean_up_himself_room_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="clean_up_himself_room_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="folding_cloth"
                                                                label="কাপড় ভাজ করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="folding_cloth_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="folding_cloth_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check
                                                                name="tidy_wardrobe_or_cotton_drawer"
                                                                label="ওয়ার্ডরোব বা কাপরের ড্রয়ার গুছানো"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="tidy_wardrobe_or_cotton_drawer_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="iron_cloth"
                                                                label="কাপড় ইস্ত্রি করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="iron_cloth_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="iron_cloth_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="cutting_nails" label="নখ কাটা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="cutting_nails_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="cutting_nails_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="hair_cutting" label="চুল কাটা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hair_cutting_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hair_cutting_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="shave" label="সেভ করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="shave_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="shave_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="lunch">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                name="give_plate_glass_on_the_table_will_help"
                                                                label="টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="give_plate_glass_on_the_table_will_help_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="give_water_in_glass"
                                                                label="গ্লাসে পানি দিবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="give_water_in_glass_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="give_water_in_glass_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="bring_food_from_the_kitchen_to_the_table"
                                                                label="রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="bring_food_from_the_kitchen_to_the_table_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="sit_on_the_table_or_mat_and_eat_with_everyone"
                                                                label="টেবিলে / মাদুরে বসে সবার সাথে খাবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="sit_on_the_table_or_mat_and_eat_with_everyone_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="eat_with_your_own_hands_or_spoon"
                                                                label="নিজের হাতে / চামচ দিয়ে খাবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="eat_with_your_own_hands_or_spoon_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="table_or_mat_will_help_clean"
                                                                label="টেবিল / মাদুর পরিস্কার / সহযোগিতা করবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="table_or_mat_will_help_clean_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Resttime">
                                                        <section>
                                                            <x-input-radio-or-check name="rest_in_bed"
                                                                label="শুয়ে রেস্ট নেওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="rest_in_bed_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="rest_in_bed_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="reading_story_book"
                                                                label="গল্প বই পরা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="reading_story_book_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="reading_story_book_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="rest_time_listening_song"
                                                                label="গান শুনা" :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="rest_time_listening_song_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="rest_time_listening_song_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="playing_video_game"
                                                                label="ভিডিও গেমস খেলা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="playing_video_game_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="playing_video_game_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="afternoon">
                                                        <section>
                                                            <x-input-radio-or-check name="going_for_walk"
                                                                label="বেড়াতে যাওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="going_for_walk_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="going_for_walk_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="water_in_tub"
                                                                label="ফুল গাছ / টবে পানি দেওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="water_in_tub_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="water_in_tub_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="going_to_play_in_roof_or_playground"
                                                                label="মাঠে বা ছাদে খেলতে যাওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="going_to_play_in_roof_or_playground_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="play_favorite_game"
                                                                label="পছন্দ অনুযায়ী খেলা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="play_favorite_game_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="play_favorite_game_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="visiting_house_or_favorite_place_or_shopping"
                                                                label="শপিং / আত্মীয় স্বজনের বাসায় / প্রতিবেশীর বাসায় বা প্রিয় জায়গায় ঘুরতে যাওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="visiting_house_or_favorite_place_or_shopping_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="evening">
                                                        <section>
                                                            <x-input-radio-or-check name="Make_sherbet_or_tea_or_snakes"
                                                                label="নিজের নাস্তা / চা/ শরবত বানাবে এবং সার্ভ করবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="Make_sherbet_or_tea_or_snakes_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="guest_reception"
                                                                label="অতিথি আপ্যায়ন"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="guest_reception_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="guest_reception_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="spending_time_with_brother_sister"
                                                                label="ভাইবোনদের সাথে সময় কাটানো"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="spending_time_with_brother_sister_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Constructivework">
                                                        <section>
                                                            <x-input-radio-or-check name="reading_book_and_hand_writing"
                                                                label="বই পরা ও হাতের লিখা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="reading_book_and_hand_writing_time">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="reading_book_and_hand_writing_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>

                                                            <x-input-radio-or-check name="constructive_game"
                                                                label="গঠনমূলক কোন খেলা ( পাজল, লেগো, শেফ সর্টিং)"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="constructive_game_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="constructive_game_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="constructive_work_computer_practice"
                                                                label="কম্পিউটারে কাজের প্র্যাকটিস করবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="constructive_work_computer_practice_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="constructive_work_computer_practice_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="home_work"
                                                                label="হোম ওয়ার্ক করা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="home_work_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="home_work_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="packing_the_bag_for_the_next_day"
                                                                label="পরের দিনের কাজের জন্য ব্যাগ গুছানো"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="packing_the_bag_for_the_next_day_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>

                                                            <x-input-radio-or-check name="watching_tv"
                                                                label="টিভি দেখা (সবার সাথে)"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="watching_tv_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="watching_tv_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>

                                                            <x-input-radio-or-check name="dairy_writing"
                                                                label="ডায়েরি লেখা"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="dairy_writing_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="dairy_writing_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="dinner">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                name="night_give_plate_glass_on_the_table_will_help"
                                                                label="টেবিলে প্লেট গ্লাস দিবে / সহযোগিতা করবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="night_give_plate_glass_on_the_table_will_help_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check name="night_Give_water_in_glass"
                                                                label="গ্লাসে পানি দিবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="night_Give_water_in_glass_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="night_Give_water_in_glass_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="night_bring_food_from_the_kitchen_to_the_table"
                                                                label="রান্নাঘর থেকে টেবিলে খাবার নিয়ে আসবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="night_bring_food_from_the_kitchen_to_the_table_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="night_sit_on_table_or_mat_and_eat_with_everyone"
                                                                label="খাওয়ার আগে ও পরে সাবান দিয়ে হাত ধোয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="night_sit_on_table_or_mat_and_eat_with_everyone_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="night_sit_on_the_table_or_mat_and_eat_with_everyone"
                                                                label="টেবিলে বসে সবার সাথে খাবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="night_sit_on_the_table_or_mat_and_eat_with_everyone_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="night_eat_with_your"
                                                                label="নিজের হাতে / চামচ দিয়ে খাবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                        name="night_eat_with_your_own_hands_or_spoon_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="afterdinner">
                                                        <section>
                                                            <x-input-radio-or-check name="night_eating_medicine"
                                                                label="ঔষদ খাওয়া/ খাওয়ানো (যখন প্রয়োজন)"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="night_eating_medicine_time">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <!-- input-group -->
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="night_eating_medicine_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                            </div>
                                                            <!-- input-group -->


                                                            <x-input-radio-or-check name="night_teeth_brash"
                                                                label="দাঁত ব্রাশ করবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="night_teeth_brash_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="night_teeth_brash_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="night_changing_cloth"
                                                                label="ড্রেস চেঞ্জ করবে/ রাতে শোবার ড্রেস পরবে"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="night_changing_cloth_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="night_changing_cloth_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="put_to_bed"
                                                                label="বিছানা করা/ করে দেওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="put_to_bed_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="put_to_bed_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <x-input-radio-or-check name="hanging_mosquito_nets"
                                                                label="মশারি খাটানো/টাঙ্গানো"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="hanging_mosquito_nets_time">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">বিস্তারিত
                                                                    লিখুন</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="hanging_mosquito_nets_time_secondary">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>

                                                            <x-input-radio-or-check
                                                                name="turn_off_the_lights_and_go_to_bed"
                                                                label="লাইট বন্ধ করে শুতে যাওয়া"
                                                                :records="$tripReportConstants::$help"
                                                                secondaryInputLabel="সাজেশন">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সময়</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                                    <x-input-text name="special_educator_team"
                                                                        type="file">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Special Educator
                                                                    Team Name</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="special_educator_team_name">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Guardian</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="guardian_img"
                                                                        type="file">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Guardian
                                                                    Name</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="guardian_name">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Note, If
                                                                    any</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="note_if_any">
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
                                                                <x-input-text name="signature_teacher" type="file">
                                                                </x-input-text>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">নাম এবং
                                                                    পদবী</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
                                                                        name="signature_teacher_name_or_designation">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">সুপারভাইজার
                                                                    এর স্বাক্ষর</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text name="supervisor_signature"
                                                                        type="file">
                                                                    </x-input-text>
                                                                </div>
                                                                <!-- input-group -->
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">নাম এবং
                                                                    পদবী</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <x-input-text
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
                                                            <input type="submit"
                                                                class='btn btn-finish btn-fill btn-danger'
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
                    <div class="tab-pane" id="list" role="tabpanel">
                        <livewire:trip-report-list>
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
@endsection
