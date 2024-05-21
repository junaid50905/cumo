<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Models\FunctionalMovementskill;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\FunctionalMovementskillRequest;
use App\Repositories\FunctionalMovementSkillRepository;
use App\Http\Requests\UpdateFunctionalMovementskillRequest;

class FunctionalMovementskillController extends Controller
{

    private FunctionalMovementSkillRepository $funMoveSkillRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(StudentRepository $studentRepo, UserRepository $userRepository, FunctionalMovementSkillRepository $funMoveSkillRepo)
    {
        $this->userRepo = $userRepository;
        $this->funMoveSkillRepo = $funMoveSkillRepo;
        $this->studentRepo = $studentRepo;
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

        return view('assessment.functional-movement-skill.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FunctionalMovementskillRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(FunctionalMovementskillRequest $request)
    {
        $this->funMoveSkillRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionalMovementskill $functional_movement_skill)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->record = $functional_movement_skill,
        ];

        return view('assessment.functional-movement-skill.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function edit(FunctionalMovementskill $functional_movement_skill)
    {
        $data = [
            'record' => $this->record = $functional_movement_skill,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'model' => $functional_movement_skill,
            'checked' => 'checked'
        ];
        return view('assessment.functional-movement-skill.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFunctionalMovementskillRequest  $request
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function update(FunctionalMovementskillRequest $request, FunctionalMovementskill $functional_movement_skill)
    {   
        $this->funMoveSkillRepo->movementUpdate($functional_movement_skill, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunctionalMovementskill  $functionalMovementskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunctionalMovementskill $functionalMovementskill)
    {
        return $functionalMovementskill->delete();
    }
}
