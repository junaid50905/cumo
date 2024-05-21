@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('css')
<style>
.sidebar {
    width: 200px;
    background-color: #f0f0f0;
    float: left;
    height: 100vh;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar li {
    padding: 10px;
    cursor: pointer;
}

.sidebar li.active {
    background-color: #ccc;
}

.content {
    margin-left: 220px;
}

.tabPane {
    display: none;
}

.tabPane.active {
    display: block;
}

.tabContent .card__data__box {
    margin-top: -70px;
}

.tabContent .card__data__box section {
    padding-top: 10px;
    padding-right: 10px;
    max-height: 100vh;
    overflow-y: auto;
    overflow-x: hidden;
}

.assessor__signature {
    width: 100%;
    height: 40px;
}

.assessor__signature img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.sticky {
    position: fixed;
    top: 10%;
    height: auto;
}

.sticky+.content {
    padding-top: 60px;
}
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
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
                                    <li class="active" onclick="changeTab(0)">Introduction</li>
                                    @foreach($questions as $collectionName => $collection)
                                    <li onclick="changeTab({{ $loop->iteration }})">{{ $collectionName }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="content">
                                <div class="card__search__box">
                                    <div class="row">
                                        <form action="{{ route('assessment-pid-child-search.search') }}" method="POST">
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
                                <form id="myForm" action="{{ route('assessment-pid-child.store') }}" method="POST">
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
                                                                    <div class="mb-3">
                                                                        <label>Candidate ID:</label>
                                                                        <x-input-text name="appointment_id">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label>CandidateName:</label>
                                                                        <x-input-text name="name">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label>Sex:</label>
                                                                        <x-input-select name="gender" :records="$gender"
                                                                            firstLabel="Select Gender">
                                                                        </x-input-select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label>Date of Assessment:</label>
                                                                        <x-input-text name="assessment_date" type="date"
                                                                            placeholder="mm/dd/yyyy">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label>Age:</label>
                                                                        <x-input-text name="age" type="text"
                                                                            placeholder="Enter age">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Main Assessor’s Department :</label>
                                                                        <x-input-select
                                                                            name="main_assessor_department_id"
                                                                            :records="$departments"
                                                                            firstLabel="Select Assessor's Department"
                                                                            :required='true'>
                                                                        </x-input-select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Main Assessor’s name:</label>
                                                                        <x-input-select-custom
                                                                            name="main_assessor_teacher_id"
                                                                            :records="$all_user"
                                                                            firstLabel="Select Assessor's Name"
                                                                            :required='true'>
                                                                        </x-input-select-custom>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Signature :</label>
                                                                        <div class="assessor__signature">
                                                                            <img class="form-control"
                                                                                src="{{ url('/') }}/assets/images/signatures/signature.png"
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
                                                                        <x-input-select
                                                                            name="assistant_associator_department_id"
                                                                            :records="$departments"
                                                                            firstLabel="Select Department">
                                                                        </x-input-select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Assistant Associator's name:</label>
                                                                        <x-input-select-custom
                                                                            name="assistant_associator_teacher_id"
                                                                            :records="$all_user"
                                                                            firstLabel="Select Assistant Associator's  Name"
                                                                            :required='true'>
                                                                        </x-input-select-custom>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4 col-lg-4">
                                                                    <div class="mb-3 form-group">
                                                                        <label>Signature :</label>
                                                                        <div class="assessor__signature">
                                                                            <img class="form-control"
                                                                                src="{{ url('/') }}/assets/images/signatures/signature.png"
                                                                                alt="Signature">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $questionSerialNo = 1;
                                        @endphp
                                        @foreach($questions as $collectionName => $collection)
                                        <div class="tabPane">
                                            <div class="card__data__box">
                                                <div class="field__data mt-2">
                                                    <div class="field__label">
                                                        <span>{{ $collectionName }} Data</span>
                                                    </div>
                                                    <div class="input__field_data mt-2">
                                                        <section>
                                                            @foreach($collection as $question)
                                                            @if($question->is_reverse === 1)
                                                                <x-radio-four-options 
                                                                    name="option_{{$question->sub_category_id }}_{{ $question->id }}"
                                                                    label="{{ $question->name }}" 
                                                                    :options="[
                                                                        3 => 'Very False or Often False',
                                                                        2 => 'Sometimes or Somewhat False',
                                                                        1 => 'Sometimes or Somewhat True',
                                                                        0 => 'Very True or Often True'
                                                                    ]" 
                                                                    isVertical="vertical" 
                                                                    :id="$question->id" 
                                                                    :questionSerialNo="$questionSerialNo">
                                                                </x-radio-four-options>
                                                            @else 
                                                                <x-radio-four-options 
                                                                    name="option_{{$question->sub_category_id }}_{{ $question->id }}"
                                                                    label="{{ $question->name }}" 
                                                                    :options="[
                                                                        0 => 'Very False or Often False',
                                                                        1 => 'Sometimes or Somewhat False',
                                                                        2 => 'Sometimes or Somewhat True',
                                                                        3 => 'Very True or Often True'
                                                                    ]" 
                                                                    isVertical="vertical" 
                                                                    :id="$question->id" 
                                                                    :questionSerialNo="$questionSerialNo">
                                                                </x-radio-four-options>
                                                            @endif
                                                                @php
                                                                    $questionSerialNo ++;
                                                                @endphp
                                                            @endforeach
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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

<script>
var currentTab = 0;
var sidebarTabs = document.querySelectorAll('#sidebarTabs li');
var tabContent = document.querySelectorAll('.tabContent .tabPane');
var prevBtn = document.getElementById('prevBtn');
var nextBtn = document.getElementById('nextBtn');
var finishBtn = document.getElementById('finishBtn');
var form = document.getElementById('myForm');
// var tabIndexInput = document.getElementById('tabIndexInput');

function changeTab(tabIndex) {
    sidebarTabs.forEach(function(tab, index) {
        tab.classList.remove('active');
        if (index === tabIndex) {
            tab.classList.add('active');
        }
    });
    tabContent.forEach(function(content, index) {
        content.classList.remove('active');
        if (index === tabIndex) {
            content.classList.add('active');
        }
    });
    currentTab = tabIndex;
    toggleButtons();
    // updateTabIndexInput();
}

function prevTab() {
    if (currentTab > 0) {
        changeTab(currentTab - 1);
    }
}

function nextTab() {
    if (currentTab < sidebarTabs.length - 1) {
        changeTab(currentTab + 1);
    }
}

function finish() {
    form.submit();
}

function toggleButtons() {
    prevBtn.disabled = (currentTab === 0);
    nextBtn.style.display = (currentTab < sidebarTabs.length - 1) ? 'inline-block' : 'none';
    finishBtn.style.display = (currentTab === sidebarTabs.length - 1) ? 'inline-block' : 'none';
}

// function updateTabIndexInput() {
//     tabIndexInput.value = currentTab;
// }

// Initialize
toggleButtons();
// updateTabIndexInput();
</script>

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
@endsection