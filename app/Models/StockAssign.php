<?php

namespace App\Models;

use App\Models\StockAssignDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockAssign extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(StockAssignDetail::class);
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
}
