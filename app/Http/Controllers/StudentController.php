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

    public function show(ClientProfile $student)
    {
        $student->load('user', 'applications', 'files');
        return view('students.show', compact('student'));
    }

    public function edit(User $student)
    {
        if ($student->id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $student->load('clientProfile');
        return view('students.edit', compact('student'));
    }

    public function update(Request $request)
    {
        // ✅ Always use the logged-in user for profile update
        $student = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $student->id,
            'phone' => 'nullable|string|max:20',
            'passport_no' => 'nullable|string|max:50|unique:client_profiles,passport_no,' . ($student->clientProfile->id ?? 'NULL'),
            'country_preference' => 'nullable|string|max:100',
            'education_level' => 'nullable|string|max:100',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|string|min:8',
        ]);

        // ✅ Handle profile pic upload
        if ($request->hasFile('profile_pic')) {
            if ($student->profile_pic) {
                Storage::disk('public')->delete($student->profile_pic);
            }
            $path = $request->file('profile_pic')->store('avatars', 'public');
            $student->profile_pic = $path;
        }

        // ✅ Update password only if user provided one
        if ($request->filled('password')) {
            $student->password = bcrypt($request->password);
        }

        // ✅ Update user info
        $student->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'user_type' => strtoupper($request->user_type),
            'country'  => $request->country,
            'location' => $request->location,
        ]);

        // ✅ Update client profile info
        if ($student->user_type === 'student' && $student->clientProfile) {
            $student->clientProfile->update([
                'passport_no' => $request->passport_no,
                'country_preference' => $request->country_preference,
                'education_level' => $request->education_level,
            ]);
        }

        // ✅ Redirect to the student's profile view page (show.blade.php)
        return redirect()->route('students.show', $student->clientProfile->id)
            ->with('success', 'Profile updated successfully!');
    }
}
