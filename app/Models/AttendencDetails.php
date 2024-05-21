<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttendencDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function attendence()
    {
        return $this->belongsTo(Attendence::class);
    }
    public function employee(): BelongsTo{
        return $this->belongsTo(Employee::class);
    }
}
