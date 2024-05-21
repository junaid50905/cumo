<?php

namespace App\Http\Controllers;

use App\Models\BudgetReview;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\BudgetReviewRepository;
use App\Http\Requests\StoreBudgetReviewRequest;
use App\Http\Requests\UpdateBudgetReviewRequest;

class BudgetReviewController extends Controller
{

    private BudgetReviewRepository $repo;
    private ProjectRepository $projectRepo;

    public function __construct(ProjectRepository $projectRepo, BudgetReviewRepository $repository)
    {
        $this->projectRepo = $projectRepo;
        $this->repo = $repository;
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
            'project_id' => $this->projectRepo->getData(),
        ];
        return view('setup.budget-review.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBudgetReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBudgetReviewRequest $request)
    {

        $this->repo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetReview $budgetReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetReview $budgetReview)
    {
        $data = [
            'project_id' => $this->projectRepo->getData(),
            'record' => $budgetReview,
        ];
        return view('setup.budget-review.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBudgetReviewRequest  $request
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */

    public function update(StoreBudgetReviewRequest $request, BudgetReview $budgetReview)
    {
        $this->repo->update($budgetReview, $request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BudgetReview  $budgetReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetReview $budgetReview)
    {
        return $budgetReview->delete();
    }
}
