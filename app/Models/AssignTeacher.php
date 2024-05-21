<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignTeacher extends Model
{
    use HasFactory;


    protected function subject(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => json_decode($val),
            set: fn ($val) => json_encode($val),
        );
    }
}
