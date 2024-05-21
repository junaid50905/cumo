<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

}
