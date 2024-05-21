<?php

namespace App\Repositories;

use App\Models\Requisition;

class RequisitionRepository extends BaseRepository
{
    protected string $model = Requisition::class;

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
