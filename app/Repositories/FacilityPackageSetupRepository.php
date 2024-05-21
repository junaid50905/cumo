<?php

namespace App\Repositories;

use App\Models\FacilityPackageSetup;

class FacilityPackageSetupRepository extends BaseRepository
{
    protected string $model = FacilityPackageSetup::class;
    public function getListData($perPage, $search)
    {
        return $this->model::with('student', 'teacher')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}
