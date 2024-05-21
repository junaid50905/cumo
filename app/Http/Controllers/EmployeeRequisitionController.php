<?php

namespace App\Http\Controllers;

use App\Models\EmployeeRequisition;
use App\Http\Requests\StoreEmployeeRequisitionRequest;
use App\Repositories\DepartmentSetupRepository;
use App\Repositories\EmployeeRequisitionRepository;
use App\Repositories\ProjectSetupRepository;
use App\Repositories\UserRepository;
use App\Services\EmployeeRequisitionService;
use App\Utility\JobTypeConstant;
use Illuminate\Support\Facades\Session;

class EmployeeRequisitionController extends Controller
{
    private DepartmentSetupRepository $departmentRepo;
    private ProjectSetupRepository $projectRepo;
    private UserRepository $userRepo;
    private EmployeeRequisitionService $employeeService;

    public function __construct(DepartmentSetupRepository $departmentRepo,ProjectSetupRepository $projectRepo,
    UserRepository $userRepo,EmployeeRequisitionRepository $employeeRepo,EmployeeRequisitionService $employeeService)
    {
        $this->departmentRepo = $departmentRepo;
        $this->projectRepo = $projectRepo;
        $this->userRepo = $userRepo;
        $this->employeeRepo = $employeeRepo;
        $this->employeeService = $employeeService;
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
            'departments'=> $this -> departmentRepo->getData(),
            'projects'=>$this-> projectRepo->getData(),
            'user' => $this-> userRepo->getData(),
            'jobType' => JobTypeConstant::$jobType,
        ];
        return view('HR.employee-requisition.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequisitionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequisitionRequest $request)
    {
        $this->employeeService->store($request->validated());
        Session::flash('success','Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeRequisition  $employeeRequisition
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeRequisition $employeeRequisition)
    {
        $data = [
            'record' => $employeeRequisition,
            'departments'=> $this -> departmentRepo->getData(),
            'projects'=>$this-> projectRepo->getData(),
            'user' => $this-> userRepo->getData(),
            'jobType' => JobTypeConstant::$jobType,
        ];
        return view('HR.employee-requisition.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeRequisition  $employeeRequisition
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeRequisition $employeeRequisition)
    {
        $data = [
            'record' => $employeeRequisition,
            'departments'=> $this -> departmentRepo->getData(),
            'projects'=>$this-> projectRepo->getData(),
            'users' => $this-> userRepo->getData(),
            'jobType' => JobTypeConstant::$jobType,
        ];
        return view('HR.employee-requisition.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequisitionRequest  $request
     * @param  \App\Models\EmployeeRequisition  $employeeRequisition
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployeeRequisitionRequest $request, EmployeeRequisition $employeeRequisition)
    {
        $this->employeeService->update($employeeRequisition , $request->validated());
        Session::flash('success','Update');
        return redirect()->route('employee-requisition.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeRequisition  $employeeRequisition
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeRequisition $employeeRequisition)
    {
        return $employeeRequisition->delete();
    }
}
