<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bankAccount(): BelongsTo
    {
        return $this->belongsTo(BankAccount::class, 'cash_account_id', 'id');
    }

    public function details(): HasMany
    {
        return $this->hasMany(CourseDetails::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    
    public function parentCourse(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'parent_course_id', 'id');
    }

    public function scopeSpecifyingRelation($query)
    {
        return $query->with('parentCourse', function ($q) {
            $q->select('id', 'name');
        })->select('id', 'name', 'parent_course_id')
            ->whereNotNull('parent_course_id');
    }
}
