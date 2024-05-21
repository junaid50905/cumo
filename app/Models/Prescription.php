<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prescription extends Model
{
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'pres_by', 'id');
    }

    public function details(): HasMany
    {
        return $this->hasMany(PrescriptionsDetails::class);
    }

}
