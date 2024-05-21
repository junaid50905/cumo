<?php

namespace App\Http\Controllers;

use App\Models\CaseHistory;
use App\Utility\ProjectConstants;
use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository;
use App\Services\CaseHistoryService;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CaseHistoryRequest;
use App\Repositories\CaseHistoryRepository;
use App\Traits\PaginationTrait;


class CaseHistoryController extends Controller
{
    use PaginationTrait;
    private CaseHistoryService $service;
    private UserRepository $userRepo;
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    public $caseHistory;
    public $caseHistoryEdit;

    public function __construct(CaseHistoryService $service, UserRepository $userRepository, 
    ProjectRepository $projectRepository, StudentRepository $studentRepository, 
    CaseHistoryRepository $caseHistoryRepository)
    {
        $this->service     = $service;
        $this->userRepo    = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo    = $caseHistoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
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
            'records' => $this->caseRepo->getListData($perPage = ProjectConstants::DATA_PER_PAGE, $search = ''),
        ];
        return view('pre_admission.case-history.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CaseHistoryRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CaseHistoryRequest $request)
    {
        $this->service->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function show(CaseHistory $caseHistory)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'caseHistory' => $caseHistory,
            //'var' => $var->paginate(5)
        ];
        
        // $var = $this->paginate($data,5);
        //dd($var);
        // $data->withPath('');
        return view('pre_admission.case-history.v', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseHistory $caseHistory)
    {
        $data = [
            'teachers' => $this->userRepo->getSpecificTypeUser('teacher'),
            'students' => $this->studentRepo->getData(),
            'caseHistory' => $caseHistory,
        ];
        return view('pre_admission.case-history.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCaseHistoryRequest $request
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function update(CaseHistoryRequest $request, CaseHistory $caseHistory)
    {
        $this->caseRepo->update($caseHistory, $request->validated());
        Session::flash('success', 'Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CaseHistory $caseHistory
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseHistory $caseHistory): ?bool
    {
        return $caseHistory->delete();
    }
}
