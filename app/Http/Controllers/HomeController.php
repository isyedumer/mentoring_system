<?php

namespace App\Http\Controllers;

use App\Models\TeacherCourse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('guests.home');
    }

    public function appointments(Request $request)
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
        $appointments = $teacherCourse->paginate(10);
        return $appointments;
        return view('user.student.appointments', compact('appointments'));
    }
}
