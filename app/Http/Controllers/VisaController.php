<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisaController extends Controller
{
    public function index()
    {
        $newVisaCases = Application::with('clientProfile.user')
            ->where('status', 'approved')
            ->latest()
            ->get();

        $ongoingCases = Application::with('clientProfile.user')
            ->whereIn('status', ['visa_processing', 'visa_submitted'])
            ->latest()
            ->get();

        return view('partials.dashboard-visa', compact('newVisaCases', 'ongoingCases'));
    }

    public function startProcess(Request $request, Application $application)
    {
        $application->update([
            'status' => 'visa_processing',
            'notes' => 'Visa process started by ' . Auth::user()->name
        ]);

        return back()->with('success', 'Visa file opened for ' . $application->clientProfile->user->name);
    }
}
