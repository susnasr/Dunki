<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::orderBy('id', 'asc')->paginate(10);
        return view('admin.universities.index', compact('universities'));
    }

    public function import()
    {
        return view('admin.universities.import');
    }

    // 2. Search the External API
    public function importSearch(Request $request)
    {
        $request->validate(['name' => 'required|min:3']);
        $search = $request->name;

        // Call the Free API
        $response = Http::get("http://universities.hipolabs.com/search", [
            'name' => $search
        ]);

        $results = $response->json();

        // Pass results back to the view
        return view('admin.universities.import', compact('results', 'search'));
    }

    // 3. Save Selected University
    public function storeApi(Request $request)
    {
        // Use firstOrCreate to avoid duplicates
        $uni = \App\Models\University::firstOrCreate(
            ['name' => $request->name],
            [
                'country' => $request->country,
                'city' => 'Unknown', // API doesn't provide city, can be edited later
                'ranking' => null,
                'tuition_fee' => 0,
                'description' => "Imported from API. Website: " . $request->web_page,
            ]
        );

        return back()->with('success', $uni->name . ' has been imported successfully!');
    }

    // We will add create/store/import methods here later
}
