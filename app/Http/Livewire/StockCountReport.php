<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\StockRepository;
use App\Repositories\WarehouseRepository;

class StockCountReport extends Component
{


    public $warehouse_id;
    public mixed $stockCountRecords = [];

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
            $this->stockCountRecords = $this->stockRepo->getProductByWarehouseId($value);
        }
    }


    public function render()
    {
        $data = [
            'warehouses' => $this->warehouseRepo->getData(),
        ];
        return view('livewire.stock-count-report', $data)
            ->extends('layouts.master');
    }
}
