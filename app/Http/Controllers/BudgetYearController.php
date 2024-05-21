<?php

namespace App\Http\Controllers;

use App\Models\BudgetYear;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\BudgetYearRepository;
use App\Http\Requests\StoreBudgetYearRequest;
use App\Http\Requests\UpdateBudgetYearRequest;

class BudgetYearController extends Controller
{
    private StudentRepository $studentRepo;
    private BudgetYearRepository $budgetYearRepo;


    public function __construct(StudentRepository $studentRepo, BudgetYearRepository $budgetYearRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->budgetYearRepo = $budgetYearRepo;
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
            'budget' => $this->budgetYearRepo->getData(),
        ];
     return view('setup.budget-year-setup.create' ,$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBudgetYearRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetYearRequest $request)
    {

         $this->budgetYearRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetYear  $budgetYear
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetYear $budgetYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetYear  $budgetYear
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetYear $budgetYear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetYearRequest  $request
     * @param  \App\Models\BudgetYear  $budgetYear
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBudgetYearRequest $request, BudgetYear $budgetYear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetYear  $budgetYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetYear $budgetYear)
    {
        return $budgetYear->delete();
    }
}
