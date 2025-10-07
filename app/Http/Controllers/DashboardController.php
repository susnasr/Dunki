<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ClientProfile;
use App\Models\File;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = ClientProfile::count();
        $totalApplications = Application::count();
        $totalVerifiedFiles = File::where('status', 'verified')->count();
        $totalCompletedTasks = Task::where('status', 'completed')->count();
        // Add more metrics later

        return view('home', compact('totalStudents', 'totalApplications', 'totalVerifiedFiles', 'totalCompletedTasks'));
    }
}
