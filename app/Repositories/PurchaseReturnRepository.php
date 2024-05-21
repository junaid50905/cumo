<?php

namespace App\Repositories;

use App\Models\PurchaseReturn;

class PurchaseReturnRepository extends BaseRepository
{
    protected string $model = PurchaseReturn::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details.supplier', 'details.product', 'requisition.project')->latest()->paginate($perPage);
    }
}
