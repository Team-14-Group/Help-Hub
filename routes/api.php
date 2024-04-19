<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Opportunity routes
Route::get('opportunities', 'OpportunityController@index');
Route::get('opportunities/{opportunity}', 'OpportunityController@show');
Route::post('opportunities', 'OpportunityController@store');
Route::put('opportunities/{opportunity}', 'OpportunityController@update');
Route::delete('opportunities/{opportunity}', 'OpportunityController@destroy');

// Organization routes
Route::get('organizations', 'OrganizationController@index');
Route::get('organizations/{organization}', 'OrganizationController@show');
Route::post('organizations', 'OrganizationController@store');
Route::put('organizations/{organization}', 'OrganizationController@update');
Route::delete('organizations/{organization}', 'OrganizationController@destroy');

// User routes
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');

// Volunteer Registration routes
Route::get('volunteer-registrations', 'VolunteerRegistrationController@index');
Route::get('volunteer-registrations/{volunteerRegistration}', 'VolunteerRegistrationController@show');
Route::post('volunteer-registrations', 'VolunteerRegistrationController@store');
Route::put('volunteer-registrations/{volunteerRegistration}', 'VolunteerRegistrationController@update');
Route::delete('volunteer-registrations/{volunteerRegistration}', 'VolunteerRegistrationController@destroy');
