<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ChequeRepository;
use App\Repositories\BonusPackageRepository;

class BonusPackageService
{
    public function __construct(
        private BonusPackageRepository $repo
    ) {
    }

    public function store($validated)
    {

        try {
            DB::beginTransaction();
            $this->repo->store($validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    public function update($bonusPackage, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['is_in_percent' => $validated['is_in_percent'] ?? NUll];
            $this->repo->update($bonusPackage, $validated);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
