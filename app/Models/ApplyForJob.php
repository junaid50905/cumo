<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplyForJob extends Model
{
    use HasFactory;

    public function applyFor(): BelongsTo{
        return $this->belongsTo(EmployeeRequisition::class);
    }
}
