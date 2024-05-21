<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function CourseDetails()
    {
      return $this->belongsTo(Course::class, 'cash_account_id', 'id');
    }
}
