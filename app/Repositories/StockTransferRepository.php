<?php

namespace App\Repositories;

use App\Models\StockTransfer;

class StockTransferRepository extends BaseRepository
{
    protected string $model = StockTransfer::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details', 'warehouseFrom', 'warehouseTo', 'project', 'supplier', 'customer')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
        //        return $this->model::approved()->all();
    }
}