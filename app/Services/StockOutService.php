<?php

namespace App\Services;


use Illuminate\Support\Facades\DB;
use App\Repositories\StockOutRepository;

class StockOutService
{
    private StockOutRepository $repo;

    public function __construct(StockOutRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$stockOutData, $data] = $this->collectStockOut($validated);
            $stockOut = $this->repo->store($stockOutData);
            
            $stockOutDetailsInfos = $this->collectStockOutDetailsInfos($data);
            $stockOut->details()->createMany($stockOutDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectStockOut(array $validated)
    {
        [$stockOut, $data] = extractNecessaryFieldsFromData($validated, ['project_id', 'warehouse_id', 'date']);

        $stockOut['created_by'] = auth()->id();

        return [$stockOut, $data];
    }

    private function collectStockOutDetailsInfos(mixed $data): array
    {
        [$stockOutDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'stock_out']);
        for ($i = 0; $i < count($stockOutDetailInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $stockOutDetailInfos['product_id'][$i],
                'stock_out' => $stockOutDetailInfos['stock_out'][$i]
            ];
        }

        return $custom ?? [];
    }

    public function update($stockOut, array $validated)
    {

        try {
            DB::beginTransaction();
            [$stockOutData, $data] = $this->collectStockOut($validated);
            $stockOut = $this->repo->update($stockOut, $stockOutData);
            $stockOut->details()->delete();
            $stockOutDetailsInfos = $this->collectStockOutDetailsInfos($data);

            $stockOut->details()->createMany($stockOutDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
