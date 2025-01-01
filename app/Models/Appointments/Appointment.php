<?php

namespace App\Models\Appointments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LinkCodeCount\LinkCodeCount;
use App\Models\Payments\AppointmentPayment;

use App\Models\CareNeeds\CareNeedPartOneGeneralInfo;
use App\Models\CareNeeds\CareNeedPartOneSpeciality;
use App\Models\CareNeeds\CareNeedPartOneAssessmentInfo;
use App\Models\CareNeeds\CareNeedPartOneHomeInfo;
use App\Models\CareNeeds\CareNeedPartOneEducationalInfo;
use App\Models\CareNeeds\CareNeedPartOneChildCondition;
use App\Models\CareNeeds\CareNeedPartOneChildNumber;
use App\Models\CareNeeds\CareNeedPartOneSchooling;

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
        return $this->hasOne(CareNeedPartOneIntroduction::class, 'appointment_id');
    }

    public function care_need_part_one_general_infos()
    {
        return $this->hasOne(CareNeedPartOneGeneralInfo::class, 'appointment_id');
    }

    public function care_need_part_one_specialities()
    {
        return $this->hasOne(CareNeedPartOneSpeciality::class, 'appointment_id');
    }

    public function care_need_part_one_assessment_infos()
    {
        return $this->hasOne(CareNeedPartOneAssessmentInfo::class, 'appointment_id');
    }

    public function care_need_part_one_home_infos()
    {
        return $this->hasOne(CareNeedPartOneHomeInfo::class, 'appointment_id');
    }

    public function care_need_part_one_educational_infos()
    {
        return $this->hasOne(CareNeedPartOneEducationalInfo::class, 'appointment_id');
    }

    public function care_need_part_one_child_conditions()
    {
        return $this->hasOne(CareNeedPartOneChildCondition::class, 'appointment_id');
    }

    public function care_need_part_one_child_numbers()
    {
        return $this->hasOne(CareNeedPartOneChildNumber::class, 'appointment_id');
    }

    public function care_need_part_one_schoolings()
    {
        return $this->hasOne(CareNeedPartOneSchooling::class, 'appointment_id');
    }

    public function care_need_part_one_suggestion()
    {
        return $this->hasOne(CareNeedPartOneSuggestion::class, 'appointment_id');
    }
    //Care Need Part One Relationship Tables End

    public function assessment_tool_question_answer()
    {
        return $this->hasMany(AssessmentToolQuesAns::class, 'appointment_id');
    }

    public function link_code_count()
    {
        return $this->hasMany(LinkCodeCount::class, 'appointment_id');
    }
}