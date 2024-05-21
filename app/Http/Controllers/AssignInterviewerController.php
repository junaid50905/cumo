<?php

namespace App\Http\Controllers;

use App\Models\AssignInterviewer;
use App\Http\Requests\StoreAssignInterviewerRequest;
use App\Http\Requests\UpdateAssignInterviewerRequest;

class AssignInterviewerController extends Controller
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
        return view('HR.assign-interviewer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignInterviewerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignInterviewerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignInterviewer  $assignInterviewer
     * @return \Illuminate\Http\Response
     */
    public function show(AssignInterviewer $assignInterviewer)
    {   $data = [
        'record' => $assignInterviewer,
    ];
        return view('HR.assign-interviewer.view' ,$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignInterviewer  $assignInterviewer
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignInterviewer $assignInterviewer)
    {   $data = [
        'record' => $assignInterviewer,
    ];
        return view('HR.assign-interviewer.edit' ,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignInterviewerRequest  $request
     * @param  \App\Models\AssignInterviewer  $assignInterviewer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignInterviewerRequest $request, AssignInterviewer $assignInterviewer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignInterviewer  $assignInterviewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignInterviewer $assignInterviewer)
    {
        return $assignInterviewer->delete();
    }
}
