<?php

namespace App\Repositories;

use App\Models\Stock;

class StockRepository extends BaseRepository
{
    protected string $model = Stock::class;

    public function getDetailAccordingly($project_id = false, $warehouse_id = false, $product_id = false)
    {
        $projectId   = $project_id ?: request()->project_id;
        $productId   = $product_id ?: request()->product_id;
        $warehouseId = $warehouse_id ?: request()->warehouse_id;

        return $this->model::with('product')->where([
            'product_id'   => $productId,
            'project_id'   => $projectId,
            'warehouse_id' => $warehouseId,
        ])->first();
    }


    public function getProductByWarehouseId(int $id)
    {
        return $this->model::with('project', 'product', 'product.unit', 'product.category')->where(['warehouse_id' => $id])->get();
    }
}