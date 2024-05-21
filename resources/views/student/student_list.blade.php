@extends('layouts.master')

@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('css')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target=".bs-example-modal-xl"><i class="fa fa-plus"></i> ADD</button>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label style="display: inline-flex;align-items: center;"> Show <select name="length"
                                    class="form-control form-control-sm form-select form-select-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 text-end">
                            <label style="display: inline-flex;align-items: center;">Search:
                                <input type="search" class="form-control form-control-sm" placeholder="">
                            </label>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered w-100">
                            <thead>
                                <tr class="table-primary">
                                    <th>Name & ID
                                        <span>
                                            <i class="dripicons-arrow-thin-down"></i>
                                            <i class="dripicons-arrow-thin-up"></i>
                                        </span>
                                    </th>
                                    <th>DOA</th>
                                    <th>DOB</th>
                                    <th>B.G</th>
                                    <th>Mobile#</th>
                                    <th>Is A.P.A</th>
                                    <th>Student Status</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="student.student_profile.profile">System</a></td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011</td>
                                    <td>$320,</td>
                                    <td>61</td>
                                    <td>2011/</td>
                                    <td>$320,</td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                                class="fas fa-check"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                                class="fas fa-check"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="bx bx-dollar"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="student.student_profile.profile">demo</a></td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>20115</td>
                                    <td>$170</td>
                                    <td>61</td>
                                    <td>2011/</td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                            <i class="bx bx-dollar"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                            data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl" prescription>
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            Showing 1 to 2 of 2 entries
                        </div>
                        <div class="col-sm-12 col-md-6 text-end">
                            <nav>
                                <ul class="pagination" style="justify-content: end;">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!-- sample modal content -->
    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">Student Create</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="card p-0 m-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-4 col-form-label">Student
                                            ID:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="student_id" type="number" placeholder="Student ID">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="student_name" placeholder="Student Name">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-md-4 col-form-label">Date of Birth:</label>
                                        <div class="col-md-8" id="datepicker2">
                                            <x-input-text name="dob" type="date" placeholder="mm/dd/yyyy">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="" class="col-md-4 col-form-label">Date of Assesment:</label>
                                        <div class="col-md-8" id="datepicker2">
                                            <x-input-text name="date_of_assesment" type="date"
                                                placeholder="mm/dd/yyyy">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-tel-input" class="col-md-4 col-form-label">NID:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="student_nid" placeholder="Student NID">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-md-4 col-form-label">Present
                                            Address:</label>
                                        <div class="col-md-8">
                                            <x-input-textarea name="student_present_address"
                                                placeholder="Student Present Address" rows="1">
                                            </x-input-textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-md-4 col-form-label">Parmanent
                                            Address:</label>
                                        <div class="col-md-8">
                                            <x-input-textarea name="student_parmanent_address"
                                                placeholder="Student Parmanent Address" rows="1">
                                            </x-input-textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-4 col-form-label">Diagonosis:</label>
                                        <div class="col-md-8">
                                            <x-input-textarea name="student_parmanent_address"
                                                placeholder="Student Parmanent Address" rows="1">
                                            </x-input-textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label">Gender:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="gender" :records="$constants::$genders"></x-input-select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label">Blood Group:</label>
                                        <div class="col-md-8">
                                            <x-input-select name="blood_group" :records="$constants::$bloodGroups">
                                            </x-input-select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-4 col-form-label">Suborno Card
                                            No:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="suborno_card_no" placeholder="Suborno Card No">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-tel-input" class="col-md-4 col-form-label">Diagonosis:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="diagnosis" placeholder="Diagonosis"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-password-input"
                                            class="col-md-4 col-form-label d-flex align-items-center">Photo:</label>
                                        <div class=" col-md-8">
                                            <x-input-text name="student_photo" type="file"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label">Status:</label>
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <x-input-select name="student_id" :records="[]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-4 col-form-label">Stage:</label>
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <x-input-select name="student_id" :records="[]" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-md-12 col-form-label text-center">
                                            <h4>Father's Name:</h4>
                                        </label>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_name" placeholder="Father Name"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_number" placeholder="Father's Number">
                                            </x-input-text>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_profession" placeholder="Father's profession">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_email" placeholder="Father's Email"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_doc" placeholder="Father's Document">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="father_fb_link" placeholder="Father's FB link">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-md-12 col-form-label text-center">
                                            <h4>Mother's Name:</h4>
                                        </label>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_name" placeholder="Mother Name"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_number" placeholder="Mother Number"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_profession" placeholder="Mother's profession">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_email" placeholder="Mother's Email"></x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_doc" placeholder="Mother's Document">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12">
                                            <x-input-text name="mother_fb_link" placeholder="Mother's FB link">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex pb-3">
                                    <div class="mb-3 col-6 d-flex ">
                                        <label for="example-number-input" class="col-md-6 pe-4 col-form-label fs-5">Is
                                            Interested in Job: <input class="form-check-input me-5" id="container"
                                                type="checkbox" name="container"></label>

                                    </div>
                                    <div class="mb-3 col-6 d-flex justify-content-end ">
                                        <label for="example-number-input"
                                            class="col-md-6 pe-4 col-form-label fs-5 text-end">Approved for
                                            Observation:</label>
                                        <div class="btn-group btn-group-sm p-2 col-md-2" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4"
                                                autocomplete="off" checked>
                                            <label class="btn btn-outline-success" for="btnradio4">Yes</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio5"
                                                autocomplete="off">
                                            <label class="btn btn-outline-success text-danger" for="btnradio5">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row hide">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Disability
                                            Type:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="disability"
                                                placeholder="What type of disability do you have">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Work
                                            Interest:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="work_interest" placeholder="Where is your interest">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label">Transport:</label>
                                        <div class="col-md-8">

                                            <x-input-text name="transport"
                                                placeholder="What type of transport do you prefer?">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Device
                                            Name:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="device_name" placeholder="Your device name">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Prefer Work
                                            Area:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="prefer_work_area" placeholder="Your prefareble area">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Local
                                            Guardian:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="local_guardian" placeholder="Your local guardian">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label">Position:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="position" placeholder="Your position">
                                            </x-input-text>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label">Duration:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="duration" placeholder="Duration">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Skill/Strength
                                            of
                                            work:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="skill_of_work" placeholder="Your strength of work">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Reasonable
                                            accommodation :</label>
                                        <div class="col-md-8">
                                            <x-input-text name="reasonable_accommodation"
                                                placeholder="Your accommodation">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Device
                                            Use:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="device_use" placeholder="Device Use">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label">Qualification:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="qualification" placeholder="Your qualification">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label">Training:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="training" placeholder="What type of training do you have">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input"
                                            class="col-md-4 col-form-label">Organization:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="organization" placeholder="Your organization name">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Phone
                                            Number:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="phone_number" placeholder="Your phone number">
                                            </x-input-text>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-4 col-form-label">Cause of
                                            Leave:</label>
                                        <div class="col-md-8">
                                            <x-input-text name="cause_of_leave" placeholder="Your causes of leave">
                                            </x-input-text>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal"
                        data-bs-target=".social-communication-view"> Save</button>
                    <button type="button" class="btn btn-outline-danger waves-effect waves-light"
                        data-bs-dismiss="modal"> Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
