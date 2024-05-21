<?php

namespace App\Models;

use App\Models\Cheque;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BankAccount extends Model
{
    use HasFactory;

    public function chequeBook(): HasMany
    {
        return $this->hasMany(Cheque::class);
    }

    public function CourseDetails()
    {
      return $this->belongsTo(Course::class, 'cash_account_id', 'id');
    }
}
