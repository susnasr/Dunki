<?php

namespace App\Http\Controllers;

use App\Models\ClientProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type !== 'admin') {
            $students = auth()->user()->clientProfile;
        } else {
            $students = ClientProfile::with('user')->get();
        }

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:20',
            'passport_no' => 'required|string|max:50|unique:client_profiles,passport_no',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_type' => 'student',
            'phone' => $request->phone,
        ]);

        ClientProfile::create([
            'user_id' => $user->id,
            'passport_no' => $request->passport_no,
        ]);

        return redirect()->route('students.index');
    }

    public function show()
    {
        $user = auth()->user();

        return view('students.show', compact('user'));
    }

    public function edit()
    {
        $student = auth()->user();
        $student->load('clientProfile');
        return view('students.edit', compact('student'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // ✅ Validation (simplified to handle all roles)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:100',
            'location' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|string|min:8',
            // Student-specific fields (won’t break others)
            'passport_no' => 'nullable|string|max:50',
            'country_preference' => 'nullable|string|max:100',
            'education_level' => 'nullable|string|max:100',
        ]);

        // ✅ Profile picture handling
        if ($request->hasFile('profile_pic')) {
            if ($user->profile_pic) {
                Storage::disk('public')->delete($user->profile_pic);
            }
            $path = $request->file('profile_pic')->store('avatars', 'public');
            $user->profile_pic = $path;
        }

        // ✅ Update password if changed
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        // ✅ Update basic user info
        $user->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'country'  => $request->country,
            'location' => $request->location,
        ]);

        // ✅ If the logged-in user is a student, also update their clientProfile
        if ($user->user_type === 'student' && $user->clientProfile) {
            $user->clientProfile->update([
                'passport_no' => $request->passport_no,
                'country_preference' => $request->country_preference,
                'education_level' => $request->education_level,
            ]);
        }

        // ✅ Redirect to generic profile page (works for all roles)
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}
