<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'user_id',
    //     'name',
    //     'email',
    //     'password',
    //     'dob',
    //     'avatar',
    // ];
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the department that the user belongs to.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the designation of the user.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function mainTeacherAppointments()
    {
        return $this->hasMany(EventCalendar::class, 'main_teacher_id');
    }

    public function assistantTeacherAppointments()
    {
        return $this->hasMany(EventCalendar::class, 'assistant_teacher_id');
    }
}
