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

/* Print CSS start */

.page-header,
.page-header-space {
    height: 120px;
}

.page-footer,
.page-footer-space {
    height: 60px;
}

.page-header {
    position: fixed;
    top: 0mm;
    width: 100%;
    border-bottom: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.page-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    border-top: 1px solid black;
    text-align: center;
}

.page-header .logo__part {
    width: 70px;
}

.page-header .logo__part img {
    width: 100%;
}

.company__title {
    text-align: center;
    line-height: 5px;
}

.page {
    /* width: 21cm;
    min-height: 29.7cm; */
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.printed__data table {
    width: 101%;
}
.page table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.page td,
.page th {
    border: 1px solid #5a5858;
    text-align: left;
    padding: 5px 8px;
}

.page tr:nth-child(even) {
    background-color: #dddddd;
}

.page table tbody tr td:first-child {
    font-weight: bold;
}

.page__table__title {
    height: auto;
    width: 100%;
    margin: 0 auto;
}

.page__table__title .report__header__title h2 {
    font-size: 1.5rem;
    background-color: #2d3dc6;
    color: white;
    width: fit-content;
    margin: 0 auto;
    padding: 7px 13px;
    border-radius: 30px;
    text-transform: capitalize;
    border: 2px solid red;
}

.company__details {
    text-align: center;
    line-height: 5px;
    font-weight: 700;
}

.care__need__part__one__report {
    display: flex;
    align-items: start;
    justify-content: space-between;
    padding-top: 10px;
}

.student__part,
.teacher__part {
    line-height: 5px;
}

.teacher__signature {
    display: flex;
    flex-direction: row;
    line-height: 0;
    margin-top: 45px;
    align-items: center;
    justify-content: space-around;
}

.signature__div {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.signature__text{
    font-size: 12px;
}

.printed__data {
    display: none;
}

/* .normal__data {
    display: none;
} */

@media print {
    body {
        margin: 0;
        padding: 0;
        background-color: #fff !important;
    }

    .printed__data {
        display: block;
    }

    .normal__data {
        display: none;
    }

    .page {
        border: initial;
        border-radius: initial;
        /* width: initial;
        min-height: initial; */
        box-shadow: initial;
        page-break-after: always;
        margin: 5px 0px;
    }

    @page {
        margin: 0;
        size: A4;
        counter-increment: page;
    }

    .page-header {
        width: 98%;
    }

    .page-footer {
        bottom: -20px;
    }

    .printed__data table {
        width: 101%;
    }

    .page table {
        width: 100%;
        height: auto;
    }

    thead {
        display: table-header-group;
    }

    tfoot {
        display: table-footer-group;
    }
}

/* Print CSS end */
</style>
@endsection
@section('content')
<div>
    <div class="normal__data">
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
                                            <li onclick="changeTab(2)">Types of specialty / disability / impairments
                                            </li>
                                            <li onclick="changeTab(3)">Assessment Information</li>
                                            <li onclick="changeTab(4)">Condition at Home Information</li>
                                            <li onclick="changeTab(5)">Educational Information</li>
                                            <li onclick="changeTab(6)">Child’s condition at his family</li>
                                            <li onclick="changeTab(7)">Number of children in the family</li>
                                            <li onclick="changeTab(8)">Schooling</li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <div class="card__search__box">
                                            <div class="row mb-2">
                                                <div class="col text-end">
                                                    <button type="button" onClick="window.print()"
                                                        class="btn btn-primary">
                                                        PRINT
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="myForm" action="{{ route('care-need-part-one.store') }}"
                                            method="POST">
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
                                                                        <!-- <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label>Date:</label>
                                                                        <x-input-text name="collection_date" type="date"
                                                                            placeholder="mm/dd/yyyy" :required="true">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label>Testing Date:</label>
                                                                        <x-input-text name="collection_date" type="date"
                                                                            placeholder="mm/dd/yyyy" :required="true">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div> -->
                                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <label>Name:</label>
                                                                                        <x-input-text name="teacher_id">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="mb-3 form-group">
                                                                                        <label>Sex:</label>
                                                                                        <x-input-select name="gender"
                                                                                            :records="$gender"
                                                                                            firstLabel="Select Gender">
                                                                                        </x-input-select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <label>Date of Birth:</label>
                                                                                        <x-input-text
                                                                                            name="collection_date"
                                                                                            type="date"
                                                                                            placeholder="mm/dd/yyyy">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <label>Age:</label>
                                                                                        <x-input-text
                                                                                            name="collection_date"
                                                                                            type="text"
                                                                                            placeholder="Enter age">
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
                                                                                        <x-input-text name="motherName">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <div class="mb-3 form-group">
                                                                                            <label>Mother’s level of
                                                                                                education:</label>
                                                                                            <x-input-select
                                                                                                name="motherEduLevel"
                                                                                                :records="$eduClass"
                                                                                                firstLabel="Select Level">
                                                                                            </x-input-select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <label>Mother's
                                                                                            Occupation:</label>
                                                                                        <x-input-text
                                                                                            name="motherOccupation">
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
                                                                                        <x-input-text name="fatherName">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <div class="mb-3 form-group">
                                                                                            <label>Father’s level of
                                                                                                education:</label>
                                                                                            <x-input-select
                                                                                                name="fatherEduLevel"
                                                                                                :records="$eduClass"
                                                                                                firstLabel="Select Level">
                                                                                            </x-input-select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <label>Father's
                                                                                            Occupation:</label>
                                                                                        <x-input-text
                                                                                            name="fatherOccupation">
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
                                                                                        <x-input-text name="phone">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="mb-3">
                                                                                        <label>Email:</label>
                                                                                        <x-input-text name="email">
                                                                                        </x-input-text>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label>Home Address:</label>
                                                                                <x-input-text name="homeAddress">
                                                                                </x-input-text>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                                                            <div class="mb-3 form-group">
                                                                                <label>Main Assessor’s Department
                                                                                    :</label>
                                                                                <x-input-select
                                                                                    name="main_teacher_department"
                                                                                    :records="$department"
                                                                                    firstLabel="Select Department">
                                                                                </x-input-select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                                                            <div class="mb-3 form-group">
                                                                                <label>Main Assessor’s name:</label>
                                                                                <select class="form-select"
                                                                                    aria-label="Teacher Name"
                                                                                    name="main_teacher_id"
                                                                                    id="mainTeacher"
                                                                                    onchange="addEventTitle()">
                                                                                    <option selected disabled>--Select
                                                                                        Main
                                                                                        Teacher--</option>
                                                                                    <option
                                                                                        value="000001-Sajida Rahman Danny">
                                                                                        000001-Sajida Rahman
                                                                                        Danny(Founder Chairman)
                                                                                    </option>
                                                                                    <option
                                                                                        value="000002-Begum Nurjahan Dipa">
                                                                                        000002-Begum Nurjahan
                                                                                        Dipa (Principal)
                                                                                    </option>
                                                                                    <option
                                                                                        value="000003-Md. Amir Hossain">
                                                                                        000003-Md. Amir Hossain
                                                                                        (Senior Prog.
                                                                                        Specialist)</option>
                                                                                    <option
                                                                                        value="000004-Md. Abul Hasanat">
                                                                                        000004-Md. Abul Hasanat
                                                                                        (Physiotherapist)
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                                                            <div class="mb-3 form-group">
                                                                                <label>Signature :</label>
                                                                                <div class="assessor__signature">
                                                                                    <img class="form-control"
                                                                                        src="http://127.0.0.1:8000/assets/images/logo-light.png"
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
                                                                                <x-input-select
                                                                                    name="assistant_teacher_department"
                                                                                    :records="$department"
                                                                                    firstLabel="Select Department">
                                                                                </x-input-select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                                                            <div class="mb-3 form-group">
                                                                                <label>Assistant Associator's
                                                                                    name:</label>
                                                                                <select class="form-select"
                                                                                    aria-label="Teacher Name"
                                                                                    name="assistant_teacher_id">
                                                                                    <option selected disabled>--Select
                                                                                        Assistant
                                                                                        Teacher--</option>
                                                                                    <option
                                                                                        value="000001-Airin Siddique">
                                                                                        000001-Airin
                                                                                        Siddique(Assistant
                                                                                        Programme Officer)</option>
                                                                                    <option value="000002-Sakil Akon">
                                                                                        000002-Sakil Akon(Junior Program
                                                                                        Assistant)</option>
                                                                                    <option
                                                                                        value="000003-Md. Rizwanur Rahman">
                                                                                        000003-Md. Rizwanur
                                                                                        Rahman (Project Technical
                                                                                        Manager)</option>
                                                                                    <option
                                                                                        value="000004-Sharmin Akter">
                                                                                        000004-Sharmin Akter(Chief
                                                                                        Executive
                                                                                        Officer )</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 col-md-4 col-lg-4">
                                                                            <div class="mb-3 form-group">
                                                                                <label>Signature :</label>
                                                                                <div class="assessor__signature">
                                                                                    <img class="form-control"
                                                                                        src="http://127.0.0.1:8000/assets/images/logo-light.png"
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
                                                <div class="tabPane">
                                                    <div class="card__data__box">
                                                        <div class="field__data mt-2">
                                                            <div class="field__label">
                                                                <span>General Information</span>
                                                            </div>
                                                            <div class="input__field_data mt-2">
                                                                <section>
                                                                    <!-- <div class="col-lg-12">
                                                                <div class="mb-2">
                                                                    <label for="verticalnav-phoneno-input">Enter General information:</label>
                                                                     <p>Enter common information</p> 
                                                                </div>
                                                            </div> -->
                                                                    <!-- <x-input-radio-or-check
                                                                name="from_where_you_learned_about_us" type="checkbox"
                                                                label="From where you learned about us?"
                                                                :records="$projectConstants::$learnAbout"
                                                                :isVertical="false" multiple="true"
                                                                secondaryInputLabel="If other, specify name" /> -->
                                                                    <!-- row end -->

                                                                    <div class="mb-3 form-group">
                                                                        <label>From where you learned about us?</label>
                                                                        <x-input-select name="learnAbout"
                                                                            :records="$learnAbout"
                                                                            firstLabel="Select learn about">
                                                                        </x-input-select>
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
                                                                                <h6>Doctor / physician (under medical
                                                                                    treatment)
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
                                                                                    <x-input-text
                                                                                        name="contact_umber" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="govt_disability_registration"
                                                                        label="Govt.Disability registration"
                                                                        :records="$projectConstants::$yesNoEn"
                                                                        secondaryInputLabel="If not, why?" />
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h6>If yes, enter registration number
                                                                                </h6>
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
                                                                    <x-input-radio-or-check
                                                                        name="referred_to_parents_forum"
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
                                                                <span>Types of specialty / disability /
                                                                    impairments</span>
                                                            </div>
                                                            <div class="input__field_data mt-2">
                                                                <section>
                                                                    <!-- <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label
                                                                        for="verticalnav-phoneno-input">Instruction:</label>
                                                                    <p>Enter Types of speciality / disability /
                                                                        impairments information</p>
                                                                </div>
                                                            </div> -->
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check name="iss_she_has_autism"
                                                                        label="Is S/he has Autism?"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_down_syndrome"
                                                                        label="Is S/he has Down Syndrome"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_cerebral_palsy"
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
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_learning_disability"
                                                                        label="Is S/he has Learning disability"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_anxiety_disorder"
                                                                        label="Is S/he has Anxiety disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check name="is_she_has_adhd"
                                                                        label="Is S/he has ADHD "
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_bipolar_disorder"
                                                                        label="Is S/he has Bipolar Disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_he_has_speech_disorder"
                                                                        label="Is S/he has Speech disorder "
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_language_disorder"
                                                                        label="Is S/he has Language disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check name="is_she_has_ocd"
                                                                        label="Is S/he has OCD"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_eating_disorder"
                                                                        label="Is S/he has Eating disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_schizophrenia"
                                                                        label="Is S/he has Schizophrenia"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_multiple_personality_disorder"
                                                                        label="Is S/he has Multiple Personality Disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_tic_disorder"
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
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_writing_disorder"
                                                                        label="Is S/he has Writing disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_reading_disorder"
                                                                        label="Is S/he has Reading disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_match_disorder"
                                                                        label="Is S/he has Match Disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_attachment_disorder"
                                                                        label="Is S/he has Attachment Disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_separation_anxiety_disorder"
                                                                        label="Is S/he has Separation Anxiety Disorder"
                                                                        :records="$projectConstants::$yesNoDontknow" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_sleep_disorder"
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
                                                                    <!-- <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label
                                                                        for="verticalnav-phoneno-input">Instruction:</label>
                                                                    <p>Enter Assessment information</p>
                                                                </div>
                                                            </div> -->
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
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_speaking_capacity"
                                                                        label="Separate room?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_listening_capacity"
                                                                        label="Separate bed?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_reading_capacity"
                                                                        label="Sleep alone?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_writing_capacity"
                                                                        label="Separate Cupboard?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="is_she_has"
                                                                        label="Separate toilet?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_counting_capacity"
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
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_money_concept"
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
                                                                    <!-- <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label
                                                                        for="verticalnav-phoneno-input">Instruction:</label>
                                                                    <p>Enter Educational Information</p>
                                                                </div>
                                                            </div> -->
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check name="schooling"
                                                                        type="checkbox" label="Schooling"
                                                                        :records="$projectConstants::$learnAbout"
                                                                        :isVertical="false" multiple="true"
                                                                        secondaryInputLabel="Please provide other school name" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_speaking_capacity"
                                                                        label="Is S/he has Speaking Capacity?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_listening_capacity"
                                                                        label="Is S/he has Listening Capacity?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_reading_capacity"
                                                                        label="Is S/he has Reading Capacity?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_writing_capacity"
                                                                        label="Is S/he has Writing capacity?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_counting_capacity"
                                                                        label="Is S/he has Counting capacity? "
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_has_money_concept"
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
                                                                    <!-- <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label
                                                                        for="verticalnav-phoneno-input">Instruction:</label>
                                                                    <p>Enter Educational Information</p>
                                                                </div>
                                                            </div> -->
                                                                    <!-- end row -->
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
                                                                    <x-input-radio-or-check
                                                                        name="is_she_well_protective"
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
                                                                        name="knowledge_on_aily_life_requirement"
                                                                        type="checkbox"
                                                                        label="Knowledge on Daily life requirement. (Please select (tick) only those items s/he has knowledge)"
                                                                        :records="$projectConstants::$dailyLife"
                                                                        :isVertical="false" multiple="true" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="is_she_follow_instructions"
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
                                                                    <x-input-radio-or-check
                                                                        name="follow_any_specific_life_style"
                                                                        label="Follow any specific life style?"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="what_is_the_way_of_communication"
                                                                        type="checkbox"
                                                                        label="What is the way of Communication?"
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
                                                                    <!-- <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label
                                                                        for="verticalnav-phoneno-input">Instruction:</label>
                                                                    <p>Enter Number of children in the family</p>
                                                                </div>
                                                            </div> -->
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
                                                                                    <x-input-textarea rows="1"
                                                                                        name="age" />
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
                                                                                    <x-input-textarea rows="1"
                                                                                        name="age" />
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
                                                                                    <x-input-textarea rows="1"
                                                                                        name="age" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="marriage_within_family_relative"
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
                                                                    <x-input-radio-or-check
                                                                        name="family_economical_condition"
                                                                        label="Family Economical condition"
                                                                        :records="$projectConstants::$famCon"
                                                                        secondaryInputLabel="Net earning of a year" />
                                                                    <div class="row border-top py-2">
                                                                        <div class="col-xl-12 col-sm-12">
                                                                            <div class="m-0">
                                                                                <h6>Any other Family information that
                                                                                    may
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
                                                                    <!-- <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label
                                                                        for="verticalnav-phoneno-input">Instruction:</label>
                                                                    <p>Enter Schooling information</p>
                                                                </div>
                                                            </div> -->
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
                                                                                    <x-input-text
                                                                                        name="name_of_the_school" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="studied_till_which_class"
                                                                        label="Studied till which class?"
                                                                        :records="$projectConstants::$class" />
                                                                    <!-- end row -->
                                                                    <x-input-radio-or-check
                                                                        name="why_not_attending_school" type="checkbox"
                                                                        label="Why not attending school?"
                                                                        :records="$projectConstants::$attendSchool"
                                                                        :isVertical="false" multiple="true"
                                                                        secondaryInputLabel="Please provide other information" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check
                                                                        name="any_exam_degree_achieved"
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
                                                                    <x-input-radio-or-check name="separate_bed"
                                                                        label="Separate bed"
                                                                        :records="$projectConstants::$yesNoEn" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check name="sleep_alone"
                                                                        label="Sleep alone?"
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
                                                                        label="Own equipment"
                                                                        :records="$projectConstants::$Ph"
                                                                        secondaryInputLabel="Other" />
                                                                    <!-- row end -->
                                                                    <x-input-radio-or-check name="anything_else"
                                                                        label="Anything else"
                                                                        :records="$projectConstants::$yesNoEn"
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
                                                                                    <x-input-text type="date"
                                                                                        name="date" />
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
                                                                                    <x-input-text type="date"
                                                                                        name="date" />
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
                                            <div
                                                class="footer-btns pt-2 d-flex justify-content-between align-items-center">
                                                <button type="button" class="btn btn-primary" onclick="prevTab()"
                                                    id="prevBtn" style="display:inline-block;">Previous</button>
                                                <button type="button" class="btn btn-primary" onclick="nextTab()"
                                                    id="nextBtn">Next</button>
                                                <button type="button" class="btn btn-success" onclick="finish()"
                                                    id="finishBtn" style="display:none;">Finish</button>
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
    </div>
    <div class="printed__data">
        <div class="page-header">
            <div class="logo__part">
                <img src="http://127.0.0.1:8000/images/pfda-logo.jpg" alt="">
            </div>
            <div class="company__title">
                <h2>CUMO Company Limited, Bangladesh</h2>
                <p>Banani, Dhaka-1215</p>
                <span><strong>Email:</strong> <a href="mailto:cumo@cumo.com">cumo@cumo.com</a>, <strong>Phone:
                    </strong>01521111111</span>
            </div>
            <div class="company__details">
                <p>Care Need Part One</p>
                <p>SID: #0000012-12/03/24</p>
                <strong id="report_date"></strong>
            </div>
        </div>

        <div class="page-footer">
            <span>Email: <a href="mailto:cumo@cumo.com">cumo@cumo.com</a>, Phone: 01521111111</span>
        </div>

        <table>
            <thead>
                <tr>
                    <td>
                        <div class="page-header-space"></div>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__header__title">
                                    <h2>Care Neet Part One</h2>
                                </div>
                                <div class="care__need__part__one__report">
                                    <div class="student__part">
                                        <p><strong>Name:</strong> Student Name</p>
                                        <p><strong>Student ID:</strong> S1234567</p>
                                        <p><strong>Father's Name:</strong> Father Name</p>
                                        <p><strong>Phone:</strong> 021547896336</p>
                                    </div>
                                    <div class="teacher__part">
                                        <p><strong>Main Teacher:</strong> Main teacher Name</p>
                                        <p><strong>Assistant Teacher:</strong> Assistant teacher name</p>
                                        <p><strong>Interview Date:</strong> 07-Mar-2024</p>
                                    </div>
                                </div>
                                <div class="report__section__title">
                                    <h2>Introduction: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-4 text-center">Title</th>
                                        <th class="col-8 text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Interview Date</td>
                                        <td>12-Mar-2024</td>
                                    </tr>
                                    <tr>
                                        <td>Student ID</td>
                                        <td>#000012-12/03/24</td>
                                    </tr>
                                    <tr>
                                        <td>Student Name</td>
                                        <td>Maria Anders</td>
                                    </tr>
                                    <tr>
                                        <td>Sex</td>
                                        <td>Male</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>12-Mar-2024</td>
                                    </tr>
                                    <tr>
                                        <td>Age</td>
                                        <td>2 Years</td>
                                    </tr>
                                    <tr>
                                        <td>Father’s name</td>
                                        <td>Giovanni Rovelli</td>
                                    </tr>
                                    <tr>
                                        <td>Father’s level of education</td>
                                        <td>Masters</td>
                                    </tr>
                                    <tr>
                                        <td>Occupation</td>
                                        <td>Teacher</td>
                                    </tr>
                                    <tr>
                                        <td>Mother’s name</td>
                                        <td>Mother name</td>
                                    </tr>
                                    <tr>
                                        <td>Mother’s level of education</td>
                                        <td>Masters</td>
                                    </tr>
                                    <tr>
                                        <td>Occupation</td>
                                        <td>Teacher</td>
                                    </tr>
                                    <tr>
                                        <td>Home Address</td>
                                        <td>Home Address</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>012457896325</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>example@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Main Assessor’s name</td>
                                        <td>Assessor name</td>
                                    </tr>
                                    <tr>
                                        <td>Main Assessor’s Department</td>
                                        <td>Assessor’s Department </td>
                                    </tr>
                                    <tr>
                                        <td>Main Assessor’s Designation </td>
                                        <td>Assessor Designation </td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Assessor’s name</td>
                                        <td>Assessor name</td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Assessor’s Department</td>
                                        <td>Assessor’s Department </td>
                                    </tr>
                                    <tr>
                                        <td>Assistant Assessor’s Designation </td>
                                        <td>Assessor Designation </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="teacher__signature">
                                <div class="signature__div">
                                    <p>............................................................................................................</p>
                                    <p class="signature__text">Main Teacher Signature</p>
                                </div>
                                <div class="signature__div">
                                    <p>............................................................................................................</p>
                                    <p class="signature__text">Asst. Teacher Signature</p>
                                </div>
                            </div>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>General Information: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>From where you learned about us?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Doctor / physician (under medical treatment) name</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Govt. Disability registration</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Suggestion on obtaining registration</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Referred to Parents Forum</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>Types of specialty / disability / impairments: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Is S/he has Autism?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Down Syndrome?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Cerebral Palsy?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Intellectual Disability?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Dyslexia?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Learning disability?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Anxiety disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has ADHD?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Bipolar Disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Speech disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Language disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has OCD?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Eating disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Schizophrenia?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Multiple Personality Disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has TIC disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Sluttering?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Depression?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Writing disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Reading disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Match Disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Attachment Disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Separation Anxiety Disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Sleep disorder?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>Assessment Information: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Is Social Communication checklist has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Sensory Checklist has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Occupational Assessment has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Speech and Language Assessment has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Physiotherapy assessment has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Fundamental Movement Skills has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Functional evaluation has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Psychological assessment has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is Academic Assessment has completed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>Condition at Home Information: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Separate room?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Separate bed?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Sleep alone?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Separate Cupboard?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Separate toilet ?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Own equipment?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Anything else?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>Educational Information: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Schooling</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Speaking Capacity?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Listening Capacity?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Reading Capacity?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Writing capacity?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Counting capacity?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Money concept?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>Child’s condition at his family: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Is s/he Happy at home?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he Lonely?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he Protective?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he Well protective?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he Withdrawal?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he Confident?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he Communicate?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Knowledge on Daily life requirement. (Please select (tick) only those items s/he has knowledge)</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he Follow instructions?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Sitting habit and how long?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he has Hyperness ? how long it remain?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he do Tantrum ? how long it remain?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he Do Self injury?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Follow any specific life style?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>What is the way of Communication?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>How he/she can Follow instructions?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is s/he do Temper? how long it remain?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is S/he Hit Others?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>Number of children in the family: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1. Is your other child support towards sibling?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>2. Is your other child support towards sibling?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>3. Is your other child support towards sibling?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Marriage within family/ relative?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Is any other relative have disabilities?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Family Economical condition</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Any other Family information that may relevant to share</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="page">
                            <div class="page__table__title">
                                <div class="report__section__title">
                                    <h2>Schooling Information: </h2>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="col-6">Question</th>
                                        <th class="col-2">Answer</th>
                                        <th class="col-2">Additional Note-1</th>
                                        <th class="col-2">Additional Note-2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Going to school?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Name of the school</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Studied till which class?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Why not attending school?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                    <tr>
                                        <td>Any exam/ degree achieved?</td>
                                        <td>Answer</td>
                                        <td>NoteOne</td>
                                        <td>NoteTwo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <div class="page-footer-space"></div>
                    </td>
                </tr>
            </tfoot>
        </table>
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

<script>
window.onload = function() {
    document.getElementById('report_date').innerText = new Date().toLocaleDateString('en-GB', {
        day: '2-digit',
        month: 'short',
        year: 'numeric'
    });
};
</script>
@endsection