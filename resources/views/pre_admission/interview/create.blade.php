@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__search__box">
                    <div class="row">
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search by ID (000001)"
                                    aria-label="Search by ID (000001)" aria-describedby="button-addon2">
                                <button class="btn btn-success" type="button" id="button-addon2">Button</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card__data__box">
                    <form action="">
                        <div class="field__data">
                            <div class="field__label">
                                <span>Interviewee Data</span>
                            </div>
                            <div class="input__field_data">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="auto-increment-input" class="col-md-4 col-form-label">Student
                                                ID:</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="student_id" type="text"
                                                    placeholder="Student ID" id="auto-increment-input" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="example-search-input"
                                                class="col-md-4 col-form-label">Name:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="name" placeholder="Student Name">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">Father Name:</label>
                                            <div class="col-md-8" id="fatherName">
                                                <x-input-text name="fatherName" type="text"
                                                    placeholder="Enter Father Name"> </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">Mother Name:</label>
                                            <div class="col-md-8" id="motherName">
                                                <x-input-text name="motherName" type="text"
                                                    placeholder="Enter Mother Name"> </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="example-email-input" class="col-md-4 col-form-label">Parents
                                                Email:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="fatherEmail" placeholder="Enter Parent's Email">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="example-email-input" class="col-md-4 col-form-label">Parent's
                                                Contact phone:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="fatherPhone"
                                                    placeholder="Enter Parent's Contact phone">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="example-password-input" class="col-md-4 col-form-label">Present
                                                Address:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="present_address"
                                                    placeholder="Student Present Address" rows="1">
                                                </x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="example-password-input"
                                                class="col-md-4 col-form-label">Parmanent
                                                Address:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="permanent_address"
                                                    placeholder="Student Parmanent Address" rows="1">
                                                </x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="example-password-input"
                                                class="col-md-4 col-form-label">Diagonosis:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="diagnosis"
                                                    placeholder="Student Parmanent Address" rows="1">
                                                </x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label class="col-md-4 col-form-label">Gender:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="gender" :records="$gender">
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label class="col-md-4 col-form-label">Blood Group:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="blood_group" :records="$bloodGroups">
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">Date of Birth:</label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="dob" type="date" placeholder="mm/dd/yyyy">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="example-email-input"
                                                class="col-md-4 col-form-label">Age:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="age" placeholder="Enter Age">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">Interview Date:</label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="dob" type="date" placeholder="mm/dd/yyyy">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label class="col-md-4 col-form-label">Payment Status:</label>
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <x-input-text name="status" value="Paid" readOnly>
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="">
                        <div class="field__data mt-5">
                            <div class="field__label">
                                <span>Interviewer Data</span>
                            </div>
                            <div class="input__field_data">
                                <div class="row">
                                    <!-- <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="auto-increment-input"
                                                class="col-md-4 col-form-label">Interviewer ID:</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="interviewer_id" type="text"
                                                    placeholder="Interviewer ID" id="auto-increment-input" readonly />
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="example-search-input"
                                                class="col-md-4 col-form-label">Name:</label>
                                            <div class="col-md-8">
                                                <select class="form-select" aria-label="Teacher Name">
                                                    <option selected disabled>--Select--</option>
                                                    <option value="1">000001-Teacher 1</option>
                                                    <option value="1">000002-Teacher 2</option>
                                                    <option value="1">000003-Teacher 3</option>
                                                    <option value="1">000004-Teacher 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">Contact:</label>
                                            <div class="col-md-8" id="motherName">
                                                <x-input-text name="motherName" type="text" placeholder="Contact">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="example-email-input"
                                                class="col-md-4 col-form-label">Experties:</label>
                                            <div class="col-md-8">
                                                <x-input-text name="fatherEmail" placeholder="Experties">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">Date:</label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="dob" type="date" placeholder="mm/dd/yyyy">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">Start Time:</label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="dob" type="time">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="" class="col-md-4 col-form-label">End Time:</label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="dob" type="time">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <button type="submit" class="btn btn-success w-100">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function generatePaddedValue(value) {
    return String(value).padStart(6, '0');
}

function incrementAndSetAutoIncrementValue() {
    let counter = localStorage.getItem('counter');
    counter = counter ? parseInt(counter) + 1 : 0;

    localStorage.setItem('counter', counter);
    let formattedDate = new Date().toLocaleDateString('en-GB', {
        day: '2-digit',
        month: '2-digit',
        year: '2-digit'
    }).split('/').join('/');

    document.getElementById('auto-increment-input').value = generatePaddedValue(counter) + '-' + formattedDate;
}

window.onload = function() {
    incrementAndSetAutoIncrementValue();
};
</script>
@endsection