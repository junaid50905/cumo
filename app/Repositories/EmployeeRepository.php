<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository extends BaseRepository
{
    protected string $model = Employee::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("name", "like", "%$search%");
        })->latest()->paginate($perPage);
    }

    public function getEmployeesWithSpecifyingRelation()
    {
        return $this->model::specifyingRelation()->get();
    }
}