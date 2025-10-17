<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        // Show only logged-in user’s uploads
        $files = File::where('uploaded_by', auth()->id())
            ->latest()
            ->get();

        return view('files.index', compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_type' => 'required|in:passport,transcript,sop,lor,ielts,financial_proof,photo,cv',
            'file' => 'required|file|max:5120|mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,pptx,txt',
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $fileName = time() . '_' . $originalName;
        $filePath = $file->storeAs('uploads/files', $fileName, 'public');

        File::create([
            'profile_id' => auth()->user()->clientProfile->id ?? null,
            'application_id' => null,
            'file_type' => $request->file_type,
            'file_name' => $fileName,
            'original_name' => $originalName,
            'file_path' => $filePath,
            'file_size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'uploaded_by' => auth()->id(),
            'status' => 'pending',
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }
}
