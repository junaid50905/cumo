<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobContactDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobContact()
    {
        return $this->belongsTo(JobContact::class);
    }
}
