<?php

namespace App\Repositories;

use App\Models\Payment;

class DirectPaymentRepository extends BaseRepository
{
    protected string $model = Payment::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('project', 'creator', 'history')
            ->when($search, function ($query) use ($search) {
            })->latest()->paginate($perPage);
    }
}
