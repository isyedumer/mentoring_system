<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentTeacherAppointment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = request()->user();
        if ($user->role->type == 'super_admin') {
            $teachers = User::where('role_id', 2)->latest()->limit(5)->lazy();
            $students = User::where('role_id', 3)->latest()->limit(5)->lazy();
            $teachersCount = User::where('role_id', 2)->count();
            $studentsCount = User::where('role_id', 3)->count();
            $totalAppointments = StudentTeacherAppointment::count();
            return view('admin.dashboard', compact('teachers', 'students', 'totalAppointments', 'studentsCount', 'teachersCount'));
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
