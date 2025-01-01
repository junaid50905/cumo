<?php

namespace App\Models\Assessments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Appointments\Appointment;
use App\Models\Assessments\AssessmentCategory;
use App\Models\Assessments\AssessmentSubCategory;
use App\Models\Assessments\AssessmentQuestion;

class AssessmentToolQuesAns extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Define relationships
    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
    
    public function category()
    {
        return $this->belongsTo(AssessmentCategory::class, 'category_id');
    }

    public function sub_category()
    {
        return $this->belongsTo(AssessmentSubCategory::class, 'sub_category_id');
    }

    public function question()
    {
        return $this->belongsTo(AssessmentQuestion::class, 'question_id');
    }

    public function mainTeacher()
    {
        return $this->belongsTo(User::class, 'main_teacher_id');
    }

    public function assistantTeacher()
    {
        return $this->belongsTo(User::class, 'assistant_teacher_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
