<?php

namespace App\Repositories;

use App\Models\Purchase;

class PurchaseOrderRepository extends BaseRepository
{
    protected string $model = Purchase::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details.supplier', 'details.product', 'requisition.project')->latest()->paginate($perPage);
    }

    public function getPurchaseProduct($value)
    {
        return $this->model::with('details.supplier', 'details.product', 'requisition.project', 'supplierPayment.payment')->where(['id' => $value])->first();
    }
}