<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignInterviewerDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function details(): HasMany
    {
        return $this->hasMany(AssignInterviewerDetail::class);
    }
}
