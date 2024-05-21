<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\QuestionCollectionTrait;

class AssessmentQuestion extends Model
{
    use HasFactory;
    use QuestionCollectionTrait;
    
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(AssessmentCategory::class);
    }

    
    public function subCategory()
    {
        return $this->belongsTo(AssessmentSubCategory::class);
    }
}
