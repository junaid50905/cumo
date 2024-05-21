<?php

namespace App\Repositories;

use App\Models\DesignationSetup;

class DesignationSetupRepository extends BaseRepository
{
    protected string $model = DesignationSetup::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}
