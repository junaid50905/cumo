<?php

namespace App\Repositories;

use App\Models\SupplierPayment;

class SupplierPaymentRepository extends BaseRepository
{
    protected string $model = SupplierPayment::class;

    public function getListData($perPage, $search)
    {
        return $this->model::with('payment.supplierPayment')
            ->when($search, function ($query) use ($search) {
            })->latest()->paginate($perPage);
    }
}