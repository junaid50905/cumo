@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
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
                        <div class="row">
                            <div class="col-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#Social_Communication"
                                                            data-toggle="tab">Sensory Checklist</a></li>
                                                    <li class="w-100"><a href="#Pragmatic_Objective"
                                                            data-toggle="tab">Gym</a>
                                                    </li>
                                                    <li class="w-100"><a href="#Outing" data-toggle="tab">Outing</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9">
                                            <form action="{{route('gym-and-outing.store')}}" method="POST">
                                                @csrf
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="Social_Communication">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <div class="input-group" id="datepicker2">
                                                                            <x-input-text name="collection_date"
                                                                                type="date" placeholder="mm/dd/yyyy" />
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select name="teacher_id"
                                                                            :records="$teachers" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Pragmatic_Objective">
                                                        <section>
                                                            <x-input-radio-or-check name="treadmill"
                                                                label="Treadmill(15-20 min) speed:5"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel="" >
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check label="Cycling 5 min"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="butterfly"
                                                                label="Butterfly(10x5) 24,36 kg"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="lat_pull_down"
                                                                label="Lat pull down (10x5) 24,36 kg"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel="">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="lat_up"
                                                                label="Lat up (10x3), 12,24 kg"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="dumble"
                                                                label="Dumble (10x4)6,8,10 lb"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="Leg_curl"
                                                                label="Leg curl (10x4)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="vibration"
                                                                label="Vibration (10 min)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="spot_jump"
                                                                label="Spot jump (10x2)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="Free_hand_exercise"
                                                                label="Free hand exercise (10-15 min)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel="">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="ball_throw"
                                                                label="Ball throw (15)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="basket_ball_throw"
                                                                label="Basket ball throw (10)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}
                                                            <x-input-radio-or-check name="ball_kick"
                                                                label="Ball Kick (15)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="Outing">
                                                        <section>
                                                            <x-input-radio-or-check name="walking"
                                                                label="Walking (20 min)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="running"
                                                                label="Running (15 min)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="height_down_jump"
                                                                label="height down jump (10)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="tennis_ball_throw"
                                                                label="Tennis ball throw (15)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="tennis_ball_catch"
                                                                label="Tennis ball catch (15)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel=""></x-input-radio-or-check>
                                                            {{-- end row --}}

                                                            <x-input-radio-or-check name="ball_fielding_practice"
                                                                label="Ball fielding practice (10)"
                                                                :records="$gymoutingConstants::$assistance"
                                                                secondaryInputLabel="">
                                                            </x-input-radio-or-check>
                                                            {{-- end row --}}


                                                        </section>
                                                    </div>
                                                </div>
                                                <div class="wizard-footer d-flex justify-content-between">
                                                    <div class="pull-left">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-previous'
                                                            name='previous' value='Previous' />
                                                    </div>
                                                    <div class="pull-right">
                                                        <input type='button'
                                                            class='btn btn-primary waves-effect waves-light btn-next'
                                                            name='next' value='Next' />
                                                        <input type="submit" class='btn btn-finish btn-fill btn-danger'
                                                            wire:click='save' value='Finish' />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <div class="tab-pane " id="case-histroy_list" role="tabpanel">
                        <livewire:gym-and-outing-list />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- Custom step -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection