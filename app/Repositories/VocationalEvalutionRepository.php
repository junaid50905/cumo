<?php

namespace App\Repositories;

use App\Models\VocationalEvalution;

class VocationalEvalutionRepository extends BaseRepository
{
    protected string $model = VocationalEvalution::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('details', 'student')
            ->latest()
            ->paginate($perPage);
    }
}
