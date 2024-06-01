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
                                    <li class="{{ $currentTabLiveware === 0 ? 'active' : '' }}" wire:click="changeCurrentTab(0)">
                                        Introduction</li>
                                    <li class="{{ $currentTabLiveware === 1 ? 'active' : '' }}" wire:click="changeCurrentTab(1)">General
                                        Information</li>
                                    <li class="{{ $currentTabLiveware === 2 ? 'active' : '' }}" wire:click="changeCurrentTab(2)">Types of
                                        specialty / disability / impairments</li>
                                    <li class="{{ $currentTabLiveware === 3 ? 'active' : '' }}" wire:click="changeCurrentTab(3)">
                                        Assessment Information</li>
                                    <li class="{{ $currentTabLiveware === 4 ? 'active' : '' }}" wire:click="changeCurrentTab(4)">Condition
                                        at Home Information</li>
                                    <li class="{{ $currentTabLiveware === 5 ? 'active' : '' }}" wire:click="changeCurrentTab(5)">
                                        Educational Information</li>
                                    <li class="{{ $currentTabLiveware === 6 ? 'active' : '' }}" wire:click="changeCurrentTab(6)">Child’s
                                        condition at his family</li>
                                    <li class="{{ $currentTabLiveware === 7 ? 'active' : '' }}" wire:click="changeCurrentTab(7)">Number of
                                        children in the family</li>
                                    <li class="{{ $currentTabLiveware === 8 ? 'active' : '' }}" wire:click="changeCurrentTab(8)">Schooling
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="card__search__box custom__search__box">
                                    <div class="flex-1">
                                        <div class="button__group d-flex gap-2 justify-content-end aligns-items-center">
                                            <div class="d-flex gap-2 justify-content-end align-items-center">
                                                <span class="font-weight-bold">Payment: </span>
                                                <p
                                                    class="btn interview__status__{{ strtolower($formData['introduction']['payment_status_updated'] ?? 'pending') }} btn-sm">
                                                    {{ $formData['introduction']['payment_status_updated'] !== null ? $formData['introduction']['payment_status_updated'] : 'Pending' }}
                                                </p>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                                <span class="font-weight-bold">Interview: </span>
                                                <p
                                                    class="btn interview__status__{{ strtolower($formData['introduction']['interview_status']) }} btn-sm">
                                                    {{ $formData['introduction']['interview_status'] !== null ? $formData['introduction']['interview_status'] : 'Pending' }}
                                                </p>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end aligns-items-center">
                                                <span class="font-weight-bold">Assessment: </span>
                                                <p
                                                    class="btn interview__status__{{ strtolower($formData['introduction']['assessment_status']) }} btn-sm">
                                                    {{ $formData['introduction']['assessment_status'] !== null ? $formData['introduction']['assessment_status'] : 'Pending' }}
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
                                <div id="tabContent" class="tabContent">
                                    <div class="tabPane {{ $currentTabLiveware === 0 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Introduction ({{ $currentTabLiveware }})</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <form wire:submit.prevent="nextTab">
                                                        <section>
                                                            <input type="text"
                                                                wire:model="formData.introduction.appointment_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.main_teacher_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.assistant_teacher_id">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Student_ID:</label>
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.student_id"
                                                                                    readOnly></x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Name:</label>
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.name"
                                                                                    readOnly></x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Date of Birth:</label>
                                                                                <x-input-text type="date"
                                                                                    placeholder="mm/dd/yyyy"
                                                                                    wireModel="formData.introduction.dob"
                                                                                    required></x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Age:</label>
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.age"
                                                                                    placeholder="2 Months/Years"
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
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.mother_name"
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
                                                                                        wireModel="formData.introduction.mother_edu_level"
                                                                                        :records="$eduClass"
                                                                                        firstLabel="Select Level">
                                                                                    </x-input-select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Mother's Occupation:</label>
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.mother_occupation"
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
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.father_name"
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
                                                                                        wireModel="formData.introduction.father_edu_level"
                                                                                        :records="$eduClass"
                                                                                        firstLabel="Select Level">
                                                                                    </x-input-select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Father's Occupation:</label>
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.father_occupation"
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
                                                                                <x-input-text
                                                                                    wireModel="formData.introduction.phone_number"
                                                                                    readOnly></x-input-text>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label>Email:</label>
                                                                                <x-input-text type="email"
                                                                                    wireModel="formData.introduction.parent_email"
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
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.permanent_address"
                                                                                placeholder="Home Address" required>
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="mb-3 form-group">
                                                                            <label>Sex:</label>
                                                                            <x-input-select
                                                                                wireModel="formData.introduction.gender"
                                                                                :records="$gender"
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
                                                                            wireModel="formData.introduction.main_teacher_department_name"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Main Assessor’s name:</label>
                                                                        <x-input-text
                                                                            wireModel="formData.introduction.main_teacher_name"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Signature :</label>
                                                                        <div class="assessor__signature">
                                                                            <img class="form-control"
                                                                                src="{{ url('/') }}/assets/images/signatures/{{ $formData['introduction']['main_teacher_signature'] }}"
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
                                                                            wireModel="formData.introduction.assistant_teacher_department_name"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Assistant Associator's name:</label>
                                                                        <x-input-text
                                                                            wireModel="formData.introduction.assistant_teacher_name"
                                                                            readOnly></x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Signature :</label>
                                                                        <div class="assessor__signature">
                                                                            <img class="form-control"
                                                                                src="{{ url('/') }}/assets/images/signatures/{{ $formData['introduction']['assistant_teacher_signature'] }}"
                                                                                alt="Signature">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane {{ $currentTabLiveware === 1 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>General Information ({{ $currentTabLiveware }})</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <form wire:submit.prevent="nextTab">
                                                        <section>
                                                            <input type="text"
                                                                wire:model="formData.introduction.appointment_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.main_teacher_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.assistant_teacher_id">
                                                            <div class="mb-3 form-group">
                                                                <label>From where you learned about us?</label>
                                                                <x-input-select
                                                                    wireModel="formData.general_infos.learned_about_us"
                                                                    :records="$learnAbout"
                                                                    firstLabel="Select learn about"></x-input-select>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h6>If other, specify name: </h6>
                                                                        <div class="mb-2">
                                                                            <x-input-text
                                                                                wireModel="formData.general_infos.specify_name" />
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
                                                                                wireModel="formData.general_infos.doctor_name" />
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
                                                                            <x-input-text
                                                                                wireModel="formData.general_infos.contact_number" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.general_infos.govt_disability_registration"
                                                                label="Govt. Disability registration"
                                                                :records="$projectConstants::$yesNoEn"
                                                                :selectedValue="$formData['general_infos']['govt_disability_registration']"
                                                                secondaryInputLabel="{{ $formData['general_infos']['govt_disability_registration'] == 'yes' ? 'If yes, enter registration number' : 'If not, why?' }}"
                                                                secondaryInputWireModel="{{ $formData['general_infos']['govt_disability_registration'] == 'yes' ? 'formData.general_infos.govt_dis_if_yes_reg_number' : 'formData.general_infos.govt_dis_if_not_why' }}"
                                                            />
                                                            <x-input-radio-or-check
                                                                wireModel="formData.general_infos.obtaining_registration"
                                                                label="Suggestion on obtaining registration"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.general_infos.referred_parents_forum"
                                                                label="Referred to Parents Forum"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h6>If Yes, Referral no </h6>
                                                                        <div class="mb-2">
                                                                            <x-input-text
                                                                                wireModel="formData.general_infos.referred_if_yes_number" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h6>If Yes, Enter Referral Person </h6>
                                                                        <div class="mb-2">
                                                                            <x-input-text
                                                                                wireModel="formData.general_infos.referred_if_yes_person" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                        </section>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane {{ $currentTabLiveware === 2 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Types of specialty / disability / impairments
                                                        ({{ $currentTabLiveware }})</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <form wire:submit.prevent="nextTab">
                                                        <section>
                                                            <input type="text"
                                                                wire:model="formData.introduction.appointment_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.main_teacher_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.assistant_teacher_id">

                                                            <x-input-radio-or-check 
                                                                wireModel="formData.specialities.is_autism"
                                                                label="Is S/he has Autism?"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.specialities.is_down_syndrome"
                                                                label="Is S/he has Down Syndrome"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.specialities.is_cerebral_palsy"
                                                                label="Is S/he has Cerebral Palsy"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.specialities.is_intellectual_disability"
                                                                label="Is S/he has Intellectual Disability"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_dyslexia"
                                                                label="Is S/he has Dyslexia "
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_learning_disability"
                                                                label="Is S/he has Learning disability"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_anxiety_disorder"
                                                                label="Is S/he has Anxiety disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_adhd"
                                                                label="Is S/he has ADHD "
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_bipolar_disorder"
                                                                label="Is S/he has Bipolar Disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_speech_disorder"
                                                                label="Is S/he has Speech disorder "
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_language_disorder"
                                                                label="Is S/he has Language disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.specialities.is_ocd"
                                                                label="Is S/he has OCD"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_eating_disorder"
                                                                label="Is S/he has Eating disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_schizophrenia"
                                                                label="Is S/he has Schizophrenia"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.specialities.is_multiple_personality"
                                                                label="Is S/he has Multiple Personality Disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_tic_disorder"
                                                                label="Is S/he has TIC disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_sluttering"
                                                                label="Is S/he has Sluttering"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_depression"
                                                                label="Is S/he has Depression"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_writing_disorder"
                                                                label="Is S/he has Writing disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_reading_disorder"
                                                                label="Is S/he has Reading disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_match_disorder"
                                                                label="Is S/he has Match Disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_attachment_disorder"
                                                                label="Is S/he has Attachment Disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.specialities.is_separation_anxiety"
                                                                label="Is S/he has Separation Anxiety Disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- row end -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.specialities.is_sleep_disorder"
                                                                label="Is S/he has Sleep disorder"
                                                                :records="$projectConstants::$yesNoDontknow" />
                                                            <!-- end row -->
                                                        </section>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane {{ $currentTabLiveware === 3 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Assessment Information ({{ $currentTabLiveware }})</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <form wire:submit.prevent="nextTab">
                                                        <section>
                                                            <input type="text"
                                                                wire:model="formData.introduction.appointment_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.main_teacher_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.assistant_teacher_id">
                                                           
                                                            <!-- end row -->    
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.social_communication_checklist"
                                                                label="Is Social Communication checklist has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.sensory_checklist"
                                                                label="Is Sensory Checklist has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.occupational_assessment"
                                                                label="Is Occupational Assessment has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.speech_language_assessment"
                                                                label="Is Speech and Language Assessment has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.physiotherapy_assessment"
                                                                label="Is Physiotherapy assessment has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.fundamental_movement_skills"
                                                                label="Is Fundamental Movement Skills has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.fundamental_evaluation"
                                                                label="Is Functional evaluation has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.psychological_assessment"
                                                                label="Is Psychological assessment has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check
                                                                wireModel="formData.assessment_infos.academic_assessment"
                                                                label="Is Academic Assessment has completed?"
                                                                :records="$projectConstants::$yesNoWantdo" />
                                                            <!-- end row -->
                                                        </section>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane {{ $currentTabLiveware === 4 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Condition at Home Information ({{ $currentTabLiveware }})</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <form wire:submit.prevent="nextTab">
                                                        <section>
                                                            <input type="text"
                                                                wire:model="formData.introduction.appointment_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.main_teacher_id">
                                                            <input type="text"
                                                                wire:model="formData.introduction.assistant_teacher_id">

                                                            <x-input-radio-or-check 
                                                                wireModel="formData.home_infos.separate_room"
                                                                label="Separate room?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.home_infos.separate_bed"
                                                                label="Separate bed?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.home_infos.sleep_alone"
                                                                label="Sleep alone?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.home_infos.separate_cupboard"
                                                                label="Separate Cupboard?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.home_infos.separate_toilet"
                                                                label="Separate toilet?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.home_infos.own_equipment"
                                                                label="Own equipment?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h6>Other</h6>
                                                                        <div class="mb-2">
                                                                            <x-input-text wireModel="formData.home_infos.own_equipment_other" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                            <x-input-radio-or-check  
                                                                wireModel="formData.home_infos.anything_else"
                                                                label="Anything else?"
                                                                :records="$projectConstants::$yesNoEn" 
                                                            />
                                                            <div class="row border-top py-2">
                                                                <div class="col-xl-12 col-sm-12">
                                                                    <div class="m-0">
                                                                        <h6>Please specify</h6>
                                                                        <div class="mb-2">
                                                                            <x-input-text wireModel="formData.home_infos.please_specify" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                        </section>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane {{ $currentTabLiveware === 5 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Educational Information ({{ $currentTabLiveware }})</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <form wire:submit.prevent="nextTab">
                                                        <section>
                                                            <input type="text" name="appointment_id" value="{{ $formData['introduction']['appointment_id']}}">
                                                            <input type="text" name="main_teacher_id" value="{{ $formData['introduction']['main_teacher_id'] }}">
                                                            <input type="text" name="assistant_teacher_id" value="{{ $formData['introduction']['assistant_teacher_id'] }}">

                                                            <x-input-radio-or-check 
        wireModel="formData.educational_infos.schooling" 
        type="checkbox"
        label="Schooling" 
        :records="$projectConstants::$learnAbout"
        :isVertical="false" 
        multiple="true"
        secondaryInputLabel="Please provide other school name"
        secondaryInputWireModel="formData.educational_infos.other_school_name"
        selectedValue="{{ $formData['educational_infos']['schooling'] }}" 
    />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.educational_infos.speaking_capacity" 
                                                                label="Is S/he has Speaking Capacity?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.educational_infos.listening_capacity" 
                                                                label="Is S/he has Listening Capacity?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.educational_infos.reading_capacity" 
                                                                label="Is S/he has Reading Capacity?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.educational_infos.writing_capacity" 
                                                                label="Is S/he has Writing capacity?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.educational_infos.counting_capacity" 
                                                                label="Is S/he has Counting capacity? "
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                            <x-input-radio-or-check 
                                                                wireModel="formData.educational_infos.money_concept" 
                                                                label="Is S/he has Money concept?"
                                                                :records="$projectConstants::$yesNoEn" />
                                                            <!-- end row -->
                                                        </section>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPane {{ $currentTabLiveware === 6 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Child’s condition at his family ({{ $currentTabLiveware }})</span>
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
                                    <div class="tabPane {{ $currentTabLiveware === 7 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Number of children in the family ({{ $currentTabLiveware }})</span>
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
                                    <div class="tabPane {{ $currentTabLiveware === 8 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Schooling information ({{ $currentTabLiveware }})</span>
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
                                </div>
                                <!-- Footer -->
                                <div class="footer-btns pt-2 d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn btn-primary" wire:click="prevTab">Previous</button>
                                    <button type="submit"
                                        class="btn {{ $this->isLastTab() ? 'btn-success' : 'btn-primary' }}"
                                        @if($this->isLastTab())
                                        wire:click.prevent="submit" @else wire:click.prevent="nextTab" @endif>
                                        {{ $this->isLastTab() ? 'Submit' : 'Next' }}
                                    </button>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("sidebar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    </script>
</div>