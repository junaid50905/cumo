<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\AccountingYearRepository;
use App\Http\Livewire\Traits\CommonListElements;

class AccountingYearList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'account-year.destroy';
    private AccountingYearRepository $accountYearRepo;

    public function boot(AccountingYearRepository $accountYearRepo)
    {
        $this->accountYearRepo = $accountYearRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->accountYearRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    
    public function render()
    {
        $data = [
            'records' => $this->accountYearRepo->getListData($this->perPage, $this->search),
      ];
        return view('livewire.accounting-year-list', $data);
    }
}
