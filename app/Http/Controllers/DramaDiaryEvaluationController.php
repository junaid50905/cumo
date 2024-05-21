<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\DramaDiaryEvaluation;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Services\DramaDiaryEvaluationService;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\DramaDiaryEvaluationRequest;
use App\Http\Requests\UpdateDramaDiaryEvaluationRequest;

class DramaDiaryEvaluationController extends Controller
{
    private DramaDiaryEvaluationService $service;
    private StudentRepository $studentRepo;
    private UserRepository $userRepo;

    public function __construct(
        DramaDiaryEvaluationService $service,
        StudentRepository $studentRepo,
        UserRepository $userRepo,
    ) {
        $this->service = $service;
        $this->studentRepo = $studentRepo;
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
    public function create()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];

        return view('student.co-curricular.Drama-diary-evaluation.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DramaDiaryEvaluationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(DramaDiaryEvaluationRequest $request)
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'date' => $dramaDiaryEvaluation['date'],
            'teacher_id' => $dramaDiaryEvaluation['teacher_id'],
            'candidate_id' => $dramaDiaryEvaluation['candidate_id'],
            'basic_functional_area' => $dramaDiaryEvaluation->basic_functional_area,
            'other_areas' => $dramaDiaryEvaluation->other_areas,
        ];

        return view('student.co-curricular.Drama-diary-evaluation.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'id' => $dramaDiaryEvaluation['id'],
            'date' => $dramaDiaryEvaluation['date'],
            'teacher_id' => $dramaDiaryEvaluation['teacher_id'],
            'candidate_id' => $dramaDiaryEvaluation['candidate_id'],
            'basic_functional_area' => $dramaDiaryEvaluation->basic_functional_area,
            'other_areas' => $dramaDiaryEvaluation->other_areas,
        ];

        return view('student.co-curricular.Drama-diary-evaluation.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDramaDiaryEvaluationRequest  $request
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(DramaDiaryEvaluationRequest $request, DramaDiaryEvaluation $dramaDiaryEvaluation): RedirectResponse
    {
        $this->service->update($dramaDiaryEvaluation, $request->validated());

        Session::flash('success');

        return redirect()->route('drama-diary-evaluation.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DramaDiaryEvaluation  $dramaDiaryEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DramaDiaryEvaluation $dramaDiaryEvaluation)
    {
        return $dramaDiaryEvaluation->delete();
    }
}
