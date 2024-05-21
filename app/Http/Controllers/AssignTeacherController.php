<?php

namespace App\Http\Controllers;

use App\Models\AssignTeacher;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreAssignTeacherRequest;
use App\Http\Requests\UpdateAssignTeacherRequest;
use App\Repositories\AssignTeacherRepository;

class AssignTeacherController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private AssignTeacherRepository $assignTeacherRepo;

    public function __construct(UserRepository $userRepo, StudentRepository $studentRepo, AssignTeacherRepository $assignTeacherRepo)
    {
        $this->userRepo = $userRepo;
        $this->studentRepo = $studentRepo;
        $this->assignTeacherRepo = $assignTeacherRepo;
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
        return view('program.assign-teacher.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignTeacherRequest $request)
    {
        $this->assignTeacherRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(AssignTeacher $assignTeacher)
    {
        $data = [
            'record' => $this->assignTeacher = $assignTeacher,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('program.assign-teacher.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignTeacher $assignTeacher)
    {
        $data = [
            'record' => $this->assignTeacher = $assignTeacher,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('program.assign-teacher.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignTeacherRequest  $request
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignTeacherRequest $request, AssignTeacher $assignTeacher)
    {
        $this->assignTeacher->update($assignTeacher, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignTeacher  $assignTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignTeacher $assignTeacher)
    {
        return $assignTeacher->delete();
    }
}
