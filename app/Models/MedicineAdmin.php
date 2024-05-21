<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Student;
use App\Models\MedicineAdminDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineAdmin extends Model
{
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(MedicineAdminDetails::class);
    }
}
