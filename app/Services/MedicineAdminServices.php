<?php

namespace App\Services;

use App\Models\MedicineAdmin;
use Illuminate\Support\Facades\DB;
use App\Repositories\MedicineAdminRepository;

class MedicineAdminServices
{
    private MedicineAdminRepository $repo;

    public function __construct(MedicineAdminRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(mixed $validated): void
    {
        [$info, $detailInfo] = $this->segregateInfo($validated);
        // dd([$info, $detailInfo]);

        try {
            DB::beginTransaction();
            /** @var MedicineAdmin $obj */
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
        $data['prescription_id'] = $validated['prescription_id'];
        $data['given_id'] = $validated['given_id'];
        $data['date'] = $validated['date'];
        $data['time'] = $validated['time'];

        unset($validated['student_id']);
        unset($validated['prescription_id']);
        unset($validated['given_id']);
        unset($validated['date']);
        unset($validated['time']);

        return [$data, $validated['medicineAdmin']];
    }

    private function collectRequisitionInfos(array $validated)
    {
        [$requisitionInfos, $data] = extractNecessaryFieldsFromData($validated, ['student_id', 'prescription_id', 'given_id', 'date', 'time']);

        return [$requisitionInfos, $data];
    }

    private function collectRequisitionDetailsInfos(mixed $data): array
    {
        dump($data);
        [$requisitionDetailInfos, $data] = extractNecessaryFieldsFromData($data, ['medicine_name', 'amount_given', 'amount_given_unit', 'note']);
        dd($requisitionDetailInfos, $data);
        for ($i = 0; $i < count($data['medicineAdmin']); $i++) {
            $custom[$i] = [
                'medicine_name' => $data['medicineAdmin'][$i]['medicine_name'],
                'amount_given' => $data['medicineAdmin'][$i]['amount_given'],
                'amount_given_unit' => $data['medicineAdmin'][$i]['amount_given_unit'],
                'note' => $data['medicineAdmin'][$i]['note'],
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
