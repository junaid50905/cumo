<?php

namespace App\Repositories;

use App\Models\Donation;

class DonationRepository extends BaseRepository
{
    protected string $model = Donation::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('income.history', 'customer', 'income.project')
            ->when($search, function ($query) use ($search) {

            })->latest()->paginate($perPage);
    }
}
