<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\SupplierTypeRepository;
use App\Http\Livewire\Traits\CommonListElements;

class SupplierTypeList extends Component
{


    use WithPagination, CommonListElements;
    private SupplierTypeRepository $repo;

    protected string $destroyRoute = 'supplier-type.destroy';

    public function boot(SupplierTypeRepository $repository)
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
        return view('livewire.supplier-type-list', $data);
    }
}
