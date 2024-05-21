<?php

namespace App\Repositories;

use App\Models\Department;

class DepartmentRepository extends BaseRepository
{
    protected string $model = Department::class;

    public function getAllDepartment()
    {
        return $this->model::all();
    }
}
