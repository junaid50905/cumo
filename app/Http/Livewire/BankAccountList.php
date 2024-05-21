<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\BankAccountRepository;
use App\Http\Livewire\Traits\CommonListElements;

class BankAccountList extends Component
{

    use WithPagination, CommonListElements;
    private BankAccountRepository $repo;

    protected string $destroyRoute = 'bank-account.destroy';

    public function boot(BankAccountRepository $repository)
    {
        $this->repo = $repository;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search)
        ];

        return view('livewire.bank-account-list', $data);
    }
}
