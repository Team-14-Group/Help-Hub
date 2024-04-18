<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VolunteerRegistration; // Assuming you have a VolunteerRegistration model
use App\User; // Assuming you have a User model
use App\Opportunity; // Assuming you have an Opportunity model

class VolunteerRegistrationController extends Controller
{
    // Display a listing of volunteer registrations
    public function index()
    {
        $volunteerRegistrations = VolunteerRegistration::with('user', 'opportunity')->get();
        return view('volunteer_registrations.index', compact('volunteerRegistrations'));
    }

    // Show the form for creating a new volunteer registration
    public function create()
    {
        $users = User::pluck('first_name', 'id');
        $opportunities = Opportunity::pluck('title', 'id');
        return view('volunteer_registrations.create', compact('users', 'opportunities'));
    }

    // Store a newly created volunteer registration in storage
}