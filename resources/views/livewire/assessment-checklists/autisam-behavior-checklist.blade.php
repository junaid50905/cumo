<div class="row">
    <style>
        .tabContent .card__data__box#card__data__box {
            margin-top: 0px;
        }

        .tabContent .card__data__box#card__data__box .field__label span {
            font-size: 12px;
        }
    </style>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__data__box">
                    <div class="field__data mt-2">
                        <div class="field__label">
                            <span>Autism Behavior Checklist (ABC Checklist)</span>
                        </div>
                        <div class="input__field_data mt-2">
                            <div class="sidebar" id="sidebar">
                                <ul id="sidebarTabs">
                                    <li class="{{ $currentTabLivewire === 0 ? 'active' : '' }}"
                                        wire:click="changeCurrentTab(0)">Introduction</li>
                                    @foreach($questions as $title => $questionGroup)
                                        <li class="{{ $currentTabLivewire === $loop->iteration ? 'active' : '' }}"
                                            wire:click="changeCurrentTab({{ $loop->iteration }})">
                                            {{ $title }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="content">
                                <div class="card__search__box custom__search__box d-flex gap-2">
                                    <div class="flex-grow-1">
                                        <form action="{{ route('care-need-part-one-search.search') }}" method="POST">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="search_id" class="form-control"
                                                    placeholder="Search by ID (000001)"
                                                    aria-label="Search by ID (000001)" aria-describedby="button-addon2">
                                                <button class="btn btn-success" type="submit"
                                                    id="button-addon2">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="tabContent" class="tabContent">
                                    <!-- Introduction Tab -->
                                    <div class="tabPane {{ $currentTabLivewire === 0 ? 'active' : '' }}">
                                        <div class="card__data__box">
                                            <div class="field__data mt-2">
                                                <div class="field__label">
                                                    <span>Introduction ({{ $currentTabLivewire }})</span>
                                                </div>
                                                <div class="input__field_data mt-2">
                                                    <form wire:submit.prevent="nextTab">
                                                        <section>
                                                            appointment_id<input type="text"
                                                                wire:model="formData.introduction.appointment_id">
                                                            main_teacher_id<input type="text"
                                                                wire:model="formData.introduction.main_teacher_id">
                                                            assistant_teacher_id <input type="text"
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

                                    <!-- Dynamic Tabs for Questions -->
                                    @foreach($questions as $title => $questionGroup)
                                        <div class="tabPane {{ $currentTabLivewire === $loop->iteration ? 'active' : '' }}">
                                            <div class="card__data__box">
                                                <div class="field__data mt-2">
                                                    <div class="field__label">
                                                        <span>{{ $title }} ({{ $currentTabLivewire }})</span>
                                                    </div>
                                                    <div class="input__field_data mt-2">
                                                        <form wire:submit.prevent="nextTab">
                                                            <section>
                                                                @foreach($questionGroup as $question)
                                                                    <x-radio-options-with-code 
                                                                        type="radio"
                                                                        wireModel="formData.answers.{{ $question['category_id'] }}_{{ $question['sub_category_id'] }}_{{ $question['id'] }}"
                                                                        label="{{ $question['question'] }}"
                                                                        name="question_{{ $question['id'] }}"
                                                                        :options="$question['options']"
                                                                        :isVertical="true"
                                                                        :linkCodes="$question['link_codes']"
                                                                        :categoryId="$question['category_id']"
                                                                        :subCategoryId="$question['sub_category_id']"
                                                                        :questionId="$question['id']"
                                                                        :questionSerialNo="$loop->iteration"
                                                                        :formData="$formData" 
                                                                    >
                                                                    </x-radio-options-with-code>
                                                                @endforeach
                                                            </section>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Footer -->
                                <div class="footer-btns pt-2 d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn btn-primary"
                                        wire:click="prevTab">Previous</button>
                                    <button type="submit"
                                        class="btn {{ $currentTabLivewire === count($questions) ? 'btn-success' : 'btn-primary' }}"
                                        @if ($currentTabLivewire === count($questions)) wire:click.prevent="submit" @else wire:click.prevent="nextTab" @endif>
                                        {{ $currentTabLivewire === count($questions) ? 'Submit' : 'Next' }}
                                    </button>
                                </div>
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