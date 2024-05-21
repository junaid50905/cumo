<?php

namespace App\Repositories;

use App\Models\Prescription;

class PrescriptionRepository extends BaseRepository
{
    protected string $model = Prescription::class;
    public function getListData($perPage, $search)
    {
        return $this->model::with('doctor')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}
