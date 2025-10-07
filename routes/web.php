<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// ✅ Home route (loads home.blade.php)
Route::get('/', function () {
    return view('home'); // resources/views/home.blade.php
})->name('home');

// ✅ Auth routes (login, register, logout)
Auth::routes();

// ✅ Resource routes
Route::resource('students', StudentController::class);
Route::resource('applications', ApplicationController::class);
Route::resource('files', FileController::class);
Route::resource('tasks', TaskController::class);
