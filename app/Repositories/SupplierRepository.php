<?php

namespace App\Repositories;

use App\Models\Supplier;

class SupplierRepository extends BaseRepository
{
    protected string $model = Supplier::class;

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