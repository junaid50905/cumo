<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCalendar extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function main_teacher()
    {
        return $this->belongsTo(User::class, 'main_teacher_id');
    }

    public function assistant_teacher()
    {
        return $this->belongsTo(User::class, 'assistant_teacher_id');
    }
}
