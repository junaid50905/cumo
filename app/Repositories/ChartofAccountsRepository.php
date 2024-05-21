<?php

namespace App\Repositories;

use App\Models\ChartofAccounts;

class ChartofAccountsRepository extends BaseRepository
{
    protected string $model = ChartofAccounts::class;

    public function getListData(int $perPage, string $search)
    {
        return $this->model::latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
//        return $this->model::approved()->all();
    }
}
