<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username', 'password', 'first_name', 'last_name', 'email', 'phone_number', 'user_type'
    ];

    public function volunteerRegistrations()
    {
        return $this->hasMany(VolunteerRegistration::class);
    }
}