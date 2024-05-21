<?php

namespace App\Services;

use App\Models\Physiotherapy;
use App\Repositories\PhysiotherapyRepository;
use App\Utility\PhysioTherapy as UtilityPhysioTherapy;

class PhysiotherapyService
{
    private PhysiotherapyRepository $repo;

    public function __construct(PhysiotherapyRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->store($data);
    }

    public function update(Physiotherapy $physiotherapy, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($physiotherapy, $data);
    }

    private function processInfo(array $validated): array
    {
        [$general, $data] = $this->collectGeneral($validated);
        [$visualPerception, $data] = $this->collectVisualPerception($data);
        [$activitiesOfDailyLiving, $data] = $this->collectActivitiesOfDailyLiving($data);
        [$strength, $data] = $this->collectStrength($data);
        [$functionalGrossMotor, $data] = $this->collectFunctionalGrossMotor($data);
        [$transitionalMovements, $data] = $this->collectTransitionalMovements($data);
        [$fineMotorSkill, $data] = $this->collectFineMotorSkill($data);
        [$automaticReaction, $data] = $this->collectAutomaticReaction($data);
        [$sensorySkillNormalHypoResponse, $data] = $this->collectSensorySkillNormalHypoResponse($data);
        [$cognitiveSkills, $data] = $this->collectCognitiveSkills($data);
        [$treatment, $data] = $this->collectTreatment($data);
        [$signature, $data] = $this->collectSignature($data);
        [$musclePower, $data] = $this->collectMusclePower($data);
        [$muscleTone, $data] = $this->collectMuscleTone($data);
        [$behavior, $data] = $this->collectBehavior($data);
        [$domainArea, $data] = $this->collectDomainArea($data);

        return [
            'collection_date' => $validated['collection_date'],
            'teacher_id' => $validated['teacher_id'],
            'student_id' => $validated['student_id'],
            'general' => $general,
            'visual_perception' => $visualPerception,
            'activities_of_daily_living' => $activitiesOfDailyLiving,
            'strength' => $strength,
            'functional_gross_motor' => $functionalGrossMotor,
            'transitional_movements' => $transitionalMovements,
            'fine_motor_skill' => $fineMotorSkill,
            'automatic_reaction' => $automaticReaction,
            'sensory_skill_normal_hypo_response' => $sensorySkillNormalHypoResponse,
            'cognitive_skills' => $cognitiveSkills,
            'treatment' => $treatment,
            'signature' => $signature,
            'muscle_power' => $musclePower,
            'muscle_tone' => $muscleTone,
            'behavior' => $behavior,
            'domain_area' => $domainArea,
        ];
    }

    private function collectGeneral(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, UtilityPhysioTherapy::$columnCollections['general']);
    }

    private function collectVisualPerception(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['visual_perception']);
    }

    private function collectActivitiesOfDailyLiving(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['activities_of_daily_living']);
    }

    private function collectStrength(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['strength']);
    }
    private function collectFunctionalGrossMotor(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['functional_gross_motor']);
    }
    private function collectTransitionalMovements(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['transitional_movements']);
    }
    private function collectFineMotorSkill(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['fine_motor_skill']);
    }
    private function collectAutomaticReaction(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['automatic_reaction']);
    }
    private function collectSensorySkillNormalHypoResponse(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['sensory_skill_normal_hypo_response']);
    }
    private function collectCognitiveSkills(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['cognitive_skills']);
    }
    private function collectTreatment(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['treatment']);
    }
    private function collectSignature(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['signature']);
    }
    private function collectMusclePower(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['muscle_power']);
    }
    private function collectMuscleTone(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['muscle_tone']);
    }
    private function collectBehavior(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['behavior']);
    }
    private function collectDomainArea(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, UtilityPhysioTherapy::$columnCollections['domain_area']);
    }
}
