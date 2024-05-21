<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\PurchaseReturnRepository;
use App\Http\Livewire\Traits\CommonListElements;

class PurchaseReturnList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'purchase-return.delete';

    private PurchaseReturnRepository $repo;


    public function boot(PurchaseReturnRepository $repo)
    {
        $this->repo = $repo;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }


    public function render()
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.purchase-return-list',$data);
    }
}
