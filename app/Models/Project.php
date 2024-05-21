<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Project::class,'parent_id','id');
    }
    use HasFactory;
}
