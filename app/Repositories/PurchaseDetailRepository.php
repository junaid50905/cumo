<?php

namespace App\Repositories;

use App\Models\PurchaseDetail;

class PurchaseDetailRepository extends BaseRepository
{
    protected string $model = PurchaseDetail::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details.supplier', 'details.product', 'requisition.project')->latest()->paginate($perPage);
    }

    public function getPurchaseData($productId, $purchaseId)
    {
        return $this->model::with('product')->where([
            'product_id'   => $productId,
            'purchase_id'   => $purchaseId,
        ])->first();
    }
}