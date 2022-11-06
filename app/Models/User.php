<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'subscription',
        'is_active',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('\App\Models\Role', 'role_id');
    }

    public function courses()
    {
        return $this->belongsToMany('\App\Models\Course', 'teacher_courses', 'user_id', 'course_id')->withTimestamps()->using(TeacherCourse::class);
    }

    public function additional()
    {
        return $this->hasOne('\App\Models\UserAdditional', 'user_id');
    }

    public function teachers()
    {
        return $this->belongsToMany('\App\Models\User', 'student_teacher_appointments', 'student_id', 'teacher_id')->withPivot('course_id', 'date', 'status')->using(StudentTeacherAppointment::class);
    }

    public function students()
    {
        return $this->belongsToMany('\App\Models\User', 'student_teacher_appointments', 'teacher_id', 'student_id')->withPivot('course_id', 'date', 'status')->using(StudentTeacherAppointment::class);
    }
}
