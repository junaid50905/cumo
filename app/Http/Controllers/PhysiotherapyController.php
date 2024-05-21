<?php

namespace App\Http\Controllers;

use App\Models\Physiotherapy;
use App\Repositories\UserRepository;
use App\Services\PhysiotherapyService;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PhysiotherapyRequest;

class PhysiotherapyController extends Controller
{
    private PhysiotherapyService $service;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(PhysiotherapyService $service, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->service = $service;
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
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('assessment.physiotherapy.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PhysiotherapyRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PhysiotherapyRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->route('physiotherapy.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function show(Physiotherapy $physiotherapy)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $physiotherapy['id'],
            'collection_date' => $physiotherapy['collection_date'],
            'teacher_id' => $physiotherapy['teacher_id'],
            'candidate_id' => $physiotherapy['candidate_id'],
            'general' => $physiotherapy['general'],
            'visual_perception' => $physiotherapy['visual_perception'],
            'activities_of_daily_living' => $physiotherapy['activities_of_daily_living'],
            'strength' => $physiotherapy['strength'],
            'functional_gross_motor' => $physiotherapy['functional_gross_motor'],
            'transitional_movements' => $physiotherapy['transitional_movements'],
            'fine_motor_skill' => $physiotherapy['fine_motor_skill'],
            'automatic_reaction' => $physiotherapy['automatic_reaction'],
            'sensory_skill_normal_hypo_response' => $physiotherapy['sensory_skill_normal_hypo_response'],
            'cognitive_skills' => $physiotherapy['cognitive_skills'],
            'treatment' => $physiotherapy['treatment'],
            'signature' => $physiotherapy['signature'],
            'muscle_power' => $physiotherapy['muscle_power'],
            'muscle_tone' => $physiotherapy['muscle_tone'],
            'behavior' => $physiotherapy['behavior'],
            'domain_area' => $physiotherapy['domain_area'],
            'record' => $this->record = $physiotherapy,
        ];

        return view('assessment.physiotherapy.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function edit(Physiotherapy $physiotherapy)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $physiotherapy['id'],
            'collection_date' => $physiotherapy['collection_date'],
            'teacher_id' => $physiotherapy['teacher_id'],
            'candidate_id' => $physiotherapy['candidate_id'],
            'general' => $physiotherapy['general'],
            'visual_perception' => $physiotherapy['visual_perception'],
            'activities_of_daily_living' => $physiotherapy['activities_of_daily_living'],
            'strength' => $physiotherapy['strength'],
            'functional_gross_motor' => $physiotherapy['functional_gross_motor'],
            'transitional_movements' => $physiotherapy['transitional_movements'],
            'fine_motor_skill' => $physiotherapy['fine_motor_skill'],
            'automatic_reaction' => $physiotherapy['automatic_reaction'],
            'sensory_skill_normal_hypo_response' => $physiotherapy['sensory_skill_normal_hypo_response'],
            'cognitive_skills' => $physiotherapy['cognitive_skills'],
            'treatment' => $physiotherapy['treatment'],
            'signature' => $physiotherapy['signature'],
            'muscle_power' => $physiotherapy['muscle_power'],
            'muscle_tone' => $physiotherapy['muscle_tone'],
            'behavior' => $physiotherapy['behavior'],
            'domain_area' => $physiotherapy['domain_area'],
            'record' => $this->record = $physiotherapy,
        ];
        return view('assessment.physiotherapy.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhysiotherapyRequest  $request
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function update(PhysiotherapyRequest $request, Physiotherapy $physiotherapy)
    { 
        $this->service->update($physiotherapy, $request->validated());
        Session::flash('success');
        return redirect()->route('physiotherapy.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physiotherapy  $physiotherapy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physiotherapy $physiotherapy)
    {
        return $physiotherapy->delete();
    }
}
