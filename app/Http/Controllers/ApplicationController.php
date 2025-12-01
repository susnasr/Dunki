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
    /**
     * Display a listing of the student's applications.
     */
    public function index()
    {
        $user = Auth::user();

        $clientProfile = ClientProfile::where('user_id', $user->id)->first();

        if (!$clientProfile) {
            return redirect()->route('profile.edit')
                ->with('error', 'Please complete your profile to view applications.');
        }

        $applications = Application::where('client_id', $clientProfile->id)
            ->latest()
            ->paginate(10);

        return view('student.applications.index', compact('applications'));
    }

    /**
     * Handle the "Apply Now" click.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $clientProfile = ClientProfile::where('user_id', $user->id)->first();

        // 1. Basic Profile Check
        if (!$clientProfile) {
            return redirect()->route('profile.edit')
                ->with('error', 'Please complete your basic profile before applying.');
        }

        // 2. Strict Document Check
        $uploadedFiles = \App\Models\File::where('uploaded_by', $user->id)
            ->where('status', '!=', 'rejected')
            ->pluck('file_type')
            ->toArray();

        $requiredDocuments = ['passport', 'transcript', 'photo'];
        $missing = array_diff($requiredDocuments, $uploadedFiles);

        if (!empty($missing)) {
            $missingNames = array_map('ucfirst', $missing);
            $list = implode(', ', $missingNames);

            return redirect()->route('files.index')
                ->with('error', "⚠️ Application Blocked! You are missing: $list. Please upload them first.");
        }

        $request->validate([
            'university_id' => 'required|exists:universities,id',
        ]);

        // 3. Check for Duplicates
        $university = University::findOrFail($request->university_id);

        $exists = Application::where('client_id', $clientProfile->id)
            ->where('university_name', $university->name)
            ->whereIn('status', ['draft', 'submitted', 'under_review'])
            ->exists();

        if ($exists) {
            return back()->with('error', 'You have already applied to ' . $university->name);
        }

        // 4. Create Application
        Application::create([
            'application_number' => 'APP-' . strtoupper(Str::random(8)),
            'client_id'          => $clientProfile->id,
            'university_name'    => $university->name,
            'destination_country'=> $university->country,
            'course_name'        => 'General Admission',
            'type'               => 'university_application',
            'status'             => 'submitted',
            'submission_date'    => now(),
        ]);

        return redirect()->route('student.dashboard')
            ->with('success', 'Application submitted to ' . $university->name . ' successfully!');
    }

    /**
     * Display the specified application details.
     * ✅ UPDATED: Allows Advisors & Admins to view too.
     */
    public function show(Application $application)
    {
        $user = Auth::user();

        // 1. If User is the STUDENT (Owner) -> Allow
        if ($user->user_type === 'student') {
            $clientProfile = ClientProfile::where('user_id', $user->id)->first();
            if ($application->client_id !== $clientProfile->id) {
                abort(403, 'Unauthorized access.');
            }
        }

        // 2. If User is ADVISOR or ADMIN -> Allow
        elseif (in_array($user->user_type, ['academic_advisor', 'admin'])) {
            // Advisors can view all applications for review
        }

        // 3. Anyone else -> Block
        else {
            abort(403, 'Unauthorized access.');
        }

        return view('student.applications.show', compact('application'));
    }

    public function create()
    {
        return view('student.applications.create');
    }
}
