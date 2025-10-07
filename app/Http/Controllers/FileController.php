<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::with(['profile.user', 'application.client.user'])->get(); // Add dynamic data here
        return view('files.index', compact('files'));
    }

    // Add store (for uploads), show, etc. as needed
}
