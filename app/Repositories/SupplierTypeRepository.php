<?php

namespace App\Repositories;

use App\Models\SupplierType;

class SupplierTypeRepository extends BaseRepository
{
    protected string $model = SupplierType::class;


    public function getListData(int $perPage, string $search)
    {
        return $this->model::latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
        //        return $this->model::approved()->all();
    }
}