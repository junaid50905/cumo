<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockOutDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stockOut(): BelongsTo
    {
        return $this->belongsTo(StockOut::class);
    }
}
