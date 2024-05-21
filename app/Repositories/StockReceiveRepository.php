<?php

namespace App\Repositories;

use App\Models\StockReceive;

class StockReceiveRepository extends BaseRepository
{
    protected string $model = StockReceive::class;


    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
        //        return $this->model::approved()->all();
    }
}