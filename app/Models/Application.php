<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'application_number', 'client_id', 'type', 'status', 'destination_country',
        'university_name', 'course_name', 'assigned_to', 'submission_date', 'notes',
    ];

    // Relationships
    public function client()
    {
        return $this->belongsTo(ClientProfile::class, 'client_id');
    }

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'related_application_id');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'application_id');
    }
    public function clientProfile()
    {
        // This tells Laravel: "My 'client_id' column points to the ClientProfile model"
        return $this->belongsTo(ClientProfile::class, 'client_id');
    }
}
