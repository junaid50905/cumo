<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockReceiveDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function stockReceive(): BelongsTo
    {
        return $this->belongsTo(StockReceive::class);
    }
}
