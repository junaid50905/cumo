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

    //Care Need Part One Start
    public function mainTeacherCNPOIntroduction()
    {
        return $this->hasMany(CareNeedPartOneIntroduction::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOIntroduction()
    {
        return $this->hasMany(CareNeedPartOneIntroduction::class, 'assistant_teacher_id');
    }
    
    public function mainTeacherCNPOGeneralInfo()
    {
        return $this->hasMany(CareNeedPartOneGeneralInfo::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOGeneralInfo()
    {
        return $this->hasMany(CareNeedPartOneGeneralInfo::class, 'assistant_teacher_id');
    }

    public function mainTeacherCNPOSpeciality()
    {
        return $this->hasMany(CareNeedPartOneSpeciality::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOSpeciality()
    {
        return $this->hasMany(CareNeedPartOneSpeciality::class, 'assistant_teacher_id');
    }

    public function mainTeacherCNPOAssessmentInfo()
    {
        return $this->hasMany(CareNeedPartOneAssessmentInfo::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOAssessmentInfo()
    {
        return $this->hasMany(CareNeedPartOneAssessmentInfo::class, 'assistant_teacher_id');
    }

    public function mainTeacherCNPOHomeInfo()
    {
        return $this->hasMany(CareNeedPartOneHomeInfo::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOHomeInfo()
    {
        return $this->hasMany(CareNeedPartOneHomeInfo::class, 'assistant_teacher_id');
    }

    public function mainTeacherCNPOEducationalInfo()
    {
        return $this->hasMany(CareNeedPartOneEducationalInfo::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOEducationalInfo()
    {
        return $this->hasMany(CareNeedPartOneEducationalInfo::class, 'assistant_teacher_id');
    }

    public function mainTeacherCNPOChildCondition()
    {
        return $this->hasMany(CareNeedPartOneChildCondition::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOChildCondition()
    {
        return $this->hasMany(CareNeedPartOneChildCondition::class, 'assistant_teacher_id');
    }

    public function mainTeacherCNPOChildNumber()
    {
        return $this->hasMany(CareNeedPartOneChildNumber::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOChildNumber()
    {
        return $this->hasMany(CareNeedPartOneChildNumber::class, 'assistant_teacher_id');
    }

    public function mainTeacherCNPOSchooling()
    {
        return $this->hasMany(CareNeedPartOneSchooling::class, 'main_teacher_id');
    }

    public function assistantTeacherCNPOSchooling()
    {
        return $this->hasMany(CareNeedPartOneSchooling::class, 'assistant_teacher_id');
    }

    //Care Need Part One End
}
