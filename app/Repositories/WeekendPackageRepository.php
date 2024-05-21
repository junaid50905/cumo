<?php

namespace App\Repositories;
use App\Models\WeekendPackage;

class WeekendPackageRepository extends BaseRepository{

    protected string $model = WeekendPackage::class;

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
