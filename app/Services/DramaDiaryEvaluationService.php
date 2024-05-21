<?php

namespace App\Services;


use App\Models\DramaDiaryEvaluation;
use App\Repositories\DramaDiaryEvaluationRepository;
use App\Utility\DramaDiaryEvaluation as UtilityDramaDiaryEvaluation;

class DramaDiaryEvaluationService
{
    private DramaDiaryEvaluationRepository $repo;

    public function __construct(DramaDiaryEvaluationRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {
        $data = $this->processInfo($validated);
        $this->repo->store($data);
    }

    public function update(DramaDiaryEvaluation $dramaDiaryEvaluation, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($dramaDiaryEvaluation, $data);
    }

    private function processInfo(array $validated): array
    {
        [$basicFunctionalArea, $data] = $this->collectBasicFunctionalArea($validated);
        [$otherAreas, $data] = $this->collectOtherAreas($data);


        return [
            'date' => $validated['date'],
            'teacher_id' => $validated['teacher_id'],
            'candidate_id' => $validated['candidate_id'],
            'basic_functional_area' => $basicFunctionalArea,
            'other_areas' => $otherAreas,
        ];
    }

    private function collectBasicFunctionalArea(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, UtilityDramaDiaryEvaluation::$columnCollections['basic_functional_area']);
    }

    private function collectOtherAreas(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityDramaDiaryEvaluation::$columnCollections['other_areas']);
    }
}
