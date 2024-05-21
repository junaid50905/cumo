<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignTask extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function student(){
        return $this->belongsTo(\App\Models\Student::class);
    }
    public function details(){
        return $this->hasMany(\App\Models\AssignTaskDetail::class);
    } 
    // protected function organizedPlay(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    
    // protected function jumpingJacks(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function bodyAwareness(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function physicalGrowth(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function goodTouch(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function decisionMaking(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function generalizationAbility(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function functionalReadingSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }   
    //  protected function includesFineMotorSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function timeSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function respond(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function verbs(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function listeningSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function request(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function speaking(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function pragmaticCommunication(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function washingShowering(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function basicFirstAidKnowledgee(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function preparationSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function cookingPreparation(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function intrapersonal(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function prompting(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function modeling(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function emotions(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function socialAwareness(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function interpersonalSkill(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function gamesHowToPlayWithOthers(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function sharingPersonalIssues(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    //  protected function selfDevelopment(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }

    // protected function adaptations(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function fundamentalMovementExercisel(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function yoga(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function craftActivities(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function assertiveness(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function functionalReadingSkillss(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function moneyManagementSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function shavingRouting(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function basicFirstAidKnowledge(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function mealPreparationSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function servingFood(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function selfAwarenessIntrapersonal(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function selfEsteemIntrapersonal(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function selfRegulationIntrapersonal(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function managingDeathOfFamilyMembers(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function managingDeathOfRelativeFriends(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function interpersonalSkills(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function handleAcceptDifferentSituation(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function understandSocialDeviation(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function howToPlayWithOthers(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function meAndYou(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function ethicalValues(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function workReadinessEthicalValues(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function homeMaintenanceSelfDevelopment(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function cleaningWashingChoresSelfDevelopment(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    // protected function telephoneSkillsSelfDevelopment(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($val) => json_decode($val),
    //         set: fn ($val) => json_encode($val),
    //     );
    // }
    
}

