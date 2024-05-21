<?php

namespace App\Services;

use App\Models\CaseHistory;
use App\Repositories\CaseHistoryRepository;

class CaseHistoryService
{
    private CaseHistoryRepository $repo;

    public function __construct(CaseHistoryRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validate)
    {
        $validate['created_by'] = auth()->id();
        $this->repo->store($validate);
    }

    public function update($recordId, array $validate)
    {
        $record = CaseHistory::findOrFail($recordId);
        $this->repo->update($record, $validate);
    }
}
