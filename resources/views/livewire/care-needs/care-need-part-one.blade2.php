<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <div class="field__label">
                            <span>CARE Needs Part One</span>
                        </div>
                        <div class="input__field_data mt-2">
                            <div class="sidebar" id="sidebar">
                                <ul id="sidebarTabs">
                                    <li class="active" onclick="changeTab(0)">Introduction</li>
                                    <li onclick="changeTab(1)">General Information</li>
                                    <li onclick="changeTab(2)">Types of specialty / disability / impairments</li>
                                    <li onclick="changeTab(3)">Assessment Information</li>
                                    <li onclick="changeTab(4)">Condition at Home Information</li>
                                    <li onclick="changeTab(5)">Educational Information</li>
                                    <li onclick="changeTab(6)">Child’s condition at his family</li>
                                    <li onclick="changeTab(7)">Number of children in the family</li>
                                    <li onclick="changeTab(8)">Schooling</li>
                                </ul>
                            </div>
                            <div class="content">
                                @if ($intervieweeData)
                                <div class="card__search__box custom__search__box">
                                    <div class="flex-1">
                                        <div class="button__group d-flex gap-2 justify-content-end aligns-items-center">
                                            <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                                <span class="font-weight-bold">Payment: </span>
                                                <p
                                                    class="btn interview__status__{{ strtolower($intervieweeData->payment_status_updated ?? 'pending') }} btn-sm">
                                                    {{ $intervieweeData->payment_status_updated !== null ? $intervieweeData->payment_status_updated : 'Pending' }}
                                                </p>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                                <span class="font-weight-bold">Interview: </span>
                                                <p
                                                    class="btn interview__status__{{ strtolower($intervieweeData->interview_status) }} btn-sm">
                                                    {{ $intervieweeData->interview_status !== null ? $intervieweeData->interview_status : 'Pending' }}
                                                </p>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                                <span class="font-weight-bold">Assessment: </span>
                                                <p
                                                    class="btn interview__status__{{ strtolower($intervieweeData->assessment_status) }} btn-sm">
                                                    {{ $intervieweeData->assessment_status !== null ? $intervieweeData->assessment_status : 'Pending' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <form action="">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Search by ID (000001)"
                                                    aria-label="Search by ID (000001)" aria-describedby="button-addon2">
                                                <button class="btn btn-success" type="button"
                                                    id="button-addon2">Button</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- <form id="myForm" action="{{ route('care-need-part-one.store') }}" method="POST"> -->
                                    <form wire:submit.prevent="saveData">
                                @csrf
                                <div id="tabContent" class="tabContent">
                                        <div class="tabPane active">
                                            <div class="card__data__box">
                                                <div class="field__data mt-2">
                                                    <div class="field__label">
                                                        <span>Introduction</span>
                                                    </div>
                                                    <div class="input__field_data mt-2">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Student_ID:</label>
                                                                                <x-input-text name="appointment_id"
                                                                                    value="{{ $intervieweeData->student_id }}"
                                                                                    readOnly>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Name:</label>
                                                                                <x-input-text name="name"
                                                                                    value="{{ $intervieweeData->name }}"
                                                                                    readOnly>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Date of Birth:</label>
                                                                                <x-input-text name="collection_date"
                                                                                    type="date"
                                                                                    value="{{ $intervieweeData->dob }}"
                                                                                    placeholder="mm/dd/yyyy" required>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Age:</label>
                                                                                <x-input-text name="age" type="text"
                                                                                    placeholder="Enter age"
                                                                                    value="{{ $intervieweeData->age }}"
                                                                                    required>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Mother's Name:</label>
                                                                                <x-input-text name="mother_name"
                                                                                    value="{{ $intervieweeData->mother_name }}"
                                                                                    placeholder="Mother's Name"
                                                                                    required>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <div class="mb-3 form-group">
                                                                                    <label>Mother’s level of
                                                                                        education:</label>
                                                                                    <x-input-select
                                                                                        name="mother_edu_level"
                                                                                        :records="$eduClass"
                                                                                        :selected="$intervieweeData->mother_edu_level ?? null"
                                                                                        firstLabel="Select Level">
                                                                                    </x-input-select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Mother's Occupation:</label>
                                                                                <x-input-text name="mother_occupation"
                                                                                    value="{{ $intervieweeData->mother_occupation }}"
                                                                                    placeholder="Mother's Occupation"
                                                                                    required>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Father's Name:</label>
                                                                                <x-input-text name="father_name"
                                                                                    value="{{ $intervieweeData->father_name }}"
                                                                                    placeholder="Father's Name"
                                                                                    required>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <div class="mb-3 form-group">
                                                                                    <label>Father’s level of
                                                                                        education:</label>
                                                                                    <x-input-select
                                                                                        name="father_edu_level"
                                                                                        :records="$eduClass"
                                                                                        :selected="$intervieweeData->father_edu_level ?? null"
                                                                                        firstLabel="Select Level">
                                                                                    </x-input-select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Father's Occupation:</label>
                                                                                <x-input-text name="father_occupation"
                                                                                    value="{{ $intervieweeData->father_occupation }}"
                                                                                    placeholder="Father's Name"
                                                                                    required>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Phone:</label>
                                                                                <x-input-text name="phone_number"
                                                                                    value="{{ $intervieweeData->phone_number }}"
                                                                                    placeholder="Phone Number" readOnly>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Email:</label>
                                                                                <x-input-text type="email"
                                                                                    name="parent_email"
                                                                                    value="{{ $intervieweeData->parent_email }}"
                                                                                    placeholder="Parent's Email"
                                                                                    required>
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="col-12">
                                                                        <div class="mb-3 form-group">
                                                                            <label>Home Address:</label>
                                                                            <x-input-text name="permanent_address"
                                                                                value="{{ $intervieweeData->permanent_address }}"
                                                                                placeholder="Home Address" required>
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="mb-3 form-group">
                                                                            <label>Sex:</label>
                                                                            <x-input-select name="gender"
                                                                                :records="$gender"
                                                                                :selected="$intervieweeData->gender ?? null"
                                                                                firstLabel="Select Gender" required>
                                                                            </x-input-select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Main Assessor’s Department :</label>
                                                                        <x-input-text
                                                                            name="main_teacher_department_name"
                                                                            value="{{ $intervieweeData->main_teacher_department_name }}"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Main Assessor’s name:</label>
                                                                        <x-input-text name="main_teacher_name"
                                                                            value="{{ $intervieweeData->main_teacher_name }} ({{ $intervieweeData->main_teacher_designation_name }})"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Signature :</label>
                                                                        <div class="assessor__signature">
                                                                            <img class="form-control"
                                                                                src="{{ url('/') }}/assets/images/signatures/{{ $intervieweeData->main_teacher_signature }}"
                                                                                alt="Signature">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Assistant Associator's Designation
                                                                            :</label>
                                                                        <x-input-text
                                                                            name="assistant_teacher_department_name"
                                                                            value="{{ $intervieweeData->assistant_teacher_department_name }}"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Assistant Associator's name:</label>
                                                                        <x-input-text name="assistant_teacher_name"
                                                                            value="{{ $intervieweeData->assistant_teacher_name }} ({{ $intervieweeData->assistant_teacher_designation_name }})"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Signature :</label>
                                                                        <div class="assessor__signature">
                                                                            <img class="form-control"
                                                                                src="{{ url('/') }}/assets/images/signatures/{{ $intervieweeData->assistant_teacher_signature }}"
                                                                                alt="Signature">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit">Save</button>
                                    <!-- </form> -->
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>General Information</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <div class="mb-3 form-group">
                                                            <label>From where you learned about us?</label>
                                                            <x-input-select name="learnAbout" :records="$learnAbout"
                                                                firstLabel="Select learn about"></x-input-select>
                                                        </div>
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>If other, specify name: </h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="doctor_physician_under_medical_treatment_name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Doctor / physician (under medical treatment)
                                                                        name </h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="doctor_physician_under_medical_treatment_name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- row end -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Contact Number</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text name="contact_umber" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="govt_disability_registration"
                                                            label="Govt.Disability registration"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="If not, why?" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>If yes, enter registration number </h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="If_yes_enter_registration_number" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- row end -->
                                                        <x-input-radio-or-check
                                                            name="suggestion_on_obtaining_registration"
                                                            label="Suggestion on obtaining registration"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="referred_to_parents_forum"
                                                            label="Referred to Parents Forum"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="If Yes, Referral no" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>If Yes, Enter Referral Person </h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="If_yes_enter_registration_number" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Types of specialty / disability / impairments</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <x-input-radio-or-check name="iss_she_has_autism"
                                                            label="Is S/he has Autism?"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_down_syndrome"
                                                            label="Is S/he has Down Syndrome"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_cerebral_palsy"
                                                            label="Is S/he has Cerebral Palsy"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check
                                                            name="is_she_has_intellectual_disability"
                                                            label="Is S/he has Intellectual Disability"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_dyslexia"
                                                            label="Is S/he has Dyslexia "
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_learning_disability"
                                                            label="Is S/he has Learning disability"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_anxiety_disorder"
                                                            label="Is S/he has Anxiety disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_adhd"
                                                            label="Is S/he has ADHD "
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_bipolar_disorder"
                                                            label="Is S/he has Bipolar Disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_he_has_speech_disorder"
                                                            label="Is S/he has Speech disorder "
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_language_disorder"
                                                            label="Is S/he has Language disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_ocd"
                                                            label="Is S/he has OCD"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_eating_disorder"
                                                            label="Is S/he has Eating disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_schizophrenia"
                                                            label="Is S/he has Schizophrenia"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check
                                                            name="is_she_has_multiple_personality_disorder"
                                                            label="Is S/he has Multiple Personality Disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_tic_disorder"
                                                            label="Is S/he has TIC disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_sluttering"
                                                            label="Is S/he has Sluttering"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_depression"
                                                            label="Is S/he has Depression"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_writing_disorder"
                                                            label="Is S/he has Writing disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_reading_disorder"
                                                            label="Is S/he has Reading disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_match_disorder"
                                                            label="Is S/he has Match Disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_attachment_disorder"
                                                            label="Is S/he has Attachment Disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check
                                                            name="is_she_has_separation_anxiety_disorder"
                                                            label="Is S/he has Separation Anxiety Disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_has_sleep_disorder"
                                                            label="Is S/he has Sleep disorder"
                                                            :records="$projectConstants::$yesNoDontknow" />
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Assessment Information</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <x-input-radio-or-check
                                                            name="is_social_communication_checklist_has_completed"
                                                            label="Is Social Communication checklist has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_sensory_checklist_has_completed"
                                                            label="Is Sensory Checklist has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_occupational_assessment_has_completed"
                                                            label="Is Occupational Assessment has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_speech_and_language_assessment_has_completed"
                                                            label="Is Speech and Language Assessment has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_physiotherapy_assessment_has_completed"
                                                            label="Is Physiotherapy assessment has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_fundamental_movement_skills_has_completed"
                                                            label="Is Fundamental Movement Skills has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_functional_evaluation_has_completed"
                                                            label="Is Functional evaluation has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_psychological_assessment_has_completed"
                                                            label="Is Psychological assessment has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_cademic_assessment_has_completed"
                                                            label="Is Academic Assessment has completed?"
                                                            :records="$projectConstants::$yesNoWantdo" />
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Condition at Home Information</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <x-input-radio-or-check name="is_she_has_speaking_capacity"
                                                            label="Separate room?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_listening_capacity"
                                                            label="Separate bed?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_reading_capacity"
                                                            label="Sleep alone?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_writing_capacity"
                                                            label="Separate Cupboard?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has"
                                                            label="Separate toilet?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_counting_capacity"
                                                            label="Own equipment?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Other</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="If_yes_enter_registration_number" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_money_concept"
                                                            label="Anything else?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Please specify</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="If_yes_enter_registration_number" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Educational Information</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <x-input-radio-or-check name="schooling" type="checkbox"
                                                            label="Schooling" :records="$projectConstants::$learnAbout"
                                                            :isVertical="false" multiple="true"
                                                            secondaryInputLabel="Please provide other school name" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_speaking_capacity"
                                                            label="Is S/he has Speaking Capacity?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_listening_capacity"
                                                            label="Is S/he has Listening Capacity?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_reading_capacity"
                                                            label="Is S/he has Reading Capacity?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_writing_capacity"
                                                            label="Is S/he has Writing capacity?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_counting_capacity"
                                                            label="Is S/he has Counting capacity? "
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_money_concept"
                                                            label="Is S/he has Money concept?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Child’s condition at his family</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <x-input-radio-or-check name="is_she_happy_at_home"
                                                            label="Is S/he Happy at home? "
                                                            :records="$projectConstants::$yesMidNo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_lonely"
                                                            label="Is S/he Lonely?"
                                                            :records="$projectConstants::$yesMidNo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_protective"
                                                            label="Is S/he Protective?"
                                                            :records="$projectConstants::$yesMidNo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_well_protective"
                                                            label="Is S/he Well protective?"
                                                            :records="$projectConstants::$yesMidNo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_withdrawal"
                                                            label="Is S/he Withdrawal?"
                                                            :records="$projectConstants::$yesMidNo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_confident"
                                                            label="Is S/he Confident?"
                                                            :records="$projectConstants::$yesMidNo" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_Communicate"
                                                            label="Is S/he Communicate?"
                                                            :records="$projectConstants::$communicate" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="knowledge_on_aily_life_requirement" type="checkbox"
                                                            label="Knowledge on Daily life requirement. (Please select (tick) only those items s/he has knowledge)"
                                                            :records="$projectConstants::$dailyLife" :isVertical="false"
                                                            multiple="true" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="is_she_follow_instructions"
                                                            label="Is S/he Follow instructions?"
                                                            :records="$projectConstants::$followInstruction" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_she_has_sitting_habit_and_how_long"
                                                            label="Is S/he has Sitting habit and how long?"
                                                            :records="$projectConstants::$havit"
                                                            secondaryInputLabel="If others, specify the duration" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_has_hyperness"
                                                            label="Is S/he has Hyperness? how long it remain?"
                                                            :records="$projectConstants::$havittime"
                                                            secondaryInputLabel="Cooling time? How much time it take to cool down." />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Specify the cooling process</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1"
                                                                            name="specify_the_cooling_process" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_do_tantrum"
                                                            label="Is S/he do Tantrum ? how long it remain?"
                                                            :records="$projectConstants::$havittime"
                                                            secondaryInputLabel="Cooling time ( How long it takes to cool down?)" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Specify the cooling process</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1"
                                                                            name="specify_the_cooling_process" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_do_self_injury"
                                                            label="Is S/he Do Self injury?"
                                                            :records="$projectConstants::$havittime"
                                                            secondaryInputLabel="Cooling time ( How long it takes to cool down?)" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Specify the cooling process</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1"
                                                                            name="specify_the_cooling_process" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="follow_any_specific_life_style"
                                                            label="Follow any specific life style?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="what_is_the_way_of_communication"
                                                            type="checkbox" label="What is the way of Communication?"
                                                            :records="$projectConstants::$communicate"
                                                            :isVertical="false" multiple="true" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check
                                                            name="how_he_she_can_follow_instructions"
                                                            label="How he/she can Follow instructions?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_she_do_temper_how_long_it_remain"
                                                            label="Is s/he do Temper? how long it remain?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="Cooling time ( How long it takes to cool down?)" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Specify the cooling process</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1"
                                                                            name="specify_the_cooling_process" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="is_she_hit_others"
                                                            label="Is S/he Hit Others?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="Cooling time ( How long it takes to cool down?)" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Specify the cooling process</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1"
                                                                            name="specify_the_cooling_process" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Number of children in the family</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <x-input-radio-or-check
                                                            name="is_your_other_child_support_towards_sibling"
                                                            label="1. Is your other child support towards sibling?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="Child name and profession" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Age</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1" name="age" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_your_other_child_support_towards_sibling"
                                                            label="2. Is your other child support towards sibling?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="Name and profession" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Age</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1" name="age" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_your_other_child_support_towards_sibling"
                                                            label="3. Is your other child support towards sibling?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="Name and profession" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Age</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1" name="age" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="marriage_within_family_relative"
                                                            label="Marriage within family/ relative?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="If yes, please share relation" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check
                                                            name="is_any_other_relative_have_disabilities"
                                                            label="Is any other relative have disabilities?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="If yes, disability type" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="family_economical_condition"
                                                            label="Family Economical condition"
                                                            :records="$projectConstants::$famCon"
                                                            secondaryInputLabel="Net earning of a year" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Any other Family information that may
                                                                        relevant to share</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text rows="1"
                                                                            name="any_other_family_information_that_may_relevant_to_share" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Schooling information</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <x-input-radio-or-check name="going_to_school"
                                                            label="Going to school?"
                                                            :records="$projectConstants::$goingSchool"
                                                            secondaryInputLabel="Since when DD/mm/YYYY" />
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>If other, enter name</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-textarea rows="1"
                                                                            name="if_other_enter_name_des" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Name of the school</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text name="name_of_the_school" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="studied_till_which_class"
                                                            label="Studied till which class?"
                                                            :records="$projectConstants::$class" />
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="why_not_attending_school"
                                                            type="checkbox" label="Why not attending school?"
                                                            :records="$projectConstants::$attendSchool"
                                                            :isVertical="false" multiple="true"
                                                            secondaryInputLabel="Please provide other information" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="any_exam_degree_achieved"
                                                            label="Any exam/ degree achieved?"
                                                            :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="Please provide degree name" />
                                                        <!-- row end -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane" style="display:none">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>CARE needs - Part 1</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <section>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label
                                                                    for="verticalnav-phoneno-input">Instruction:</label>
                                                                <p>Enter Home information</p>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <x-input-radio-or-check name="separate_room"
                                                            label="Separate room"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="separate_bed" label="Separate bed"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="sleep_alone" label="Sleep alone?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="separate_cupboard"
                                                            label="Separate Cupboard?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="separate_toilet"
                                                            label="Separate toilet ?"
                                                            :records="$projectConstants::$yesNoEn" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="own_equipment"
                                                            label="Own equipment" :records="$projectConstants::$Ph"
                                                            secondaryInputLabel="Other" />
                                                        <!-- row end -->
                                                        <x-input-radio-or-check name="anything_else"
                                                            label="Anything else" :records="$projectConstants::$yesNoEn"
                                                            secondaryInputLabel="Please specify" />
                                                        <!-- row end -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Teachers Signature</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text type="file"
                                                                            name="teachers_signature" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Teacher name and Designation</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="teacher_name_and_designation" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Date</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text type="date" name="date" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <!-- row end -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Parents Signature</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text type="file"
                                                                            name="teachers_signature" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Name of parent/ guardian</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text
                                                                            name="teacher_name_and_designation" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <div class="row border-top py-2">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="m-0">
                                                                    <h6>Date</h6>
                                                                    <div class="mb-2">
                                                                        <x-input-text type="date" name="date" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="footer-btns pt-2 d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn btn-primary" onclick="prevTab()" id="prevBtn"
                                        style="display:inline-block;">Previous</button>
                                    <button type="button" class="btn btn-primary" onclick="nextTab()"
                                        id="nextBtn">Next</button>
                                    <button type="button" class="btn btn-success" onclick="finish()" id="finishBtn"
                                        style="display:none;">Finish</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>