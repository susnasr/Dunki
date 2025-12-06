<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{
    public function index()
    {
        // 1. Fetch Students Ready for Travel (Visa Granted)
        $readyForTravel = Application::with('clientProfile.user')
            ->where('status', 'visa_granted')
            ->latest()
            ->get();

        // 2. Fetch Students currently being booked
        $bookingInProgress = Application::with('clientProfile.user')
            ->whereIn('status', ['travel_booking', 'travel_booked'])
            ->latest()
            ->get();

        return view('partials.dashboard-travel', compact('readyForTravel', 'bookingInProgress'));
    }

    /**
     * Start the Booking Process
     */
    public function startBooking(Request $request, Application $application)
    {
        // Update status to show travel work has started
        $application->update([
            'status' => 'travel_booking',
            'notes' => 'Travel booking started by ' . Auth::user()->name
        ]);

        return back()->with('success', 'Travel file opened for ' . $application->clientProfile->user->name);
    }
}
