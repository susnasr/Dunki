<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with(['assignedTo', 'assignedBy', 'application'])->get(); // Add dynamic data here
        return view('task.index', compact('tasks'));
    }

    // Add create, store, etc. as needed
}
