<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ClientProfile;
use App\Models\File;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Redirect users based on their role
        switch ($user->user_type) {
            case 'student':
                return redirect()->route('student.dashboard');
            case 'hr':
                return redirect()->route('hr.dashboard');
            case 'consultant':
                return redirect()->route('consultant.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            default:
                abort(403, 'Unauthorized');
        }
    }

    // ==========================================
    // STUDENT DASHBOARD
    // ==========================================
    public function student()
    {
        $applications = Application::where('user_id', auth()->id())->latest()->get();
        $tasks = Task::where('assigned_to', auth()->id())->get();

        return view('dashboards.student', compact('applications', 'tasks'));
    }

    // ==========================================
    // HR DASHBOARD
    // ==========================================
    public function hr()
    {
        $totalStudents = ClientProfile::count();
        $totalApplications = Application::count();
        $totalVerifiedFiles = File::where('status', 'verified')->count();
        $totalCompletedTasks = Task::where('status', 'completed')->count();

        $applicationTrends = Application::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as total')
        )
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $taskTrends = Task::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as total')
        )
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $totalFiles = File::count();
        $approvalRate = $totalFiles > 0 ? round(($totalVerifiedFiles / $totalFiles) * 100, 1) : 0;

        $totalFees = 0;
        $goalAmount = 20000;
        if (Schema::hasColumn('applications', 'fee')) {
            $totalFees = Application::sum('fee');
        }
        $progressPercent = $goalAmount > 0 ? round(($totalFees / $goalAmount) * 100, 1) : 0;

        $recentApplications = Application::latest()->take(5)->get();

        $topDestinations = collect();
        if (Schema::hasColumn('applications', 'destination')) {
            $topDestinations = Application::select('destination', DB::raw('COUNT(*) as total'))
                ->groupBy('destination')
                ->orderByDesc('total')
                ->take(8)
                ->get();
        }

        return view('dashboards.hr', compact(
            'totalStudents',
            'totalApplications',
            'totalVerifiedFiles',
            'totalCompletedTasks',
            'applicationTrends',
            'taskTrends',
            'approvalRate',
            'totalFees',
            'goalAmount',
            'progressPercent',
            'recentApplications',
            'topDestinations'
        ));
    }

    // ==========================================
    // CONSULTANT DASHBOARD
    // ==========================================
    public function consultant()
    {
        $tasks = Task::where('assigned_to', auth()->id())->get();
        return view('dashboards.consultant', compact('tasks'));
    }

    // ==========================================
    // ADMIN DASHBOARD
    // ==========================================
    public function admin()
    {
        $totalUsers = \App\Models\User::count();
        $totalApplications = Application::count();
        $totalTasks = Task::count();
        $totalFiles = File::count();

        return view('dashboards.admin', compact(
            'totalUsers',
            'totalApplications',
            'totalTasks',
            'totalFiles'
        ));
    }
}
