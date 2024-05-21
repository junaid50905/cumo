<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobContact extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(JobContactDetail::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class,'applicant_name','id');
    }

    public function dep(): BelongsTo{
        return $this->belongsTo(DepartmentSetup::class,'department','id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
