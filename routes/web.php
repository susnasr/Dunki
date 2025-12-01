<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Admin\UniversityController;

// ==========================================
// Default Home (Dashboard redirects by role)
// ==========================================
Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('home');

// ==========================================
// Authentication Routes
// ==========================================
Auth::routes(['register' => true]);

// ==========================================
// SHARED ROUTES ( Accessible by multiple roles )
// ==========================================
Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [\App\Http\Controllers\StudentController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [\App\Http\Controllers\StudentController::class, 'update'])->name('profile.update');

    // ✅ Application Details (Shared: Student sees own, Advisor sees all)
    Route::get('/applications/{application}', [ApplicationController::class, 'show'])->name('applications.show');
});

// ==========================================
// STUDENT ROUTES
// ==========================================
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');

    // We remove 'show' here because we defined it above as a shared route
    Route::resource('applications', ApplicationController::class)->except(['show']);

    Route::resource('files', FileController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::get('/universities', [\App\Http\Controllers\UniversityController::class, 'index'])->name('universities.index');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
});

// ==========================================
// HR ROUTES
// ==========================================
Route::middleware(['auth', 'role:hr'])->group(function () {
    Route::get('/hr/dashboard', [DashboardController::class, 'hr'])->name('hr.dashboard');
    Route::resource('tasks', TaskController::class);
    Route::get('/hr/applications', [ApplicationController::class, 'index'])->name('hr.applications.index');
});

// ==========================================
// CONSULTANT ROUTES
// ==========================================
Route::middleware(['auth', 'role:consultant'])->group(function () {
    Route::get('/consultant/dashboard', [DashboardController::class, 'consultant'])->name('consultant.dashboard');
    Route::get('/consultant/tasks', [TaskController::class, 'index'])->name('consultant.tasks.index');
});

// ==========================================
// ADMIN ROUTES
// ==========================================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::resource('students', StudentController::class);

    // University Management
    Route::get('admin/universities/import', [UniversityController::class, 'import'])->name('admin.universities.import');
    Route::post('admin/universities/import', [UniversityController::class, 'importSearch'])->name('admin.universities.search');
    Route::post('admin/universities/store-api', [UniversityController::class, 'storeApi'])->name('admin.universities.storeApi');
    Route::resource('admin/universities', UniversityController::class)->names('admin.universities');
});

// ==========================================
// ACADEMIC ADVISOR ROUTES
// ==========================================
Route::middleware(['auth', 'role:academic_advisor'])->group(function () {
    Route::get('/academic/dashboard', [DashboardController::class, 'academic'])->name('academic.dashboard');
});

// ==========================================
// API ROUTES
// ==========================================
Route::get('/api/orders', [DashboardController::class, 'getOrders'])->middleware('auth');
