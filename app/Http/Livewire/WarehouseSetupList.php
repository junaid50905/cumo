<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\WarehouseRepository;

class WarehouseSetupList extends Component
{
    use WithPagination, CommonListElements;
    protected string $destroyRoute = 'warehouse.destroy';

    private WarehouseRepository $warehouseRepo;
    public $reportList;

    public function boot(WarehouseRepository $warehouseRepo)
    {
        $this->warehouseRepo = $warehouseRepo;
    }

    public function toggleApprove($recordId)
    {
        $this->warehouseRepo->toggleColumn($recordId, 'is_approved');
        $this->dispatchBrowserEvent('notify');
    }

    public function render()
    {
        $data = [
            'records' => $this->warehouseRepo->getListData($this->perPage, $this->search),
        ];
        return view('livewire.warehouse-setup-list',$data);
    }
}
