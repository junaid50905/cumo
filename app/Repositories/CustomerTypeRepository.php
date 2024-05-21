<?php

namespace App\Repositories;

use App\Models\CustomerType;

class CustomerTypeRepository extends BaseRepository
{
    protected string $model = CustomerType::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
        })->latest()->paginate($perPage);
    }
}
