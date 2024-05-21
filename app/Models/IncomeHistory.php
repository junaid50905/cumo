<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeHistory extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'amount', 'info'];
    protected $guarded = ['id'];

    protected function info(): Attribute
    {
        return Attribute::make(
            get: fn($val) => json_decode($val),
            set: fn($val) => json_encode($val),
        );
    }
}
