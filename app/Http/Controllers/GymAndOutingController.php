<?php

namespace App\Http\Controllers;

use App\Models\GymAndOuting;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\GymAndOutingRepository;
use App\Http\Requests\StoreGymAndOutingRequest;
use App\Http\Requests\UpdateGymAndOutingRequest;

class GymAndOutingController extends Controller
{
    private GymAndOutingRepository $gymAndOutingRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;
    public function __construct(GymAndOutingRepository $gymAndOutingRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
        $this->gymAndOutingRepo = $gymAndOutingRepo;
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
        return view('student.dairy.Gym-Outing-Evalution.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGymAndOutingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGymAndOutingRequest $request)
    {
        $this->gymAndOutingRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function show(GymAndOuting $gymAndOuting)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $gymAndOuting,
        ];
        return view('student.dairy.Gym-Outing-Evalution.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function edit(GymAndOuting $gymAndOuting)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $gymAndOuting,
        ];
        return view('student.dairy.Gym-Outing-Evalution.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGymAndOutingRequest  $request
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGymAndOutingRequest $request, GymAndOuting $gymAndOuting)
    {
        $this->gymAndOutingRepo->update($gymAndOuting, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GymAndOuting  $gymAndOuting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GymAndOuting $gymAndOuting)
    {
        return $gymAndOuting->delete();
    }
}
