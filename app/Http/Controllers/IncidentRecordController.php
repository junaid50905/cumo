<?php

namespace App\Http\Controllers;

use App\Models\IncidentRecord;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\IncidentRecordRequest;
use App\Repositories\IncidentRecordRepository;
use App\Http\Requests\UpdateIncidentRecordRequest;

class IncidentRecordController extends Controller
{
    private IncidentRecordRepository $incidentRcordRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $records;

    public function __construct(IncidentRecordRepository $incidentRcordRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->incidentRcordRepo = $incidentRcordRepo;
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('student.dairy.Incident-Record.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\IncidentRecordRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(IncidentRecordRequest $request)
    {
        $this->incidentRcordRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function show(IncidentRecord $incident_record)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->records = $incident_record,
        ];
        return view('student.dairy.Incident-Record.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(IncidentRecord $incident_record)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $incident_record,
        ];
        return view('student.dairy.Incident-Record.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncidentRecordRequest  $request
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function update(IncidentRecordRequest $request, IncidentRecord $incident_record)
    {
        $this->incidentRcordRepo->update($incident_record, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncidentRecord  $incidentRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncidentRecord $incidentRecord)
    {
        return $incidentRecord->delete();
    }
}
