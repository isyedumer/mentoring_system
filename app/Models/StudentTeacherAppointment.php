<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class StudentTeacherAppointment extends Pivot
{
    use HasFactory;

    protected $table = 'student_teacher_appointments';

    public function teacher()
    {
        return $this->belongsTo('\App\Models\User', 'teacher_id');
    }

    public function student()
    {
        return $this->belongsTo('\App\Models\User', 'student_id');
    }

    public function course()
    {
        return $this->belongsTo('\App\Models\Course', 'course_id');
    }
}
