<?php

namespace App\Http\Controllers;

use App\Models\ReportingMemo;
use App\Http\Requests\StoreReportingMemoRequest;
use App\Http\Requests\UpdateReportingMemoRequest;
use App\Repositories\DepartmentSetupRepository;
use App\Repositories\ReportingMemoRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;

class ReportingMemoController extends Controller
{
    private DepartmentSetupRepository $departmentRepo;
    private StudentRepository $studentRepo;
    private ReportingMemoRepository $reportingMemoRepo;

    public function __construct(StudentRepository $studentRepo,DepartmentSetupRepository $departmentRepo,
    ReportingMemoRepository $reportingMemoRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->departmentRepo = $departmentRepo;
        $this->reportingMemoRepo = $reportingMemoRepo;
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
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.reporting-memo.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportingMemoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportingMemoRequest $request)
    {
        $this->reportingMemoRepo->store($request->validated());
        Session::flash('success','Store');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function show(ReportingMemo $reportingMemo)
    {
        $data = [
            'record' => $reportingMemo,
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.reporting-memo.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportingMemo $reportingMemo)
    {
        $data = [
            'record' => $reportingMemo,
            'students'=> $this->studentRepo->getData(),
            'departments'=> $this->departmentRepo->getData(),
        ];
        return view('HR.recruit.reporting-memo.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportingMemoRequest  $request
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReportingMemoRequest $request, ReportingMemo $reportingMemo)
    {
        $this->reportingMemoRepo->update($reportingMemo , $request->validated());
        Session::flash('success','Update');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportingMemo  $reportingMemo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportingMemo $reportingMemo)
    {
        return $reportingMemo->delete();
    }
}
