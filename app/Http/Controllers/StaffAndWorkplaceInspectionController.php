<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Models\StaffAndWorkplaceInspection;
use App\Http\Requests\StaffAndWorkplaceInspectionRequest;
use App\Repositories\StaffAndWorkplaceinspectionRepository;
use App\Http\Requests\UpdateStaffAndWorkplaceInspectionRequest;

class StaffAndWorkplaceInspectionController extends Controller
{
    private StaffAndWorkplaceinspectionRepository $stafAndWorkRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(StaffAndWorkplaceinspectionRepository $stafAndWorkRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
        $this->stafAndWorkRepo = $stafAndWorkRepo;
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
        return view('student.employment.Staff-and-workplace-inspection.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StaffAndWorkplaceInspectionRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StaffAndWorkplaceInspectionRequest $request)
    {
        $this->stafAndWorkRepo->store($request->validated());
        return redirect()->back();
        Session::flash('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function show(StaffAndWorkplaceInspection $staff_and_workplaceinspection)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $staff_and_workplaceinspection,

        ];
        return view('student.employment.Staff-and-workplace-inspection.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffAndWorkplaceInspection $staff_and_workplaceinspection)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $staff_and_workplaceinspection,
        ];
        return view('student.employment.Staff-and-workplace-inspection.Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffAndWorkplaceInspectionRequest  $request
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffAndWorkplaceInspectionRequest $request, StaffAndWorkplaceInspection $staff_and_workplaceinspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffAndWorkplaceInspection  $staffAndWorkplaceInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffAndWorkplaceInspection $staff_and_workplaceinspection)
    {
        return $staff_and_workplaceinspection->delete();
    }
}
