<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Social extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }
    public function student(){
        return $this->hasOne(Student::class, 'id', 'student_id');
    }
    protected function pragmaticObjective(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function personal(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function topicMaintenance(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function conversationalStructure(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function wordStructure(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function mannerEffectiveness(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function repairStructures(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function responsiveness(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function instrumentalStatesNeeds(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function requesting(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function prosody(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function protests(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function styleOfConversation(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function humor(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function greetingsAcknowledgements(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function problemSolving(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function deceit(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function academyCommunication(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function nonverbalCommunication(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function perspectiveTaking(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function regulatoryGivesCommands(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
    protected function socialEmotional(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
}
