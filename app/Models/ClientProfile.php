<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model
{
    protected $fillable = [
        'user_id', 'passport_no', 'date_of_birth', 'nationality', 'address',
        'country_preference', 'education_level', 'english_proficiency',
        'emergency_contact_name', 'emergency_contact_phone',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'client_id');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'profile_id');
    }
}
