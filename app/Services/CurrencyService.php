<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ChequeRepository;
use App\Repositories\CurrencySetupRepository;

class CurrencyService
{
    private CurrencySetupRepository $repo;

    public function __construct(CurrencySetupRepository $repository)
    {
        $this->repo = $repository;
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

    public function update($currency, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['is_in_percent' => $validated['is_in_percent'] ?? NUll];

            $this->repo->update($currency, $validated);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
