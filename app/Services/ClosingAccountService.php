<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ClosingAccountRepository;

class ClosingAccountService
{
    private ClosingAccountRepository $repo;

    public function __construct(ClosingAccountRepository $repository)
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

    public function update($closingAccount, $validated)
    {
        try {
            DB::beginTransaction();
            $validated += ['published' => $validated['published'] ?? NUll];

            $this->repo->update($closingAccount, $validated);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

}
