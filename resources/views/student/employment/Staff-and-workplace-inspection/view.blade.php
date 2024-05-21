@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
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
                                                                data-toggle="tab">কর্মী ও কর্মস্থল পরিদর্শন টুল</a></li>
                                                        <li class="w-100"><a href="#Pragmatic_Objective"
                                                                data-toggle="tab">Common</a>
                                                        </li>
                                                        <li class="w-100"><a href="#Outing" data-toggle="tab">Check
                                                                List</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-md-9">
                                                <form>
                                                    <div class="tab-content apply-view-only">
                                                        <div class="tab-pane" id="Social_Communication">
                                                            <section>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <x-input-text
                                                                                    value="{{ $record->collection_date }}"
                                                                                    name="collection_date" type="date"
                                                                                    placeholder="mm/dd/yyyy"
                                                                                    value="{{ $record->collection_date }}" />
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="teacher_id"
                                                                                :records="$teachers" :selected="$record->teacher_id" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Pragmatic_Objective">
                                                            <section>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>পরিদর্শনকৃত স্থান / প্রতিষ্ঠান(ঠিকানা)</h5>
                                                                            <h5 class="mt-2">শিক্ষক এর মন্তব্য
                                                                            </h5>
                                                                            <x-input-text
                                                                                value="{{ $record->visited_place }}"
                                                                                name="visited_place">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5>পরিদর্শনকারীর নাম ও পদবী</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->name_surname }}"
                                                                                name="name_surname">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">কর্মীর কর্মস্থলে
                                                                                যোগদানের তারিখ</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->date_of_joining_the_employee_workplace }}"
                                                                                name="date_of_joining_the_employee_workplace">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">কর্মীর মাসিক বেতন
                                                                            </h5>
                                                                            <x-input-text
                                                                                value="{{ $record->monthly_salary }}"
                                                                                name="monthly_salary">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">কর্মীর সাপ্তাহিক ছুটি
                                                                                সম্পর্কে তথ্য</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->information_about }}"
                                                                                name="information_about">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">লক্ষিত কর্মীকে দিনে
                                                                                কত ঘণ্টা কাজ করতে হয় ? সময়
                                                                                উল্লেখ করুন</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->how_many_hours_a_day }}"
                                                                                name="how_many_hours_a_day">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">লক্ষিত কর্মীর পদবী কি
                                                                                বা সে এ প্রতিষ্ঠানে কি কি
                                                                                দায়িত্ব পালন
                                                                                করে ?</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->what_is_the_title_of }}"
                                                                                name="what_is_the_title_of">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="Outing">
                                                            <section>
                                                                <x-input-radio-or-check :checked="$record->this_work_hour_is_correct"
                                                                    name="this_work_hour_is_correct"
                                                                    label="এ কর্ম ঘণ্টা কী তার সক্ষমতার প্রেক্ষিতে সঠিক ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace" />
                                                                <x-input-radio-or-check
                                                                    :checked="$record->does_the_target_employee" name="does_the_target_employee"
                                                                    label="লক্ষিত কর্মীর কি ডিউটির জন্য নির্ধারিত পোশাক আছে?"
                                                                    :records="$staffAndWork::$staffAndWorkplace" />
                                                                <x-input-radio-or-check
                                                                    :checked="$record->is_the_target_worker_wearing" name="is_the_target_worker_wearing"
                                                                    label="লক্ষিত কর্মী কি ডিউটির সময় নির্ধারিত পোশাক পরিধান করে আছে ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace"  />
                                                                
                                                                <x-input-radio-or-check :checked="$record->is_the_target_staff_clean_enough"
                                                                    name="is_the_target_staff_clean_enough"
                                                                    label="লক্ষিত কর্মী কি যথেষ্ট পরিস্কার-পরিচ্ছন্ন ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace" />
                                                                <x-input-radio-or-check :checked="$record->is_the_target_worker_getting_appropriate"
                                                                    name="is_the_target_worker_getting_appropriate"
                                                                    label="লক্ষিত কর্মী কি উপযুক্ত / প্রত্যাশিত বেতন-ভাতা বা মজুরী পাচ্ছে"
                                                                    :records="$staffAndWork::$staffAndWorkplace" />
                                                                <x-input-radio-or-check :checked="$record->is_there_regular_communication_between" 
                                                                    name="is_there_regular_communication_between"
                                                                    label="লক্ষিত কর্মী ও নিয়োগকারী কর্তৃপক্ষের মাঝে কি নিয়মিত যোগাযোগ হয়?"
                                                                    :records="$staffAndWork::$staffAndWorkplace" />
                                                                <x-input-radio-or-check :checked="$record->how_to_communicate_with_colleagues_in_the_workplace"
                                                                    name="how_to_communicate_with_colleagues_in_the_workplace"
                                                                    label="লক্ষিত কর্মীর প্রতি কর্মস্থলের সহকর্মীদের কথাবার্তা/মন্তব্য/আচরণ কেমন ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace" />
                                                                <x-input-radio-or-check
                                                                    :checked="$record->what_is_the_overall" name="what_is_the_overall"
                                                                    label="কর্মস্থলে মোটের উপর কাজের পরিবেশ কেমন ?"
                                                                    :records="$staffAndWork::$staffAndWorkplace" />
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">বিস্তারিত লিখুন</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->details }}"
                                                                                name="details"></x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">মন্তব্য / সুপারিশ
                                                                                t(প্রয়োজনে অতিরিক্ত পাতা ব্যবহার
                                                                                করুন)</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->recommend_comments }}"
                                                                                name="recommend_comments">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">সাজেশন</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->suggesstion }}"
                                                                                name="suggesstion">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">পরিদর্শনকারীর
                                                                                স্বাক্ষর ও তারিখ</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->signature_and_date_of_visitor }}"
                                                                                type="file"
                                                                                name="signature_and_date_of_visitor">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">নাম এবং পদবী</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->designation }}"
                                                                                type="file" name="designation">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row border-top py-2">
                                                                    <div class="col-xl-12 col-sm-12">
                                                                        <div class="m-0">
                                                                            <h5 class="mb-4">তারিখ</h5>
                                                                            <x-input-text
                                                                                value="{{ $record->date_two }}"
                                                                                type="date" name="date_two">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
@endsection
