<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class LeaveApplication extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function details(): HasMany{
        return $this->hasMany(LeaveApplicationDetails::class);
    }

    public function employee():BelongsTo{
        return $this->belongsTo(Employee::class);
    }

    public function support_employee(){
        return $this->belongsTo(Employee::class, 'support_employee_id');
    }

    public function leave_type(){
        return $this->belongsTo(LeaveType::class);
    }
}
