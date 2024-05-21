<?php

namespace App\Repositories;

use App\Models\EmployeeRequisition;

class EmployeeRequisitionRepository extends BaseRepository
{
    protected string $model = EmployeeRequisition::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('department')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }

    public function getDepartmentName($id)
    {
        return $this->model::with('department')->where('id', '=', $id)->first();
    }
}