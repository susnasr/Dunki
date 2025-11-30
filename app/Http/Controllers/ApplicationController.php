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

        // 1. Get the Student's Profile
        $clientProfile = ClientProfile::where('user_id', $user->id)->first();

        // 2. Security Check: Must have a profile
        if (!$clientProfile) {
            return redirect()->route('profile.edit')
                ->with('error', 'Please complete your profile to view applications.');
        }

        // 3. Fetch ONLY this student's applications
        $applications = Application::where('client_id', $clientProfile->id)
            ->latest()
            ->paginate(10);

        return view('student.applications.index', compact('applications'));
    }

    /**
     * Handle the "Apply Now" click from the University Finder.
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

        // =========================================================
        // 2. 🛡️ STRICT DOCUMENT CHECK (The Bouncer)
        // =========================================================
        // We fetch the list of files this user has uploaded
        $uploadedFiles = \App\Models\File::where('uploaded_by', $user->id)
            ->where('status', '!=', 'rejected') // Don't count rejected files!
            ->pluck('file_type')
            ->toArray();

        // Define what is MANDATORY to apply
        $requiredDocuments = ['passport', 'transcript', 'photo'];

        // Calculate missing files
        $missing = array_diff($requiredDocuments, $uploadedFiles);

        if (!empty($missing)) {
            // Convert "passport" to "Passport" for nicer reading
            $missingNames = array_map('ucfirst', $missing);
            $list = implode(', ', $missingNames);

            return redirect()->route('files.index')
                ->with('error', "⚠️ Application Blocked! You are missing: $list. Please upload them first.");
        }
        // =========================================================

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
     */
    public function show(Application $application)
    {
        // Security: Ensure the student owns this application
        $user = Auth::user();
        $clientProfile = ClientProfile::where('user_id', $user->id)->first();

        if ($application->client_id !== $clientProfile->id) {
            abort(403, 'Unauthorized access to this application.');
        }

        // Eager load relationships if you have them (e.g., tasks, files)
        // $application->load('tasks', 'files');

        return view('student.applications.show', compact('application'));
    }

    public function create()
    {
        // Usually not needed if they apply via "Find Universities"
        return view('student.applications.create');
    }
}
