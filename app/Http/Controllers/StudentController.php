<?php

namespace App\Http\Controllers;

use App\Models\ClientProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;  // For file handling (delete old pic)

class StudentController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type !== 'admin') {
            // Students only see their own profile
            $students = auth()->user()->clientProfile;
        } else {
            $students = ClientProfile::with('user')->get();
        }

        return view('students.index', compact('students'));  // ← ADD: Return the view (missing before)
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Add validation/dynamic logic later
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
            // Add other fields
        ]);

        return redirect()->route('students.index');
    }

    public function show(ClientProfile $student)
    {
        $student->load('user', 'applications', 'files'); // Eager load
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student profile.
     */
    public function edit(User $student)
    {
        // Only allow editing own profile
        if ($student->id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        // Load related ClientProfile if student
        $student->load('clientProfile');

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified student profile in storage.
     */
    public function update(Request $request, User $student)
    {
        // Only allow updating own profile
        if ($student->id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $student->id,  // Ignore current user
            'phone' => 'nullable|string|max:20',
            'passport_no' => 'nullable|string|max:50|unique:client_profiles,passport_no,' . ($student->clientProfile->id ?? 'NULL'),  // If student
            'country_preference' => 'nullable|string|max:100',  // If student
            'education_level' => 'nullable|string|max:100',  // If student
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // 2MB max
        ]);

        // Handle profile pic upload/replacement
        if ($request->hasFile('profile_pic')) {
            // Delete old pic if exists
            if ($student->profile_pic) {
                Storage::disk('public')->delete($student->profile_pic);
            }
            // Store new pic
            $path = $request->file('profile_pic')->store('avatars', 'public');
            $student->profile_pic = $path;
        }

        // Update basic user fields
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // Update student-specific fields (if applicable)
        if ($student->user_type === 'student' && $student->clientProfile) {
            $student->clientProfile->update([
                'passport_no' => $request->passport_no,
                'country_preference' => $request->country_preference,
                'education_level' => $request->education_level,
                // Add more CLIENT_PROFILES fields as needed
            ]);
        }

        return redirect()->route('students.show', $student->id)
            ->with('success', 'Profile updated successfully!');
    }

    // Add destroy as needed (e.g., for admins deleting students)
}
