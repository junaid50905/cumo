<?php

namespace App\Repositories;

use App\Models\BankAccount;

class BankAccountRepository extends BaseRepository
{
    protected string $model = BankAccount::class;


    public function getListData(int $perPage, string $search)
    {
        return $this->model::With('chequeBook')->latest()->paginate($perPage);
    }

    public function getApprovedList()
    {
        return $this->model::all();
    }

    public function getCheque($value)
    {

        $data = $this->model::with('chequeBook')->where(['id' => $value,])->first()->chequeBook->where('is_invalid', 0)->where('used', 0);

        return $data;
    }

    public function getSpecificBankAcc($bankId)
    {
        return $this->model::find($bankId);
    }
}
