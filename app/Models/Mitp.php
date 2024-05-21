<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mitp extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}

