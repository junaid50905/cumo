<?php

namespace App\Repositories;

use App\Models\Cheque;

class ChequeRepository extends BaseRepository
{
    protected string $model = Cheque::class;

    public function getListData($perPage, $search)
    {
        return $this->model::when($search, function ($query) use ($search) {
        })->latest()->paginate($perPage);
    }

    public function getSpecificCheque($chequeId)
    {
        return $this->model::find($chequeId);
    }
}
