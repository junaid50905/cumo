<?php

namespace App\Http\Controllers;

use App\Models\Itp;
use App\Models\Student;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use App\Http\Requests\StoreCreateItpRequest;
use App\Http\Requests\UpdateCreateItpRequest;
use App\Models\Itpdetail;
use App\Repositories\CreateItpRepository;

class CreateItpController extends Controller
{
    private CreateItpRepository $createitpRepo;
    private UserRepository $userRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(CreateItpRepository $createitpRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->userRepo    = $userRepository;
        $this->studentRepo = $studentRepository;
        $this->createitpRepo = $createitpRepo;
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
            'itps' => Itp::with(['details', 'student'])->get()
        ];

        return view('program.create-itp.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateItpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCreateItpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function show(CreateItp $createItp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $itp = Itp::with(['student', 'details'])->find($id);
        $students = Student::all();
        return view('program.create-itp.edit', compact('itp','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreCreateItpRequest  $request
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {   
        $data = request()->toArray();
        unset($data['student_id']);
        unset($data['itp_name']);
        unset($data['start_date']);
        unset($data['end_date']);
        unset($data['instruction']);
        unset($data['_token']);
        unset($data['_method']);
        
        $itp = Itp::find($id);
        Itp::updateOrCreate(
            ['id'=>$itp->id],
            [
                'student_id'=>request()->student_id,
                'itp_name'=> request()->itp_name,
                'start_date'=> request()->start_date,
                'end_date'=> request()->end_date,
                'instruction'=> request()->instruction
            ]
        );
        
        foreach($itp->details as $detail){
            Itpdetail::where('task_id', $detail->task_id)->delete();
        }
        
       foreach($data as $task){
         Itpdetail::create(['itp_id'=>$itp->id, 'task_id'=> $task]);
       }
       
       return redirect()->route('create-itp.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateItp  $createItp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itp = Itp::find($id)->delete();
        
        $data = request()->toArray();
        unset($data['student_id']);
        unset($data['itp_name']);
        unset($data['start_date']);
        unset($data['end_date']);
        unset($data['instruction']);
        unset($data['_token']);
        unset($data['_method']);
        
        foreach($data as $task){
            Itpdetail::create(['itp_id'=>$itp->id, 'task_id'=> $task]);
        }
       
        return redirect()->route('create-itp.create');
    }
}
