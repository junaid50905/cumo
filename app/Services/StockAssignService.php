<?php

namespace App\Services;

use App\Repositories\StockAssignRepository;
use Illuminate\Support\Facades\DB;

class StockAssignService
{
    private StockAssignRepository $repo;

    public function __construct(StockAssignRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$stockAssign, $data] = $this->collectStockAssign($validated);
            $stockAssign = $this->repo->store($stockAssign);
            $stockAssignDetailsInfos = $this->collectStockAssignDetailsInfos($data);
            $stockAssign->details()->createMany($stockAssignDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectStockAssign(array $validated)
    {
        [$stockAssign, $data] = extractNecessaryFieldsFromData($validated, ['project_id', 'warehouse_id', 'date', 'note']);

        $stockAssign['created_by'] = auth()->id();

        return [$stockAssign, $data];
    }

    private function collectStockAssignDetailsInfos(mixed $data): array
    {
        [$stockAssignDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'product_details', 'depreciation_percent', 'assigned_to']);
        for ($i = 0; $i < count($stockAssignDetailInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $stockAssignDetailInfos['product_id'][$i],
                'product_details' => $stockAssignDetailInfos['product_details'][$i],
                'depreciation_percent' => $stockAssignDetailInfos['depreciation_percent'][$i],
                'assigned_to' => $stockAssignDetailInfos['assigned_to'][$i],
            ];
        }


        return $custom ?? [];
    }

    public function update($stockAssign, array $validated)
    {

        try {
            DB::beginTransaction();
            [$stockAssignData, $data] = $this->collectStockAssign($validated);
            $stockAssign = $this->repo->update($stockAssign, $stockAssignData);
            $stockAssign->details()->delete();
            $stockAssignDetailsInfos = $this->collectStockAssignDetailsInfos($data);

            $stockAssign->details()->createMany($stockAssignDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
