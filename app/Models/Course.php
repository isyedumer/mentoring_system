<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function teachers()
    {
        return $this->belongsToMany('\App\Models\User', 'teacher_courses', 'course_id', 'teacher_id')->withTimestamps()->using(TeacherCourse::class);
    }
}
