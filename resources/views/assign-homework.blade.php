@extends('layouts.master')

@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Utility @endslot
        @slot('title')HOMEWORK LISTS @endslot
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
                                                    <div class="col-12 row">
                        
                                                        <label class="col-4 col-form-label"> Student Name</label>
                                                        <div class="col-6">
                                                            <select class="form-select">
                                                                <option>Select</option>
                                                                <option>2222</option>
                                                                <option>55555</option>
                                                            </select>
                                                        </div>
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
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Comb Hair
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Wear shirt or t-shirt
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Wash Hands Properly
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Organized cupboard and Almirah / Alna
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Making bed

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Tidy room
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain own belongings
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                List needed things
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain own routine
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Reading newspaper
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Prayer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cleaning own plate/glass
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Checking/Opening SMS from mobile, Sending SMS
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Identify dirty clothes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Washing own dress
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Hang clothe on hanger & rope
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Ironing own cloth
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Put items on a shelf
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Use lotion and lip bum
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Having food himself
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Folding his cloth
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Washing regular gym dress by hand
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Follow toilet training step
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Bathing
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Shaving
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Rinse hair with shampoo
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain hygiene
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain Feminine Hygiene
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
                                                                                Help parent to do their assign work
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Family time spend
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Help mother during work & help others
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Take care of family member
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Take household responsibility
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Make phone call to relatives
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Serving food on the table or to others
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Folding cloth of others
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Medicine provide to family member
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Organise and Tidy bed room
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Online grocery shopping, selecting items according to priority (essential and luxury), make online payment
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Celebrate special occasion with Family
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Help family member when they need
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Order Food for special occasion
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain good connection with family member
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain good connection with relatives by audio/ video call
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Wish family member on their birthday
                                                                            </label>
                                                                        </div>
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
                                                                                Gossiping or talking or playing to parents
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Understanding on ‘making fun’ (concept and facial expression)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Listening music
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Water balloon
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                               Video games
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watering in the plants and Gardening
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Make some craft item
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Colour picture & make collage
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Making Origami item
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Make a picture puzzle
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watch age appropriate movie with parental guidance
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watch movie and television show
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watch comedy dramas
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watching origami kirigami video on YouTube
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Read Story book
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Making own funny video
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Social media involvement
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Talking on mobile phones with friends
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Story book(Telling stories by looking at pictures)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Story book(comic book with picture)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Story book(Want to know what you are looking for by showing pictures of the story)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Story book(Reading short story books)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Dot join games)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Shadow puppet)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(fill in the blank with number)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Educational games for kid)
                                                                            </label>
                                                                        </div>
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
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Making flute with paper(কাগজ দিয়ে বাঁশি বানানো))
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Online games (according age))
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Kites)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Ludo)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Caram)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Chess)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Games(Skipping)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Movie(Animation Movies (Coco, Frozen, Moana, Wreck-It Ralph, How to Train Your Dragon, Rango, Retatoli, Toy story, Cars, Finding Nemo, Dolphin Tale .... option to add more))
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Movie(Meena cartoon)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Movie(Tom and Jerry)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Movie(Sisimpur)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Movie(Puppet show)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Movie(Watching comedy movie ( Mr. Been, Charlie Chaplin, Three stooges)
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
                                                                                Home Maintenance (identify what is not working at home and initiate to fix it to tell parents or call plumber)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintenance of Household items
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Mopping & swiping and Wiping and cleaning floor
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Dusting home furniture, household equipment
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Leaning Operating different household appliances, toaster, sandwich maker, oven, fridge, rice cooker/ovenetc
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                How to warm the food using rice cooker/ oven
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                How to operate blender machine and Blend items
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cleaning & Washing Chores
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cleaning sink/basin
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Clean jug and glass
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cleaning the dining table and chair
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Laundry Tasks
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Identify dirty clothes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Hang clothe on hanger &rope
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Washing different types of cloths
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Ironing cloths
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Telephone Skills, mobile uses
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Dialing number from mobile phone
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Identifying SMS option from mobile
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Use insect killer, learn using right chemical in right quantity and in right places
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Refill different appliance
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Put items on a shelf
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
                                                                                Basic application(Microsoft office)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Basic application(MS Word)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Basic application(MS Excel)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Basic application(MS PowerPoint)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Basic application(Internet Browsing)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain to do list
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Use email
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Online class / online meeting
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Create cv
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Read some professional article
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Searching for job
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Maintain schedule
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
                                                                        Meal Preparetion Skill(Cooking & catering)
                                                                    </button>
                                                                </h2>
                                                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">


                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Pealing and Cutting onion, garlic
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Pealing and Cutting different vegetables
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Beaten egg
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Peal boiled egg/potato
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Prepare egg smash, potato vorta
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Prepare egg omelet/poach
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Prepare egg toast
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cleaning chicken, meat
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Wash vegetables
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cleaning kitchen area after cocking
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Peel vegetables
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cook simple dishes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cook different dishes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Use cooking appliances
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Watch video about cooking
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Celebrate day with making special dishes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Test of food texture(Taste seasonal fruit( green mango, lemon))
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Test of food texture(Having taste of vortta / smash vegetables)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Test of food texture(Different type and texture food test)
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
                                                                                Treadmill at home can walk for 15/20 minutes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                15/20 minutes’ walk in an open space very fast.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Getting up and sitting 30/50 times a day.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Can push up 20/30 times every day.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Stand up straight and jump 5/6 times in 1 minute.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Butter fly
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Can skipping / jump rope, 50 times
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Sit up - 20reps - 1min
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Push ups - 20reps- 1min
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
                                                                                Exercise for 30 minutes.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Standing in the chair and jumping in the floor.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Jogging
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Breathing Exercise.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Doing stretching exercise
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Skipping (rope game)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Drink 8 glasses of water every day
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Eating foods rich in vitamin-C and vitamin-D
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Sitting in the sunlight for 20 minutes 5 days a week
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Cut your fingernails and toenails every Friday.
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Exercise for 30 minutes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Standing in the chair and jumping in the middle
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
                                                                                Drama(Vocal cord exercise)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Drama(Pronunciation exercise)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Drama(Poem recitation)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Drama(Watching movie and television show)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Drama(Memorise dialogue)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Dance(Mudra practice)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Dance(Watching video on different dance shows)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Dance(Showing various videos made by the instructor)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Dance(Movement practice)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Dance(Dance practice)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Music(Listen the practicing music)
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-info mb-3">
                                                                            <input class="form-check-input" type="checkbox" id="formCheckcolor3" >
                                                                            <label class="form-check-label" for="formCheckcolor3">
                                                                                Music(Practice music)
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
                                <th class=""> Log</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>demo</td>
                                <td>Development</td>
                                <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i class="fas fa-trash-alt"></i></td>
                            </tr>
                            <tr>
                                <td>demo</td>
                                <td>Development</td>
                                <td><i class="fas fa-eye"></i><i class="fas fa-pen px-3"></i><i class="fas fa-trash-alt"></i></td>
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




