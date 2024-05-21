<?php

namespace App\Http\Controllers;

use App\Models\OtAssessment;
use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\Factory;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\OtAssessmentRequest;
use App\Repositories\OtAssessmentRepository;
use App\Http\Requests\StoreOtAssessmentRequest;
use App\Http\Requests\UpdateOtAssessmentRequest;
use Illuminate\Contracts\Foundation\Application;

class OtAssessmentController extends Controller
{
    private OtAssessmentRepository $otAssessmentRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $records;

    public function __construct(OtAssessmentRepository $otAssessmentRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->otAssessmentRepo = $otAssessmentRepo;
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
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.dairy.OT-Assessment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOtAssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OtAssessmentRequest $request)
    {
        $this->otAssessmentRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(OtAssessment $ot_assessment)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->records = $ot_assessment,
        ];
        return view('student.dairy.OT-Assessment.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(OtAssessment $ot_assessment)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $ot_assessment,
        ];
        return view('student.dairy.OT-Assessment.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOtAssessmentRequest  $request
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(OtAssessmentRequest $request, OtAssessment $ot_assessment)
    {
        $this->otAssessmentRepo->update($ot_assessment, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OtAssessment  $otAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtAssessment $otAssessment)
    {
        return $otAssessment->delete();
    }
}
