<?php

namespace App\Repositories;

use App\Models\StudentIncome;

class StudentIncomeRepository extends BaseRepository
{
    protected string $model = StudentIncome::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::with('income.project', 'incomeDetails')
                           ->when($search, function($query) use ($search)
                           {
                               $query->where(function($q) use ($search) {
                                   $q->whereHas('income', function($q2) use ($search) {
                                       $q2->where('amount', 'like', "%$search%");
                                   });
                               })->orWhere(function($q) use ($search) {
                                   $q->whereHas('income.project', function ($q2) use ($search) {
                                       $q2->where('title', 'like', "%$search%");
                                   });
                               });
                           })->latest()->paginate($perPage);
    }
}
