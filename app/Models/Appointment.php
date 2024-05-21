<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function appointment_payments()
    {
        return $this->hasMany(AppointmentPayment::class, 'appointment_id');
    }

    public function event_calendars()
    {
        return $this->hasMany(EventCalendar::class, 'appointment_id');
    }
}
