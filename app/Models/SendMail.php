<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SendMail extends Model
{
    use HasFactory;
    public function details(): HasMany
    {
        return $this->hasMany(SendMailDetails::class);
    }

    public function dep(): BelongsTo{
        return $this->belongsTo(DepartmentSetup::class,'dept_id','id');
    }
}
