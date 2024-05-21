<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\BudgetTemplateRepository;
use App\Http\Livewire\Traits\CommonListElements;

class BudgetTemplateList extends Component
{
     use WithPagination, CommonListElements;

    private BudgetTemplateRepository $budgetTemplateRepo;
    public $reportList;
    protected string $destroyRoute = 'budget-template.destroy';

    public function boot(BudgetTemplateRepository $budgetTemplateRepo)
    {
        $this->budgetTemplateRepo = $budgetTemplateRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->budgetTemplateRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
        'records' => $this->budgetTemplateRepo->getListData($this->perPage, $this->search),
    ];
     return view('livewire.budget-template-list' ,$data);
    }
}
