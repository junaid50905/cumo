<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\PurchaseOrderService;
use App\Repositories\ProjectRepository;
use App\Repositories\PurchaseRepository;
use App\Repositories\WarehouseRepository;
use App\Repositories\PurchaseOrderRepository;

class PurchaseReturnCreate extends Component
{

    protected ProjectRepository $projectRepo;
    private WarehouseRepository $warehouseRepository;
    protected PurchaseRepository $purchaseRepository;

    public function boot(
        ProjectRepository $projectRepositoy,
        WarehouseRepository $warehouseRepository,
        PurchaseRepository $purchaseRepository,
    ) 
    {
        $this->projectRepo = $projectRepositoy;
        $this->warehouseRepository = $warehouseRepository;
        $this->purchaseRepository = $purchaseRepository;
    }

    public $project_id;
    public $purchase;
    public $reference;
    public $collection_date;
    public $warehouse_id;


    public function render()
    {
        $data = [
            'projects' => $this->projectRepo->getData(),
            'warehouses' => $this->warehouseRepository->getData(),
            'purchase' => $this->purchaseRepository->getData(),
        ];
        return view('livewire.purchase-return-create', $data);
    }
}
