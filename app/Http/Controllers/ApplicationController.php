<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with('client.user')->paginate(10); // Add dynamic data here
        return view('applications.index', compact('applications'));
    }

    public function show(Application $application)
    {
        $application->load('client.user', 'assignedUser', 'tasks', 'files');
        return view('applications.show', compact('application'));
    }

    // Add create, store, edit, update, destroy as needed
}
