<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function viewTeacherProfile(User $user)
    {
        return view('user.teacher.profile', compact('user'));
    }

    public function viewStudentProfile(User $user)
    {
        return view('user.student.profile', compact('user'));
    }

    public function editTeacherProfile(User $user)
    {
        return view('user.teacher.profile_settings', compact('user'));
    }

    public function editStudentProfile(User $user)
    {
        return view('user.student.profile_settings', compact('user'));
    }

    public function updateTeacherProfile(Request $request, User $user)
    {
        DB::beginTransaction();
        try {
            $user->update($request->all());
            if ($request->hasFile('image')) {
                $uploaded = $request->file('image');
                $imagename = date('His') . '-' . Str::random(10) . '.' . $uploaded->getClientOriginalExtension();
                $imagepath = public_path('images/');
                $uploaded->move($imagepath, $imagename);
                $url = url("/images/" . $imagename);
                $request['profile_image'] = $url;
            }
            $user->additional()->updateOrCreate([
                'user_id' => $user->id,
            ], $request->all());
            DB::commit();
            return redirect()->back()->with(['type' => 'success', 'message' => 'Profile updated successfully']);
        } catch (Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(['type' => 'error', 'message' => 'An error occured while creating the profile!']);
        }
    }

    public function updateStudentProfile(Request $request, User $user)
    {
        DB::beginTransaction();
        try {
            $user->update($request->all());
            if ($request->hasFile('image')) {
                $uploaded = $request->file('image');
                $imagename = date('His') . '-' . Str::random(10) . '.' . $uploaded->getClientOriginalExtension();
                $imagepath = public_path('images/');
                $uploaded->move($imagepath, $imagename);
                $url = url("/images/" . $imagename);
                $request['profile_image'] = $url;
            }
            $user->additional()->updateOrCreate([
                'user_id' => $user->id,
            ], $request->all());
            DB::commit();
            return redirect()->back()->with(['type' => 'success', 'message' => 'Profile updated successfully']);
        } catch (Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(['type' => 'error', 'message' => 'An error occured while creating the profile!']);
        }
    }
}
