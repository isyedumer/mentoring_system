<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentTeacherAppointment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = request()->user();
        if ($user->role->type == 'super_admin') {
            return view('admin.dashboard');
        } elseif ($user->role->type == 'teacher') {
            $user = auth()->user();
            $students = StudentTeacherAppointment::where('teacher_id', $user->id)->distinct('student_id')->paginate(10);
            return view('user.teacher.dashboard',compact('students'));
        } elseif ($user->role->type == 'student') {
            $user = auth()->user();
            $teachers = StudentTeacherAppointment::where('student_id', $user->id)->distinct('teacher_id')->paginate(10);
            return view('user.student.dashboard', compact('teachers'));
        }
    }
}
