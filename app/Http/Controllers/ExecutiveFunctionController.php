<?php

namespace App\Http\Controllers;

use App\Models\ExecutiveFunction;
use App\Repositories\UserRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\ExecutiveFunctionRepository;
use App\Http\Requests\StoreExecutiveFunctionRequest;
use App\Http\Requests\UpdateExecutiveFunctionRequest;

class ExecutiveFunctionController extends Controller
{

    private ExecutiveFunctionRepository $executiveRepo;
    private StudentRepository $studentRepo;
    public $record;

    public function __construct(ExecutiveFunctionRepository $executiveRepo, UserRepository $userRepository, StudentRepository $studentRepository)
    {
        $this->executiveRepo = $executiveRepo;
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

        return view('assessment.executive-function.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExecutiveFunctionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExecutiveFunctionRequest $request)
    {
        $this->executiveRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExecutiveFunction  $executiveFunction
     * @return \Illuminate\Http\Response
     */
    public function show(ExecutiveFunction $executiveFunction)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'record' => $this->record = $executiveFunction,
        ];

        return view('assessment.executive-function.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExecutiveFunction  $executiveFunction
     * @return \Illuminate\Http\Response
     */
    public function edit(ExecutiveFunction $executiveFunction)
    {
        $data = [
            'record' => $this->careNeed = $executiveFunction,
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
        ];
        return view('assessment.executive-function.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExecutiveFunctionRequest  $request
     * @param  \App\Models\ExecutiveFunction  $executiveFunction
     * @return \Illuminate\Http\Response
     */
    public function update(StoreExecutiveFunctionRequest $request, ExecutiveFunction $executiveFunction)
    {
        $this->executiveRepo->update($executiveFunction, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExecutiveFunction  $executiveFunction
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExecutiveFunction $executiveFunction)
    {
        return $executiveFunction->delete();
    }
}
