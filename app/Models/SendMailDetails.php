<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMailDetails extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sendMail()
    {
        return $this->belongsTo(SendMail::class);
    }
}
