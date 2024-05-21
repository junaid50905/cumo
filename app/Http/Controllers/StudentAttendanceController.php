<?php

namespace App\Http\Controllers;

use App\Models\StudentAttendance;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\StudentAttendanceRepository;
use App\Http\Requests\StoreStudentAttendanceRequest;
use App\Http\Requests\UpdateStudentAttendanceRequest;

class StudentAttendanceController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private StudentAttendanceRepository $studentAttendanceRepo;

    public function __construct(UserRepository $userRepo, StudentRepository $studentRepo, StudentAttendanceRepository $studentAttendanceRepo)
    {
        $this->userRepo = $userRepo;
        $this->studentRepo = $studentRepo;
        $this->studentAttendanceRepo = $studentAttendanceRepo;
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
        return view('student.sutdent_attendance.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentAttendanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentAttendanceRequest $request)
    {
        $this->studentAttendanceRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(StudentAttendance $studentAttendance)
    {
        $data = [
            'record' => $this->studentAttendance = $studentAttendance,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.sutdent_attendance.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentAttendance $studentAttendance)
    {
        $data = [
            'record' => $this->studentAttendance = $studentAttendance,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.sutdent_attendance.view', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentAttendanceRequest  $request
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentAttendanceRequest $request, StudentAttendance $studentAttendance)
    {
        $this->studentAttendance->update($studentAttendance, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentAttendance  $studentAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentAttendance $studentAttendance)
    {
        return $studentAttendance->delete();
    }
}
