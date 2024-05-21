<?php

namespace App\Models;

use App\Models\User;
use App\Models\Warehouse;
use App\Models\FinishedGoodDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinishedGood extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(FinishedGoodDetail::class);
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
