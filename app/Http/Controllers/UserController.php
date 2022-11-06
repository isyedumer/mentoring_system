<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentTeacherAppointment;
use App\Models\TeacherCourse;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function coursesToTeach(Request $request)
    {
        $courses = $request->user()->courses()->paginate(10);
        return view('user.teacher.courses', compact('courses'));
    }

    public function teachers()
    {
        $users = User::where('role_id', 2)->get();
        return view('admin.teachers', compact('users'));
    }

    public function students()
    {
        $users = User::where('role_id', 3)->get();
        return view('admin.students', compact('users'));
    }

    public function makeAppointment(Course $course, User $teacher)
    {
        $teacherCourse = TeacherCourse::where('course_id', $course->id)->where('user_id', $teacher->id)->first();
        if(!$teacherCourse) {
            abort(404);
        }
        return view('user.student.make_appointment', compact('course', 'teacher'));
    }

    public function makeAppointmentPost(Request $request, Course $course, User $teacher)
    {
        $teacherCourse = TeacherCourse::where('course_id', $course->id)->where('user_id', $teacher->id)->first();
        if(!$teacherCourse) {
            abort(404);
        }
        $validator = Validator::make($request->all(), [
            'date' => 'required',
        ]);
        if($validator->fails()) {
            return redirect()->back()->with(['type' => 'error', 'message' => $validator->errors()->first()]);
        }
        $student = auth()->user();
        $student->teachers()->attach($teacher->id, [
            'course_id' => $course->id,
            'date' => Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d'),
        ]);
    }

    // public function studentList()
    // {


    // }
}
