<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockTransferDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function stockTransfer()
    {
        return $this->belongsTo(StockTransfer::class);
    }
}
