<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'profile_id', 'application_id', 'file_type', 'file_name', 'original_name',
        'file_path', 'file_size', 'mime_type', 'status', 'uploaded_by',
        'verified_by',
    ];

    // Relationships
    public function profile()
    {
        return $this->belongsTo(ClientProfile::class, 'profile_id');
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function uploadedBy()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
}
