<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdditional extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_image',
        'about_me',
        'date_of_birth',
        'blood_group',
        'mobile',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'headline',
        'teacher_per_hour'
    ];

    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
