<?php

namespace App\Repositories;

use App\Models\AssignInterviewer;

class AssignInterviewerRepository extends BaseRepository
{
    protected string $model = AssignInterviewer::class;

    
    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('details','creator')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
//        return $this->model::approved()->all();
    }
}
