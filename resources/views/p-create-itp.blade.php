@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')STUDENT ITP @endslot
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
                                                        <label for="example-text-input" class="col-md-4 col-form-label">ITP Name</label>
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
                                                    <div class="col-6 d-flex">
                                                        <label for="example-text-input" class="col-md-4 col-form-label">Instruction</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
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
                                                                        Personal Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Grooming
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cut nails hands and feet
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
                                                                        Family Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        

                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Making breakfast for the family
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watching movie and television show with family
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
                                                                        Recreational Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(online games)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(making picture by cutting paper)
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
                                                                       Household Work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefoure" class="accordion-collapse collapse" aria-labelledby="headingfoure"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Computer Homework
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Meal Preparetion Skill
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Cooking Catering
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Gym Exercise
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Therapeutic Home work
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseeleven" class="accordion-collapse collapse" aria-labelledby="headingeleven"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsetwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single item  -->
                                                            <!-- Single item  -->
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading20">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                                                        Homework(Karishma)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checkbox Info
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
                                <th class=""> Student</th>
                                <th class=""> ITP Name</th>
                                <th class=""> Type</th>
                                <th class=""> Is Closed</th>
                                <th class=""> Instruction </th>
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
                                <td>first to last</td>
                                <td>demo</td>
                                <td><i class="fas fa-eye pe-3"></i> <i class="fas fa-check pe-3"></i> <i class="fas fa-pen pe-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td>demo</td>
                                <td>demo</td>
                                <td>reading</td>
                                <td>first to last</td>
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




