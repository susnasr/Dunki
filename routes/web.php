<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ✅ Home route (loads home.blade.php)
Route::get('/', function () {
    return view('home');
})->name('home');

// ✅ Auth routes (login, register, logout)
Auth::routes();

// ✅ Resource routes
Route::resource('students', StudentController::class);
Route::resource('applications', ApplicationController::class);
Route::resource('files', FileController::class);
Route::resource('tasks', TaskController::class);

// ✅ Custom route for editing the current user's profile (unique name)
Route::get('/profile/edit', function () {
    return view('students.edit');
})->name('profile.edit')->middleware('auth');

// ✅ Custom route for updating the current user's profile
Route::put('/profile/update', [StudentController::class, 'update'])->name('profile.update')->middleware('auth');
