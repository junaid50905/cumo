<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\StockRepository;
use App\Repositories\WarehouseRepository;

class StockReorderReport extends Component
{
    public $warehouse_id;
    public mixed $stockReorderRecords = [];

    private WarehouseRepository $warehouseRepo;
    private StockRepository $stockRepo;

    public function boot(WarehouseRepository $warehouseRepository, StockRepository $stockRepository)
    {
        $this->warehouseRepo = $warehouseRepository;
        $this->stockRepo = $stockRepository;
    }

    public function updated($name, $value)
    {
        if ($name == 'warehouse_id') {
            $this->stockReorderRecords = $this->stockRepo->getProductByWarehouseId($value);
        }
    }

    public function render()
    {
        $data = [
            'warehouses' => $this->warehouseRepo->getData(),
        ];
        return view('livewire.stock-reorder-report', $data)
            ->extends('layouts.master');
    }
}
