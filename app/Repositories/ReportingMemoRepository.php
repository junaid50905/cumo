<?php

namespace App\Repositories;

use App\Models\ReportingMemo;

class ReportingMemoRepository extends BaseRepository
{
    protected string $model = ReportingMemo::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('student')->when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}
