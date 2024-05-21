<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LeaveApplicationDetails extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employee(){
        return $this->hasOne(Employee::class, 'employee');
    }

    public function support_employee(){
        return $this->hasOne(Employee::class, 'support_employee');
    }
}
