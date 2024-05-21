<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndividualRisk extends Model
{
    use HasFactory;


    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function hazardSpotted(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
}
