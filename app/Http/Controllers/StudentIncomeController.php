<?php

namespace App\Http\Controllers;

use Exception;
use Livewire\WithPagination;
use App\Models\StudentIncome;
use Illuminate\Http\Response;
use App\Services\CourseService;
use Illuminate\Contracts\View\View;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use App\Services\StudentIncomeService;
use Illuminate\Contracts\View\Factory;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentIncomeRequest;
use App\Repositories\CaseHistoryRepository;
use App\Repositories\StudentIncomeRepository;
use App\Http\Livewire\Traits\CommonListElements;
use Illuminate\Contracts\Foundation\Application;

class StudentIncomeController extends Controller
{
    use WithPagination, CommonListElements;

    private UserRepository $userRepo;
    private ProjectRepository $projectRepo;
    private StudentRepository $studentRepo;
    private CaseHistoryRepository $caseRepo;
    private CourseService $courseService;
    private StudentIncomeRepository $repo;
    private StudentIncomeService $service;

    public function __construct(
        StudentIncomeService $service,
        UserRepository $userRepository,
        ProjectRepository $projectRepository,
        StudentRepository $studentRepository,
        CaseHistoryRepository $caseHistoryRepository,
        StudentIncomeRepository $studentIncomeRepository,
        CourseService $courseService,
    ) {
        $this->userRepo = $userRepository;
        $this->projectRepo = $projectRepository;
        $this->studentRepo = $studentRepository;
        $this->caseRepo = $caseHistoryRepository;
        $this->courseService = $courseService;
        $this->repo = $studentIncomeRepository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('accounting.income.student_income.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StudentIncomeRequest $request
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(StudentIncomeRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        Session::flash('success');

        return redirect()->back();
        //        dd($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param StudentIncome $studentIncome
     *
     * @return Response
     */
    public function show(StudentIncome $studentIncome)
    {
        $data = [
            'record' => $this->repo->getRelatedData($studentIncome, ['income.project', 'incomeDetails']),
        ];

        return view('accounting.income.student_income.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StudentIncome  $studentIncome
     *
     * @return Application|Factory|View
     */
    public function edit(StudentIncome $studentIncome): View|Factory|Application
    {
        $data = [
            'record' => $this->repo->getRelatedData($studentIncome, ['income.project', 'incomeDetails']),
        ];

        return view('accounting.income.student_income.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StudentIncomeRequest $request
     * @param StudentIncome $studentIncome
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function update(StudentIncomeRequest $request, StudentIncome $studentIncome): RedirectResponse
    {
        $this->service->update($studentIncome, $request->validated());

        Session::flash('success');

        return redirect()->route('student-income.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StudentIncome $studentIncome
     *
     * @return bool
     */
    public function destroy(StudentIncome $studentIncome): bool
    {
        return $studentIncome->delete();
    }
}
