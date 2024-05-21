<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineAdminDetails extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected function expireCheck(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
}
