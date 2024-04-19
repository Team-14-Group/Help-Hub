<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization; // Assuming you have an Organization model

class OrganizationController extends Controller
{
    // Display a listing of organizations
    public function index()
    {
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    // Show the form for creating a new organization
    public function create()
    {
        return view('organizations.create');
    }

    // Store a newly created organization in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'website' => 'required',
            'contact_person' => 'required',
            'contact_email' => 'required',
            'location' => 'required',
        ]);

        Organization::create($request->all());

        return redirect()->route('organizations.index')
                        ->with('success','Organization created successfully.');
    }

    // Display the specified organization
    public function show(Organization $organization)
    {
        return view('organizations.show',compact('organization'));
    }

    // Show the form for editing the specified organization
    public function edit(Organization $organization)
    {
        return view('organizations.edit',compact('organization'));
    }

    // Update the specified organization in storage
    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'name' => 'required',
            'website' => 'required',
            'contact_person' => 'required',
            'contact_email' => 'required',
            'location' => 'required',
        ]);

        $organization->update($request->all());

        return redirect()->route('organizations.index')
                        ->with('success','Organization updated successfully');
    }

    // Remove the specified organization from storage
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return redirect()->route('organizations.index')
                        ->with('success','Organization deleted successfully');
    }
}