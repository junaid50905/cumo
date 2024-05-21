<?php

namespace App\Http\Controllers;

use App\Models\SensoryAdult;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SensoryAdultRequest;
use App\Http\Requests\UpdateSensoryAdultRequest;
use App\Repositories\SensoryChecklistAdultRepository;

class SensoryAdultController extends Controller
{

    private SensoryChecklistAdultRepository $sensoryAdultRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $records;

    public function __construct(SensoryChecklistAdultRepository $sensoryAdultRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->sensoryAdultRepo = $sensoryAdultRepo;
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

        // dd($this->userRepo->getSpecificTypeUser('teacher'));
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        // dd($data);

        return view('assessment.sensory-checklist-adult.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\SensoryAdultRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SensoryAdultRequest $request)
    {
        $this->sensoryAdultRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function show(SensoryAdult $sensory_checklist_adult)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->records = $sensory_checklist_adult,
        ];
        return view('assessment.sensory-checklist-adult.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function edit(SensoryAdult $sensory_checklist_adult)
    {
        $data = [
            'record' => $this->careNeed = $sensory_checklist_adult,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('assessment.sensory-checklist-adult.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSensoryAdultRequest  $request
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function update(SensoryAdultRequest $request, SensoryAdult $sensory_checklist_adult)
    {
        $this->sensoryAdultRepo->update($sensory_checklist_adult, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensoryAdult  $sensoryAdult
     * @return \Illuminate\Http\Response
     */
    public function destroy(SensoryAdult $sensoryAdult)
    {
        return $sensoryAdult->delete();
    }
}
