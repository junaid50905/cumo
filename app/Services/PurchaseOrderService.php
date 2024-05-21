<?php

namespace App\Services;

use App\Models\Purchase;
use Ramsey\Uuid\Rfc4122\UuidV4;
use Illuminate\Support\Facades\DB;
use App\Repositories\PurchaseOrderRepository;
use App\Repositories\PurchaseReturnRepository;

class PurchaseOrderService
{
    private PurchaseOrderRepository $repo;
    private PurchaseReturnRepository $purchaseReturnRepo;

    public function __construct(PurchaseOrderRepository $repository, PurchaseReturnRepository $purchaseReturnRepository)
    {
        $this->repo               = $repository;
        $this->purchaseReturnRepo = $purchaseReturnRepository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$purchaseInfo, $data] = $this->collectPurchaseInfo($validated);
            $purchase = $this->repo->store($purchaseInfo);
            $purchaseDetailInfo = $this->collectPurchaseDetailInfo($data);

            $purchase->details()->createMany($purchaseDetailInfo);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectPurchaseDetailInfo(array $data): array
    {
        [$purchaseDetailInfo, $data] = extractNecessaryFieldsFromData($data, ['qty', 'available_qty', 'supplier_id', 'product_id', 'price', 'vat', 'discount', 'sub_total', 'exp_date']);


        for ($i = 0; $i < count($purchaseDetailInfo['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $purchaseDetailInfo['product_id'][$i],
                'supplier_id' => $purchaseDetailInfo['supplier_id'] ?? null,
                'qty' => $purchaseDetailInfo['qty'][$i],
                'sub_total' => $purchaseDetailInfo['sub_total'][$i],
                'price' => $purchaseDetailInfo['price'][$i],
                'available_qty' => $purchaseDetailInfo['available_qty'][$i],
                'vat' => $purchaseDetailInfo['vat'][$i],
                'discount' => $purchaseDetailInfo['discount'][$i],
                'exp_date' => $purchaseDetailInfo['exp_date'][$i],
            ];
        }

        return $custom ?? [];
    }

    private function collectPurchaseInfo(array $validated): array
    {
        [$purchaseInfo, $data] = extractNecessaryFieldsFromData($validated, ['requisition_id', 'date', 'note']);
        $purchaseInfo['code'] = UuidV4::uuid4();

        return [$purchaseInfo, $data];
    }

    public function storeReturn(Purchase $purchase, array $validate)
    {
        $purchaseReturnInfo = $this->collectPurchaseReturnInfo($validate);

        $purchaseReturn = $purchase->return()->create($purchaseReturnInfo);

        $purchaseDetailInfo = $this->collectPurchaseDetailInfo($validate);
        $purchaseReturn->details()->createMany($purchaseDetailInfo);
    }

    private function collectPurchaseReturnInfo(array $validate): array
    {
        [$purchaseReturnInfo, $data] = extractNecessaryFieldsFromData($validate, ['date', 'note']);
        return $purchaseReturnInfo;
    }
}
