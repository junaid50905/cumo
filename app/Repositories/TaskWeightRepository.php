<?php

namespace App\Repositories;

use App\Models\taskWeight;

class TaskWeightRepository extends BaseRepository
{
    protected string $model = taskWeight::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
        })->latest()->paginate($perPage);
    }

    public function getCoursesWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
}