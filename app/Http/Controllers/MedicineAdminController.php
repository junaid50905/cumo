<?php

namespace App\Http\Controllers;

use App\Models\MedicineAdmin;
use App\Repositories\UserRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\StudentRepository;
use App\Services\MedicineAdminServices;
use Illuminate\Support\Facades\Session;
use App\Repositories\MedicineAdminRepository;
use App\Http\Requests\StoreMedicineAdminRequest;
use App\Http\Requests\UpdateMedicineAdminRequest;

class MedicineAdminController extends Controller
{
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    private MedicineAdminRepository $repo;
    private DoctorRepository $doctorRepo;
    private MedicineAdminServices $services;

    public function __construct(
        UserRepository $userRepo,
        StudentRepository $studentRepo,
        MedicineAdminRepository $repo,
        DoctorRepository $doctorRepo,
        MedicineAdminServices $services
    ) {
        $this->userRepo = $userRepo;
        $this->studentRepo = $studentRepo;
        $this->repo = $repo;
        $this->doctorRepo = $doctorRepo;
        $this->services = $services;
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
            'doctors' => $this->doctorRepo->getData(),
        ];
        return view('student.dairy.Medicine-Admin.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicineAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineAdminRequest $request)
    {
        $this->services->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineAdmin $medicine_admin)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'doctors' => $this->doctorRepo->getData(),
            'record' => $this->repo->getRelatedData($medicine_admin, ['details']),
        ];
        return view('student.dairy.Medicine-Admin.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineAdmin $medicine_admin)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'doctors' => $this->doctorRepo->getData(),
            'record' => $this->repo->getRelatedData($medicine_admin, ['details']),
        ];
        return view('student.dairy.Medicine-Admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineAdminRequest  $request
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMedicineAdminRequest $request, MedicineAdmin $medicine_admin)
    {
        // dd($request);
        $this->services->update($medicine_admin, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineAdmin  $medicineAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineAdmin $medicineAdmin)
    {
        return $medicineAdmin->delete();
    }
}
