<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        // Get the current student
        $user = Auth::user();

        // Logic to find their assigned advisor (We can build this next)
        // $advisor = $user->advisor;

        return view('student.chat.index', compact('user'));
    }
}
