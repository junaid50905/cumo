@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')ITP LISTS @endslot
    @endcomponent
    {{-- code  --}}

 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    
                    </p>
                    <div class="d-flex justify-content-end pb-5">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Add</button>
                
                        <!-- sample modal content -->
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Student Create</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        
                                        <div class="card p-0 m-0">
                                            <div class="card-body">
                                                <div class="row pb-3">
                                                    <div class="col-6 d-flex">
                                                        <label class="col-4 col-form-label"> Student Name</label>
                                                        <div class="col-6">
                                                            <select class="form-select">
                                                                <option>Select</option>
                                                                <option>2222</option>
                                                                <option>55555</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex">
                                                        <label for="example-text-input" class="col-md-4 col-form-label">Assignment Name</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="col-6 d-flex">
                                                        <label for="example-date-input" class="col-md-4 col-form-label">Start Date</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 d-flex">
                                                        <label for="example-date-input" class="col-md-4 col-form-label">End Date</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pb-3">
                                                    <div class="row">
                                                        <table id="" class="table table-bordered dt-responsive  nowrap w-100 px-5">
                                                            <thead>
                                                                <tr>
                                                                    <th>Selected Task </th>
                                                                    <th>Teacher </th>
                                                                    <th>Routine </th>
                                                                    <th>Comment </th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="col-12 row">
                                                        <div class="col-2">
                                                            <button type="button" id="container" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Expand</button>
                                                        </div>
                                                    
                                                    </div>

                                                    
                                                </div>
                                                <div class="row hide">
                                                    <div class="col-lg-12">
                                                        <div class="accordion" id="accordionExample">
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                        aria-expanded="true" aria-controls="collapseOne">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Gross Motor Skills > Organized Play
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Kick a large stationary ball with a 2-step start Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Catch a large ball Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Gross Motor Skills > Balance Beam
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        

                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Gross Motor Skills > Jumping Jacks
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Have the student jump so that the legs spread apart and the hands clap above the head and then jump again so the feet go back together and the arms go back to the sides - Do several of these Type: Vocational

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingfoure">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefoure" aria-expanded="false" aria-controls="collapsefoure">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Gross Motor Skills > Fitness & Physical Activity
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefoure" class="accordion-collapse collapse" aria-labelledby="headingfoure"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Throw at a target Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Participate in structured activities: Races, Obstacle Course, Group Games, Sports Teams, Individual Sports, Drill Exercises Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingfive">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Gross Motor Skills > Adaptations
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Backward Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                                        aria-expanded="false" aria-controls="collapsesix">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Gross Motor Skills > Fundamental Movement exercisel
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Shoulder Blades: Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Shoulder Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Gross Motor Skills > Yoga
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Standup Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Mountain Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cobra Pose Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Vajrasana Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                                        Section E: Domain 01 - Physical development > Motor Planning > Fine Motor Skills > Craft activities
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                hole punch tasks Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Sewing/ needlework Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                jewelry making Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                gluing activity Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Knitting Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                                                        Section F: Domain 02 : Intellectual / cognitive development > Skill Development planner > Intrapersonal skills > Assertiveness
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain dairy Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Describe Particular situation elaborately Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingten">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                                                        Section F: Domain 02 : Intellectual / cognitive development > Skill Development planner > Functional Academic Skills > Functional Reading Skills
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Read newspaper and news on television Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                                                        Section F: Domain 02 : Intellectual / cognitive development > Skill Development planner > Functional Academic Skills > Money management Skills
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseeleven" class="accordion-collapse collapse" aria-labelledby="headingeleven"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Exchange money (Coins/Bills) for money or equal value Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Money/change Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Basic understanding of the value of money Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingtwelve">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                                        Section F: Domain 02 : Intellectual / cognitive development > Independent Daily Living Skills > Life Skills (Following ADLs) > Shaving Routine
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsetwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                                        Section F: Domain 02 : Intellectual / cognitive development > Independent Daily Living Skills > Life Skills (Following ADLs) > Basic First Aid Knowledge
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                                                        Section F: Domain 02 : Intellectual / cognitive development > Independent Daily Living Skills > Meal preparation skills & Knowledge > Meal preparation skills
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Open/Close containers and/or fasteners Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Clear a table Type: Pre-Vocational

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Participate in preparing foods Type: Pre-Vocational

                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading15">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                                                        Section F: Domain 02 : Intellectual / cognitive development > Independent Daily Living Skills > Meal preparation skills & Knowledge > Serving Food
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                                                        Section G : Domain 03 - Emotional development > Self understanding > Self-Awareness > Intrapersonal
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Make small decisions independently Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Communicate personal strengths Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                                                        Section G : Domain 03 - Emotional development > Self understanding > Self-Esteem > Intrapersonal
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Identify how he/she contributes to the family Type: Vocational

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Talk about what he/she does well Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Identify positive characteristics of self Type: Pre-Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading18">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                                                        Section G : Domain 03 - Emotional development > Self understanding > Self – Regulation > Intrapersonal
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
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
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                                                        Section G : Domain 03 - Emotional development > Intrapersonal > Loss of relationship > managing death of family members
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Self – Calming strategies Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading19">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                                                        Section G : Domain 03 - Emotional development > Intrapersonal > Loss of relationship > managing death of family members
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Share personal exhausting feelings. Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                      


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading20">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                                                        Section G : Domain 03 - Emotional development > Intrapersonal > Loss of relationship > managing death of relative / friends
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Share personal exhausting feelings. Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading21">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                                                        Section H : Domain 04 - Social and ethical development > Social Emotional Learning (SEL) > Interpersonal Skills > Interpersonal Skills
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Apologizing Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Wait while others speak Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Asking questions Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Sharing with others Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading22">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                                                        Section H : Domain 04 - Social and ethical development > Social Emotional Learning (SEL) > Perspective taking > Handle/accept different situation
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Self control Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                    


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading23">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                                                        Section H : Domain 04 - Social and ethical development > Social Emotional Learning (SEL) > Empathy > Understand social deviation in terms of age
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Understand, follow and maintain the acceptable and unacceptable behaviors Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Understand the responsibility towards all age group of people. Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading24">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                                                        Section H : Domain 04 - Social and ethical development > Leisure & Recreation > Social games > How to Play with others
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                               Understanding game / play Type: Vocational
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading25">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                                                        Section H : Domain 04 - Social and ethical development > Social Communication skills > Social Interaction > Interactional - Me and You…
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Makes apologies or gives explanations of behavior Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                  


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading26">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                                                        Section H : Domain 04 - Social and ethical development > Work Habit > Communication (work related) > Ethical Values
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Interrupting skills Type: Vocational

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Explain clearly Type: Pre-Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading27">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                                                        Section H : Domain 04 - Social and ethical development > Work Habit > Work Readiness > Ethical Values
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Be comfortable with getting temporarily interrupted Type: Vocational

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Accept changes in schedule Type: Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading27">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                                                        Section I: Independent skills > Household maintenance skills > Home Maintenance > Self development
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Ironing Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Making bed Type: Pre-Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading28">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                                                        Section I: Independent skills > Household maintenance skills > Cleaning & Washing Chores > Self development
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Clean windows Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Clean sink Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Mop floor Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Sweep floor Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Change garbage bag Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Pick up personal items Type: Pre-Vocational
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Washing clothes Type: Pre-Vocational
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading29">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                                                        Section I: Independent skills > Household maintenance skills > Telephone Skills > Self development
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Relay simple telephone messages Type: Vocational
                                                                            </label>
                                                                        </div>
                                                                    


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                         
                                                            <!-- Single item  -->
                                                    
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th class=""> Assign To</th>
                                <th class=""> Student</th>
                                <th class=""> Assign Task Name</th>
                                <th class=""> Instruction</th>
                                <th class=""> Log</th>
                                <th class=""> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>demo</td>
                                <td>demo</td>
                                <td>reading</td>
                                <td>first to last</td>
                                <td>demo</td>
                                <td><i class="fas fa-eye pe-3"></i> <i class="fas fa-check pe-3"></i> <i class="fas fa-pen pe-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td>demo</td>
                                <td>demo</td>
                                <td>reading</td>
                                <td>first to last</td>
                                <td>demo</td>
                                <td><i class="fas fa-eye pe-3"></i> <i class="fas fa-check pe-3"></i> <i class="fas fa-pen pe-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".hide").hide();
      $("#container").click(function(){
        $(".hide").toggle();
      });
    });
</script>


@endsection




