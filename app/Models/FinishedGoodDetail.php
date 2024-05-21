<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishedGoodDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function finishedGood()
    {
        return $this->belongsTo(FinishedGood::class);
    }
}
