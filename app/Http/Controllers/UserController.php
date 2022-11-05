<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function coursesToTeach(Request $request)
    {
        $courses = $request->user()->courses()->paginate(10);
        return view('user.teacher.courses', compact('courses'));
    }
}
