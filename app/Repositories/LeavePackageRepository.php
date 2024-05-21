<?php

namespace App\Repositories;

use App\Models\LeavePackage;

class LeavePackageRepository extends BaseRepository
{
    protected string $model = LeavePackage::class;

    
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
