<?php

namespace App\Http\Controllers;

use App\Models\AcademicCalender;
use Illuminate\Support\Facades\Session;
use App\Utility\AcademicCalenderConstant;
use App\Repositories\AcademicCalenderRepository;
use App\Http\Requests\StoreAcademicCalenderRequest;
use App\Http\Requests\UpdateAcademicCalenderRequest;

class AcademicCalenderController extends Controller
{
    private AcademicCalenderRepository $academicRepo;

    public function __construct(AcademicCalenderRepository $academicRepo)
    {
        $this->academicRepo = $academicRepo;
    }
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
            'eventType' => AcademicCalenderConstant::$eventType,
            'eventLabel' => AcademicCalenderConstant::$eventLevel
        ];
        return view('setup.other-settings.academic-calender.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAcademicCalenderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcademicCalenderRequest $request)
    {
        $this->academicRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademicCalender  $academicCalender
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicCalender $academicCalender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicCalender  $academicCalender
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicCalender $academicCalender)
    {
        $data = [
            'record' => $academicCalender,
            'eventType' => AcademicCalenderConstant::$eventType,
            'eventLabel' => AcademicCalenderConstant::$eventLevel
        ];
        return view('setup.other-settings.academic-calender.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAcademicCalenderRequest  $request
     * @param  \App\Models\AcademicCalender  $academicCalender
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAcademicCalenderRequest $request, AcademicCalender $academicCalender)
    {
        $this->academicRepo->update($academicCalender, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicCalender  $academicCalender
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicCalender $academicCalender)
    {
        return $academicCalender->delete();
    }
}
