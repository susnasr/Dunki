<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'description', 'priority', 'status', 'assigned_to',
        'assigned_by', 'related_application_id', 'due_date',
    ];

    // Relationships
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function assignedBy()
    {
        return $this->belongsTo(User::class, 'assigned_by');
    }

    public function application()
    {
        return $this->belongsTo(Application::class, 'related_application_id');
    }
}
