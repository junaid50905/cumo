<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\BudgetHeadRepository;
use App\Http\Livewire\Traits\CommonListElements;

class BudgetHeadList extends Component
{
     use WithPagination, CommonListElements;

    private BudgetHeadRepository $budgetHeadRepo;
    public $reportList;
    protected string $destroyRoute = 'budget-head.destroy';

    public function boot(BudgetHeadRepository $budgetHeadRepo)
    {
        $this->budgetHeadRepo = $budgetHeadRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->budgetHeadRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
        'records' => $this->budgetHeadRepo->getListData($this->perPage, $this->search),
    ];
        return view('livewire.budget-head-list' ,$data);
    }
}
