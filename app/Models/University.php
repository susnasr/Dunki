<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    // ✅ Add this array to allow mass assignment
    protected $fillable = [
        'name',
        'country',
        'city',
        'logo',
        'description',
        'ranking',
        'tuition_fee',
        'accepts_without_ielts',
        'web_page' // If you added this column, otherwise remove it
    ];
}
