<?php

namespace App\Services;


use Illuminate\Support\Facades\DB;
use App\Repositories\MaterialCollectionRepository;

class MaterialCollectionService
{
    private MaterialCollectionRepository $repo;

    public function __construct(MaterialCollectionRepository $repository)
    {
        $this->repo = $repository;
    }
    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$materialCollect, $data] = $this->collectMaterialCollect($validated);
            $materialCollect = $this->repo->store($materialCollect);
            $materialCollectDetailsInfos = $this->collectMaterialCollectDetailsInfos($data);
            $materialCollect->details()->createMany($materialCollectDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectMaterialCollect(array $validated)
    {
        [$materialCollect, $data] = extractNecessaryFieldsFromData($validated, ['project_id', 'collected_for', 'date', 'warehouse_id', 'produce_product_id', 'will_produce', 'note']);
        $materialCollect['created_by'] = auth()->id();
        return [$materialCollect, $data];
    }

    private function collectMaterialCollectDetailsInfos(mixed $data): array
    {
        [$materialCollectDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'avl_stock', 'qty']);
        for ($i = 0; $i < count($materialCollectDetailInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $materialCollectDetailInfos['product_id'][$i],
                'available_qty' => $materialCollectDetailInfos['avl_stock'][$i],
                'qty' => $materialCollectDetailInfos['qty'][$i],
            ];
        }

        return $custom ?? [];
    }

    public function update($materialCollect, array $validated)
    {

        try {
            DB::beginTransaction();
            [$materialCollectData, $data] = $this->collectMaterialCollect($validated);
            $materialCollect = $this->repo->update($materialCollect, $materialCollectData);
            $materialCollect->details()->delete();
            $materialCollectDetailsInfos = $this->collectMaterialCollectDetailsInfos($data);
            $materialCollect->details()->createMany($materialCollectDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
