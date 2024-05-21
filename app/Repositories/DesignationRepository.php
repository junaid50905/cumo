<?php

namespace App\Repositories;

use App\Models\Designation;

class DesignationRepository extends BaseRepository
{
    protected string $model = Designation::class;

    public function getAllDesignation()
    {
        return $this->model::all();
    }
}
