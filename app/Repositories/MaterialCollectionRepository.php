<?php

namespace App\Repositories;

use App\Models\MaterialCollection;

class MaterialCollectionRepository extends BaseRepository
{
    protected string $model = MaterialCollection::class;


    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details', 'warehouse', 'creator')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
        //        return $this->model::approved()->all();
    }
}
