<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        // 1. Start the query
        $query = University::query();

        // 2. Simple Search Logic
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('country', 'like', "%{$search}%");
        }

        // 3. Get results (Paginated)
        $universities = $query->paginate(9);

        return view('students.universities.index', compact('universities'));
    }
}
