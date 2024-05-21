<?php

namespace App\Services;


use Illuminate\Support\Facades\DB;
use App\Repositories\StockTransferRepository;

class StockTransferService
{
    private StockTransferRepository $repo;

    public function __construct(StockTransferRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$stockTransfer, $data] = $this->collectStockTransfer($validated);
            $stockTransfer = $this->repo->store($stockTransfer);
            $stockTransferDetailsInfos = $this->collectStockTransferDetailsInfos($data);
            $stockTransfer->details()->createMany($stockTransferDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectStockTransfer(array $validated)
    {
        $total_qty = 0;

        [$stockTransfer, $data] = extractNecessaryFieldsFromData($validated, ['project_id', 'issue_type', 'reference', 'date', 'warehouse_id_from', 'warehouse_id_to', 'note']);
        
        for ($i = 0; $i < count($data['transfer_quantity']); $i++) {
            $total_qty = $data['transfer_quantity'][$i] +  $total_qty;
        }

        $stockTransfer['total_transfer_quantity'] = $total_qty;
        $stockTransfer['created_by'] = auth()->id();

        return [$stockTransfer, $data];
    }

    private function collectStockTransferDetailsInfos(mixed $data): array
    {
        [$stockReceiveDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id','available_Quantity', 'transfer_quantity', 'serial']);
        for ($i = 0; $i < count($stockReceiveDetailInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $stockReceiveDetailInfos['product_id'][$i],
                'transfer_quantity' => $stockReceiveDetailInfos['transfer_quantity'][$i],
                'available_qty' => $stockReceiveDetailInfos['available_Quantity'][$i],
                'serial' => $stockReceiveDetailInfos['serial'][$i]
            ];
        }


        return $custom ?? [];
    }

    public function update($stockTransfer, array $validated)
    {

        try {
            DB::beginTransaction();
            [$stockTransferData, $data] = $this->collectStockTransfer($validated);
            $stockTransfer = $this->repo->update($stockTransfer, $stockTransferData);
            $stockTransfer->details()->delete();
            $stockTransferDetailsInfos = $this->collectStockTransferDetailsInfos($data);

            $stockTransfer->details()->createMany($stockTransferDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
