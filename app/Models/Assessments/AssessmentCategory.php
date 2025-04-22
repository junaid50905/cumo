<?php

namespace App\Models\Assessments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointments\Appointment;

class AssessmentCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questions()
    {
        return $this->hasMany(AssessmentQuestion::class);
    }
    
    public function assessment_tool_question_answer()
    {
        return $this->hasMany(AssessmentToolQuesAns::class);
    }

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_assessment_category')
                    ->withPivot('status')
                    ->withTimestamps();
    }
}
