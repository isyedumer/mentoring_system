<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentTeacherAppointment;
use App\Models\TeacherCourse;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
        $paidUser = false;
        $user = auth()->user();
        $appointmentsCount = StudentTeacherAppointment::where('student_id', $user->id)->count();
        if ($user->subscription == 'free') {
            $paidUser = false;
        } else {
            $paidUser = true;
        }
        if(!$paidUser && $appointmentsCount > 2) {
            return redirect()->back()->with(['type' => 'error', 'message' => 'You have reached your appointments limit! Please upgrade your account!'])
        }
        $teacherCourse = TeacherCourse::where('course_id', $course->id)->where('user_id', $teacher->id)->first();
        if (!$teacherCourse) {
            abort(404);
        }
        return view('user.student.make_appointment', compact('course', 'teacher'));
    }

    public function makeAppointmentPost(Request $request, Course $course, User $teacher)
    {
        $teacherCourse = TeacherCourse::where('course_id', $course->id)->where('user_id', $teacher->id)->first();
        if (!$teacherCourse) {
            abort(404);
        }
        $validator = Validator::make($request->all(), [
            'date' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['type' => 'error', 'message' => $validator->errors()->first()]);
        }
        $student = auth()->user();
        $student->teachers()->attach($teacher->id, [
            'course_id' => $course->id,
            'date' => Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d'),
        ]);
        return redirect(route('student.appointments'))->with(['message' => 'Appointment requested successfully!']);
    }

    public function uploadMaterial(Course $course)
    {
        $user = auth()->user();
        $teacherCourse = TeacherCourse::where('user_id', $user->id)->where('course_id', $course->id)->first();
        return view('user.teacher.upload_material', compact('teacherCourse'));
    }

    public function uploadMaterialPost(Request $request, TeacherCourse $course)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'file' => 'required|file'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['type' => 'error', 'message' => $validator->errors()->first()]);
        }
        if ($request->hasFile('file')) {
            $uploaded = $request->file('file');
            $file = date('His') . '-' . Str::random(10) . '.' . $uploaded->getClientOriginalExtension();
            $uploaded->storeAs('files', $file, 'public');
            $url = url("/storage/files/" . $file);
            $request['content'] = $url;
        }
        $course->materials()->create($request->all());
        return redirect(route('teacher.course.materials', $course->course->id))->with(['type' => 'success', 'message' => 'Material added successfully!']);
    }

    public function materials(Course $course)
    {
        $user = auth()->user();
        $teacherCourse = TeacherCourse::where('user_id', $user->id)->where('course_id', $course->id)->first();
        return view('user.teacher.materials', compact('teacherCourse'));
    }

    public function materials_Student($appointmentId)
    {
        $studentTeacherAppointment = StudentTeacherAppointment::find($appointmentId);
        $teacherCourse = TeacherCourse::where('user_id', $studentTeacherAppointment->teacher->id)->where('course_id', $studentTeacherAppointment->course->id)->first();
        return view('user.student.materials', compact('teacherCourse'));
    }

    public function login_requests()
    {
        $users = User::where('is_active', '0')->get();
        return view('admin.login_requests', compact('users'));
    }

    public function acceptRequest(User $user)
    {
        $user->update([
            'is_active' => '1',
        ]);
        return redirect()->back()->with(['type' => 'success', 'message' => 'Login request accepted successfully!']);
    }

    public function rejectRequest(User $user)
    {
        $user->update([
            'is_active' => '2',
        ]);
        return redirect()->back()->with(['type' => 'error', 'message' => 'Login request rejected successfully!']);
    }
}
