@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/custom/custom_step_form/custom_step.css') }}">
<style>
    .wizard .steps>ul>li a {
        padding-right: 0 !important;
    }

    .wizard .steps>ul>li a {
        padding-left: 5px !important;
    }
</style>
@endsection
@section('content')
<div class="row">
    {{-- @dd($record) --}}
    <div class="col-xl-12 p-0">
        <div class="card">
            <div class="card-body p-0">
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="add" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <!-- Wizard container -->
                                <div class="wizard-container">
                                    <div class="card_stap wizard-card row" data-color="red" id="wizard">
                                        <div class="col-sm-3 col-md-3">
                                            <div id="wizard-navigation">
                                                <ul class="wizard-navigation">
                                                    <li class="w-100"><a href="#SensoryChecklistYoungAdult"
                                                            data-toggle="tab">Sensory Checklist -
                                                            Young-Adult</a></li>
                                                    <li class="w-100"><a href="#TOUCH" data-toggle="tab">TOUCH</a></li>
                                                    <li class="w-100"><a href="#PROPRIOCEPTION"
                                                            data-toggle="tab">PROPRIOCEPTION (BODY SENSE)</a>
                                                    </li>
                                                    <li class="w-100"><a href="#VESTIBULAR" data-toggle="tab">VESTIBULAR
                                                            (MOVEMENT SENSE)</a></li>
                                                    <li class="w-100"><a href="#AUDITORYLISTENING"
                                                            data-toggle="tab">AUDITORY/LISTENING</a></li>
                                                    <li class="w-100"><a href="#VISION" data-toggle="tab">VISION</a>
                                                    </li>
                                                    <li class="w-100"><a href="#TASTEANDSMELL" data-toggle="tab">TASTE
                                                            AND SMELL</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-9" id="questionSerial">
                                            <form>
                                                <div class="tab-content apply-view-only">
                                                    <div class="tab-pane" id="SensoryChecklistYoungAdult">
                                                        <section>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-firstname-input">Collection
                                                                            Date:</label>
                                                                        <x-input-text name="collection_date" type="date"
                                                                            placeholder=""
                                                                            value="{{ $record->collection_date }}">
                                                                        </x-input-text>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            for="basicpill-lastname-input">Teacher:</label>
                                                                        <x-input-select name="teacher_id"
                                                                            :records="$teachers"
                                                                            :selected="$record->teacher_id" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label for="basicpill-phoneno-input">Candidate
                                                                            ID:</label>
                                                                        <x-input-select name="student_id"
                                                                            :records="$students"
                                                                            :selected="$record->student_id" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="TOUCH">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                :checked="$record->being_touched_on_some_body_parts"
                                                                name="being_touched_on_some_body_parts"
                                                                label="Being touched on some body parts"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->hugs_and_cuddles"
                                                                name="hugs_and_cuddles" label="Hugs and cuddles"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->certain_clothing"
                                                                name="certain_clothing"
                                                                label="Certain clothing fabrics, seams, tags, waistbands, cuffs, etc."
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->clothing"
                                                                name="clothing"
                                                                label="Clothing, shoes, or accessories that are very tight or very loose"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->getting_hands"
                                                                name="getting_hands"
                                                                label="Getting hands, face, or other body parts “messy” with paint, glue, sand, food, lotion, etc"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->grooming_activities_such"
                                                                name="grooming_activities_such"
                                                                label="Grooming activities such as face and hair washing, brushing, cutting, and nail trimming"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->taking_bath"
                                                                name="taking_bath"
                                                                label="Taking a bath, shower, or swimming"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->getting_toweled_dry"
                                                                name="getting_toweled_dry" label="Getting toweled dry"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->trying_new_foods"
                                                                name="trying_new_foods"
                                                                label="Trying new foods Feeling particular food textures and temperatures inside the mouth—mushy, smooth, etc."
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->standing_close"
                                                                name="standing_close"
                                                                label="Standing close to other people"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->walking_barefoot"
                                                                name="walking_barefoot" label="Walking barefoot"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="PROPRIOCEPTION">
                                                        <section>
                                                            <x-input-radio-or-check :checked="$record->activities"
                                                                name="activities"
                                                                label="Activities such as roughhousing, jumping, banging, pushing, bouncing, climbing, hanging, and other active play -"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->high_risk_play"
                                                                name="high_risk_play"
                                                                label="High-risk play (jumps from extreme heights, climbs very high trees, rides bicycle over gravel)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->fine_motor_tasks"
                                                                name="fine_motor_tasks"
                                                                label="Fine motor tasks such as writing, drawing, closing buttons and snaps, attaching pop beads and snap-together building toys"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->activities_requiring"
                                                                name="activities_requiring"
                                                                label="Activities requiring physical strength and force"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->eating_crunchy_foods"
                                                                name="eating_crunchy_foods"
                                                                label="Eating crunchy foods (pretzels, dry cereal, etc.) or chewy foods (e.g., meat, caramels)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->smooth_creamy_foods"
                                                                name="smooth_creamy_foods"
                                                                label="Smooth, creamy foods (yogurt, cream cheese, pudding)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->having_eyes"
                                                                name="having_eyes" label="Having eyes closed or covered"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="VESTIBULAR">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                :checked="$record->being_moved_passively"
                                                                name="being_moved_passively"
                                                                label="Being moved passively by another person (rocked or twirling by an adult, pushed in a heavy box or furniture)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->riding_equipment"
                                                                name="riding_equipment"
                                                                label="Riding equipment that moves through space (swings, teeter totter, escalators and elevators)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->spinning_activities"
                                                                name="spinning_activities"
                                                                label="Spinning activities (carousels, spinning toys, spinning around in circles)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->activities_that_require_changes_in_head_position"
                                                                name="activities_that_require_changes_in_head_position"
                                                                label="Activities that require changes in head position (such as bending over sink) or having head upside down (such as somersaults, hanging from feet)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->challenges_to_balance"
                                                                name="challenges_to_balance"
                                                                label="Challenges to balance such as skating, bicycle riding, skiing, and balance beams"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->climbing_and_descending"
                                                                name="climbing_and_descending"
                                                                label="Climbing and descending stairs, slides, and ladders"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->being_up_high"
                                                                name="being_up_high"
                                                                label="Being up high, such as at the top of a slide or mountain overlook"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->less_stable_ground_surfaces"
                                                                name="less_stable_ground_surfaces"
                                                                label="Less stable ground surfaces such as deep pile carpet, grass, sand, and snow"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->riding_in_a_car"
                                                                name="riding_in_a_car"
                                                                label="Riding in a car or other form of transportation"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="AUDITORYLISTENING">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                :checked="$record->hearing_loud_sounds—car_horns"
                                                                name="hearing_loud_sounds—car_horns"
                                                                label="Hearing loud sounds—car horns, sirens, loud music or TV"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->being_in_noisy_settings"
                                                                name="being_in_noisy_settings"
                                                                label="Being in noisy settings such as a crowded restaurant, party, or busy store/shop"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->watching_TV_or_listening"
                                                                name="watching_TV_or_listening"
                                                                label="Watching TV or listening to music at very high or very low volume"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->speaking_or_being_spoken"
                                                                name="speaking_or_being_spoken"
                                                                label="Speaking or being spoken to amid other sounds or voices"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->background_noise"
                                                                name="background_noise"
                                                                label="Background noise when concentrating on a task (music, dishwasher, fan, etc.)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->games_with_rapid_verbal_instructions"
                                                                name="games_with_rapid_verbal_instructions"
                                                                label="Games with rapid verbal instructions such as Hokey Pokey Back-and-forth, interactive conversations"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->unfamiliar_sounds"
                                                                name="unfamiliar_sounds"
                                                                label="Unfamiliar sounds, silly voices, foreign language"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->singing_alone"
                                                                name="singing_alone"
                                                                label="Singing alone or with others"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="VISION">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                :checked="$record->learning_to_read_or_reading"
                                                                name="learning_to_read_or_reading"
                                                                label="Learning to read or reading for more than a few minutes"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->looking_at_shiny_spinning"
                                                                name="looking_at_shiny_spinning"
                                                                label="Looking at shiny, spinning, or moving objects"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->activities_that_require_eye_hand"
                                                                name="activities_that_require_eye_hand"
                                                                label="Activities that require eye-hand coordination such as baseball, catch, stringing beads, writing, and tracing"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->tasks_requiring_visual_analysis"
                                                                name="tasks_requiring_visual_analysis"
                                                                label="Tasks requiring visual analysis like puzzles, mazes, and hidden pictures"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->activities_that_require_discriminating"
                                                                name="activities_that_require_discriminating"
                                                                label="Activities that require discriminating between colors, shapes, and sizes"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->visually_busy_places"
                                                                name="visually_busy_places"
                                                                label="Visually “busy” places such as stores and crowded playgrounds"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->finding_objects_such_as_socks"
                                                                name="finding_objects_such_as_socks"
                                                                label="Finding objects such as socks in a drawer or a particular book on a shelf"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->very_bright_light_or_sunshine"
                                                                name="very_bright_light_or_sunshine"
                                                                label="Very bright light or sunshine, or being photographed with a flash"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->dim_lighting"
                                                                name="dim_lighting"
                                                                label="Dim lighting, shade, or the dark"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->action_packed"
                                                                name="action_packed"
                                                                label="Action-packed, colorful television, movies or computer/ video games"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->new_visual_experiences"
                                                                name="new_visual_experiences"
                                                                label="New visual experiences such as looking through a kaleidoscope or colored glass"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane" id="TASTEANDSMELL">
                                                        <section>
                                                            <x-input-radio-or-check
                                                                :checked="$record->smelling_unfamiliar_scents"
                                                                name="smelling_unfamiliar_scents"
                                                                label="Smelling unfamiliar scents"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->strong_odors_such_as_perfume"
                                                                name="strong_odors_such_as_perfume"
                                                                label="Strong odors such as perfume, gasoline, cleaning products"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->smelling_objects_that_arent_food_such_as_flowers"
                                                                name="smelling_objects_that_arent_food_such_as_flowers"
                                                                label="Smelling objects that aren’t food such as flowers, plastic items, play dough, and garbage"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check :checked="$record->eating_new_foods"
                                                                name="eating_new_foods" label="Eating new foods"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                            <x-input-radio-or-check
                                                                :checked="$record->eating_familiar_foods_Eating_strongly"
                                                                name="eating_familiar_foods_Eating_strongly"
                                                                label="Eating familiar foods Eating strongly flavored foods (very spicy, salty, bitter, sour, or sweet)"
                                                                :records="$sensoryChecklistConstant::$young">
                                                            </x-input-radio-or-check>
                                                            <!--end row -->
                                                        </section>
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
                                                            <input type="submit"
                                                                class='btn btn-finish btn-fill btn-danger'
                                                                value='Finish' />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- wizard container -->
                            </div>
                        </div> <!-- end col -->
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/custom/custom_step_form/custom_step.js') }}"></script>
<script>
    const parent = document.querySelector('#questionSerial');
    const children = parent.querySelectorAll('h5 > span');

    for (let i = 0; i < children.length; i++) {
    children[i].innerText += '('+ (i+1) +')';
    }
</script>
@endsection