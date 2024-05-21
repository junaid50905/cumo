<?php

namespace App\Http\Controllers;

use Carbon\Factory;
use App\Models\AutisumBhehaviour;
use Illuminate\Console\Application;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\AutisumBehaviourRepository;
use App\Http\Requests\StoreAutisumBhehaviourRequest;
use App\Http\Requests\UpdateAutisumBhehaviourRequest;

class AutisumBhehaviourController extends Controller
{

    private AutisumBehaviourRepository $autisumRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;


    public function __construct(AutisumBehaviourRepository $autisumRepo, StudentRepository $studentRepo, UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
        $this->studentRepo = $studentRepo;
        $this->autisumRepo = $autisumRepo;
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

        return view('assessment.autism-behaviour.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutisumBhehaviourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutisumBhehaviourRequest $request)
    {
        $this->autisumRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function show(AutisumBhehaviour $autisum_behaviour)
    {
        $data = [
            'record' => $this->record = $autisum_behaviour,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('assessment.autism-behaviour.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function edit(AutisumBhehaviour $autisum_behaviour)
    {
        $data = [
            'record' => $this->record = $autisum_behaviour,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('assessment.autism-behaviour.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutisumBhehaviourRequest  $request
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAutisumBhehaviourRequest $request, AutisumBhehaviour $autisum_behaviour)
    {
        $this->autisumRepo->update($autisum_behaviour, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AutisumBhehaviour  $autisumBhehaviour
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutisumBhehaviour $autisumBhehaviour)
    {
        return $autisumBhehaviour->delete();
    }
}
