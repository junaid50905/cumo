<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectSetupRepository extends BaseRepository
{
    protected string $model = Project::class;


    public function getListData($perPage, $search)
    {
        return $this->model::with('parent')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
            ;
        })->latest()->paginate($perPage);
    }

}



