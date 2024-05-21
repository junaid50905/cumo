<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentIncome extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function studentIncomeDetail(): HasOne
    {
        return $this->hasOne(StudentIncomeDetail::class);
    }

    public function income(): BelongsTo
    {
        return $this->belongsTo(Income::class);
    }

    public function incomeDetails(): HasMany
    {
        return $this->hasMany(StudentIncomeDetail::class);
    }

}
