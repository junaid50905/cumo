<?php

namespace App\Http\Controllers;

use App\Models\IndividualRisk;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\IndividualRiskRequest;
use App\Repositories\IndividualRiskRepositories;
use App\Http\Requests\UpdateIndividualRiskRequest;

class IndividualRiskController extends Controller
{

    private IndividualRiskRepositories $indRiskRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(IndividualRiskRepositories $indRiskRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
        $this->indRiskRepo = $indRiskRepo;
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

        return view('assessment.individual-risk.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\IndividualRiskRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(IndividualRiskRequest $request)
    {
        
        $this->indRiskRepo->store($request->validated());
        Session::flash('success', 'Saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function show(IndividualRisk $individualRisk)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->record = $individualRisk,
        ];
        return view('assessment.individual-risk.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function edit(IndividualRisk $individualRisk)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->record = $individualRisk,
        ];
        return view('assessment.individual-risk.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIndividualRiskRequest  $request
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function update(IndividualRiskRequest $request, IndividualRisk $individualRisk)
    {
        $this->indRiskRepo->update($individualRisk, $request->validated());
        Session::flash('success', 'Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndividualRisk  $individualRisk
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndividualRisk $individualRisk)
    {
        return $individualRisk->delete();
    }
}
