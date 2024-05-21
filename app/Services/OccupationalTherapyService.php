<?php

namespace App\Services;

use App\Models\OccupationalTherapy;
use App\Repositories\OccupationalTherapyRepository;
use App\Utility\OccupationalTherapyConstants;

class OccupationalTherapyService
{
    private OccupationalTherapyRepository $repo;

    public function __construct(OccupationalTherapyRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {
        $data = $this->processInfo($validated);
        $this->repo->store($data);
    }

    public function update(OccupationalTherapy $trip, mixed $validated): void
    {
        $data = $this->processInfo($validated);
        $this->repo->update($trip, $data);
    }

    private function processInfo(array $validated): array
    {
        [$general, $data] = $this->collectGeneral($validated);
        [$muscleTone, $data] = $this->collectMuscleTone($data);
        [$rangeOfMovement, $data] = $this->collectRangeOfMovement($data);
        [$functionalGrossMotor, $data] = $this->collectFunctionalGrossMotor($data);
        [$transitionalMovements, $data] = $this->collectTransitionalMovements($data);
        [$fineMotorSkill, $data] = $this->collectFineMotorSkill($data);
        [$automaticReaction, $data] = $this->collectAutomaticReaction($data);
        [$sensorySkill, $data] = $this->collectSensorySkill($data);
        [$visualPerception, $data] = $this->collectVisualPerception($data);
        [$activitiesOfDailyLiving, $data] = $this->collectActivitiesOfDailyLiving($data);
        [$strength, $data] = $this->collectStrength($data);
        [$signature, $data] = $this->collectSignature($data);
        [$cognitiveSkills, $data] = $this->collectCognitiveSkills($data);
        [$treatmentPlan, $data] = $this->collectTreatmentPlan($data);

        return [
            'date' => $validated['date'],
            'teacher_id' => $validated['teacher_id'],
            'student_id' => $validated['student_id'],
            'general' => $general,
            'muscle_tone' => $muscleTone,
            'range_of_movement' => $rangeOfMovement,
            'functional_gross_motor' => $functionalGrossMotor,
            'transitional_movements' => $transitionalMovements,
            'fine_motor_skill' => $fineMotorSkill,
            'automatic_reaction' => $automaticReaction,
            'sensory_skill' => $sensorySkill,
            'visual_perception' => $visualPerception,
            'activities_of_daily_living' => $activitiesOfDailyLiving,
            'strength' => $strength,
            'signature' => $signature,
            'cognitive_skills' => $cognitiveSkills,
            'treatment_Plan' => $treatmentPlan,
        ];
    }

    private function collectGeneral(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, OccupationalTherapyConstants::$columnCollections['general']);
    }

    private function collectMuscleTone(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['muscle_tone']);
    }

    private function collectRangeOfMovement(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['range_of_movement']);
    }

    private function collectFunctionalGrossMotor(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['functional_gross_motor']);
    }
    private function collectTransitionalMovements(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['transitional_movements']);
    }
    private function collectFineMotorSkill(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['fine_motor_skill']);
    }
    private function collectAutomaticReaction(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['automatic_reaction']);
    }
    private function collectSensorySkill(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['sensory_skill']);
    }
    private function collectVisualPerception(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['visual_perception']);
    }
    private function collectActivitiesOfDailyLiving(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['activities_of_daily_living']);
    }
    private function collectStrength(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['strength']);
    }
    private function collectSignature(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['signature']);
    }
    private function collectCognitiveSkills(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['cognitive_skills']);
    }
    private function collectTreatmentPlan(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, OccupationalTherapyConstants::$columnCollections['treatment_Plan']);
    }
}
