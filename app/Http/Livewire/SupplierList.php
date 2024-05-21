<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\SupplierRepository;
use App\Http\Livewire\Traits\CommonListElements;

class SupplierList extends Component
{

    use WithPagination, CommonListElements;
    private SupplierRepository $repo;

    protected string $destroyRoute = 'supplier.destroy';

    public function boot(SupplierRepository $repository)
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
        return view('livewire.supplier-list', $data);
    }
}
