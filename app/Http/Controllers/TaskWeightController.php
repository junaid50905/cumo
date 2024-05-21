<?php

namespace App\Http\Controllers;

use App\Models\taskWeight;
use App\Http\Requests\StoretaskWeightRequest;
use App\Http\Requests\UpdatetaskWeightRequest;

class TaskWeightController extends Controller
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
    
        $data = [
            // 'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('setup.program-setup.tesk-weight-setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretaskWeightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretaskWeightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taskWeight  $taskWeight
     * @return \Illuminate\Http\Response
     */
    public function show(taskWeight $taskWeight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\taskWeight  $taskWeight
     * @return \Illuminate\Http\Response
     */
    public function edit(taskWeight $taskWeight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetaskWeightRequest  $request
     * @param  \App\Models\taskWeight  $taskWeight
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetaskWeightRequest $request, taskWeight $taskWeight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taskWeight  $taskWeight
     * @return \Illuminate\Http\Response
     */
    public function destroy(taskWeight $taskWeight)
    {
        //
    }
}
