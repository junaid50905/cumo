<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function appointment_payments()
    {
        return $this->hasMany(AppointmentPayment::class, 'appointment_id');
    }

    public function event_calendars()
    {
        return $this->hasMany(EventCalendar::class, 'appointment_id');
    }

    //Care Need Part One Relationship Tables Start
    public function care_need_part_one_introductions()
    {
        return $this->hasMany(CareNeedPartOneIntroduction::class, 'appointment_id');
    }

    public function care_need_part_one_general_infos()
    {
        return $this->hasMany(CareNeedPartOneGeneralInfo::class, 'appointment_id');
    }

    public function care_need_part_one_specialities()
    {
        return $this->hasMany(CareNeedPartOneSpeciality::class, 'appointment_id');
    }

    public function care_need_part_one_assessment_infos()
    {
        return $this->hasMany(CareNeedPartOneAssessmentInfo::class, 'appointment_id');
    }

    public function care_need_part_one_home_infos()
    {
        return $this->hasMany(CareNeedPartOneHomeInfo::class, 'appointment_id');
    }

    public function care_need_part_one_educational_infos()
    {
        return $this->hasMany(CareNeedPartOneEducationalInfo::class, 'appointment_id');
    }

    public function care_need_part_one_child_conditions()
    {
        return $this->hasMany(CareNeedPartOneChildCondition::class, 'appointment_id');
    }

    public function care_need_part_one_child_numbers()
    {
        return $this->hasMany(CareNeedPartOneChildNumber::class, 'appointment_id');
    }

    public function care_need_part_one_schoolings()
    {
        return $this->hasMany(CareNeedPartOneSchooling::class, 'appointment_id');
    }
    //Care Need Part One Relationship Tables End
}
