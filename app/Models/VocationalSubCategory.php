<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\VocationalMarkingCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VocationalSubCategory extends Model
{
    use HasFactory;
    protected $guarded = ['*'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(VocationalMarkingCategory::class,'category_id', 'id');
    }
}
