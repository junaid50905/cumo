<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;
use App\Repositories\SalaryStepRepository;

class SalaryStepService
{
    private SalaryStepRepository $repo;

    public function __construct(SalaryStepRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validated){
        try {
            DB::beginTransaction();
            $salaryGradeData = $this->collectSalaryStep($validated);
            foreach ($salaryGradeData as $key => $value) {
                $this->repo->store($value);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }

    private function collectSalaryStep(array $validated)
    {
        [$prescriptionDetailsInfos, $data] = extractNecessaryFieldsFromData($validated, ['step_name']);
        for ($i = 0; $i < count($prescriptionDetailsInfos['step_name']); $i++) {
            $custom[$i] = [
                'step_name' => $prescriptionDetailsInfos['step_name'][$i],
            ];
        }
        return $custom ?? [];
    }

    public function update($model, array $validated){
        try {
            DB::beginTransaction();
            $salaryGradeData = $this->collectSalaryStep($validated);
            foreach ($salaryGradeData as $key => $value) {
                $this->repo->update($model, $value);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
