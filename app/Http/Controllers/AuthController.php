<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['type' => 'error' ,'message' => $validator->errors()->first()])->withInput();
        }
        $user = User::firstWhere('email', $request->email);
        if(!$user->is_active) {
            return redirect()->back()->with(['type' => 'warning' , 'message' => 'Your request is pending approval! You can login to the system once you get approved.'])->withInput();
        }
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with(['type' => 'error' , 'message' => 'Invalid email or password'])->withInput();
        }
        return redirect(route('dashboard'));
    }

    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'))->with(['type' => 'success' , 'message' => 'You have been logged out successfully!']);
    }

    public function register()
    {
        $roles = Role::where('type', '!=', 'super_admin')->lazy();
        return view('auth.register', compact('roles'));
    }

    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'gender' => 'required',
            'role_id' => 'required|exists:roles,id'
        ], [
            'role_id.required' => 'The type field is required',
            'role_id.exists' => 'The type selected field is invalid',
        ]);
        if($validator->fails()) {
            return redirect()->back()->with(['type' => 'error' ,'message' => $validator->errors()->first()])->withInput();
        }
        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'role_id' => $request->role_id,
        ]);
        if(!$user) {
            return redirect()->back()->with(['type' => 'error', 'message' => 'An error occured while creating the user! Please try again later']);
        }
        return redirect(route('login'))->with(['type' => 'success', 'message' => 'Your request has been submitted! You will be able to login to system once your account will be approved!']);
    }
}
