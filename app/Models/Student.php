<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'first_name',
        'last_name',
        'institution',
        'profile_path',
        'field_of_study',
        'education_level',
        'bio',
        'location',
        'skills',
        'student_id'
    ];

    protected $casts = [
        'skills' => 'array',
        'is_active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(Client::class);
    }
}
