<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ChequeRepository;
use App\Repositories\StockReceiveRepository;

class ChequeService
{
    private ChequeRepository $repo;

    public function __construct(ChequeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        // dd($validated);
        try {
            DB::beginTransaction();

            for ($i = $validated['start_page']; $i <= $validated['end_page']; $i++) {

                $chequeData = $this->collectChequeData($validated, $i);

                $this->repo->store($chequeData);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectChequeData(array $validated, $chequeNum)
    {
        $chequeData['title'] = $validated['title'];
        $chequeData['bank_account_id'] = $validated['bank_account_id'];
        $chequeData['start_page'] = $validated['start_page'];
        $chequeData['end_page'] = $validated['end_page'];
        $chequeData['page_no'] = $chequeNum;
        return $chequeData;
    }
}
