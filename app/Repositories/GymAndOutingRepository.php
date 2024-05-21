<?php

namespace App\Repositories;

use App\Models\GymAndOuting;

class GymAndOutingRepository extends BaseRepository
{
    protected string $model = GymAndOuting::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('teacher')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}
