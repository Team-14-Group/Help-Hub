<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'website', 'contact_person', 'contact_email', 'location'
    ];

    public function volunteerRegistrations()
    {
        return $this->hasMany(VolunteerRegistration::class);
    }
}