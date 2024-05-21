<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CareNeed extends Model
{
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function selfUnderstanding(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function eatDrinkSwallow(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }

    protected function washingAndBathing(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }

    protected function brushingTeeth(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function toiletTraining(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function dressing(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function intrapersonalSkills(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function communicationSkills(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function doesTheIndividualHaveAnyHistoryOfTheFollowing(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function anySensoryIssues(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function grossMotorSkills(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function fineMotorSkills(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function eyeMovements(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function oralMotorActivities(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function relationshipManagement(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function socialCommunicationSkills(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
    protected function workHabit(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
}
