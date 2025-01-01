@extends('layouts.master')
@section('title')
@lang('translation.Tabs_&_Accordions')
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card__data__box">
                    <form action="{{ route('appointment.store') }}" method="POST">
                        @csrf
                        <div class="field__data mt-2">
                            <div class="field__label">
                                <span>Appointment Data</span>
                            </div>
                            <div class="input__field_data mt-2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3 ">
                                        <div class="row">
                                            <label for="name" class="col-md-4 col-form-label">Name<span
                                                    class="text-danger">*</span> :</label>
                                            <div class="col-md-8">
                                                <x-input-text name="name" placeholder="Student Name" required>
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="student_id" class="col-md-4 col-form-label">Student
                                                ID:</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="student_id" type="text"
                                                    placeholder="Student ID" value="{{ $uniqueId }}" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="father_name" class="col-md-4 col-form-label">Father
                                                Name:</label>
                                            <div class="col-md-8" id="fatherName">
                                                <x-input-text name="father_name" type="text"
                                                    placeholder="Enter Father Name"> </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="mother_name" class="col-md-4 col-form-label">Mother
                                                Name:</label>
                                            <div class="col-md-8" id="motherName">
                                                <x-input-text name="mother_name" type="text"
                                                    placeholder="Enter Mother Name"> </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="parent_email" class="col-md-4 col-form-label">Parents
                                                Email:</label>
                                            <div class="col-md-8">
                                                <x-input-text type="email" name="parent_email"
                                                    placeholder="Enter Parent's Email">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="present_address" class="col-md-4 col-form-label">Present
                                                Address:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="present_address"
                                                    placeholder="Enter Present Address" rows="1"></x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="permanent_address" class="col-md-4 col-form-label">Parmanent
                                                Address:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="permanent_address"
                                                    placeholder="Enter Parmanent Address" rows="1">
                                                </x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="diagnosis" class="col-md-4 col-form-label">Diagonosis:</label>
                                            <div class="col-md-8">
                                                <x-input-textarea name="diagnosis" placeholder="Enter Diagnosis"
                                                    rows="1"></x-input-textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="gender" class="col-md-4 col-form-label">Gender:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="gender" :records="$gender"
                                                    firstLabel="Select Gender">
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="blood_group" class="col-md-4 col-form-label">Blood
                                                Group:</label>
                                            <div class="col-md-8">
                                                <x-input-select name="blood_group" :records="$bloodGroups"
                                                    firstLabel="Select Blood">
                                                </x-input-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="dob" class="col-md-4 col-form-label">Date of Birth: </label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="dob" type="date" placeholder="mm/dd/yyyy">
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="age" class="col-md-4 col-form-label">Age<span
                                                    class="text-danger">*</span> :</label>
                                            <div class="col-md-8">
                                                <x-input-text name="age" placeholder="Ex: 8 Months/Years" required>
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="phone_number" class="col-md-4 col-form-label">Parent's
                                                Contact phone<span class="text-danger">*</span> :</label>
                                            <div class="col-md-8">
                                                <x-input-text type="number" name="phone_number"
                                                    placeholder="Enter Parent's Contact Number" required>
                                                </x-input-text>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 pb-3">
                                        <div class="row">
                                            <label for="interview_date" class="col-md-4 col-form-label">Interview
                                                Date:</label>
                                            <div class="col-md-8" id="datepicker2">
                                                <x-input-text name="interview_date" type="date" placeholder="mm/dd/yyyy"
                                                    min="{{ date('Y-m-d') }}">
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
@endsection