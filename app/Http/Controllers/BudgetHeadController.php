<?php

namespace App\Http\Controllers;

use App\Models\BudgetHead;
use App\Repositories\StudentRepository;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreBudgetHeadRequest;
use App\Http\Requests\UpdateBudgetHeadRequest;
use App\Repositories\BudgetHeadRepository;
use App\Utility\DemoConstant;

class BudgetHeadController extends Controller
{
    private StudentRepository $studentRepo;
    private BudgetHeadRepository $budgetYearRepo;


    public function __construct(StudentRepository $studentRepo, BudgetHeadRepository $budgetHeadRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->budgetHeadRepo = $budgetHeadRepo;
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
            'demo_title' => DemoConstant::$demo,
            'demo_parent' => DemoConstant::$demo,
        ];
        return view('setup.budget-head-setup.create' ,$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBudgetHeadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetHeadRequest $request)
    {
        $this->budgetHeadRepo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetHead $budgetHead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetHead $budgetHead)
    {
        $data = [
            'record' => $budgetHead,
            'title' => DemoConstant::$demo,
            'parent' => DemoConstant::$demo,
        ];
      return view('setup.budget-head-setup.edit' ,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetHeadRequest  $request
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBudgetHeadRequest $request, BudgetHead $budgetHead)
    {

        $this->budgetHeadRepo->update($budgetHead, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetHead  $budgetHead
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetHead $budgetHead)
    {
      return $budgetHead->delete();

    }
}
