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
                            <form action="{{ route('assign-task.store') }}" method="post">
                                @csrf
                                <div class="modal-body p-0">
                                    <div class="card p-0 m-0">
                                        <div class="card-body">
                                            <div class="row pb-1">
                                                <div class="col-6 d-flex">
                                                    <label class="col-md-2 col-form-label"> Student Name</label>
                                                    <div class="col-md-10">
                                                        <x-input-select name="student_id" :records="[]" />
                                                    </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Assignment Name</label>
                                                    <div class="col-md-10">
                                                        <x-input-text name="assignment_name" placeholder="Assignment Name">
                                                        </x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pb-3">
                                                <div class="col-6 d-flex">
                                                    <label class="col-md-2 col-form-label">Start Date</label>
                                                    <div class="col-md-10">
                                                        <x-input-text name="start_date" type="date"
                                                            placeholder="mm/dd/yyyy"></x-input-text>
                                                    </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                    <label class="col-md-2 col-form-label">End Date</label>
                                                    <div class="col-md-10">
                                                        <x-input-text name="end_date" type="date"
                                                            placeholder="mm/dd/yyyy">
                                                        </x-input-text>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pb-2">
                                                <div class="col-md-6 d-flex">
                                                    <label class="col-md-2 col-form-label">Instruction</label>
                                                    <div class="col-md-10">
                                                        <x-input-textarea name='instruction' rows='5'>
                                                        </x-input-textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6 border border-2">
                                                    <div class="fw-bold">Section E: Domain 01 - Physical development : <span
                                                            class="text-danger">0</span></div>
                                                    <div class="fw-bold">Section F: Domain 02 : Intellectual / cognitive
                                                        development : <span class="text-danger">0</span></div>
                                                    <div class="fw-bold">Section G : Domain 03 - Emotional development :
                                                        <span class="text-danger">0</span>
                                                    </div>
                                                    <div class="fw-bold">Section H : Domain 04 - Social and ethical
                                                        development : <span class="text-danger">0</span></div>
                                                    <div class="fw-bold">Section I: Independent skills : <span
                                                            class="text-danger">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="repeater" enctype="multipart/form-data">
                                                <div class="row border border-top-2 p-1 pt-4">
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="select_task">Selected Task</label>
                                                    </div>
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="teacher">Teacher</label>
                                                    </div>
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="routine">Routine</label>
                                                    </div>
                                                    <div class="col-lg-3 p-0 pe-1">
                                                        <label for="comment">Comment</label>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item class="row pb-3">
                                                        <div class="col-lg-3 p-0 pe-1 pb-1">
                                                            <x-input-select name="select_task" :records="[]" />
                                                        </div>
                                                        <div class="col-lg-3 p-0 pe-1 pb-1">
                                                            <x-input-select name="teacher" :records="[]" />
                                                        </div>
                                                        <div class="col-lg-3 p-0 pe-1 pb-1">
                                                            <x-input-select name="routine" :records="[]" />
                                                        </div>
                                                        <div class="col-lg-3 p-0 pe-1 pb-1 align-self-center d-flex">
                                                            <x-input-text name="comment" />
                                                            <button class="btn btn-danger ms-2">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="row pb-2">
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="button"
                                                        id="collapse">Collapse</button>
                                                    <button class="btn btn-primary" type="button"
                                                        id="expend">Expend</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="accordion" id="accordionExample">
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Gross
                                                                    Motor Skills > Organized Play
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="organized_play[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Kick a large stationary ball with a 2-step start
                                                                            Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="organized_play[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Catch a large ball Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="organized_play[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Squat while maintaining balance Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Gross
                                                                    Motor Skills > Balance Beam
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="balance_beam[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            tiptoes Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                                    aria-controls="collapseThree">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Gross
                                                                    Motor Skills > Jumping Jacks
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="jumping_jacks[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Have the student jump so that the legs spread
                                                                            apart and the
                                                                            hands clap above the head and then jump again so
                                                                            the feet go
                                                                            back together and the arms go back to the sides
                                                                            - Do several of
                                                                            these Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingfoure">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsefoure" aria-expanded="false"
                                                                    aria-controls="collapsefoure">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Gross
                                                                    Motor Skills > Fitness & Physical Activity
                                                                </button>
                                                            </h2>
                                                            <div id="collapsefoure" class="accordion-collapse collapse"
                                                                aria-labelledby="headingfoure"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="fitness_physical_activity[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Throw at a target Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="fitness_physical_activity[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Participate in structured activities: Races,
                                                                            Obstacle Course,
                                                                            Group Games, Sports Teams, Individual Sports,
                                                                            Drill Exercises
                                                                            Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingA">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseA"
                                                                    aria-expanded="false" aria-controls="collapseA">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Sensory Skills > Sex education > Body
                                                                    Awareness
                                                                </button>
                                                            </h2>
                                                            <div id="collapseA" class="accordion-collapse collapse"
                                                                aria-labelledby="headingA"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="body_awareness[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Good Touch versus Bad Touch Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingB">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseB"
                                                                    aria-expanded="false" aria-controls="collapseB">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Sensory Skills > Sex education > Physical
                                                                    Growth
                                                                </button>
                                                            </h2>
                                                            <div id="collapseB" class="accordion-collapse collapse"
                                                                aria-labelledby="headingB"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="physical_growth[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Male & female differences Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingC">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseC"
                                                                    aria-expanded="false" aria-controls="collapseC">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Sensory Skills > Sex education > Good
                                                                    touch/bad touch
                                                                </button>
                                                            </h2>
                                                            <div id="collapseC" class="accordion-collapse collapse"
                                                                aria-labelledby="headingC"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="good_touch[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Explain What Safe Touch Is Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingD">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseD"
                                                                    aria-expanded="false" aria-controls="collapseD">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Intrapersonal
                                                                    skills > Decision Making
                                                                </button>
                                                            </h2>
                                                            <div id="collapseD" class="accordion-collapse collapse"
                                                                aria-labelledby="headingD"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="decision_making[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Choice list Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingE">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseE"
                                                                    aria-expanded="false" aria-controls="collapseE">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Intrapersonal
                                                                    skills > Generalization ability
                                                                </button>
                                                            </h2>
                                                            <div id="collapseE" class="accordion-collapse collapse"
                                                                aria-labelledby="headingE"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="generalization_ability[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Follow instructions Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingF">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseF"
                                                                    aria-expanded="false" aria-controls="collapseF">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Functional
                                                                    Academic Skills > Functional Reading Skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapseF" class="accordion-collapse collapse"
                                                                aria-labelledby="headingF"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="functional_reading_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Own names Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="functional_reading_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Names of Mother and Father Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="functional_reading_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Own address and telephone number Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingG">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseG"
                                                                    aria-expanded="false" aria-controls="collapseG">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Functional
                                                                    Academic Skills > Writing : Includes Fine motor skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapseG" class="accordion-collapse collapse"
                                                                aria-labelledby="headingG"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="includes_fine_motor_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Use scissors Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="includes_fine_motor_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sort by color of object Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="includes_fine_motor_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sort by shape of object Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingH">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseH"
                                                                    aria-expanded="false" aria-controls="collapseH">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Functional
                                                                    Academic Skills > Time Skill
                                                                </button>
                                                            </h2>
                                                            <div id="collapseH" class="accordion-collapse collapse"
                                                                aria-labelledby="headingH"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="time_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Demonstrate an understanding of time concepts,
                                                                            before, after, yesterday, today, tomorrow, ETC
                                                                            Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="time_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Understand and accept ‘work times’ and ‘relax
                                                                            times’ of day Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingI">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseI"
                                                                    aria-expanded="false" aria-controls="collapseI">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Communication
                                                                    Skills > Respond
                                                                </button>
                                                            </h2>
                                                            <div id="collapseI" class="accordion-collapse collapse"
                                                                aria-labelledby="headingI"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="respond[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Demonstrate an understanding of time concepts,
                                                                            before, after, yesterday, today, tomorrow, ETC
                                                                            Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingJ">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseJ"
                                                                    aria-expanded="false" aria-controls="collapseJ">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Communication
                                                                    Skills > Verbs
                                                                </button>
                                                            </h2>
                                                            <div id="collapseJ" class="accordion-collapse collapse"
                                                                aria-labelledby="headingJ"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="verbs[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Name a pictured action Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingL">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseL"
                                                                    aria-expanded="false" aria-controls="collapseL">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Communication
                                                                    Skills > Listening skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapseL" class="accordion-collapse collapse"
                                                                aria-labelledby="headingL"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="listening_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Listing music Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="listening_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Listing poetry Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingM">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseM"
                                                                    aria-expanded="false" aria-controls="collapseM">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Communication
                                                                    Skills > Request
                                                                </button>
                                                            </h2>
                                                            <div id="collapseM" class="accordion-collapse collapse"
                                                                aria-labelledby="headingM"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="request[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Express basic needs Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="request[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Express likes & dislikes Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingN">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseN"
                                                                    aria-expanded="false" aria-controls="collapseN">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Communication
                                                                    Skills > Speaking
                                                                </button>
                                                            </h2>
                                                            <div id="collapseN" class="accordion-collapse collapse"
                                                                aria-labelledby="headingN"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="speaking[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Imitate new words Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="speaking[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Name family members Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingO">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseO"
                                                                    aria-expanded="false" aria-controls="collapseO">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill Development planner > Communication
                                                                    Skills > Pragmatic communication
                                                                </button>
                                                            </h2>
                                                            <div id="collapseO" class="accordion-collapse collapse"
                                                                aria-labelledby="headingO"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="pragmatic_communication[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Ask for a break when feeling stress/upset Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingP">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseP"
                                                                    aria-expanded="false" aria-controls="collapseP">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Independent Daily Living Skills > Life
                                                                    Skills (Following ADLs) > Hygiene: Washing & Showering
                                                                </button>
                                                            </h2>
                                                            <div id="collapseP" class="accordion-collapse collapse"
                                                                aria-labelledby="headingP"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="washing_showering[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Wear undergarments Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingQ">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseQ"
                                                                    aria-expanded="false" aria-controls="collapseQ">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Independent Daily Living Skills > Life
                                                                    Skills (Following ADLs) > Basic First Aid Knowledge
                                                                </button>
                                                            </h2>
                                                            <div id="collapseQ" class="accordion-collapse collapse"
                                                                aria-labelledby="headingQ"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="basic_first_aid_knowledgee[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Ask for help Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingR">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseR"
                                                                    aria-expanded="false" aria-controls="collapseR">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Independent Daily Living Skills > Meal
                                                                    preparation skills & Knowledge > Meal preparation skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapseR" class="accordion-collapse collapse"
                                                                aria-labelledby="headingR"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="preparation_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Make simple snacks for oneself Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingS">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseS"
                                                                    aria-expanded="false" aria-controls="collapseS">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Independent Daily Living Skills > Meal
                                                                    preparation skills & Knowledge > Cooking preparation
                                                                </button>
                                                            </h2>
                                                            <div id="collapseS" class="accordion-collapse collapse"
                                                                aria-labelledby="headingS"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cooking_preparation[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Rooti Making Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cooking_preparation[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Potato smash Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingT">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseT"
                                                                    aria-expanded="false" aria-controls="collapseT">
                                                                    Section G : Domain 03 - Emotional development > Self
                                                                    understanding > Self-Awareness > Intrapersonal
                                                                </button>
                                                            </h2>
                                                            <div id="collapseT" class="accordion-collapse collapse"
                                                                aria-labelledby="headingT"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Communicate personal needs Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Make small decisions independently Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingU">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseU"
                                                                    aria-expanded="false" aria-controls="collapseU">
                                                                    Section G : Domain 03 - Emotional development > Behavior
                                                                    Management > Intrapersonal > Prompting
                                                                </button>
                                                            </h2>
                                                            <div id="collapseU" class="accordion-collapse collapse"
                                                                aria-labelledby="headingU"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="prompting[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Helping teacher to response correctly. Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingV">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseV"
                                                                    aria-expanded="false" aria-controls="collapseV">
                                                                    Section G : Domain 03 - Emotional development > Behavior
                                                                    Management > Intrapersonal > Modeling
                                                                </button>
                                                            </h2>
                                                            <div id="collapseV" class="accordion-collapse collapse"
                                                                aria-labelledby="headingV"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="modeling[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Initiating correct response Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingX">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseX"
                                                                    aria-expanded="false" aria-controls="collapseX">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social Emotional Learning (SEL) > Interpersonal Skills >
                                                                    Emotions
                                                                </button>
                                                            </h2>
                                                            <div id="collapseX" class="accordion-collapse collapse"
                                                                aria-labelledby="headingX"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="emotions[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Demonstrate appropriate ways to manage
                                                                            uncomfortable emotions Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="emotions[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Express own emotion appropriately Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="emotions[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Know uncomfortable emotions such as anger, fear,
                                                                            guilt, anxiety & stress, ETC. Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingW">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseW"
                                                                    aria-expanded="false" aria-controls="collapseW">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social Emotional Learning (SEL) > Interpersonal Skills >
                                                                    Social Awareness
                                                                </button>
                                                            </h2>
                                                            <div id="collapseW" class="accordion-collapse collapse"
                                                                aria-labelledby="headingW"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="social_awareness[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Understanding about private, personal and social
                                                                            areas / places Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingY">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseY"
                                                                    aria-expanded="false" aria-controls="collapseY">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social Emotional Learning (SEL) > Interpersonal Skills >
                                                                    Interpersonal Skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapseY" class="accordion-collapse collapse"
                                                                aria-labelledby="headingY"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Asking for help Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Joining in a group/activity Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Asking permission Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sharing with others Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Make eye contact when spoken to Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Smile in response to a social greeting Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingZ">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseZ"
                                                                    aria-expanded="false" aria-controls="collapseZ">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Leisure & Recreation > Social games > How to Play with
                                                                    others
                                                                </button>
                                                            </h2>
                                                            <div id="collapseZ" class="accordion-collapse collapse"
                                                                aria-labelledby="headingZ"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="games_how_to_play_with_others[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Turn taking Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="games_how_to_play_with_others[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Follow others Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingZZ">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseZZ"
                                                                    aria-expanded="false" aria-controls="collapseZZ">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social Communication skills > Social Interaction >
                                                                    Sharing Personal issues
                                                                </button>
                                                            </h2>
                                                            <div id="collapseZZ" class="accordion-collapse collapse"
                                                                aria-labelledby="headingZZ"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="sharing_personal_issues[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Turn taking Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="sharing_personal_issues[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Follow others Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingAA">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#collapseAA"
                                                                    aria-expanded="false" aria-controls="collapseAA">
                                                                    Section I: Independent skills > Household maintenance
                                                                    skills > Operating Household appliances > Self
                                                                    development
                                                                </button>
                                                            </h2>
                                                            <div id="collapseAA" class="accordion-collapse collapse"
                                                                aria-labelledby="headingAA"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Microwave open Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Video games consolers Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Computer, laptops Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Electric Kettle Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingfive">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsefive" aria-expanded="false"
                                                                    aria-controls="collapsefive">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Gross
                                                                    Motor Skills > Adaptations
                                                                </button>
                                                            </h2>
                                                            <div id="collapsefive" class="accordion-collapse collapse"
                                                                aria-labelledby="headingfive"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="adaptations[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Backward Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="adaptations[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sideways Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingsix">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsesix" aria-expanded="false"
                                                                    aria-controls="collapsesix">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Gross
                                                                    Motor Skills > Fundamental Movement exercisel
                                                                </button>
                                                            </h2>
                                                            <div id="collapsesix" class="accordion-collapse collapse"
                                                                aria-labelledby="headingsix"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="fundamental_movement_exercisel[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Shoulder Blades: Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="fundamental_movement_exercisel[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Shoulder Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="fundamental_movement_exercisel[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Low Back Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingseven">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseseven" aria-expanded="false"
                                                                    aria-controls="collapseseven">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Gross
                                                                    Motor Skills > Yoga
                                                                </button>
                                                            </h2>
                                                            <div id="collapseseven" class="accordion-collapse collapse"
                                                                aria-labelledby="headingseven"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="yoga[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Standup Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="yoga[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Mountain Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="yoga[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Cobra Pose Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="yoga[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Vajrasana Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="yoga[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Podmasana Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingeight">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseeight"
                                                                    aria-expanded="false" aria-controls="collapseeight">
                                                                    Section E: Domain 01 - Physical development > Motor
                                                                    Planning > Fine
                                                                    Motor Skills > Craft activities
                                                                </button>
                                                            </h2>
                                                            <div id="collapseeight" class="accordion-collapse collapse"
                                                                aria-labelledby="headingeight"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="craft_activities[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            hole punch tasks Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="craft_activities[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sewing/ needlework Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="craft_activities[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            jewelry making Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="craft_activities[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            gluing activity Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="craft_activities[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Knitting Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="craft_activities[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sewing/ needlework Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingnine">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsenine" aria-expanded="false"
                                                                    aria-controls="collapsenine">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill
                                                                    Development planner > Intrapersonal skills >
                                                                    Assertiveness
                                                                </button>
                                                            </h2>
                                                            <div id="collapsenine" class="accordion-collapse collapse"
                                                                aria-labelledby="headingnine"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="assertiveness[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Maintain dairy Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="assertiveness[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Describe Particular situation elaborately Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingten">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseten" aria-expanded="false"
                                                                    aria-controls="collapseten">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill
                                                                    Development planner > Functional Academic Skills >
                                                                    Functional Reading
                                                                    Skillss
                                                                </button>
                                                            </h2>
                                                            <div id="collapseten" class="accordion-collapse collapse"
                                                                aria-labelledby="headingten"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="functional_reading_skillss[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Read newspaper and news on television Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="functional_reading_skillss[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Read application forms Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingeleven">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseeleven"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseeleven">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development > Skill
                                                                    Development planner > Functional Academic Skills > Money
                                                                    management
                                                                    Skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapseeleven" class="accordion-collapse collapse"
                                                                aria-labelledby="headingeleven"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="money_management_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Exchange money (Coins/Bills) for money or equal
                                                                            value Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="money_management_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Money/change Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="money_management_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Basic understanding of the value of money Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingtwelve">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapsetwelve"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapsetwelve">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development >
                                                                    Independent Daily Living Skills > Life Skills (Following
                                                                    ADLs) > Shaving
                                                                    Routine
                                                                </button>
                                                            </h2>
                                                            <div id="collapsetwelve" class="accordion-collapse collapse"
                                                                aria-labelledby="headingtwelve"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="shaving_routing[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Starting & finishing Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading13">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse13" aria-expanded="false"
                                                                    aria-controls="collapse13">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development >
                                                                    Independent Daily Living Skills > Life Skills (Following
                                                                    ADLs) > Basic
                                                                    First Aid Knowledge
                                                                </button>
                                                            </h2>
                                                            <div id="collapse13" class="accordion-collapse collapse"
                                                                aria-labelledby="heading13"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="basic_first_aid_knowledge[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Follow an emergency plan Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading14">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse14" aria-expanded="false"
                                                                    aria-controls="collapse14">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development >
                                                                    Independent Daily Living Skills > Meal preparation
                                                                    skills & Knowledge >
                                                                    Meal preparation skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapse14" class="accordion-collapse collapse"
                                                                aria-labelledby="heading14"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="meal_preparation_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Open/Close containers and/or fasteners Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="meal_preparation_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Clear a table Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="meal_preparation_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Participate in preparing foods Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading15">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse15" aria-expanded="false"
                                                                    aria-controls="collapse15">
                                                                    Section F: Domain 02 : Intellectual / cognitive
                                                                    development >
                                                                    Independent Daily Living Skills > Meal preparation
                                                                    skills & Knowledge >
                                                                    Serving Food
                                                                </button>
                                                            </h2>
                                                            <div id="collapse15" class="accordion-collapse collapse"
                                                                aria-labelledby="heading15"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="serving_food[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Serve self food Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading16">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse16" aria-expanded="false"
                                                                    aria-controls="collapse16">
                                                                    Section G : Domain 03 - Emotional development > Self
                                                                    understanding >
                                                                    Self-Awareness > Intrapersonal
                                                                </button>
                                                            </h2>
                                                            <div id="collapse16" class="accordion-collapse collapse"
                                                                aria-labelledby="heading16"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_awareness_intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Make small decisions independently Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_awareness_intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Communicate personal strengths Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_awareness_intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Recognize personal strengths Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading17">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse17" aria-expanded="false"
                                                                    aria-controls="collapse17">
                                                                    Section G : Domain 03 - Emotional development > Self
                                                                    understanding >
                                                                    Self-Esteem > Intrapersonal
                                                                </button>
                                                            </h2>
                                                            <div id="collapse17" class="accordion-collapse collapse"
                                                                aria-labelledby="heading17"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_esteem_intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Identify how he/she contributes to the family
                                                                            Type: Vocational

                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_esteem_intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Talk about what he/she does well Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_esteem_intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Identify positive characteristics of self Type:
                                                                            Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading18">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse18" aria-expanded="false"
                                                                    aria-controls="collapse18">
                                                                    Section G : Domain 03 - Emotional development > Self
                                                                    understanding >
                                                                    Self – Regulation > Intrapersonal
                                                                </button>
                                                            </h2>
                                                            <div id="collapse18" class="accordion-collapse collapse"
                                                                aria-labelledby="heading18"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="self_regulation_intrapersonal[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Self – Calming strategies Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading19">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse19" aria-expanded="false"
                                                                    aria-controls="collapse19">
                                                                    Section G : Domain 03 - Emotional development >
                                                                    Intrapersonal > Loss of
                                                                    relationship > managing death of family members
                                                                </button>
                                                            </h2>
                                                            <div id="collapse19" class="accordion-collapse collapse"
                                                                aria-labelledby="heading19"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="managing_death_of_family_members[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Self – Calming strategies Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="managing_death_of_family_members[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Share personal exhausting feelings. Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading20">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse20" aria-expanded="false"
                                                                    aria-controls="collapse20">
                                                                    Section G : Domain 03 - Emotional development >
                                                                    Intrapersonal > Loss of
                                                                    relationship > managing death of relative / friends
                                                                </button>
                                                            </h2>
                                                            <div id="collapse20" class="accordion-collapse collapse"
                                                                aria-labelledby="heading20"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="managing_death_of_relative_friends[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Share personal exhausting feelings. Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading21">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse21" aria-expanded="false"
                                                                    aria-controls="collapse21">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social
                                                                    Emotional Learning (SEL) > Interpersonal Skills >
                                                                    Interpersonal Skills
                                                                </button>
                                                            </h2>
                                                            <div id="collapse21" class="accordion-collapse collapse"
                                                                aria-labelledby="heading21"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Apologizing Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Wait while others speak Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Asking questions Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="interpersonal_skills[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sharing with others Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading22">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse22" aria-expanded="false"
                                                                    aria-controls="collapse22">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social
                                                                    Emotional Learning (SEL) > Perspective taking >
                                                                    Handle/accept different
                                                                    situation
                                                                </button>
                                                            </h2>
                                                            <div id="collapse22" class="accordion-collapse collapse"
                                                                aria-labelledby="heading22"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="handle_accept_different_situation[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Self control Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading23">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse23" aria-expanded="false"
                                                                    aria-controls="collapse23">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social
                                                                    Emotional Learning (SEL) > Empathy > Understand social
                                                                    deviation in
                                                                    terms of age
                                                                </button>
                                                            </h2>
                                                            <div id="collapse23" class="accordion-collapse collapse"
                                                                aria-labelledby="heading23"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="understand_social_deviation[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Understand, follow and maintain the acceptable
                                                                            and unacceptable
                                                                            behaviors Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="understand_social_deviation[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Understand the responsibility towards all age
                                                                            group of people.
                                                                            Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading24">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse24" aria-expanded="false"
                                                                    aria-controls="collapse24">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Leisure &
                                                                    Recreation > Social games > How to Play with others
                                                                </button>
                                                            </h2>
                                                            <div id="collapse24" class="accordion-collapse collapse"
                                                                aria-labelledby="heading24"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="how_to_play_with_others[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Understanding game / play Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading25">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse25" aria-expanded="false"
                                                                    aria-controls="collapse25">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Social
                                                                    Communication skills > Social Interaction >
                                                                    Interactional - Me and You…
                                                                </button>
                                                            </h2>
                                                            <div id="collapse25" class="accordion-collapse collapse"
                                                                aria-labelledby="heading25"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3" name="me_and_you[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Makes apologies or gives explanations of
                                                                            behavior Type:
                                                                            Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading26">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse26" aria-expanded="false"
                                                                    aria-controls="collapse26">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Work Habit >
                                                                    Communication (work related) > Ethical Values
                                                                </button>
                                                            </h2>
                                                            <div id="collapse26" class="accordion-collapse collapse"
                                                                aria-labelledby="heading26"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="ethical_values[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Interrupting skills Type: Vocational

                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="ethical_values[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Explain clearly Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading27">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse27" aria-expanded="false"
                                                                    aria-controls="collapse27">
                                                                    Section H : Domain 04 - Social and ethical development >
                                                                    Work Habit >
                                                                    Work Readiness > Ethical Values
                                                                </button>
                                                            </h2>
                                                            <div id="collapse27" class="accordion-collapse collapse"
                                                                aria-labelledby="heading27"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="work_readiness_ethical_values[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Be comfortable with getting temporarily
                                                                            interrupted Type:
                                                                            Vocational

                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="work_readiness_ethical_values[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Accept changes in schedule Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading28">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse28" aria-expanded="false"
                                                                    aria-controls="collapse28">
                                                                    Section I: Independent skills > Household maintenance
                                                                    skills > Home
                                                                    Maintenance > Self development
                                                                </button>
                                                            </h2>
                                                            <div id="collapse28" class="accordion-collapse collapse"
                                                                aria-labelledby="heading28"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="home_maintenance_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Ironing Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="home_maintenance_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Making bed Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading29">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse29" aria-expanded="false"
                                                                    aria-controls="collapse29">
                                                                    Section I: Independent skills > Household maintenance
                                                                    skills > Cleaning
                                                                    & Washing Chores > Self development
                                                                </button>
                                                            </h2>
                                                            <div id="collapse29" class="accordion-collapse collapse"
                                                                aria-labelledby="heading29"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cleaning_washing_chores_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Clean windows Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cleaning_washing_chores_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Clean sink Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cleaning_washing_chores_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Mop floor Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cleaning_washing_chores_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Sweep floor Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cleaning_washing_chores_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Change garbage bag Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cleaning_washing_chores_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Pick up personal items Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="cleaning_washing_chores_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Washing clothes Type: Pre-Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading30">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse30" aria-expanded="false"
                                                                    aria-controls="collapse30">
                                                                    Section I: Independent skills > Household maintenance
                                                                    skills > Telephone
                                                                    Skills > Self development
                                                                </button>
                                                            </h2>
                                                            <div id="collapse30" class="accordion-collapse collapse"
                                                                aria-labelledby="heading30"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-check form-check-info mb-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="formCheckcolor3"
                                                                            name="telephone_skills_self_development[]">
                                                                        <label class="form-check-label"
                                                                            for="formCheckcolor3">
                                                                            Relay simple telephone messages Type: Vocational
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single item  -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="case-histroy_list" role="tabpanel">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label style="display: inline-flex;align-items: center;"> Show <select
                                                name="length"
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
                                            <x-input-text type="search" name="search" />
                                        </label>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table w-100 table-bordered">
                                        <thead>
                                            <tr class="table-primary">
                                                <th> Assign To</th>
                                                <th> Student</th>
                                                <th> Assign Task Name</th>
                                                <th> Instruction</th>
                                                <th> Log</th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>demo</td>
                                                <td>demo</td>
                                                <td>reading</td>
                                                <td>first to last</td>
                                                <td>demo</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-primary btn-rounded waves-effect waves-light mb-2 me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target=".material-callects-modal-xl-view">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-info btn-rounded waves-effect waves-light mb-2 me-1">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-danger btn-rounded waves-effect waves-light mb-2 me-1"><i
                                                            class="fas fa-check"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target=".material-callects-modal-xl-view">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                                        <i class="bx bx-dollar"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
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
                                                    <a class="page-link" href="#">2 <span
                                                            class="sr-only">(current)</span></a>
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
        $(document).ready(function() {
            var $links = $('#expend');
            $links.click(function() {
                $links.removeClass('show');
                $('.collapse').addClass('show');
            });
            var $collapse = $('#collapse');
            $collapse.click(function() {
                $('.collapse').removeClass('show');
            });

            //     $(".hide").hide();
            //   $("#expend").click(function(){
            //     $(".hide").toggle();
            //   });
        });
    </script>
@endsection
