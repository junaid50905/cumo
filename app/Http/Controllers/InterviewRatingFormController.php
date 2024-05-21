<?php

namespace App\Http\Controllers;

use App\Models\InterviewRatingForm;
use App\Http\Requests\StoreInterviewRatingFormRequest;
use App\Http\Requests\UpdateInterviewRatingFormRequest;

class InterviewRatingFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInterviewRatingFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterviewRatingFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InterviewRatingForm  $interviewRatingForm
     * @return \Illuminate\Http\Response
     */
    public function show(InterviewRatingForm $interviewRatingForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InterviewRatingForm  $interviewRatingForm
     * @return \Illuminate\Http\Response
     */
    public function edit(InterviewRatingForm $interviewRatingForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInterviewRatingFormRequest  $request
     * @param  \App\Models\InterviewRatingForm  $interviewRatingForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterviewRatingFormRequest $request, InterviewRatingForm $interviewRatingForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InterviewRatingForm  $interviewRatingForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(InterviewRatingForm $interviewRatingForm)
    {
        //
    }
}
