<?php

namespace App\Services;

use App\Models\Trip;
use App\Repositories\TripRepository;
use App\Utility\TripReport;

class TripService
{
    private TripRepository $repo;

    public function __construct(TripRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->store($data);
    }

    public function update(Trip $trip, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($trip, $data);

    }

    private function processInfo(array $validated): array
    {
        [$activitiesOfDailyLivingInfos, $data] = $this->collectActivitiesOfDailyLivingRecords($validated);
        [$onlyForStaffInfos, $data] = $this->collectOnlyForStaffRecords($data);
        [$activities, $data] = $this->collectActivities($data);
        [$securitySafety, $data] = $this->collectSecuritySafety($data);
        [$equipment, $data] = $this->collectEquipment($data);
        [$light, $data] = $this->collectLight($data);
        [$kitchen, $data] = $this->collectKitchen($data);
        [$bathroom, $data] = $this->collectBathroom($data);
        [$floor, $data] = $this->collectFloor($data);
        [$instrumentalActivitiesOfDaily, $data] = $this->collectInstrumentalActivitiesOfDaily($data);
        [$environmentalSafetyRelative, $data] = $this->collectEnvironmentalSafetyRelative($data);
        [$environmentalSafetyStep, $data] = $this->collectEnvironmentalSafetyStep($data);
        [$wokeUpInTheMorning, $data] = $this->collectWokeUpInTheMorning($data);
        [$readingWriting, $data] = $this->collectReadingWriting($data);
        [$dailyWork, $data] = $this->collectDailyWork($data);
        [$wonWork, $data] = $this->collectWonWork($data);
        [$lunchTime, $data] = $this->collectLunchTime($data);
        [$restTime, $data] = $this->collectRestTime($data);
        [$afternoon, $data] = $this->collectAfternoon($data);
        [$evening, $data] = $this->collectEvening($data);
        [$constructiveWork, $data] = $this->collectConstructiveWork($data);
        [$dinner, $data] = $this->collectDinner($data);
        [$AfterDinner, $data] = $this->collectAfterDinner($data);
        [$Signature, $data] = $this->collectSignature($data);
        [$tripEvaluationSignature, $data] = $this->collectTripEvaluationSignature($data);

        return [
            'collection_date' => $validated['collection_date'],
            'teacher_id' => $validated['teacher_id'],
            'activities_of_daily_living' => $activitiesOfDailyLivingInfos,
            'only_for_staff' => $onlyForStaffInfos,
            'activities' => $activities,
            'security_safety' => $securitySafety,
            'equipment' => $equipment,
            'light' => $light,
            'kitchen' => $kitchen,
            'bathroom' => $bathroom,
            'floor' => $floor,
            'instrumental_activities_of_daily' => $instrumentalActivitiesOfDaily,
            'environmental_safety_relative' => $environmentalSafetyRelative,
            'environmental_safety_step' => $environmentalSafetyStep,
            'woke_up_in_the_morning' => $wokeUpInTheMorning,
            'reading_writing' => $readingWriting,
            'daily_work' => $dailyWork,
            'won_work' => $wonWork,
            'lunch_time' => $lunchTime,
            'rest_time' => $restTime,
            'afternoon' => $afternoon,
            'evening' => $evening,
            'constructive_work' => $constructiveWork,
            'dinner' => $dinner,
            'after_dinner' => $AfterDinner,
            'signature' => $Signature,
            'trip_evaluation_signature' => $tripEvaluationSignature,
        ];
    }

    private function collectActivitiesOfDailyLivingRecords(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, TripReport::$columnCollections['activities_of_daily_living']);
    }

    private function collectOnlyForStaffRecords(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['only_for_staff']);
    }

    private function collectActivities(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['activities']);
    }

    private function collectSecuritySafety(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['security_safety']);
    }
    private function collectEquipment(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['equipment']);
    }
    private function collectLight(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['light']);
    }
    private function collectKitchen(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['kitchen']);
    }
    private function collectBathroom(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['bathroom']);
    }
    private function collectFloor(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['floor']);
    }
    private function collectInstrumentalActivitiesOfDaily(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['instrumental_activities_of_daily']);
    }
    private function collectEnvironmentalSafetyRelative(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['environmental_safety_relative']);
    }
    private function collectEnvironmentalSafetyStep(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['environmental_safety_step']);
    }
    private function collectWokeUpInTheMorning(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['woke_up_in_the_morning']);
    }
    private function collectReadingWriting(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['reading_writing']);
    }
    private function collectDailyWork(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['daily_work']);
    }
    private function collectWonWork(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['won_work']);
    }
    private function collectLunchTime(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['lunch_time']);
    }
    private function collectRestTime(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['rest_time']);
    }
    private function collectAfternoon(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['afternoon']);
    }
    private function collectEvening(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['evening']);
    }
    private function collectConstructiveWork(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['constructive_work']);
    }
    private function collectDinner(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['dinner']);
    }
    private function collectAfterDinner(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['after_dinner']);
    }
    private function collectSignature(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['signature']);
    }
    private function collectTripEvaluationSignature(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, TripReport::$columnCollections['trip_evaluation_signature']);
    }
}
