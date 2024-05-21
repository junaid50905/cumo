<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected function activitiesOfDailyLiving(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function onlyForStaff(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }

    protected function activities(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function securitySafety(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function equipment(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function light(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function kitchen(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function bathroom(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function floor(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function instrumentalActivitiesOfDaily(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function environmentalSafetyRelative(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function environmentalSafetyStep(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function wokeUpInTheMorning(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function readingWriting(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function dailyWork(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function wonWork(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function lunchTime(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function restTime(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function afternoon(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function evening(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function constructiveWork(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function dinner(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function afterDinner(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function tripEvaluationSignature(): Attribute
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

}
