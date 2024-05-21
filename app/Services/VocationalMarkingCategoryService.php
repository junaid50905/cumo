<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\VocationalMarkingCategoryRepository;

class VocationalMarkingCategoryService
{
    private VocationalMarkingCategoryRepository $repo;

    public function __construct(VocationalMarkingCategoryRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated)
    {
        try {
            DB::beginTransaction();
            $vocationalMarkingCategoryData = $this->collectVocationalMarkingCategory($validated);

            foreach ($vocationalMarkingCategoryData as $key => $value) {
                $this->repo->store($value);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
    private function collectVocationalMarkingCategory(array $validated)
    {
        [$prescriptionDetailsInfos, $data] = extractNecessaryFieldsFromData($validated, ['category_name']);
        for ($i = 0; $i < count($prescriptionDetailsInfos['category_name']); $i++) {
            $custom[$i] = [
                'category_name' => $prescriptionDetailsInfos['category_name'][$i],
            ];
        }
        return $custom ?? [];
    }

    public function update($model, array $validated)
    {
        try {
            DB::beginTransaction();
            $vocationalMarkingCategoryData = $this->collectVocationalMarkingCategory($validated);
            foreach ($vocationalMarkingCategoryData as $key => $value) {
                $this->repo->update($model, $value);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage(), $e->getLine());
        }
    }
}
