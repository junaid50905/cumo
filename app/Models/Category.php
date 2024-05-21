<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category_id', 'id');
    }

    public function scopeSpecifyingRelation($query)
    {
        return $query->with('parentCategory', function ($q) {
            $q->select('id', 'name');
        })->select('id', 'name', 'parent_category_id')->whereNotNull('parent_category_id');
    }
}
