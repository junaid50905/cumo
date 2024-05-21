<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\ClosingAccountRepository;
use App\Http\Livewire\Traits\CommonListElements;

class ClosingAccountList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'closing_account.destroy';
    private ClosingAccountRepository $closingRepo;
    public $reportList;

    public function boot(ClosingAccountRepository $closingRepo)
    {
        $this->closingRepo = $closingRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->closingRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }
    public function render()
    {
        $data = [
            'records' => $this->closingRepo->getListData($this->perPage, $this->search),
      ];
        return view('livewire.closing-account-list', $data);
    }
}
