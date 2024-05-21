<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Models\SensoryChecklistChild;
use Illuminate\Http\RedirectResponse;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Services\SensoryChecklistChildService;
use App\Http\Requests\StoreSensoryChecklistChildRequest;
use App\Http\Requests\UpdateSensoryChecklistChildRequest;

class SensoryChecklistChildController extends Controller
{

    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private SensoryChecklistChildService $service;
    public $record;

    public function __construct(
        UserRepository $userRepository,
        SensoryChecklistChildService $sensoryService,
        StudentRepository $studentRepository
    ) { 
        $this->userRepo = $userRepository;
        $this->service = $sensoryService;
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

        return view('assessment.sensory-checklist-child.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSensoryChecklistChildRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreSensoryChecklistChildRequest $request): RedirectResponse
    {  
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function show(SensoryChecklistChild $sensoryChecklistChild)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $sensoryChecklistChild['id'],
            'collection_date' => $sensoryChecklistChild['collection_date'],
            'teacher_id' => $sensoryChecklistChild['teacher_id'],
            'student_id' => $sensoryChecklistChild['student_id'],
            'sensory_checklist' => $sensoryChecklistChild['sensory_checklist'],
            'signs_of_tactile_dysfunction' => $sensoryChecklistChild['signs_of_tactile_dysfunction'],
            'hyposensitivity_to_touch' => $sensoryChecklistChild['hyposensitivity_to_touch'],
            'poor_tactile_perception_and_discrimination' => $sensoryChecklistChild['poor_tactile_perception_and_discrimination'],
            'signs_of_vestibular_dysfunction' => $sensoryChecklistChild['signs_of_vestibular_dysfunction'],
            'signs_of_vestibular_dysfunction_under' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_under'],
            'signs_of_vestibular_dysfunction_coordination' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_coordination'],
            'signs_of_vestibular_dysfunction_behaviors' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_behaviors'],
            'signs_of_vestibular_dysfunction_movement' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_movement'],
        ];

        return view('assessment.sensory-checklist-child.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function edit(SensoryChecklistChild $sensoryChecklistChild)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $sensoryChecklistChild['id'],
            'collection_date' => $sensoryChecklistChild['collection_date'],
            'teacher_id' => $sensoryChecklistChild['teacher_id'],
            'student_id' => $sensoryChecklistChild['student_id'],
            'sensory_checklist' => $sensoryChecklistChild['sensory_checklist'],
            'signs_of_tactile_dysfunction' => $sensoryChecklistChild['signs_of_tactile_dysfunction'],
            'hyposensitivity_to_touch' => $sensoryChecklistChild['hyposensitivity_to_touch'],
            'poor_tactile_perception_and_discrimination' => $sensoryChecklistChild['poor_tactile_perception_and_discrimination'],
            'signs_of_vestibular_dysfunction' => $sensoryChecklistChild['signs_of_vestibular_dysfunction'],
            'signs_of_vestibular_dysfunction_under' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_under'],
            'signs_of_vestibular_dysfunction_coordination' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_coordination'],
            'signs_of_vestibular_dysfunction_behaviors' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_behaviors'],
            'signs_of_vestibular_dysfunction_movement' => $sensoryChecklistChild['signs_of_vestibular_dysfunction_movement'],
        ];
        
        return view('assessment.sensory-checklist-child.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSensoryChecklistChildRequest  $request
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSensoryChecklistChildRequest $request, SensoryChecklistChild $sensoryChecklistChild)
    {   
        $this->service->update($sensoryChecklistChild, $request->validated());

        Session::flash('success');

        return redirect()->route('sensory-checklist-child.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensoryChecklistChild  $sensoryChecklistChild
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensoryChecklistChild $sensoryChecklistChild)
    {
        return $sensoryChecklistChild->delete();
    }
}
