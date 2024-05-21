<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


class AdviceLetter extends Model
{
    use HasFactory;
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
