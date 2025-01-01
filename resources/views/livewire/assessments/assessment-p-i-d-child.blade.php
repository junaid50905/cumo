@inject('session', '\Illuminate\Support\Facades\Session')
<div>
    <div class="row">
        <div class="col-xl-12">
            @if (Session::has('alert'))
                @php
                    $alert = Session::get('alert');
                @endphp
                <div id="alert-message" class="alert alert-{{ $alert['type'] }} alert-dismissible fade show" role="alert">
                    <strong>{{ $alert['title'] }}</strong> {{ $alert['message'] }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="card__data__box">
                        <div class="field__data mt-2">
                            <div class="field__label">
                                <span>The Personality Inventory for DSM-5 (PID-5) Child Age 11-17</span>
                            </div>
                            <div class="input__field_data mt-2">
                                <div class="sidebar" id="sidebar">
                                    <ul id="sidebarTabs">
                                        <li class="{{ $currentTabLiveware === 0 ? 'active' : '' }}"
                                            wire:click="changeCurrentTab(0)">Introduction</li>
                                        @foreach($questions as $collectionName => $collection)
                                        <li class="{{ $currentTabLiveware === $loop->iteration ? 'active' : '' }}"
                                            wire:click="changeCurrentTab({{ $loop->iteration }})">
                                            {{ $collectionName }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="content">
                                    <div class="card__search__box">
                                        <div class="row">
                                            <form action="{{ route('assessment-pid-child-search.search') }}"
                                                method="POST">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="search_id"
                                                        placeholder="Search by ID (000001)" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="submit">Search</button>
                                                    </div>
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
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label>Candidate ID:</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.student_id"
                                                                                readOnly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label>CandidateName:</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.name"
                                                                                readOnly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label>Sex:</label>
                                                                            <x-input-select
                                                                                wireModel="formData.introduction.gender"
                                                                                :records="$gender" disabled>
                                                                            </x-input-select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label>Age:</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.age"
                                                                                readOnly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label>Date of Assessment:</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.assessment_date"
                                                                                type="date" placeholder="mm/dd/yyyy" required>
                                                                            </x-input-text>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                                                        <div class="mb-3 form-group">
                                                                            <label>Main Assessor’s Department
                                                                                :</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.main_teacher_department_name"
                                                                                readOnly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                                                        <div class="mb-3 form-group">
                                                                            <label>Main Assessor’s name:</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.main_teacher_name"
                                                                                readOnly />
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
                                                                            <label>Assistant Associator's
                                                                                Designation
                                                                                :</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.assistant_teacher_department_name"
                                                                                readOnly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                                                        <div class="mb-3 form-group">
                                                                            <label>Assistant Associator's
                                                                                name:</label>
                                                                            <x-input-text
                                                                                wireModel="formData.introduction.assistant_teacher_name"
                                                                                readOnly />
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
                                        @php
                                        $questionSerialNo = 1;
                                        @endphp
                                        @foreach($questions as $collectionName => $collection)
                                        <div
                                            class="tabPane {{ $currentTabLiveware === $loop->iteration ? 'active' : '' }}">
                                            <div class="card__data__box">
                                                <div class="field__data mt-2">
                                                    <div class="field__label">
                                                        <span>{{ $collectionName }} Data
                                                            ({{ $currentTabLiveware }})</span>
                                                    </div>
                                                    <div class="input__field_data mt-2">
                                                        <form wire:submit.prevent="nextTab">
                                                            <section>
                                                                @foreach($collection as $question)
                                                                @if($question['is_reverse'] === 1)
                                                                <x-radio-four-options
                                                                    wireModel="formData.{{ strtolower(str_replace(' ', '_', $collectionName)) }}.option_{{ $question['sub_category_id'] }}_{{ $question['id'] }}"
                                                                    name="option_{{$question['sub_category_id'] }}_{{ $question['id'] }}"
                                                                    type="radio" label="{{ $question['name'] }}"
                                                                    :options="[
                                                                        3 => 'Very False or Often False',
                                                                        2 => 'Sometimes or Somewhat False',
                                                                        1 => 'Sometimes or Somewhat True',
                                                                        0 => 'Very True or Often True'
                                                                    ]" isVertical="vertical" :id="$question['id']"
                                                                    :questionSerialNo="$questionSerialNo">
                                                                </x-radio-four-options>
                                                                @else
                                                                <x-radio-four-options
                                                                    wireModel="formData.{{ strtolower(str_replace(' ', '_', $collectionName)) }}.option_{{ $question['sub_category_id'] }}_{{ $question['id'] }}"
                                                                    name="option_{{ $question['sub_category_id'] }}_{{ $question['id'] }}"
                                                                    type="radio" label="{{ $question['name'] }}"
                                                                    :options="[
                                                                        0 => 'Very False or Often False',
                                                                        1 => 'Sometimes or Somewhat False',
                                                                        2 => 'Sometimes or Somewhat True',
                                                                        3 => 'Very True or Often True'
                                                                    ]" isVertical="vertical" :id="$question['id']"
                                                                    :questionSerialNo="$questionSerialNo">
                                                                </x-radio-four-options>
                                                                @endif
                                                                @php
                                                                $questionSerialNo ++;
                                                                @endphp
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
                                            class="btn {{ $this->isLastTab() ? 'btn-success' : 'btn-primary' }}"
                                            @if($this->isLastTab())
                                            wire:click.prevent="submit" @else wire:click.prevent="nextTab" @endif>
                                            {{ $this->isLastTab() ? 'Submit' : 'Next' }}
                                        </button>
                                    </div>
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