<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ==========================================
// Default Home (Dashboard redirects by role)
// ==========================================
Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('home');

// ==========================================
// Authentication Routes
// ==========================================
Auth::routes();

// ==========================================
// Role-Based Route Groups
// ==========================================

// 🧍 STUDENT ROUTES
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');
    Route::resource('applications', ApplicationController::class)->except(['show']); // Student can CRUD their applications
    Route::resource('files', FileController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::get('/profile/edit', [StudentController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [StudentController::class, 'update'])->name('profile.update');
});

// 👩‍💼 HR ROUTES
Route::middleware(['auth', 'role:hr'])->group(function () {
    Route::get('/hr/dashboard', [DashboardController::class, 'hr'])->name('hr.dashboard');
    Route::resource('tasks', TaskController::class);
    Route::get('/hr/applications', [ApplicationController::class, 'index'])->name('hr.applications.index');
});

// 🧳 VISA CONSULTANT ROUTES
Route::middleware(['auth', 'role:consultant'])->group(function () {
    Route::get('/consultant/dashboard', [DashboardController::class, 'consultant'])->name('consultant.dashboard');
    Route::get('/consultant/tasks', [TaskController::class, 'index'])->name('consultant.tasks.index');
});

// 🛠️ ADMIN ROUTES
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::resource('students', StudentController::class);
});

// ==========================================
// API ROUTES
// ==========================================
Route::get('/api/orders', [DashboardController::class, 'getOrders'])->middleware('auth');
