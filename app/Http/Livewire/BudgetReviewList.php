<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\BudgetReviewRepository;
use App\Http\Livewire\Traits\CommonListElements;

class BudgetReviewList extends Component
{
    use WithPagination, CommonListElements;

    private BudgetReviewRepository $budgetReviewRepo;
    public $reportList;
     protected string $destroyRoute = 'budget-review.destroy';

    public function boot(BudgetReviewRepository $budgetReviewRepo)
    {
        $this->budgetReviewRepo = $budgetReviewRepo;
    }

    public function render()
    {
        $data = [
            'records' => $this->budgetReviewRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.budget-review-list',$data);
    }
}
