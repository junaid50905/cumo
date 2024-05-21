<?php

namespace App\Repositories;
use Illuminate\Pagination\Paginator;
use App\Models\CaseHistory;
use Illuminate\Pagination\LengthAwarePaginator;

final class CaseHistoryRepository extends BaseRepository
{
    protected string $model = CaseHistory::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('student', 'teacher', 'creator')->when($search, function ($query) use ($search)
        {
            $query->where("address", "like", "%$search%")
                  ->orWhere("email", "like", "%$search%")
                  ->orWhere("phone", "like", "%$search%")
//                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }

    public function getViewData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("name", "like", "%$search%");
        })->latest()->paginate($perPage);
    }
}

