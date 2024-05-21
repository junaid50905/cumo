<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AccountingMappingRepository;

class AccountingMappingList extends Component
{

    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'account_mapping.destroy';

    private AccountingMappingRepository $accountingMappingRepo;
    public $reportList;

    public function boot(AccountingMappingRepository $accountingMappingRepo)
    {
        $this->accountingMappingRepo = $accountingMappingRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->accountingMappingRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->accountingMappingRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.accounting-mapping-list', $data);
    }
}
