<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;
use App\Repositories\SalaryGradeRepository;

class SalaryGradeService
{
    private SalaryGradeRepository  $repo;

    public function __construct(SalaryGradeRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            $salaryGradeData = $this->collectSalaryGrade($validated);
            foreach ($salaryGradeData as $key => $value) {
                $this->repo->store($value);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
    private function collectSalaryGrade(array $validated)
    {
        [$prescriptionDetailsInfos, $data] = extractNecessaryFieldsFromData($validated, ['grade_name']);
        for ($i = 0; $i < count($prescriptionDetailsInfos['grade_name']); $i++) {
            $custom[$i] = [
                'grade_name' => $prescriptionDetailsInfos['grade_name'][$i],
            ];
        }
        return $custom ?? [];
    }

    public function update($model, array $validated)
    {
        try {
            DB::beginTransaction();
            $salaryGradeData = $this->collectSalaryGrade($validated);
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
