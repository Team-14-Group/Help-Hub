<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opportunity; // Assuming you have an Opportunity model
use App\VolunteerRegistration; // Assuming you have a VolunteerRegistration model
use App\Organization; // Assuming you have an Organization model

class OpportunityController extends Controller
{
    // Display a listing of opportunities
    public function index()
    {
        $opportunities = Opportunity::with('organization')->get();
        return view('opportunities.index', compact('opportunities'));
    }

    // Show the form for creating a new opportunity
    public function create()
    {
        $organizations = Organization::pluck('name', 'id');
        return view('opportunities.create', compact('organizations'));
    }

    // Store a newly created opportunity in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'category' => 'required',
            'location' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'time_commitment' => 'required',
            'skills_required' => 'required',
            'org_id' => 'required',
        ]);

        Opportunity::create($request->all());

        return redirect()->route('opportunities.index')
                        ->with('success','Opportunity created successfully.');
    }

    // Display the specified opportunity
    public function show(Opportunity $opportunity)
    {
        $volunteerRegistrations = VolunteerRegistration::where('opportunity_id', $opportunity->id)->get();
        return view('opportunities.show',compact('opportunity', 'volunteerRegistrations'));
    }

    // Show the form for editing the specified opportunity
    public function edit(Opportunity $opportunity)
    {
        $organizations = Organization::pluck('name', 'id');
        return view('opportunities.edit',compact('organization', 'opportunity'));
    }

    // Update the specified opportunity in storage
    public function update(Request $request, Opportunity $opportunity)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'category' => 'required',
            'location' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'time_commitment' => 'required',
            'skills_required' => 'required',
            'org_id' => 'required',
        ]);

        $opportunity->update($request->all());

        return redirect()->route('opportunities.index')
                        ->with('success','Opportunity updated successfully');
    }

    // Remove the specified opportunity from storage
    public function destroy(Opportunity $opportunity)
    {
        $opportunity->delete();

        return redirect()->route('opportunities.index')
                        ->with('success','Opportunity deleted successfully');
    }
}