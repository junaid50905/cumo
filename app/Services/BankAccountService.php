<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ChequeRepository;
use App\Repositories\BankAccountRepository;

class BankAccountService
{
    private BankAccountRepository $repo;

    public function __construct(BankAccountRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();

            $validated['current_balance'] = $validated['initial_balance'];
            // dd($validated);

            $this->repo->store($validated);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
