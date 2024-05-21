<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

}
