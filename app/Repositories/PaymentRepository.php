<?php

namespace App\Repositories;

use App\Models\Payment;

class PaymentRepository extends BaseRepository
{
    protected string $model = Payment::class;

    public function withSaleRelations()
    {
        return $this->model::with('project', 'creator', 'history');
    }

    public function getListData($perPage, $search)
    {
        return $this->withSaleRelations()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->whereHas('product', function ($q2) use ($search) {
                        $q2->where('name', 'like', "%$search%")
                            ->orWhere('code', 'like', "%$search%");
                    });
                })->orWhere(function ($q) use ($search) {
                    $q->whereHas('creator', function ($q2) use ($search) {
                        $q2->where("name", 'like', "%$search$");
                    });
                });
            })->latest()->paginate($perPage);
    }

    public function specificIncomeWithSaleIncomeRelations(int $id)
    {
        return $this->withSaleRelations()->whereId($id)->first();
    }
}
