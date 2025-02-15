<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'opportunity_id', 'availability', 'contact_information', 'qualifications', 'background_check', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opportunity()
    {
        return $this->belongsTo(Opportunity::class);
    }
}