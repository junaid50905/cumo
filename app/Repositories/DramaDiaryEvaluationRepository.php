<?php

namespace App\Repositories;

use App\Models\DramaDiaryEvaluation;

class DramaDiaryEvaluationRepository extends BaseRepository
{
    protected string $model = DramaDiaryEvaluation::class;
    
     public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
            $query->where("address", "like", "%$search%")
                ->orWhere("email", "like", "%$search%")
                ->orWhere("phone", "like", "%$search%")
                //                  ->orWhere('student.name', 'like', "%$search%")
            ;
        })->latest()->paginate($perPage);
    }
}