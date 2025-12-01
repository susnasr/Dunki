<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\University;
use App\Models\ClientProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // 1. STUDENT LOGIC
        if ($user->user_type === 'student') {
            $clientProfile = ClientProfile::where('user_id', $user->id)->first();

            if (!$clientProfile) {
                return redirect()->route('profile.edit')
                    ->with('error', 'Please complete your profile to view applications.');
            }

            $applications = Application::where('client_id', $clientProfile->id)
                ->latest()
                ->paginate(10);
        }

        // 2. ADVISOR/ADMIN LOGIC
        elseif (in_array($user->user_type, ['academic_advisor', 'admin'])) {
            $applications = Application::with('clientProfile.user')
                ->latest()
                ->paginate(15);
        }

        else {
            abort(403, 'Access denied.');
        }

        // ✅ FIX: Changed 'student.' to 'students.' (Plural)
        return view('students.applications.index', compact('applications'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $clientProfile = ClientProfile::where('user_id', $user->id)->first();

        if (!$clientProfile) {
            return redirect()->route('profile.edit')->with('error', 'Complete profile first.');
        }

        // Strict Document Check
        $uploadedFiles = \App\Models\File::where('uploaded_by', $user->id)
            ->where('status', '!=', 'rejected')
            ->pluck('file_type')->toArray();

        $missing = array_diff(['passport', 'transcript', 'photo'], $uploadedFiles);

        if (!empty($missing)) {
            $list = implode(', ', array_map('ucfirst', $missing));
            return redirect()->route('files.index')
                ->with('error', "⚠️ Application Blocked! Missing: $list.");
        }

        $request->validate([
            'university_id' => 'required|exists:universities,id',
            'course_name'   => 'required|string|max:255',
            'intake'        => 'required|string'
        ]);

        $university = University::findOrFail($request->university_id);

        if (Application::where('client_id', $clientProfile->id)
            ->where('university_name', $university->name)
            ->whereIn('status', ['draft', 'submitted', 'under_review'])->exists()) {
            return back()->with('error', 'Already applied to ' . $university->name);
        }

        Application::create([
            'application_number' => 'APP-' . strtoupper(Str::random(8)),
            'client_id'          => $clientProfile->id,
            'university_name'    => $university->name,
            'destination_country'=> $university->country,
            'course_name'        => $request->course_name,
            'intake'             => $request->intake,
            'type'               => 'university_application',
            'status'             => 'submitted',
            'submission_date'    => now(),
        ]);

        return redirect()->route('student.dashboard')
            ->with('success', 'Application submitted successfully!');
    }

    public function show(Application $application)
    {
        $user = Auth::user();

        // Security Checks
        if ($user->user_type === 'student') {
            if ($application->clientProfile->user_id !== $user->id) abort(403);
        } elseif ($user->user_type === 'academic_advisor') {
            // Redirect if work is already done
            if (in_array($application->status, ['approved', 'rejected'])) {
                return redirect()->route('academic.dashboard')
                    ->with('info', "Application #{$application->application_number} is already processed.");
            }
        } elseif (!in_array($user->user_type, ['admin'])) {
            abort(403);
        }

        // ✅ FIX: Changed 'student.' to 'students.' (Plural)
        return view('students.applications.show', compact('application'));
    }

    public function updateStatus(Request $request, Application $application)
    {
        if (!in_array(Auth::user()->user_type, ['academic_advisor', 'admin'])) {
            abort(403);
        }

        $request->validate([
            'status' => 'required|in:approved,rejected',
            'reason' => 'nullable|string|max:500',
        ]);

        $application->update([
            'status' => $request->status,
            'notes'  => $request->reason,
        ]);

        return redirect()->route('academic.dashboard')
            ->with('success', 'Application processed successfully!');
    }

    public function create()
    {
        // ✅ FIX: Changed 'student.' to 'students.' (Plural)
        return view('students.applications.create');
    }

    public function edit(Application $application)
    {
        if ($application->clientProfile->user_id !== auth()->id()) abort(403);
        if ($application->status !== 'rejected') return back();

        // ✅ FIX: Changed 'student.' to 'students.' (Plural)
        return view('students.applications.edit', compact('application'));
    }

    public function update(Request $request, Application $application)
    {
        if ($application->clientProfile->user_id !== auth()->id()) abort(403);

        $request->validate([
            'course_name' => 'required|string',
            'intake' => 'required|string',
        ]);

        $application->update([
            'course_name' => $request->course_name,
            'intake'      => $request->intake,
            'status'      => 'submitted',
            'notes'       => null
        ]);

        return redirect()->route('applications.show', $application->id)
            ->with('success', 'Application resubmitted successfully!');
    }
}
