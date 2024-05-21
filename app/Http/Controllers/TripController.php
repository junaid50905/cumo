<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripRequest;
use App\Models\Trip;
use App\Repositories\StudentRepository;
use App\Repositories\TripRepository;
use App\Repositories\UserRepository;
use App\Services\TripService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class TripController extends Controller
{
    private TripService $service;
    private TripRepository $repo;
    // private StudentRepository $studentRepo;
    private UserRepository $userRepo;

    public function __construct(
        TripService $service,
        TripRepository $repository,
        UserRepository $userRepo
    ) {
        $this->service = $service;
        $this->repo    = $repository;
        $this->userRepo    = $userRepo;
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
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
        ];

        return view('student.dairy.trip.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TripRequest $request
     *
     * @return RedirectResponse
     */
    public function store(TripRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Trip $trip
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'collection_date' => $trip['collection_date'],
            'teacher_id' => $trip['teacher_id'],
            'activitiesOfDailyLiving' => $trip->activities_of_daily_living,
            'onlyForStaff' => $trip->only_for_staff,
            'activities' => $trip->activities,
            'securitySafety' => $trip->security_safety,
            'equipment' => $trip->equipment,
            'light' => $trip->light,
            'kitchen' => $trip->kitchen,
            'bathroom' => $trip->bathroom,
            'floor' => $trip->floor,
            'instrumentalActivitiesOfDaily' => $trip->instrumental_activities_of_daily,
            'environmentalSafetyRelative' => $trip->environmental_safety_relative,
            'environmentalSafetyStep' => $trip->environmental_safety_step,
            'wokeUpInTheMorning' => $trip->woke_up_in_the_morning,
            'readingWriting' => $trip->reading_writing,
            'dailyWork' => $trip->daily_work,
            'wonWork' => $trip->won_work,
            'lunchTime' => $trip->lunch_time,
            'restTime' => $trip->rest_time,
            'afternoon' => $trip->afternoon,
            'evening' => $trip->evening,
            'constructiveWork' => $trip->constructive_work,
            'dinner' => $trip->dinner,
            'afterDinner' => $trip->after_dinner,
            'signature' => $trip->signature,
            'tripEvaluationSignature' => $trip->trip_evaluation_signature,
        ];
        return view('student.dairy.trip.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Trip $trip
     *
     * @return Application|Factory|View
     */
    public function edit(Trip $trip): View|Factory|Application
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'id' => $trip['id'],
            'collection_date' => $trip['collection_date'],
            'teacher_id' => $trip['teacher_id'],
            'activitiesOfDailyLiving' => $trip->activities_of_daily_living,
            'onlyForStaff' => $trip->only_for_staff,
            'activities' => $trip->activities,
            'securitySafety' => $trip->security_safety,
            'equipment' => $trip->equipment,
            'light' => $trip->light,
            'kitchen' => $trip->kitchen,
            'bathroom' => $trip->bathroom,
            'floor' => $trip->floor,
            'instrumentalActivitiesOfDaily' => $trip->instrumental_activities_of_daily,
            'environmentalSafetyRelative' => $trip->environmental_safety_relative,
            'environmentalSafetyStep' => $trip->environmental_safety_step,
            'wokeUpInTheMorning' => $trip->woke_up_in_the_morning,
            'readingWriting' => $trip->reading_writing,
            'dailyWork' => $trip->daily_work,
            'wonWork' => $trip->won_work,
            'lunchTime' => $trip->lunch_time,
            'restTime' => $trip->rest_time,
            'afternoon' => $trip->afternoon,
            'evening' => $trip->evening,
            'constructiveWork' => $trip->constructive_work,
            'dinner' => $trip->dinner,
            'afterDinner' => $trip->after_dinner,
            'signature' => $trip->signature,
            'tripEvaluationSignature' => $trip->trip_evaluation_signature,
        ];
        return view('student.dairy.trip.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\TripRequest $request
     * @param Trip $trip
     *
     * @return RedirectResponse
     */
    public function update(TripRequest $request, Trip $trip): RedirectResponse
    {
        $this->service->update($trip, $request->validated());

        Session::flash('success');

        return redirect()->route('trip.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Trip $trip
     *
     * @return bool
     */
    public function destroy(Trip $trip): bool
    {
        return $trip->delete();
    }
}
