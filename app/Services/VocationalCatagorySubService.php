<?php

namespace App\Services;

use App\Models\VocationalCatagorySub;
use App\Repositories\VocationalCatagorySubRepository;

class CaseHistoryService
{
    private VocationalCatagorySubRepository $repo;

    public function __construct(VocationalCatagorySubRepository $repo)
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
        $record = VocationalCatagorySub::findOrFail($recordId);
        $this->repo->update($record, $validate);
    }
}
