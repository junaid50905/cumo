<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Requisition extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(RequisitionDetail::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function scopeApproved($query)
    {
        return $query->whereApproved(1);
    }

    public function purchase(): HasOne
    {
        return $this->hasOne(Purchase::class);
    }
}
