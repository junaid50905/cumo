@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 p-0">
            <div class="card">
                <div class="card-body p-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#case-histroy" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Add</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#case-histroy_list" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="case-histroy" role="tabpanel">
                            <form action="{{ route('student.store', $record->id) }}" method="post">
                                @csrf
                                 @method('POST')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-4 col-form-label">Student
                                                    ID:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="code" type="number"  value="{{ $record->code }}" placeholder="Student ID">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="name"  value="{{ $record->name }}" placeholder="Student Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="" class="col-md-4 col-form-label">Date of Birth:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text name="dob" type="date"  value="{{ $record->dob }}" placeholder="mm/dd/yyyy">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="" class="col-md-4 col-form-label">Date of
                                                    Assesment:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text name="date_of_assesment" type="date"
                                                         value="{{ $record->date_of_assesment }}" placeholder="mm/dd/yyyy">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-md-4 col-form-label">NID:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="nid"  value="{{ $record->nid }}" placeholder="Student NID">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-4 col-form-label">Present
                                                    Address:</label>
                                                <div class="col-md-8">
                                                    <x-input-textarea name="present_address"
                                                         value="{{ $record->present_address }}" placeholder="Student Present Address" rows="1">
                                                    </x-input-textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-4 col-form-label">Parmanent
                                                    Address:</label>
                                                <div class="col-md-8">
                                                    <x-input-textarea name="permanent_address"
                                                         value="{{ $record->permanent_address }}" placeholder="Student Parmanent Address" rows="1">
                                                    </x-input-textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-4 col-form-label">Diagonosis:</label>
                                                <div class="col-md-8">
                                                    <x-input-textarea name="diagnosis"
                                                         value="{{ $record->diagnosis }}" placeholder="Student Parmanent Address" rows="1">
                                                    </x-input-textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Gender:</label>
                                                <div class="col-md-8">
                                                    <x-input-select name="gender"     :selected="$record->gender" :records="$constants::$genders"></x-input-select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Blood Group:</label>
                                                <div class="col-md-8">
                                                    <x-input-select name="blood_group"    :selected="$record->blood_group" :records="$constants::$bloodGroups">
                                                    </x-input-select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-4 col-form-label">Suborno
                                                    Card
                                                    No:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="suborno_card_no"  value="{{ $record->suborno_card_no }}" placeholder="Suborno Card No">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-4 col-form-label d-flex align-items-center">Photo:</label>
                                                <div class=" col-md-8">
                                                    <x-input-text name="photo" type="file" value="{{ $record->photo }}"  ></x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Status:</label>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <x-input-select name="statuss" :records="[]" :selected="$record->statuss" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Stage:</label>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <x-input-select name="stage" :records=$stages :selected="$record->stage" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-12 col-form-label text-center">
                                                    <h4>Father's Name:</h4>
                                                </label>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="father_name"  value="{{ $record->father_name }}" placeholder="Father Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="father_number"  value="{{ $record->father_number }}" placeholder="Father's Number">
                                                    </x-input-text>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="father_profession"
                                                         value="{{ $record->father_profession }}" placeholder="Father's profession">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="father_email"  value="{{ $record->father_email }}" placeholder="Father's Email">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="father_doc"  value="{{ $record->father_doc }}" placeholder="Father's Document">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="father_fb_link"  value="{{ $record->father_fb_link }}" placeholder="Father's FB link">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-12 col-form-label text-center">
                                                    <h4>Mother's Name:</h4>
                                                </label>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="mother_name"  value="{{ $record->mother_name }}" placeholder="Mother Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="mother_number"  value="{{ $record->mother_number }}" placeholder="Mother Number">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="mother_profession"
                                                         value="{{ $record->mother_profession }}" placeholder="Mother's profession">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="mother_email"  value="{{ $record->mother_email }}" placeholder="Mother's Email">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="mother_doc"  value="{{ $record->mother_doc }}" placeholder="Mother's Document">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text name="mother_fb_link"  value="{{ $record->mother_fb_link }}" placeholder="Mother's FB link">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex pb-3">
                                            <div class="mb-3 col-6 d-flex ">
                                                <label for="example-number-input"
                                                    class="col-md-6 pe-4 col-form-label fs-5">Is
                                                    Interested in Job: <input class="form-check-input me-5" id="container"
                                                        type="checkbox" name="container"></label>

                                            </div>
                                            <div class="mb-3 col-6 d-flex justify-content-end ">
                                                <label for="example-number-input"
                                                    class="col-md-6 pe-4 col-form-label fs-5 text-end">Approved for
                                                    Observation:</label>
                                                <div class="btn-group btn-group-sm p-2 col-md-2" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio4" autocomplete="off" checked>
                                                    <label class="btn btn-outline-success" for="btnradio4">Yes</label>

                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio5" autocomplete="off">
                                                    <label class="btn btn-outline-success text-danger"
                                                        for="btnradio5">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hide">
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Disability
                                                    Type:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="disability"
                                                         value="{{ $record->disability }}" placeholder="What type of disability do you have">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Work
                                                    Interest:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="work_interest"
                                                         value="{{ $record->work_interest }}" placeholder="Where is your interest">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Transport:</label>
                                                <div class="col-md-8">

                                                    <x-input-text name="transport"
                                                         value="{{ $record->transport }}" placeholder="What type of transport do you prefer?">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Device
                                                    Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="device_name"  value="{{ $record->transport }}" placeholder="Your device name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Prefer
                                                    Work
                                                    Area:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="prefer_work_area"
                                                         value="{{ $record->prefer_work_area }}" placeholder="Your prefareble area">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Local
                                                    Guardian:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="local_guardian"  value="{{ $record->local_guardian }}" placeholder="Your local guardian">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Position:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="position"  value="{{ $record->position }}" placeholder="Your position">
                                                    </x-input-text>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Duration:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="duration"  value="{{ $record->duration }}" placeholder="Duration">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Skill/Strength
                                                    of
                                                    work:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="skill_of_work"
                                                         value="{{ $record->skill_of_work }}" placeholder="Your strength of work">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Reasonable
                                                    accommodation :</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="reasonable_accommodation"
                                                         value="{{ $record->reasonable_accommodation }}" placeholder="Your accommodation">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Device
                                                    Use:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="device_use"  value="{{ $record->device_use }}" placeholder="Device Use">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Qualification:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="qualification"  value="{{ $record->qualification }}" placeholder="Your qualification">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Training:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="training"
                                                         value="{{ $record->training }}" placeholder="What type of training do you have">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Organization:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="organization"
                                                         value="{{ $record->suborno_card_no }}" placeholder="Your organization name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Phone
                                                    Number:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="phone_number"  value="{{ $record->phone_number }}" placeholder="Your phone number">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Cause of
                                                    Leave:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="cause_of_leave"
                                                         value="{{ $record->cause_of_leave }}" placeholder="Your causes of leave">
                                                    </x-input-text>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="row modal-footer">
                                                        <div class="col-md-4 d-flex">
                                                            <a href="{{ route('student.create') }}"
                                                                class="btn btn-success w-100 me-3">Go back</a>

                                                            <button type="submit"
                                                                class="btn btn-success w-100">Update</button>

                                                        </div>
                                                    </div>
                                                </div>
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
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".hide").hide();
            $("#container").click(function() {
                $(".hide").toggle();
            });
        });
    </script>
@endsection