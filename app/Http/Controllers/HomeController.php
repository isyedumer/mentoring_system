<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentTeacherAppointment;
use App\Models\TeacherCourse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('guests.home');
    }

    public function bookAppointment(Request $request)
    {
        $teacherCourse = TeacherCourse::query();
        $teacherCourse->when($request->get('q'), function($q) use($request) {
            $q->where(function($q) use($request) {
                $q->whereHas('user', function($q) use($request) {
                    $q->where('name', 'LIKE', '%' . $request->q . '%');
                });
                $q->orWhereHas('course', function($q) use($request) {
                    $q->where('title', 'LIKE', '%' . $request->q . '%');
                });
            });
        });
        $results = $teacherCourse->paginate(10);
        return view('user.student.results', compact('results'));
    }

    public function courses()
    {
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }

    public function appointments_Student()
    {
        $appointments = StudentTeacherAppointment::paginate(10);
        return view('user.student.appointments', compact('appointments'));
    }
}
