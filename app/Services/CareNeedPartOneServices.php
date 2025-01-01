<?php

namespace App\Services;

use App\Models\CareNeedPartOne;
use App\Repositories\CareNeeds\CareNeedPartOneRepository;
use App\Utility\CareNeedsPartOneConstants;

class CareNeedPartOneServices
{
    private CareNeedPartOneRepository $repo;

    public function __construct(CareNeedPartOneRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {
        $data = $this->processInfo($validated);
        $this->repo->store($data);
    }

    public function update(CareNeedPartOne $careNeedPartOne, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($careNeedPartOne, $data);
    }
    private function processInfo(array $validated): array
    {
        [$common, $data] = $this->collectCommon($validated);
        [$typesOfSpecialtyDisabilityImpairments, $data] = $this->collectTypesOfSpecialtyDisabilityImpairments($data);
        [$assessment, $data] = $this->collectAssessment($data);
        [$educationalInformation, $data] = $this->collectEducationalInformation($data);
        [$childsConditionAtHisFamily, $data] = $this->collectChildsConditionAtHisFamily($data);
        [$numberOfChildrenInTheFamily, $data] = $this->collectNumberOfChildrenInTheFamily($data);
        [$schooling, $data] = $this->collectSchooling($data);
        [$home, $data] = $this->collectHome($data);



        return [
            'collection_date' => $validated['collection_date'],
            'teacher_id' => $validated['teacher_id'],
            'student_id' => $validated['student_id'],
            'common' => $common,
            'types_of_specialty_disability_impairments' => $typesOfSpecialtyDisabilityImpairments,
            'assessment' => $assessment,
            'educational_information' => $educationalInformation,
            'childs_condition_at_his_family' => $childsConditionAtHisFamily,
            'number_of_children_in_the_family' => $numberOfChildrenInTheFamily,
            'schooling' => $schooling,
            'home' => $home,
        ];
    }

    private function collectCommon(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, CareNeedsPartOneConstants::$columnCollections['common']);
    }

    private function collectTypesOfSpecialtyDisabilityImpairments(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, CareNeedsPartOneConstants::$columnCollections['types_of_specialty_disability_impairments']);
    }

    private function collectAssessment(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, CareNeedsPartOneConstants::$columnCollections['assessment']);
    }
    private function collectEducationalInformation(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, CareNeedsPartOneConstants::$columnCollections['educational_information']);
    }
    private function collectChildsConditionAtHisFamily(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, CareNeedsPartOneConstants::$columnCollections['childs_condition_at_his_family']);
    }
    private function collectNumberOfChildrenInTheFamily(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, CareNeedsPartOneConstants::$columnCollections['number_of_children_in_the_family']);
    }
    private function collectSchooling(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, CareNeedsPartOneConstants::$columnCollections['schooling']);
    }
    private function collectHome(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, CareNeedsPartOneConstants::$columnCollections['home']);
    }
}
