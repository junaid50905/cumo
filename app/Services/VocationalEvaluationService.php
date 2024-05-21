<?php

namespace App\Services;

use App\Models\VocationalEvalution;
use App\Repositories\VocationalEvalutionRepository;
use Illuminate\Support\Facades\DB;

class VocationalEvaluationService
{
    private VocationalEvalutionRepository $repo;

    public function __construct(VocationalEvalutionRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(mixed $validated): void
    {
        [$info, $detailInfo] = $this->segregateInfo($validated);

        try {
            DB::beginTransaction();
            /** @var VocationalEvalution $obj */
            $obj = $this->repo->store($info);

            $obj->details()->createMany($detailInfo);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function segregateInfo(mixed $validated): array
    {
        $data['student_id'] = $validated['student_id'];
        $data['date'] = $validated['date'];
        unset($validated['student_id']);
        unset($validated['date']);

        return [$data, $validated['vocational']];
    }


    private function collectRequisitionInfos(array $validated)
    {
        [$requisitionInfos, $data] = extractNecessaryFieldsFromData($validated, ['student_id', 'date']);

        return [$requisitionInfos, $data];
    }

    private function collectRequisitionDetailsInfos(mixed $data): array
    {
        [$requisitionDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['category_id', 'production', 'target', 'wastage', 'time_taken', 'work_quality', 'follow_ins', 'generalizatio', 'adaption', 'remarks']);

        for ($i = 0; $i < count($data['vocational']); $i++) {
            $custom[$i] = [
                'category_id' => $data['vocational'][$i]['category_id'],
                'production' => $data['vocational'][$i]['production'],
                'target' => $data['vocational'][$i]['target'],
                'wastage' => $data['vocational'][$i]['wastage'],
                'time_taken' => $data['vocational'][$i]['time_taken'],
                'work_quality' => $data['vocational'][$i]['work_quality'],
                'follow_ins' => $data['vocational'][$i]['follow_ins'],
                'generalizatio' => $data['vocational'][$i]['generalizatio'],
                'adaption' => $data['vocational'][$i]['adaption'],
                'remarks' => $data['vocational'][$i]['remarks'],
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
            // dd($requisitionDetailsInfos);
            $requisition->details()->createMany($requisitionDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
