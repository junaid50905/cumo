<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeRequisition extends Model
{
    use HasFactory;

    public function department(): BelongsTo
    {
        return $this->belongsTo(DepartmentSetup::class, 'department_setup_id', 'id');
    }

    public function requsted_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requested_by', 'id');
    }
}
