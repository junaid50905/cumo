<?php

namespace App\Models;

use App\Models\Project;
use App\Models\StockReceiveDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockReceive extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany(StockReceiveDetail::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
}
