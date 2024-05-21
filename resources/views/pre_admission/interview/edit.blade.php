@extends('layouts.master')
@section('title')
    @lang('translation.Tabs_&_Accordions')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <form action="{{ route('gym-and-outing.update', $records->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-4 col-form-label">Student
                                                    ID:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->student_id }}" name="student_id" type="number" placeholder="Student ID">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text name="name" value="{{ $records->name }}"  placeholder="Student Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="" class="col-md-4 col-form-label">Date of Birth:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text value="{{ $records->dob }}" name="dob" type="date" placeholder="mm/dd/yyyy">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="" class="col-md-4 col-form-label">Date of
                                                    Assesment:</label>
                                                <div class="col-md-8" id="datepicker2">
                                                    <x-input-text value="{{ $records->date_assessment }}" name="date_of_assesment" type="date"
                                                        placeholder="mm/dd/yyyy">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-md-4 col-form-label">NID:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->nid }}" name="nid" placeholder="Student NID">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-4 col-form-label">Present
                                                    Address:</label>
                                                <div class="col-md-8">
                                                    <x-input-textarea  value="{{ $records->present_address }}" name="present_address"
                                                        placeholder="Student Present Address" rows="1">
                                                    </x-input-textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-4 col-form-label">Parmanent
                                                    Address:</label>
                                                <div class="col-md-8">
                                                    <x-input-textarea value="{{ $records->permanent_address }}" name="permanent_address"
                                                        placeholder="Student Parmanent Address" rows="1">
                                                    </x-input-textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-4 col-form-label">Diagonosis:</label>
                                                <div class="col-md-8">
                                                    <x-input-textarea value="{{ $records->diagnosis }}" name="diagnosis"
                                                        placeholder="Student Parmanent Address" rows="1">
                                                    </x-input-textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Gender:</label>
                                                <div class="col-md-8">
                                                    <x-input-select name="gender" :records="$gender" :selected="$records->gender">
                                                    </x-input-select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Blood Group:</label>
                                                <div class="col-md-8">
                                                    <x-input-select name="blood_group" :selected="$records->blood_group"  :records="$bloodGroups">
                                                    </x-input-select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-4 col-form-label">Suborno
                                                    Card
                                                    No:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->suborno_card_no }}" name="suborno_card_no" placeholder="Suborno Card No">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-password-input"
                                                    class="col-md-4 col-form-label d-flex align-items-center">Photo:</label>
                                                <div class=" col-md-8">
                                                    <x-input-text value="{{ $records->photo }}" name="photo" type="file"></x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Status:</label>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <x-input-select name="statuss" :records="[]"
                                                             />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label">Stage:</label>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <x-input-select name="statuss" :records="[]"
                                                             />
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
                                                    <x-input-text value="{{ $records->father_name }}" name="father_name" placeholder="Father Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->father_number }}" name="father_number" placeholder="Father's Number">
                                                    </x-input-text>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->father_profession }}" name="father_profession"
                                                        placeholder="Father's profession">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->father_email }}" name="father_email" placeholder="Father's Email">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->father_doc }}" name="father_doc" placeholder="Father's Document">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->father_fb_link }}" name="father_fb_link" placeholder="Father's FB link">
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
                                                    <x-input-text value="{{ $records->mother_name }}" name="mother_name" placeholder="Mother Name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->mother_number }}" name="mother_number" placeholder="Mother Number">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->mother_profession }}" name="mother_profession"
                                                        placeholder="Mother's profession">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->mother_email }}" name="mother_email" placeholder="Mother's Email">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->mother_doc }}" name="mother_doc" placeholder="Mother's Document">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12">
                                                    <x-input-text value="{{ $records->mother_fb_link }}" name="mother_fb_link" placeholder="Mother's FB link">
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
                                                    <x-input-text value="{{ $records->disability }}" name="disability"
                                                        placeholder="What type of disability do you have">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Work
                                                    Interest:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->work_interest }}" name="work_interest"
                                                        placeholder="Where is your interest">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Transport:</label>
                                                <div class="col-md-8">

                                                    <x-input-text value="{{ $records->transport }}" name="transport"
                                                        placeholder="What type of transport do you prefer?">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Device
                                                    Name:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->device_name }}" name="device_name" placeholder="Your device name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Prefer
                                                    Work
                                                    Area:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->prefer_work_area }}" name="prefer_work_area"
                                                        placeholder="Your prefareble area">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Local
                                                    Guardian:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->local_guardian }}" name="local_guardian" placeholder="Your local guardian">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Position:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->position }}" name="position" placeholder="Your position">
                                                    </x-input-text>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Duration:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->duration }}" name="duration" placeholder="Duration">
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
                                                    <x-input-text value="{{ $records->skill_of_work }}" name="skill_of_work"
                                                        placeholder="Your strength of work">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Reasonable
                                                    accommodation :</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->reasonable_accommodation }}" name="reasonable_accommodation"
                                                        placeholder="Your accommodation">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Device
                                                    Use:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->device_use }}" name="device_use" placeholder="Device Use">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Qualification:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->qualification }}" name="qualification" placeholder="Your qualification">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Training:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->training }}" name="training"
                                                        placeholder="What type of training do you have">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input"
                                                    class="col-md-4 col-form-label">Organization:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->organization }}" name="organization"
                                                        placeholder="Your organization name">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Phone
                                                    Number:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->phone_number }}" name="phone_number" placeholder="Your phone number">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-4 col-form-label">Cause of
                                                    Leave:</label>
                                                <div class="col-md-8">
                                                    <x-input-text value="{{ $records->cause_of_leave }}" name="cause_of_leave"
                                                        placeholder="Your causes of leave">
                                                    </x-input-text>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="row modal-footer">
                                                        <div class="col-md-6 d-flex">
                                                            <a href="{{ route('appointment.create') }}" class="btn btn-success w-100 me-3">Go back</a>
                                                            <button type="submit" class="btn btn-success w-100">Save</button>
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
































