<?php

namespace App\Repositories;

use App\Models\Journal;

class JournalRepository extends BaseRepository
{
    protected string $model = Journal::class;

    public function getListData($perPage, $search, $filter)
    {
        return $this->model::with('project', 'details')
            ->when($search, function ($query) use ($search) {
                $query->where('particulars', "like", "%$search%")
                    ->orWhere('transaction_amount', 'like', "%$search%");
            })->when($filter != '', function ($query) use ($filter) {
                $query->where('is_approved', $filter);
            })->latest()
            ->paginate($perPage);
    }
}
