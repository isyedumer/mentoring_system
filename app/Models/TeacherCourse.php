<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TeacherCourse extends Pivot
{
    use HasFactory;

    protected $table = 'teacher_courses';

    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }

    public function course()
    {
        return $this->belongsTo('\App\Models\Course', 'course_id');
    }

    public function materials()
    {
        return $this->hasMany('\App\Models\TeacherCourseMaterial', 'teacher_course_id');
    }

    public function feedbacks()
    {
        return $this->hasMany('\App\Models\TeacherCourseFeedback', 'teacher_course_id');
    }

    public function queries()
    {
        return $this->hasMany('\App\Models\TeacherCourseQuery', 'teacher_course_id');
    }
}
