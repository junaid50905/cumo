<?php

namespace App\Repositories;

use App\Models\StockAssign;

class StockAssignRepository extends BaseRepository
{
    protected string $model = StockAssign::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details', 'warehouse')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
        //        return $this->model::approved()->all();
    }
}
