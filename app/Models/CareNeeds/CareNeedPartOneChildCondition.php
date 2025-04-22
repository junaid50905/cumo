<?php

namespace App\Models\CareNeeds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointments\Appointment;

class CareNeedPartOneChildCondition extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function main_teacher_cnpo_child_condition()
    {
        return $this->belongsTo(User::class, 'main_teacher_id');
    }

    public function asst_teacher_cnpo_child_condition()
    {
        return $this->belongsTo(User::class, 'assistant_teacher_id');
    }
}
