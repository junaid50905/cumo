<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockAssignDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function stockAssign()
    {
        return $this->belongsTo(StockAssign::class);
    }
}
