<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
        'user_type', 'phone', 'country',
        'location', 'profile_pic', 'is_active',
    ];

    protected $hidden = ['password'];

    // Relationships
    public function clientProfile()
    {
        return $this->hasOne(ClientProfile::class);
    }

    public function applicationsAssigned()
    {
        return $this->hasMany(Application::class, 'assigned_to');
    }

    public function tasksAssigned()
    {
        return $this->hasMany(Task::class, 'assigned_to');
    }
}
