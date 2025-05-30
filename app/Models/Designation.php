<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the users for the designation.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
