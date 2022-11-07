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
            $courseAppointments = StudentTeacherAppointment::where('teacher_id', $user->id)->withSum('course', 'price')->get();

            $totalEarned = $courseAppointments->sum('course_sum_price');
            $totalAppointments = StudentTeacherAppointment::where('teacher_id', $user->id)->count();
            $totalStudents = StudentTeacherAppointment::where('teacher_id', $user->id)->distinct('student_id')->count();
            $students = StudentTeacherAppointment::where('teacher_id', $user->id)->distinct('student_id')->paginate(10);
            return view('user.teacher.dashboard',compact('students', 'totalEarned', 'totalStudents', 'totalAppointments'));
        } elseif ($user->role->type == 'student') {
            $user = auth()->user();

            $totalAppointments = StudentTeacherAppointment::where('student_id', $user->id)->count();
            $totalTeachers = StudentTeacherAppointment::where('student_id', $user->id)->distinct('teacher_id')->count();

            $teachers = StudentTeacherAppointment::where('student_id', $user->id)->distinct('teacher_id')->paginate(10);
            return view('user.student.dashboard', compact('teachers', 'totalAppointments', 'totalTeachers'));
        }
    }
}
