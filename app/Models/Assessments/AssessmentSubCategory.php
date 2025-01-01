<?php

namespace App\Models\Assessments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentSubCategory extends Model
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
}
