<?php

namespace App\Repositories;

use App\Models\Purchase;

class  PurchaseRepository extends BaseRepository
{
    protected string $model = Purchase::class;

    public function getPurchaseData($value)
    {
        return $this->model::find($value);
    }
}