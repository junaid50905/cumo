<?php

namespace App\Http\Controllers;

use App\Models\AttendenceCard;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\AttendenceRepository;
use App\Http\Requests\StoreAttendenceCardRequest;
use App\Http\Requests\UpdateAttendenceCardRequest;

class AttendenceCardController extends Controller
{

    private StudentRepository $studentRepo;
    private AttendenceRepository $attendenceRepo;

    public function __construct(StudentRepository $studentRepo, AttendenceRepository $attendenceRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->attendenceRepo = $attendenceRepo;

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
            'students' => $this->studentRepo->getData(),
        ];
        return view('setup.program-setup.attendence-card-setup.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendenceCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendenceCardRequest $request)
    {
            $this->attendenceRepo->store($request->validated());
            Session::flash('success');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendenceCard  $attendenceCard
     * @return \Illuminate\Http\Response
     */
    public function show(AttendenceCard $attendenceCard)
    {
        $data = [
            'record' => $attendenceCard,
            'students' => $this->studentRepo->getData(),
        ];
      return view('setup.program-setup.attendence-card-setup.view' , $data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendenceCard  $attendenceCard
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendenceCard $attendenceCard)
    {
        $data = [
            'record' => $attendenceCard,
            'students' => $this->studentRepo->getData(),
        ];
        return view('setup.program-setup.attendence-card-setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendenceCardRequest  $request
     * @param  \App\Models\AttendenceCard  $attendenceCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendenceCardRequest $request, AttendenceCard $attendenceCard)
    {
        $this->attendenceRepo->update($attendenceCard, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendenceCard  $attendenceCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendenceCard $attendenceCard)
    {
        return $attendenceCard->delete();
    }
}
