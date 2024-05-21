<div>
    @section('css')
    <link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
    @endsection
    <x-record-list :records="$records" title="STUDENT QAS" dataBsTarget=".bs-example-modal-lg">
        <table class="table w-100">
            <thead>
                <tr>
                    <th>Collection Date</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{$record->date}}</td>
                    <td>{{$record->student->name}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->phone}}</td>
                    <td>{{$record->created_at}}</td>
                    <td>
                        <button type="button"
                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                            <i class="mdi mdi-eye"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" wire:click="edit({{$record}})">
                            <i class="mdi mdi-pencil"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="bx bx-dollar"></i>
                        </button>
                        <button type="button"
                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="fas fa-arrow-circle-right"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-record-list>

    <!--  Large modal example -->
    <div class="modal fade bs-example-modal-lg @if($mode === 'view') apply-view-only @endif" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" wire:ignore aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- Step --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#case_history_init"
                                                            data-toggle="tab">Case History Init</a></li>
                                                    <li class="w-100"><a href="#referral_information"
                                                            data-toggle="tab">রেফারাল তথ্য</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="case_history_init">
                                                        <section>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-firstname-input">Collection
                                                                                Date:</label>
                                                                            <div class="input-group" id="datepicker2">
                                                                                <x-input-text name="sample" type="date"
                                                                                    wireModel="date"
                                                                                    placeholder="mm/dd/yyyy">
                                                                                </x-input-text>
                                                                            </div><!-- input-group -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-lastname-input">Teacher:</label>
                                                                            <x-input-select name="sample"
                                                                                :records="$teachers"
                                                                                wireModel="teacher_id">
                                                                            </x-input-select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="basicpill-phoneno-input">Candidate
                                                                                ID:</label>
                                                                            <x-input-select name="sample"
                                                                                :records="$students"
                                                                                wireModel="student_id">
                                                                            </x-input-select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-phoneno-input">Phone</label>
                                                                            <x-input-text wireModel="phone">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-email-input">Email</label>
                                                                            <x-input-text wireModel="email">
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="verticalnav-address-input">Address</label>
                                                                            <x-input-textarea wireModel="address">
                                                                            </x-input-textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="referral_information">
                                                        <section>
                                                            <form>
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
                                                                <x-input-radio-or-check
                                                                    label="সমন্বয় দক্ষতা আছে কি? <br>(Join Coordination এর মাধ্যমে কাজ করা যেমন- doe / আটা দিয়ে রুটি বানানো বলে জোড়ে কিক দেয়া)"
                                                                    :records="$constants::$yesNo"
                                                                    wireModel="has_adjustment_capability">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    label="চলাফেরার ক্ষেত্রে ভারসাম্য আছে কি? <br>(যেমন-হাটার সময় পড়ে যাওয়া, হাটার সময় শরীর দোলানো, থপ থপ জোরে হাটা, বেখাপ্পা ভাবে হাটা)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="has_fine_equipment_use_ability"
                                                                    label="সূক্ষ্ম যন্ত্রপাতি ব্যবহার করা সহ ফাইন মটরের দক্ষতা আছে কি?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_write_ability"
                                                                    label="লিখার পদ্ধতি ঠিক আছে কিনাঃ?"
                                                                    :records="$caseConstants::$hasWriteAbilities"
                                                                    type="checkbox" :isVertical="false"
                                                                    :multiple="true">
                                                                </x-input-radio-or-check>

                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_education_intersted"
                                                                    label="পড়াশুনা সহ শিক্ষার বিষয়ের উদ্বেগ আছে কিনা <br> (যেমন-পড়তে – লিখবে অনাগ্রহ / দেখে পড়া / সঠিক ভাবে দেখে লেখার সমস্যা)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_self_work_capabelity"
                                                                    label="স্বনির্ভরতার (নিজে নিজে কাজ করার ) দক্ষতা আছে কিনা (যেমন-বয়স অনুযায়ী নিজের কাজ করতে পারা / রুটিন জানা)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="has_abil_to_comminite_socilely"
                                                                    label="সামাজিক যোগাযোগ করতে পারে কিনা (যেমন-বয়স অনুযায়ী সামাজিক যোগাযোগ)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="is_ableto_paly_others"
                                                                    label="খেলার মাধ্যমে যোগাযোগ করে কিনা? অন্যের সাথে মিলে মিশে খেলাধুলা করে কিনা? (যেমন-বয়স অনুযায়ী খেলা / সঠিক ভাবে খেলা / খেলার প্রতি আগ্রহ / খেলার উপকরন চাওয়া)"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>

                                                                {{--todo--}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check wireModel="has_write_ability"
                                                                    label="শেখার প্রতিবন্ধকতা আছে কি? নীচের বিষয়গুলি সম্মন্ধে কোন ধারনা আছে কিনা? (যেমন-অক্ষর / বর্ণ শব্দ বাক্য পড়তে লিখতে সমস্যা অস্বাভাবিক তা, অংক শিখতে না পারা, অংকে অনাগ্রহ, গ্রাফ / চিত্র সম্পর্কে অনাগ্রহ)"
                                                                    :records="$caseConstants::$hasAnyLerningAbstagol"
                                                                    type="checkbox" :isVertical="false"
                                                                    :multiple="true">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check name="has_control_over_body"
                                                                    label="শরীরের ওপর সাধারণ নিয়ন্ত্রন আছে কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                {{--todo--}}
                                                                <!-- end row -->
                                                                {{-- <x-input-radio-or-check
                                                                    wireModel="has_speaking_problem"
                                                                    label="কথা বলার সমস্যা আছে কিনাঃ"
                                                                    :records="$constants::$yesNo"
                                                                    secondaryInputLabel="থাকলে উল্লেখ করুন"
                                                                    secondaryInputWire="has_speaking_problem_secondary">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="ভাষা বুঝতে পারে কিনা (যেমন-অতীত – ভবিষ্যৎ কাল, এক বচন – বহুবচন, পুরুষ (আপনি, তুমি) বুঝতে পারে )"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                {{--todo--}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="is_able_to_use_correct_word_in_sentence"
                                                                    label="ভাষার ব্যবহার পারে ?(যেমন- বাক্যে সঠিক শব্দের ব্যবহার)"
                                                                    :records="$caseConstants::$isAbleToUseCurrectWordInSentanse"
                                                                    {{--
                                                                    secondaryInputWire="is_able_to_use_correct_word_in_sentence_secondary"
                                                                    --}} secondaryInputLabel="সমস্যা থাকলে উল্লেখ করুন">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                {{-- <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="অতীতে আপনার সন্তানের কোন স্পেশালিষ্ট এর মাধ্যমে অ্যাসেসমেন্ট হয়েছিল কিনা ?"
                                                                    :records="$constants::$yesNo"
                                                                    secondaryInputLabel="স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।">
                                                                </x-input-radio-or-check> --}}
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="লার্নিং ডিজাবিলিটি বা কোন কিছু শিখতে পারাতে কোন সমস্যা পরিবারে কারো ছিল কিনা?"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                                <!-- end row -->
                                                                <x-input-radio-or-check
                                                                    name="is_able_to_understand_tense"
                                                                    label="সন্তানের মধ্যে অস্থিরতা আছে কিনা"
                                                                    :records="$constants::$yesNo">
                                                                </x-input-radio-or-check>
                                                            </form>
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
                        </div> <!-- row -->
                    </div> <!--  big container -->
                    {{-- Step --}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    @section('script')
    <!-- Custom step -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
    @endsection
</div>


<h3>Case History</h3>
<section>
    <form>
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                        <x-input-text name="collection_date" type="date" placeholder="mm/dd/yyyy">
                        </x-input-text>
                    </div><!-- input-group -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="teacher_id" :records="$teachers"></x-input-select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="basicpill-phoneno-input">Candidate ID:</label>
                    <select class="form-control select2-search-disable">
                        <option>Select</option>
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="verticalnav-phoneno-input">Phone</label>
                    <input type="text" class="form-control" id="verticalnav-phoneno-input"
                        placeholder="Enter Your Phone No.">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="verticalnav-email-input">Email</label>
                    <input type="email" class="form-control" id="verticalnav-email-input"
                        placeholder="Enter Your Email ID">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="verticalnav-address-input">Address</label>
                    <textarea id="verticalnav-address-input" class="form-control" rows="2"
                        placeholder="Enter Your Address"></textarea>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- Company Document -->
<h3>রেফারাল তথ্য</h3>
<section>
    <form>
        <div class="row">
            <div class="col-lg-12">
                <h3>Instruction:</h3>
                <p>আপনার জানা তথ্য ও জ্ঞান অনুযায়ী নিচের তথ্যাবলী প্রেরণ করুন। সঠিক উত্তর না জানা থাকলে ‘জানি না’
                    লিখুন। উত্তরের জন্য প্রয়োজনীয় জায়গা না থাকলে আলাদা কাগজ ব্যবহার করে উত্তর বিস্তারিত ভাবে লিখুন।
                <p>
            </div>
        </div>
        <x-input-radio-or-check name="has_adjustment_capability" label="সমন্বয় দক্ষতা আছে কি? <br>(Join Coordination এর মাধ্যমে কাজ করা যেমন- doe / আটা দিয়ে রুটি বানানো বলে জোড়ে কিক
                      দেয়া)" :records="$constants::$yesNo"></x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="has_adjustment_capability" label="চলাফেরার ক্ষেত্রে ভারসাম্য আছে কি? <br>(যেমন-হাটার সময় পড়ে যাওয়া, হাটার সময় শরীর দোলানো, থপ থপ জোরে হাটা, বেখাপ্পা ভাবে
                      হাটা)" :records="$constants::$yesNo"></x-input-radio-or-check>


        <!-- end row -->
        <x-input-radio-or-check name="has_fine_equipment_use_ability"
            label="সূক্ষ্ম যন্ত্রপাতি ব্যবহার করা সহ ফাইন মটরের দক্ষতা আছে কি?" :records="$constants::$yesNo">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="has_write_ability" label="লিখার পদ্ধতি ঠিক আছে কিনাঃ?"
            :records="$caseConstants::$hasWriteAbilities" type="checkbox" :isVertical="false" :multiple="true">
        </x-input-radio-or-check>

        <!-- end row -->
        <x-input-radio-or-check name="has_education_intersted" label="পড়াশুনা সহ শিক্ষার বিষয়ের উদ্বেগ আছে কিনা <br> (যেমন-পড়তে – লিখবে অনাগ্রহ / দেখে পড়া / সঠিক ভাবে দেখে লেখার
              সমস্যা)" :records="$constants::$yesNo">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="has_self_work_capabelity" label="স্বনির্ভরতার (নিজে নিজে কাজ করার ) দক্ষতা আছে কিনা (যেমন-বয়স অনুযায়ী নিজের কাজ করতে
              পারা / রুটিন জানা)" :records="$constants::$yesNo">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="has_abil_to_comminite_socilely"
            label="সামাজিক যোগাযোগ করতে পারে কিনা (যেমন-বয়স অনুযায়ী সামাজিক যোগাযোগ)" :records="$constants::$yesNo">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="is_ableto_paly_others" label="খেলার মাধ্যমে যোগাযোগ করে কিনা? অন্যের সাথে মিলে মিশে খেলাধুলা করে কিনা? (যেমন-বয়স
                অনুযায়ী খেলা / সঠিক ভাবে খেলা / খেলার প্রতি আগ্রহ / খেলার উপকরন চাওয়া)" :records="$constants::$yesNo">
        </x-input-radio-or-check>

        <!-- end row -->
        <x-input-radio-or-check name="has_write_ability"
            label="শেখার প্রতিবন্ধকতা আছে কি? নীচের বিষয়গুলি সম্মন্ধে কোন ধারনা আছে কিনা? (যেমন-অক্ষর / বর্ণ শব্দ বাক্য পড়তে লিখতে সমস্যা অস্বাভাবিক তা, অংক শিখতে না পারা, অংকে অনাগ্রহ, গ্রাফ / চিত্র সম্পর্কে অনাগ্রহ)"
            :records="$caseConstants::$hasAnyLerningAbstagol" type="checkbox" :isVertical="false" :multiple="true">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="has_control_over_body" label="শরীরের ওপর সাধারণ নিয়ন্ত্রন আছে কিনা?"
            :records="$constants::$yesNo">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="has_speaking_problem" label="কথা বলার সমস্যা আছে কিনাঃ"
            :records="$constants::$yesNo" secondaryInputLabel="থাকলে উল্লেখ করুন"></x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="is_able_to_understand_tense"
            label="ভাষা বুঝতে পারে কিনা (যেমন-অতীত – ভবিষ্যৎ কাল, এক বচন – বহুবচন, পুরুষ (আপনি, তুমি) বুঝতে পারে )"
            :records="$constants::$yesNo"></x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="is_able_to_understand_tense"
            label="ভাষার ব্যবহার পারে ?(যেমন- বাক্যে সঠিক শব্দের ব্যবহার)"
            :records="$caseConstants::$isAbleToUseCurrectWordInSentanse" secondaryInputLabel="সমস্যা থাকলে উল্লেখ করুন">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="is_able_to_understand_tense"
            label="অতীতে আপনার সন্তানের কোন স্পেশালিষ্ট এর মাধ্যমে অ্যাসেসমেন্ট হয়েছিল কিনা ?"
            :records="$constants::$yesNo" secondaryInputLabel="স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।">
        </x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="is_able_to_understand_tense"
            label="লার্নিং ডিজাবিলিটি বা কোন কিছু শিখতে পারাতে কোন সমস্যা পরিবারে কারো ছিল কিনা?"
            :records="$constants::$yesNo"></x-input-radio-or-check>
        <!-- end row -->
        <x-input-radio-or-check name="is_able_to_understand_tense" label="সন্তানের মধ্যে অস্থিরতা আছে কিনা"
            :records="$constants::$yesNo"></x-input-radio-or-check>
    </form>
</section>

<!-- Bank Details -->
<h3>ক্রমউন্নয়নের ধারা</h3>
<section>
    <div>
        <form>
            <!-- end row -->
            <x-input-radio-or-check name="is_able_to_understand_tense" label="আপনি আপনার শিশুকে কি ভাবে বর্ণনা করবেন ?"
                :records="$caseConstants::$childDesctiption" type="checkbox"
                secondaryInputLabel="স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।">
            </x-input-radio-or-check>

            {{-- TODO: need to fix style --}}
            <!-- end row -->
            <x-input-radio-or-check name="is_able_to_understand_tense" label="ঘুমের প্যাটার্নে কোন সমস্যা আছে কিনা ?"
                :records="$constants::$yesNo" secondaryInputLabel="বিস্তারিত লিখুন">
            </x-input-radio-or-check>
        </form>
    </div>
</section>
<!-- Bank Details -->
<h3>উন্নয়নের ইতিহাস</h3>
<section>
    <div>
        <form>
            <!-- end row -->
            <x-input-radio-or-check name="" label="চুষে খেতে পারে কিনা ?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শক্ত খাবার খেতে পারে কিনা?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শ্বাস-প্রশ্বাস নিয়ন্ত্রন করতে পারে কিনা?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="খাবার একবারে গিলে ফেলে কিনা?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="খাবার খেতে লম্বা সময় নেয় কিনা?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="চিবিয়ে খাবার খেতে কোন সমস্যা ছিল কিনা" :records="$constants::$yesNo"
                secondaryInputLabel="স্পেশালিষ্ট এর পদবি ও বিস্তারিত লিখুন।">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন বয়সে একা একা বসতে শিখেছে?"
                :records="$caseConstants::$inWhichAgeLearnedToSitAlone" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন বয়সে চাবানো শিখেছে ?"
                :records="$caseConstants::$inWhichAgeLearnedToChewing" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name=""
                label="কোন বয়সে হামাগুরি দিতে শিখেছে ? পেছন দিক ছেঁচড়ে বা চার হাতপা ব্যবহার করে দিয়েছে"
                :records="$caseConstants::$inWhichAgeLearnedToCroling" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন বয়সে নিজে নিজে একা হাটতে শিখেছে"
                :records="$caseConstants::$inWhichAgeLearnedToWoakAlone" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শিশু কি সাঁতার জানে ?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শিশু বাইরে খেলার উপকরন পছন্দ করে কিনা? (যেমন ফুটবল , ক্রিকেট )"
                :records="$constants::$yesNo"></x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শিশু কি খুব সহজেই. ক্লান্ত হয়ে যায়?" :records="$constants::$yesNo"
                secondaryInputLabel="বিস্তারিত লিখুন"></x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="ভারসাম্য হীনতা আছে কিনা?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="পেশী ব্যথা সব সময় থাকে কিনা?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
        </form>
    </div>
</section>

<!-- Bank Details -->
<h3>ভাষার দক্ষতা</h3>
<section>
    <div>
        <form>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শিশুর কথা বলার প্রথম ভাষা কোনটি?"
                :records="$caseConstants::$firstVoiceLang" secondaryInputLabel="অন্য ভাষা হলে তা লিখুন">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন বয়সে শিশু প্রথম শব্দ বলেছে ?"
                :records="$caseConstants::$inWhichAgeSpokeTheFirstWord" secondaryInputLabel="অন্য ভাষা হলে তা লিখুন"
                :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সহজ বাক্য বলতে পারে কি?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কয় শব্দে বাক্য বলে?"
                :records="$caseConstants::$howManyWordUseInASentaceMax">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="অন্য কোন ভাষায় কথা বলতে পারে কি?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="অন্য কোন ভাষা বলতে পারে?"
                :records="$caseConstants::$doseSpakeInOtherLang" secondaryInputLabel="অন্য ভাষা হলে তা লিখুন">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন বয়স থেকে শিখেছে ?"
                :records="$caseConstants::$fromWhichYearLearnigOtherLang" :isVertical="false">
            </x-input-radio-or-check>

            <!-- end row -->
            <x-input-radio-or-check name="" label="কোথা থেকে সেই ভাষা শিখেছে ?"
                :records="$caseConstants::$fromWhereLearnOtherLang" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="নাম ধরে ডাকলে শিশু সারা দেয় কি?"
                :records="$caseConstants::$doesHeResponseIfCallByHisName">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="প্রাথমিক ও সহজ ভাষায় নির্দেশ ও দিক নির্দেশনা অনুসরণ করতে পারে ?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শিশু কোন কোন শব্দ ভুল উচ্চারণ করে কিনা"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন কোন শব্দে শিশু প্রতিক্রিয়াশিলতা"
                :records="$caseConstants::$inWhichSoundChildReact" type="checkbox" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="মৌখিক নির্দেশ মেনে চলে" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বাক্য গঠনে সঠিক শব্দের সঠিক ব্যবহার পারে?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
        </form>
    </div>
</section>


<!-- Bank Details -->
<h3>কাজ করার দক্ষতা</h3>
<section>
    <div>
        <form>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শিশু কি চাকু বা কাটা চামচ ব্যবহার করেতে পারে ?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="নিজে একা একা কাপড় পরতে পারে ?"
                :records="$caseConstants::$canWearClothAlone" secondaryInputLabel="বিস্তারিত লিখুন" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="শিশু নিজের জিনিষ গুছিয়ে রাখে ?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন বয়সে টয়লেট ট্রেনিং পেয়েছে?"
                :records="$caseConstants::$inWhichAgeGotToyletTreaining" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বাড়িতে কি নিজে নিজে টয়লেটে যায়?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="অপরিচত জায়গায় টয়লেটে যায়?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বাড়িতে কি ছবি আঁকতে, কাটাকাঁটি করতে পছন্দ করে?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="খেলাধুলা করতে পছন্দ করে ?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সে কি স্বাধীনভাবে খেলতে পারে ?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কি খেলা পছন্দ করে?" :records="$caseConstants::$faveriteGames"
                :isVertical="false"> :secondaryInputLabel="অন্যান্য হলে তা লিখুন"
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বড়দের নির্দেশ মেনে বা মানিয়ে চলতে পারে"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="আপনি কি মনে করেন এটা একটি খুবই কঠিন কাজ"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="টয়লেট থেকে কি একা একা পরিস্কার হয়ে বের হয়ে আসতে পারে?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="টয়লেট থেকে কি একা একা নিজের কাপড় পরে বের হয়ে আসতে পারে?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
        </form>
    </div>
</section>

<!-- Bank Details -->
<h3>সামাজিক দক্ষতা</h3>
<section>
    <div>
        <form>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বাসায় ভাইবোনদের সাথে খেলাধুলা করে কি?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সন্তানের বন্ধুরা কি বাসায় খেলতে আসে ?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বন্ধুদের সাথে খেলনা শেয়ার করে কি নাকি বড়দের সহায়তা লাগে?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name=""
                label="গেমস বা খেলাধুলায় অথবা কথা বলার সময় তার নিজের পালা বা টার্ন এর জন্য অপেক্ষা করে?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বড়দের সাথে বা অন্য শিশুদের ব্যপারে আগ্রহ দেখায় নাকি উদাসীন থাকে?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="আপনি কি সন্তানের বিশেষ কোন আচরন নিয়ে চিন্তিত ?"
                :records="$constants::$yesNo" secondaryInputLabel="হ্যাঁ হলে বিস্তারিত লিখুন">
            </x-input-radio-or-check>
        </form>
    </div>
</section>


<!-- Bank Details -->
<h3>শেখার দক্ষতা</h3>
<section>
    <div>
        <form>
            <!-- end row -->
            <div class="row border-top py-2">
                <div class="col-xl-12 col-sm-12">
                    <div class="mb-2">
                        <h5 class="">স্কুলের কাজের ক্ষেত্রে আপনার সন্তানের প্রধান উদ্বেগের কারন/বিষয় গুলি কি কি ? উল্লেখ
                            করুন-</h5>
                        <div class="input-group" id="datepicker2">
                            <x-input-text type="text" name=""></x-input-text>
                        </div>
                        <!-- input-->
                    </div>
                </div>
                <!-- end row -->
                <x-input-radio-or-check name="" label="নতুন নতুন বিষয় শেখার আগ্রহ আছে কিনা?"
                    :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="যেকোনো সাধারণ বিষয় সঠিকভাবে বুঝতে পারে কিনা?"
                    :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="শব্দের বানান শিখতে পারে কিনা?" :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="নিজে নিজে লিখতে পারে?" :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="কাজ করার গতি কেমন ?" :records="$caseConstants::$workingSpeed">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name=""
                    label="আপনার সন্তানের কোন ও বিষয়ে বোঝার ক্ষমতা বোঝানোর পর কতদিন পর্যন্ত থাকে?"
                    :records="$caseConstants::$howLongChildCanManageAfterTeaching" :isVertical="false">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="হোমওয়ার্ক কি তার কাছে সাধারণ কাজ?" :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="স্কুলের কাজ করার সময় কি তার ব্যবহার/আচরণ অন্যরকম হয়ে যায়?"
                    :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="তাকে কি উত্তেজিত মনে হয়?" :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name="" label="কাগজপত্র বা বই খাতায় অগোছালো মনে হয়?"
                    :records="$constants::$yesNo">
                </x-input-radio-or-check>
                <!-- end row -->
                <x-input-radio-or-check name=""
                    label="সে কি নিয়মিত পেন্সিল বক্স থেকে বিভিন্ন্য আইটেম বা স্কুল ব্যাগ থেকে বিভিন্ন জিনিষ হারায়?"
                    :records="$constants::$yesNo">
                </x-input-radio-or-check>
        </form>
    </div>
</section>

<!-- Bank Details -->
<h3>স্বনির্ভরতা</h3>
<section>
    <div>
        <p>আপনার সন্তানের মাঝে নিচের বিষয়গুলির নিয়ে কোন অসুবিধা পরিলক্ষন করেছেন কি? করে থাকলে, কমেন্টে বিস্তারিত
            লিখুন। এই বিষয়গুলি মুলত স্কুলে যাওয়ার বয়সের জন্য প্রযোজ্যঃ</p>
        <form>
            <!-- end row -->
            <x-input-radio-or-check name=""
                label="খাওয়াদাওয়ার সময় বিশ্রী/বেমানান কাজ করে কিনা যেটা পিতামাতার জন্য বিরক্তি সৃষ্টি করে"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কাপড় পরিধানঃ বেশি কান্নাকাটি/ চিৎকার করে"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" type="checkbox" label="আপনি আপনার শিশুকে কি ভাবে বর্ণনা করবেন?"
                :records="$caseConstants::$howToDiscriveYourChild" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="গোসল" type="checkbox" :records="$caseConstants::$bath"
                secondaryInputLabel="বিস্তারিত লিখুন" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="প্রয়োজনীয় জিনিস" type="checkbox"
                :records="$caseConstants::$necessaryThings" secondaryInputLabel="বিস্তারিত লিখুন" :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="দিক নির্ণয়ের দক্ষতা আছে কি?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="খেলা" type="checkbox" :records="$caseConstants::$game"
                :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="মবিলিটি" type="checkbox" :records="$caseConstants::$mobility"
                :isVertical="false">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="রুটিন পছন্দ করে" :records="$constants::$yesNo">
            </x-input-radio-or-check>

            <!-- end row -->
            <x-input-radio-or-check name="" label="রুটিনে কোন পরিবর্তন মেনে নেয় কি?রুটিন পছন্দ করে"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="নতুন পরিস্থিতি পছন্দ করে?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="ধারাবাহিক নির্দেশ ঠিক মত পালন করতে পারে না"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="মেজাজ খুব তাড়াতাড়ি পরিবর্তিত হয়" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সহজে হতাশাগ্রস্থ হয়" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কাজ করা বন্ধ করে দেয়" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="অস্থিরতা আছে কি?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name=""
                label="একজায়গায় ঠিক মত বসতে পারে (পরিবেশ - পরিস্থিতির প্রয়োজনে দীর্ঘ সময় বসে থাকা )"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বাসায় ধ্বংসাত্মক বা আক্রমণাত্মক ব্যাবহার আছে কি?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="খেলাধুলায় মনে হয় মনোযোগ নেই, শুধু বসে থাকে"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="আপনার সন্তানের সময় সম্পর্কে জ্ঞান আছে কি?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="দিন, মাস ও সময় জ্ঞান অর্জনে সমস্যা আছে কি?"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সারা প্রদান" :records="$caseConstants::$answerTheCall">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="দিবাস্বপ্নচারী মনে হয় । ঘোরের মধ্যে থাকা, কল্পনার জগতে থাকে"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="এক জায়গায় ঘোরে" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="ঘোরাঘুরি করে" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সবসময়ই নড়াচড়া বা চলাফেরার মধ্যে থাকে" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সোজা হয়ে বসতে পছন্দ করে কি?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বল নিয়ে খেলার ক্ষেত্রে পারদর্শী" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বল নিয়ে যে কোন ধরনের খেলা এড়িয়ে চলে" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="ভাংচুর করতে পছন্দ করে (জিনিষ পত্র নষ্ট করে )"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বেমানান ভঙ্গিতে দৌঁড়ায়" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="উচ্চতা, নড়াচড়া, সিঁড়ি দিয়ে নামার ক্ষেত্রে সাবধান থাকে"
                :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="সারাক্ষণ নড়াচড়ার মধ্যে থাকে" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কাজ এড়িয়ে চলতে চায়" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="কোন ধরনের কাজ এড়িয়ে চলে?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
            <x-input-radio-or-check name="" label="বার বার হারিয়ে যায়?" :records="$constants::$yesNo">
            </x-input-radio-or-check>
            <!-- end row -->
        </form>
    </div>
</section>