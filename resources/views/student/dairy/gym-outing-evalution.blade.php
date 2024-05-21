@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')  
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dashboard  @endslot
        @slot('title') STUDENT QAS @endslot
    @endcomponent
   <!-- end page title -->
   <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 text-end pb-2">
                    <h4 class="card-title text-start m-0">STUDENT QAS</h4>
                    <button type="button" class="btn btn-outline-info waves-effect waves-light me-2" data-bs-toggle="modal"
                    data-bs-target=""><i class="fa fa-user"></i> Profile</button>
                    <button type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
                      data-bs-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Add</button>
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
                        <th>Collection Date </th>
                        <th>Student Name</th>
                        <th>Collected By</th>
                        <th>Log</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2022-05-17</td>
                        <td>Abdur Rahman Sajid</td>
                        <td>Ohidul Hassan</td>
                        <td>Create: Ohidul Hassan @ 2022-05-17 15:50:24</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-eye"  data-bs-toggle="modal"
                            data-bs-target=".bs-example-modal-lg"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1"> <i
                              class="fas fa-check"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"> <i
                              class="fas fa-check"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                            <i class="mdi mdi-pencil"  data-bs-toggle="modal"
                            data-bs-target=".bs-example-modal-lg"></i>
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
{{-- Modal Code Start Here --}}
<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel"> Dairy > OT Assessment In Computer Trainee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="vertical-example" class="vertical-wizard">

          <h3>Sensory Checklist</h3>
          <section>
            <form>
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-firstname-input">Collection Date:</label>
                    <div class="input-group" id="datepicker2">
                      <x-input-text name="collection_date" type="date"
                      placeholder="mm/dd/yyyy" />
                    </div><!-- input-group -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="basicpill-lastname-input">Teacher:</label>
                    <x-input-select name="teachaer_id" :records="[]" />
                  </div>
                </div>
              </div>
            </form>
          </section>

          <h3> Gym</h3>
          <section>
            <form>
                <x-input-radio-or-check name="treadmill" label="Treadmill(15-20 min) speed:5" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}
                <x-input-radio-or-check name="cycling" label="Cycling 5 min" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}        
                <x-input-radio-or-check name="butterfly" label="Butterfly(10x5) 24,36 kg" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}  
                <x-input-radio-or-check name="lat_pull_down" label="Lat pull down (10x5) 24,36 kg" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}   
                <x-input-radio-or-check name="Lat_up" label="Lat up (10x3), 12,24 kg" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}  
                <x-input-radio-or-check name="dumble" label="Dumble (10x4)6,8,10 lb" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}    
                <x-input-radio-or-check name="Leg_curl" label="Leg curl (10x4)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}      
                <x-input-radio-or-check name="vibration" label="Vibration (10 min)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}    
                <x-input-radio-or-check name="spot_jump" label="Spot jump (10x2)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}     
                <x-input-radio-or-check name="Free_hand_exercise" label="Free hand exercise (10-15 min)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}    
                <x-input-radio-or-check name="ball_throw" label="Ball throw (15)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}      
                <x-input-radio-or-check name="basket_ball_throw" label="Basket ball throw (10)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}
                <x-input-radio-or-check name="ball_kick" label="Ball Kick (15)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}     
            </form>
            </section>


            
          <h3>Outing</h3>
          <section>
            <form>
                <x-input-radio-or-check name="walking" label="Walking (20 min)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}               
         
                <x-input-radio-or-check name="running" label="Running (15 min)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}  
                
                <x-input-radio-or-check name="height_down_jump" label="height down jump (10)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}  
                
                <x-input-radio-or-check name="tennis_ball_throw" label="Tennis ball throw (15)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}  
                
                <x-input-radio-or-check name="tennis_ball_catch" label="Tennis ball catch (15)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}  
                
                <x-input-radio-or-check name="ball_fielding_practice" label="Ball fielding practice (10)" :records="$gymoutingConstants::$assistance" secondaryInputLabel=""></x-input-radio-or-check>
                {{-- end row --}}  
              
            </form>
          </section>

        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{{-- Modal Code Close Here --}}
@endsection
@section('script')
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection




