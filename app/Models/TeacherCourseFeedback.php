<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourseFeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'teacher_course_id',
        'feedback_text',
    ];

    public function teacher_course()
    {
        return $this->belongsTo('\App\Models\TeacherCourse', 'teacher_course_id');
    }

    public function student()
    {
        return $this->belongsTo('\App\Models\User', 'student_id');
    }
}
