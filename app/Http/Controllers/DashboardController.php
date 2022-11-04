<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = request()->user();
        if ($user->role->type == 'super_admin') {
            return view('admin.dashboard');
        } elseif ($user->role->type == 'teacher') {
            return view('user.teacher.dashboard');
        } elseif ($user->role->type == 'student') {
            return view('user.student.dashboard');
        }
    }
}
