@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')STUDENT QA @endslot
@endcomponent
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-6">
            <h4 class="card-title">STUDENT QAS</h4>
          </div>
          <div class="col-6 text-end  mb-3">
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=""><i class="fa fa-user"></i> Profile</button>
            <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
              data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> ADD</button>
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
                <x-input-text name="search" type="search"/>
              </label>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table w-100">
              <thead>
                <tr>
                  <th>Collection Date</th>
                  <th>Student Name</th>
                  <th>Collected By</th>
                  <th>Log</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2022-05-17</td>
                  <td>Idham Malek</td>
                  <td>Ohidul Hassan</td>
                  <td>Create: Ohidul Hassan @ 2022-05-17 16:06:30</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="mdi mdi-eye" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                        class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="mdi mdi-pencil" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="bx bx-dollar"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                      <i class="fas fa-arrow-circle-right"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2">
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
</div>
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel"> OT Assessment In Computer Trainee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">
          <h3> OT Assessment In Computer Trainee</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                      <x-input-text type="date" name="date"/>
                    </div><!-- input-group -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="teacher_id" :records="[]" />
                </div>
              </div>
            </form>
          </section>
          <h3> General</h3>
          <section>
            <div class="row">
              <div class="form-check">
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Type of disability</label>
                  <x-input-text name="type_of_disability" placeholder="">
                  </x-input-text>
                </div>
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Educational Status</label>
                  <x-input-text name="educational_status" placeholder="">
                  </x-input-text>
                </div>
              </div>
            </div>
          </section>
          <h3>Physical skill</h3>
          <section>
            <x-input-radio-or-check name="sitting_posture_maintain" label="Sitting posture maintain"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="oint_mobility_shoulder" label="oint mobility shoulder"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="elbow" label="Elbow" :records="$otassessmentConstants::$maintain"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="wrist" label="Wrist" :records="$otassessmentConstants::$maintain"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="finger" label="Finger" :records="$otassessmentConstants::$maintain"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="body_flexibility" label="Body flexibility (Trunk)"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="dynamic_balance_maintain" label="Dynamic balance maintain"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="eye_hand_co_ordination" label="Eye hand co ordination to press the key board button"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="mouse_operater" label="Mouse operater" :records="$otassessmentConstants::$maintain"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="muscle_strength_in_hand" label="Muscle strength in hand and finger"
              :records="$otassessmentConstants::$strength" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="hand_function" label="Hand function" :records="$otassessmentConstants::$ability"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="grasp" label="Grasp" :records="$otassessmentConstants::$ability"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="manipulation" label="Manipulation" :records="$otassessmentConstants::$ability"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="opposition" label="Opposition" :records="$otassessmentConstants::$ability"
              secondaryInputLabel=""></x-input-radio-or-check>

          </section>

          <h3>Cognitive, Behavior & social Skill</h3>
          <section>
            <x-input-radio-or-check name="sitting_habit_in_specific" label="Sitting habit in specific place"
              :records="$otassessmentConstants::$time" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="keep_attention" label="Keep attention/concentration to work"
              :records="$constants::$yesNoEn" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="follow_instruction" label="Follow instruction" :records="$otassessmentConstants::$follow"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="response_skill" label="Response skill" :records="$otassessmentConstants::$response"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="understand_or_follow" label="Understand or follow the work sequence"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="interest_of_work" label="Interest of work" :records="$otassessmentConstants::$show"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="information_receives_ability" label="Information receives ability"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="memorizing_the_information" label="Memorizing the information"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="awareness_of_risk_&_hazard" label="Awareness of Risk & hazard"
              :records="$otassessmentConstants::$maintain" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="opposition" label="Opposition" :records="$otassessmentConstants::$appropriate"
              secondaryInputLabel=""></x-input-radio-or-check>

          </section>

          <h3>Work place adjustability</h3>
          <section>
            <x-input-radio-or-check name="working_table" label="Working table/ desk"
              :records="$otassessmentConstants::$appropriate" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="Keyboard_and_mouse" label="Keyboard and mouse place"
              :records="$otassessmentConstants::$appropriate" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="monitor_place" label="Monitor place" :records="$otassessmentConstants::$appropriate"
              secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="cpu" label="CPU, Stabilizer, and multi pluck place"
              :records="$otassessmentConstants::$appropriate" secondaryInputLabel=""></x-input-radio-or-check>

            <x-input-radio-or-check name="communication_style" label="Communication Style" :records="$otassessmentConstants::$sign"
              secondaryInputLabel=""></x-input-radio-or-check>

          </section>

          <h3>Signature</h3>
          <section>
            <div class="row">
              <div class="form-check">
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Therapist comment’s/ advice:</label>
                  <x-input-text name="name" placeholder="">
                  </x-input-text>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-check">
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Signature of Therapist</label>
                  <x-input-text type="file" name="file"/>
                </div>
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Name and date</label>
                  <x-input-text name="name" placeholder="">
                  </x-input-text>
                </div>
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Organization Name</label>
                  <x-input-text name="name" placeholder="">
                  </x-input-text>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-check">
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Signature of Supervisor</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Name</label>
                  <x-input-text name="name" placeholder="">
                  </x-input-text>
                </div>
                <div class="me-5 ">
                  <label class="form-check-label pb-2">Designation</label>
                  <x-input-text name="name" placeholder="">
                  </x-input-text>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
@section('script')
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection