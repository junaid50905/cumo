<?php

namespace App\Repositories;

use App\Models\StockOut;

class StockOutRepository extends BaseRepository
{
    protected string $model = StockOut::class;


    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details', 'project', 'warehouse')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
        //        return $this->model::approved()->all();
    }
}
