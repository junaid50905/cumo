<?php

namespace App\Http\Controllers;

use App\Models\OccupationalTherapy;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\OccupationalTherapyRequest;
use App\Repositories\OccupationalTherapyRepository;
use App\Http\Requests\UpdateOccupationalTherapyRequest;
use App\Services\OccupationalTherapyService;

class OccupationalTherapyController extends Controller
{
    private OccupationalTherapyRepository $repo;
    private OccupationalTherapyService $service;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(
        OccupationalTherapyRepository $occupationalRepo,
        OccupationalTherapyService $occupationalService,
        UserRepository $userRepository,
        StudentRepository $studentRepository
    ) {
        $this->repo = $occupationalRepo;
        $this->service = $occupationalService;
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('assessment.occupational-therapy.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOccupationalTherapyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OccupationalTherapyRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function show(OccupationalTherapy $occupational_therapy)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'date' => $occupational_therapy['date'],
            'teacher_id' => $occupational_therapy['teacher_id'],
            'student_id' => $occupational_therapy['student_id'],
            'general' => $occupational_therapy['general'],
            'muscle_tone' => $occupational_therapy['muscle_tone'],
            'range_of_movement' => $occupational_therapy['range_of_movement'],
            'functional_gross_motor' => $occupational_therapy['functional_gross_motor'],
            'transitional_movements' => $occupational_therapy['transitional_movements'],
            'fine_motor_skill' => $occupational_therapy['fine_motor_skill'],
            'automatic_reaction' => $occupational_therapy['automatic_reaction'],
            'sensory_skill' => $occupational_therapy['sensory_skill'],
            'visual_perception' => $occupational_therapy['visual_perception'],
            'activities_of_daily_living' => $occupational_therapy['activities_of_daily_living'],
            'strength' => $occupational_therapy['strength'],
            'signature' => $occupational_therapy['signature'],
            'cognitive_skills' => $occupational_therapy['cognitive_skills'],
            'treatment_Plan' => $occupational_therapy['treatment_Plan'],
        ];
        return view('assessment.occupational-therapy.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function edit(OccupationalTherapy $occupational_therapy)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $occupational_therapy['id'],
            'date' => $occupational_therapy['date'],
            'teacher_id' => $occupational_therapy['teacher_id'],
            'student_id' => $occupational_therapy['student_id'],
            'general' => $occupational_therapy['general'],
            'muscle_tone' => $occupational_therapy['muscle_tone'],
            'range_of_movement' => $occupational_therapy['range_of_movement'],
            'functional_gross_motor' => $occupational_therapy['functional_gross_motor'],
            'transitional_movements' => $occupational_therapy['transitional_movements'],
            'fine_motor_skill' => $occupational_therapy['fine_motor_skill'],
            'automatic_reaction' => $occupational_therapy['automatic_reaction'],
            'sensory_skill' => $occupational_therapy['sensory_skill'],
            'visual_perception' => $occupational_therapy['visual_perception'],
            'activities_of_daily_living' => $occupational_therapy['activities_of_daily_living'],
            'strength' => $occupational_therapy['strength'],
            'signature' => $occupational_therapy['signature'],
            'cognitive_skills' => $occupational_therapy['cognitive_skills'],
            'treatment_Plan' => $occupational_therapy['treatment_Plan'],
        ];
        return view('assessment.occupational-therapy.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationalTherapyRequest  $request
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function update(OccupationalTherapyRequest $request, OccupationalTherapy $occupationalTherapy)
    {
        $this->service->update($occupationalTherapy, $request->validated());

        Session::flash('success');

        return redirect()->route('occupational-therapy.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OccupationalTherapy  $occupationalTherapy
     * @return \Illuminate\Http\Response
     */
    public function destroy(OccupationalTherapy $occupationalTherapy)
    {
        return $occupationalTherapy->delete();
    }
}
