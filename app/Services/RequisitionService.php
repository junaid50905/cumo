<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Traits\CommonServiceElements;
use Illuminate\Support\Facades\Session;
use App\Repositories\RequisitionRepository;

class RequisitionService
{
    use CommonServiceElements;

    private RequisitionRepository $repo;

    public function __construct(RequisitionRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {

        if (count(array_unique($validated['product_id'])) < count($validated['product_id'])) {
            Session::put('error', 'true');
            return  redirect()->back();
        }
        Session::forget('error');
        try {
            DB::beginTransaction();
            [$requisitionInfos, $data] = $this->collectRequisitionInfos($validated);
            $requisition = $this->repo->store($requisitionInfos);
            // dd($data);
            $requisitionDetailsInfos = $this->collectRequisitionDetailsInfos($data);
            $requisition->details()->createMany($requisitionDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectRequisitionInfos(array $validated): array
    {
        [$requisitionInfos, $data] = extractNecessaryFieldsFromData($validated, ['project_id', 'requested_by', 'date', 'title', 'warehouse_id', 'note',]);

        $requisitionInfos['created_by'] = auth()->id();

        return [$requisitionInfos, $data];
    }

    private function collectRequisitionDetailsInfos(mixed $data): array
    {
        [$requisitionDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['product_id', 'qty', 'sub_total', 'price', 'available_qty', 'budget_head_id', 'budget_sub_head_id','account']);
        for ($i = 0; $i < count($requisitionDetailInfos['product_id']); $i++) {
            $custom[$i] = [
                'product_id' => $requisitionDetailInfos['product_id'][$i],
                'qty' => $requisitionDetailInfos['qty'][$i],
                'sub_total' => $requisitionDetailInfos['sub_total'][$i],
                'account' => $requisitionDetailInfos['account'][$i],
                'budget_head_id' => $requisitionDetailInfos['budget_head_id'][$i],
                'budget_sub_head_id' => $requisitionDetailInfos['budget_sub_head_id'][$i],
                'price' => $requisitionDetailInfos['price'][$i],
                'available_qty' => $requisitionDetailInfos['available_qty'][$i],
            ];
        }

        return $custom ?? [];
    }

    public function update($requisition, array $validated)
    {
        try {
            DB::beginTransaction();
            [$requisitionInfos, $data] = $this->collectRequisitionInfos($validated);
            $requisition = $this->repo->update($requisition, $requisitionInfos);

            $requisition->details()->delete();
            $requisitionDetailsInfos = $this->collectRequisitionDetailsInfos($data);
            $requisition->details()->createMany($requisitionDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
