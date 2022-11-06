<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourseMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'content'
    ];

    public function teacherCourse()
    {
        return $this->belongsTo('\App\Models\TeacherCourse', 'teacher_course_id');
    }
}
