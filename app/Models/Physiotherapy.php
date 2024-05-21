<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Physiotherapy extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function general(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function visualPerception(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function activitiesOfDailyLiving(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function strength(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function functionalGrossMotor(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function transitionalMovements(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function fineMotorSkill(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function automaticReaction(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function sensorySkillNormalHypoResponse(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function cognitiveSkills(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function treatment(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function signature(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function musclePower(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function muscleTone(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function behavior(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function domainArea(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
}
