<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\PurchaseOrderRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class PurchaseOrderList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'purchase-order.delete';

    private PurchaseOrderRepository $repo;


    public function boot(PurchaseOrderRepository $repo)
    {
        $this->repo = $repo;
    }

    public function toggleApprove($recordId)
    {
        $this->repo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }


    public function render(): Factory|View|Application
    {
        $data = [
            'records' => $this->repo->getListData($this->perPage, $this->search),
        ];

        return view('livewire.purchase-order-list', $data);
    }
}
