<?php

namespace App\Repositories;

use App\Models\FinishedGood;

class FinishedGoodRepository extends BaseRepository
{
    protected string $model = FinishedGood::class;

    
    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details','creator','warehouse')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
//        return $this->model::approved()->all();
    }
}
