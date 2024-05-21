<?php

namespace App\Services;

use App\Models\SensoryChecklistChild;
use App\Repositories\SensoryChecklistChildRepository;
use App\Utility\SensoryCheckListChildConstants;

class SensoryChecklistChildService
{
    private SensoryChecklistChildRepository $repo;

    public function __construct(SensoryChecklistChildRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    { 
        $data = $this->processInfo($validated);

        $this->repo->store($data);
    }

    public function update(SensoryChecklistChild $sensoryChecklistChild, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($sensoryChecklistChild, $data);
    }

    private function processInfo(array $validated): array
    {
        [$signsOfTactileDysfunction, $data] = $this->collectSignsOfTactileDysfunction($validated);
        [$hyposensitivityToTouch, $data] = $this->collectHyposensitivityToTouch($data);
        [$poorTactilePerceptionAndDiscrimination, $data] = $this->collectPoorTactilePerceptionAndDiscrimination($data);
        [$signsOfVestibularDysfunction, $data] = $this->collectSignsOfVestibularDysfunction($data);
        [$signsOfVestibularDysfunctionUnder, $data] = $this->collectSignsOfVestibularDysfunctionUnder($data);
        [$signsOfVestibularDysfunctionCoordination, $data] = $this->collectSignsOfVestibularDysfunctionCoordination($data);
        [$signsOfVestibularDysfunctionBehaviors, $data] = $this->collectSignsOfVestibularDysfunctionBehaviors($data);
        [$signsOfVestibularDysfunctionMovement, $data] = $this->collectSignsOfVestibularDysfunctionMovement($data);

        

        return [
            'collection_date' => $validated['collection_date'],
            'teacher_id' => $validated['teacher_id'],
            'student_id' => $validated['student_id'],
            'signs_of_tactile_dysfunction' => $signsOfTactileDysfunction,
            'hyposensitivity_to_touch' => $hyposensitivityToTouch,
            'poor_tactile_perception_and_discrimination' => $poorTactilePerceptionAndDiscrimination,
            'signs_of_vestibular_dysfunction' => $signsOfVestibularDysfunction,
            'signs_of_vestibular_dysfunction_under' => $signsOfVestibularDysfunctionUnder,
            'signs_of_vestibular_dysfunction_coordination' => $signsOfVestibularDysfunctionCoordination,
            'signs_of_vestibular_dysfunction_behaviors' => $signsOfVestibularDysfunctionBehaviors,
            'signs_of_vestibular_dysfunction_movement' => $signsOfVestibularDysfunctionMovement,
        ];
    }

    private function collectSignsOfTactileDysfunction(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, SensoryCheckListChildConstants::$columnCollections['signs_of_tactile_dysfunction']);
    }

    private function collectHyposensitivityToTouch(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SensoryCheckListChildConstants::$columnCollections['hyposensitivity_to_touch']);
    }

    private function collectPoorTactilePerceptionAndDiscrimination(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SensoryCheckListChildConstants::$columnCollections['poor_tactile_perception_and_discrimination']);
    }
    private function collectSignsOfVestibularDysfunction(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SensoryCheckListChildConstants::$columnCollections['signs_of_vestibular_dysfunction']);
    }
    private function collectSignsOfVestibularDysfunctionUnder(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SensoryCheckListChildConstants::$columnCollections['signs_of_vestibular_dysfunction_under']);
    }
    private function collectSignsOfVestibularDysfunctionCoordination(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SensoryCheckListChildConstants::$columnCollections['signs_of_vestibular_dysfunction_coordination']);
    }
    private function collectSignsOfVestibularDysfunctionBehaviors(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SensoryCheckListChildConstants::$columnCollections['signs_of_vestibular_dysfunction_behaviors']);
    }
    private function collectSignsOfVestibularDysfunctionMovement(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SensoryCheckListChildConstants::$columnCollections['signs_of_vestibular_dysfunction_movement']);
    }
}
