<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\BudgetYearRepository;
use App\Http\Livewire\Traits\CommonListElements;

class BudgetYearList extends Component
{
  use WithPagination, CommonListElements;

    private BudgetYearRepository $budgetYearRepo;
    public $reportList;
    protected string $destroyRoute = 'budget-year.destroy';

    public function boot(BudgetYearRepository $budgetYearRepo)
    {
        $this->budgetYearRepo = $budgetYearRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->budgetYearRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
        'records' => $this->budgetYearRepo->getListData($this->perPage, $this->search),
    ];
        return view('livewire.budget-year-list',$data);
    }
}
