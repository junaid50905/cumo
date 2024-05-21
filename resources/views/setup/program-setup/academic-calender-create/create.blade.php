@extends('layouts.master')
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
                      <form action="{{route('setup.other-settings.academic-calender.create')}}" method="POST">
                          @csrf
                         <div class="modal-body p-0">
                              <div class="card p-0 m-0">
                                  <div class="card-body">
                                      <div class="row pb-3">
                                          <div class="col-6 mb-3">
                                              <label class="form-label">Event Name</label>
                                              <x-input-text name="event_name" placeholder="">
                                              </x-input-text>
                                          </div>
                                          <div class="col-6 mb-3">
                                              <label class="form-label">Event Type</label>
                                              <x-input-select name="event_type_id"
                              :records="[]" />
                                          </div>
                                          <div class="col-6 mb-3 ">
                                              <label class="form-label">Area</label>
                                              <x-input-text name="area" placeholder="">
                                              </x-input-text>
                                          </div>
                                          <div class="col-6 mb-3 ">
                                              <label class="form-label">Start Date</label>
                                              <x-input-text type="date" name="start_date" placeholder="">
                                              </x-input-text>
                                          </div>
                                          <div class="col-6 mb-3 ">
                                              <label class="form-label">End Date</label>
                                              <x-input-text type="date" name="end_date" placeholder="">
                                              </x-input-text>
                                          </div>
                                          <div class="col-6 mb-3 ">
                                              <label class="form-label">Start Time</label>
                                              <x-input-text type="time" name="start_time" placeholder="">
                                              </x-input-text>
                                          </div>
                                          <div class="col-6 mb-3 ">
                                              <label class="form-label">End Time</label>
                                              <x-input-text type="time" name="end_time" placeholder="">
                                              </x-input-text>
                                          </div>
                                          <div class="col-6 mb-3 ">
                                            <label class="form-label">Event Lable</label>
                                            <x-input-select name="event_type_id"
                                                :records="[]" />
                                          </div>
                                          <div class="col-6 mb-3 ">
                                              <label class="form-label">Event Duration</label>
                                              <x-input-text type="text" name="event_duration" placeholder="">
                                              </x-input-text>
                                          </div>
                                          <div class="col-6 mb-3 ">
                                            <label class="form-label">Description:</label>
                                            <x-input-textarea type="text" name="description" placeholder="">
                                            </x-input-textarea>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                                      <!-- Tab panes One Add  -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success  waves-light" data-bs-toggle="modal" data-bs-target=".social-communication-view"> Save</button>
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light" data-bs-dismiss="modal"> Close</button> 
                         </div>
                        <!-- Tab panes One Close  -->
                      </form>
                    </div>
                    <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                        <!-- Tab panes Two Add  -->
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
                              <x-input-text  type="search" name="search"/>
                            </label>
                          </div>
                        </div>
                          <div class="table-responsive">
                        <table class="table table-bordered w-100">
                          <thead>
                            <tr class="table-primary">
                                <th class="">Event Name</th>
                                <th class="">Event Type</th>
                                <th class="">Start Date</th>
                                <th class="">End Date</th>
                                <th class="">Label</th>
                                <th class="">Duration</th>
                                <th class="">Log</th>
                                <th class="">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>Appointment with PFDA</td>
                                <td>Academic Calendar</td>
                                <td>21-11-2018</td>
                                <td>21-11-2018</td>
                                <td>Out Of Office</td>
                                <td>24</td>
                                <td>
                                    <small>Create: Nusrat Jahan @  2019-06-09 22:22:54
                                    There is no update record.</small>
                                </td>
                              <td>
                                <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                                    class="fas fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                  <i class="mdi mdi-pencil"></i>
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
                        <!-- Tab panes Two Close  -->
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
 <!-- form repeater js -->
  <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>
  <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>
@endsection