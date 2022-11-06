<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentTeacherAppointment;
use App\Models\TeacherCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $user = auth()->user();
        $appointments = StudentTeacherAppointment::where('student_id', $user->id)->paginate(10);
        return view('user.student.appointments', compact('appointments'));
    }

    public function appointments_Teacher()
    {
        $user = auth()->user();
        $appointments = StudentTeacherAppointment::where('teacher_id', $user->id)->paginate(10);
        return view('user.teacher.appointments', compact('appointments'));
    }

    public function acceptAppointment($id)
    {
        $appointment = StudentTeacherAppointment::find($id);
        $appointment->update([
            'status' => 'Accepted',
        ]);
        return redirect()->back()->with(['type' => 'success', 'message' => 'Appointment status accepted successfully!']);
    }

    public function rejectAppointment($id)
    {
        $appointment = StudentTeacherAppointment::find($id);
        $appointment->update([
            'status' => 'Rejected',
        ]);
        return redirect()->back()->with(['type' => 'success', 'message' => 'Appointment status rejected successfully!']);
    }


    public function courseDetail(TeacherCourse $teacherCourse)
    {
        return view('user.student.course_detail', compact('teacherCourse'));
    }

    public function queryPost(Request $request, TeacherCourse $teacherCourse)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
        ]);
        if($validator->fails()) {
            return redirect()->back()->with(['type' => 'error', 'message' => $validator->errors()->first()]);
        }
        $request['student_id'] = auth()->user()->id;
        $teacherCourse->queries()->create($request->all());
        return redirect()->back()->with(['type' => 'success', 'message' => 'Question posted successfully!']);
    }
}
