<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

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
}
