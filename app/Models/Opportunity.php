<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'type', 'category', 'location', 'start_date', 'end_date', 'time_commitment', 'skills_required', 'org_id'
    ];

    public function volunteerRegistrations()
    {
        return $this->hasMany(VolunteerRegistration::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}