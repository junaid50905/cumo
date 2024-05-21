@extends('layouts.master')

@section('title') MATERIAL COLLECTS @endsection

@section('css')

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Utility @endslot
@slot('title') Student Profile @endslot
@endcomponent


@include('layouts.student_profile.header')


<div class="row">
    <div class="col-12">

        @include('layouts.student_profile.left_sidebar')

        <!-- Right Sidebar -->
        <div class="email-rightbar mb-3">
            <div class="card">
                <div class="table-responsive">
                    <section>
                        <div class="row mt-3 ms-2">
                            <div class="col-lg-4">
                                <div class="mb-3 d-flex">
                                    <div>
                                        <label for="formrow-inputCity" class="form-label">Closing Date</label>
                                    </div>
                                    <div>
                                        <select class="form-control">
                                            <option value="0">Select</option>
                                            <option value="1">2019-01-06::Md. Amir Hossain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label fw-bold">Student Name: Faysal
                                        hossen Rafi
                                        <span class="text-danger">Status:Vocational</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3 ">
                                    <p class="lh-0">
                                        <span class="fw-bold">Closing Date:</span> 2019-01-06 <br>
                                        <span class="fw-bold">Closed By: </span>Md. Amir Hossain
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <table class="table table-bordered w-100">
                        <thead class="border-info">
                            <tr class="table-primary">
                                <th>ITP</th>
                                <th colspan="2">January</th>
                                <th colspan="2">February</th>
                                <th colspan="2">March</th>
                                <th colspan="2">April</th>
                                <th colspan="2">May</th>
                                <th colspan="2">June</th>
                                <th colspan="2">July</th>
                                <th colspan="2">August</th>
                                <th colspan="2">September</th>
                                <th colspan="2">October</th>
                                <th colspan="2">November</th>
                                <th colspan="2">December</th>
                                <th colspan="4">Total</th>
                                <th>Percentage</th>
                                <th>Home Visit Updates</th>
                                <th>Total</th>
                                <th>Percentage</th>
                                <th>Remarks</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Score</td>
                                <td>Attn</td>
                                <td>Total Marks</td>
                                <td>Achieved </td>
                                <td>Working</td>
                                <td>Total Attnd</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="border-info">
                            <tr style="background-color: #1d7ea9 !important;">
                                <td class="fw-bold text-white" colspan="100%">Domain: Section E: Domain 01 - Physical
                                    development </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Organized Play</td>
                            </tr>
                            <tr>
                                <td> Bounce a large ball </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">77 </td>
                                <td> </td>
                                <td style="text-align: center">126 </td>
                                <td> </td>
                                <td>770 </td>
                                <td>203 </td>
                                <td></td>
                                <td> </td>
                                <td>26.36 <input type="hidden" name="taskScore[ 78]" value="26.36"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Rolling</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Fitness Physical Activity</td>
                            </tr>
                            <tr>
                                <td> Independently run sp</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">161 </td>
                                <td> </td>
                                <td style="text-align: center">154 </td>
                                <td> </td>
                                <td>1120 </td>
                                <td>364 </td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">161 </td>
                                <td> </td>
                                <td style="text-align: center">154 </td>
                                <td> </td>
                                <td>1120 </td>
                                <td>364 </td>
                                <td> </td>
                                <td> </td>
                                <td>32.5 <input type="hidden" name="taskScore[ 207]" value="32.5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> Perform ball activit</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">84 </td>
                                <td> </td>
                                <td style="text-align: center">133 </td>
                                <td> </td>
                                <td>1120 </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">84 </td>
                                <td> </td>
                                <td style="text-align: center">133 </td>
                                <td> </td>
                                <td>1120 </td>
                                <td>266 </td>
                                <td> </td>
                                <td> </td>
                                <td>23.75 <input type="hidden" name="taskScore[ 220]" value="23.75"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Adaptations</td>
                            </tr>
                            <tr class="fw-bold text-white" style="background-color: #02bec9 !important;">
                                <td colspan="100%" style="margin-bottom:5px; ">Activity: Scissor activities</td>
                            </tr>
                            <tr class="fw-bold text-white" style="background-color: #02bec9 !important;">
                                <td colspan="100%" style="margin-bottom:5px; ">Activity: Craft activities</td>
                            </tr>
                            <tr>
                                <td> jewelry making</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">76 </td>
                                <td> </td>
                                <td style="text-align: center">33 </td>
                                <td> </td>
                                <td>700 </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">76 </td>
                                <td> </td>
                                <td style="text-align: center">33 </td>
                                <td> </td>
                                <td>700 </td>
                                <td>158 </td>
                                <td> </td>
                                <td> </td>
                                <td>22.57 <input type="hidden" name="taskScore[ 275]" value="22.57"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Eye-hand coordination games</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Chewy Foods(Organizing)</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Crunchy Foods(Alerting)</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Sucking Foods(Calming)</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Yoga
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="fw-bold border-none " colspan="4">Total Domain: 991 Maximum Total: 3710 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="background-color: #1d7ea9 !important;">
                                <td class="fw-bold text-white" colspan="100%">Domain: Section F: Domain 02 :
                                    Intellectual / cognitive development </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Distance maintains</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Understanding situation</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Curiosity and asking question</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Generalization ability</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Money management Skills</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Request</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Pragmatic communication</td>
                            </tr>
                            <tr>
                                <td> Apologize for inappr</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">91 </td>
                                <td>1260 </td>
                                <td>238 </td>
                                <td> </td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td style="text-align: center">91 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>238 </td>
                                <td> </td>
                                <td> </td>
                                <td>18.89 <input type="hidden" name="taskScore[ 1228]" value="18.89"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> Initiate social gree</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">84 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">84 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>231 </td>
                                <td> </td>
                                <td> </td>
                                <td>18.33 <input type="hidden" name="taskScore[ 1233]" value="18.33"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td> Learn strategies to </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">91 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>238 </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">91 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>238 </td>
                                <td> </td>
                                <td> </td>
                                <td>18.89 <input type="hidden" name="taskScore[ 1265]" value="18.89"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Grooming</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Basic First Aid Knowledge</td>
                            </tr>
                            <tr>
                                <td> Call 999 for an emer</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td>1260 </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>245 </td>
                                <td> </td>
                                <td> </td>
                                <td>19.44 <input type="hidden" name="taskScore[ 1606]" value="19.44"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Feeling and saying sorry</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="fw-bold border-none " colspan="4">Total Domain: 952 Maximum Total: 5040 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="background-color: #1d7ea9 !important;">
                                <td class="fw-bold text-white" colspan="100%">Domain: Section G : Domain 03 - Emotional
                                    development </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Sense of self</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Understanding self</td>
                            </tr>
                            <tr>
                                <td> Make positive statem</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">91 </td>
                                <td> </td>
                                <td> Make positive statem</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">91 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>238 </td>
                                <td> </td>
                                <td> </td>
                                <td>18.89 <input type="hidden" name="taskScore[ 1354]" value="18.89"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Self-Awareness</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Self
                                    – Regulation</td>
                            </tr>
                            <tr>
                                <td> Expression emotion</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">91 </td>
                                <td>1260 </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">91 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>238 </td>
                                <td> </td>
                                <td> </td>
                                <td>18.89 <input type="hidden" name="taskScore[ 1394]" value="18.89"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    breakup of relationship</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="fw-bold border-none " colspan="4">Total Domain: 476 Maximum Total: 2520 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="background-color: #1d7ea9 !important;">
                                <td class="fw-bold text-white" colspan="100%">Domain: Section H : Domain 04 - Social and
                                    ethical development </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Dress and Hygiene</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Relating with others</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Communication (work related)</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity: Work
                                    Readiness</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity: How
                                    to Play with others</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Social Interaction</td>
                            </tr>
                            <tr>
                                <td> Interaction with adu</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td style="text-align: center">84 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>231 </td>
                                <td> </td>
                                <td> </td>
                                <td>18.33 <input type="hidden" name="taskScore[ 2224]" value="18.33"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Topic Maintenance</td>
                            </tr>
                            <tr>
                                <td> Ability to interrupt</td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">84 </td>
                                <td>1260 </td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">0</td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center">49 </td>
                                <td> </td>
                                <td style="text-align: center">98 </td>
                                <td> </td>
                                <td style="text-align: center">84 </td>
                                <td> </td>
                                <td>1260 </td>
                                <td>231 </td>
                                <td> </td>
                                <td> </td>
                                <td>18.33 <input type="hidden" name="taskScore[ 2268]" value="18.33"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Accept formal/official decision</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="fw-bold border-none " colspan="4">Total Domain: 462 Maximum Total: 2520 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr style="background-color: #1d7ea9 !important;">
                                <td class="fw-bold text-white" colspan="100%">Domain: Section I: Independent skills
                                </td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Cleaning Washing Chores</td>
                            </tr>
                            <tr style="background-color: #02bec9 !important;">
                                <td class="fw-bold text-white" colspan="100%" style="margin-bottom:5px; ">Activity:
                                    Laundry Tasks</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="fw-bold border-none " colspan="4">Total Domain: 0 Maximum Total: 0 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div>
                            <h5><span class="fw-bold lh-1">RECOMMENDATION</span></h5>
                            <h5>ACCORDING TO Faysal hossen Rafi's EVALUATION</h5>
                            <h5>HIS NEW STATUS IS Pre-Vocational</h5>
                        </div>
                        <div class="ms-5">
                            <button type="button" class="btn btn-danger waves-effect waves-light">PRINT
                                EVALUATION</button>
                        </div>
                    </div>
                </div>
            </div><!-- card -->
        </div> <!-- end Col-9 -->
    </div>

</div>

@endsection
@section('script')

@endsection