<?php

namespace App\Models;

use App\Models\IncomeHistory;
use App\Models\StudentIncome;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory;

    public function studentIncome(): HasOne
    {
        return $this->hasOne(StudentIncome::class);
    }

    public function saleIncome(): HasOne
    {
        return $this->hasOne(SaleIncome::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function history(): HasOne
    {
        return $this->hasOne(IncomeHistory::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function donation(): HasOne
    {
        return $this->hasOne(Donation::class);
    }
}
