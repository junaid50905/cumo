<?php

namespace App\Services;

use App\Models\Prescription;
use Illuminate\Support\Facades\DB;
use App\Repositories\PrescriptionRepository;

class PrescriptionService
{
    private PrescriptionRepository $repo;

    public function __construct(PrescriptionRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            [$prescriptionData, $data] = $this->collectPrescription($validated);
            $prescription = $this->repo->store($prescriptionData);
            $prescriptionDetailsInfos = $this->collectPrescriptionDetailsInfos($data);
            $prescription->details()->createMany($prescriptionDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
    private function collectPrescription(array $validated)
    {
        [$prescription, $data] = extractNecessaryFieldsFromData($validated, [
            'student_id', 'pres_name', 'pres_by'
        ]);

        $prescription['created_by'] = auth()->id();

        return [$prescription, $data];
    }

    private function collectPrescriptionDetailsInfos(mixed $data): array
    {
        [$prescriptionDetailsInfos, $data] = extractNecessaryFieldsFromData($data, ['medicine_admin', 'medicine_dose', 'medicine_route']);
        for ($i = 0; $i < count($prescriptionDetailsInfos['medicine_admin']); $i++) {
            $custom[$i] = [
                'medicine_admin' => $prescriptionDetailsInfos['medicine_admin'][$i],
                'medicine_dose' => $prescriptionDetailsInfos['medicine_dose'][$i],
                'medicine_route' => $prescriptionDetailsInfos['medicine_route'][$i]
            ];
        }
        return $custom ?? [];
    }

    private function formattedCoursesAsOptGroup($records): array
    {
        foreach ($records as $key => $record) {
            if (!isset($custom[$record->category_id])) {
                $custom[$record->category_id] = [
                    'id'       => $record->category_id,
                    'name'    => $record->category->name,
                    'children' => [],
                ];
            }

            $childrenInfo = [
                'id'    => $record->id,
                'name' => $record->name,
            ];

            $custom[$record->category_id]['children'][] = $childrenInfo;
        }

        return $custom ?? [];
    }
    public function update($prescription, array $validated)
    {
        try {
            DB::beginTransaction();
            [$prescriptionData, $data] = $this->collectPrescription($validated);
            $prescription = $this->repo->update($prescription, $prescriptionData);
            $prescription->details()->delete();
            $prescriptionDataDetailsInfos = $this->collectPrescriptionDetailsInfos($data);
            $prescription->details()->createMany($prescriptionDataDetailsInfos);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }



}
