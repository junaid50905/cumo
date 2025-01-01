<?php

namespace App\Models\LinkCodeCount;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointments\Appointment;

class LinkCodeCount extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
}
