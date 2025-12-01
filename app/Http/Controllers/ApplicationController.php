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

        // 1. IF STUDENT: Show only their own apps
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

        // 2. IF ADVISOR OR ADMIN: Show ALL applications
        elseif (in_array($user->user_type, ['academic_advisor', 'admin'])) {
            $applications = Application::with('clientProfile.user') // Load student details
            ->latest()
                ->paginate(15);
        }

        // 3. OTHERS: Block
        else {
            abort(403, 'Access denied.');
        }

        return view('students.applications.index', compact('applications'));
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

        // 🛡️ SECURITY & REDIRECT LOGIC

        // 1. Student Access
        if ($user->user_type === 'student') {
            if ($application->clientProfile->user_id !== $user->id) abort(403);
        }

        // 2. Advisor Logic (YOUR REQUEST)
        elseif ($user->user_type === 'academic_advisor') {

            // ✅ IF APPLICATION IS ALREADY DONE -> REDIRECT TO DASHBOARD
            // This prevents Advisors from wasting time on finished apps
            if (in_array($application->status, ['approved', 'rejected'])) {
                return redirect()->route('academic.dashboard')
                    ->with('info', "Application #{$application->application_number} is already processed.");
            }
        }

        return view('student.applications.show', compact('application'));
    }

    public function create()
    {
        return view('students.applications.create');
    }

    public function updateStatus(Request $request, Application $application)
    {
        $user = Auth::user();

        // 1. Security: Only Staff can change status
        if (!in_array($user->user_type, ['academic_advisor', 'admin'])) {
            abort(403, 'Only advisors can perform this action.');
        }

        // 2. Validate Input
        $request->validate([
            'status' => 'required|in:approved,rejected',
            'reason' => 'nullable|string|max:500', // Only needed for rejection
        ]);

        // 3. Update Application
        $application->update([
            'status' => $request->status,
            'notes'  => $request->reason, // Save the rejection reason if any
            // 'assigned_to' => $user->id, // Optional: Lock this advisor to the case
        ]);

        $message = $request->status === 'approved'
            ? 'Application approved! Student has been notified.'
            : 'Application rejected. Feedback sent to student.';

        return back()->with('success', $message);
    }
}
