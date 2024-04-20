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
Route::get('opportunities',[App\Http\Controllers\OpportunityController::class, 'index']);
Route::get('opportunities/{opportunity}',[App\Http\Controllers\OpportunityController::class, 'show']);
Route::post('opportunities',[App\Http\Controllers\OpportunityController::class, 'store']);
Route::put('opportunities/{opportunity}',[App\Http\Controllers\OpportunityController::class, 'update']);
Route::delete('opportunities/{opportunity}',[App\Http\Controllers\OpportunityController::class, 'destroy']);

// Organization routes
Route::get('organizations',[App\Http\Controllers\OrganizationController::class, 'index']);
Route::get('organizations/{organization}',[App\Http\Controllers\OrganizationController::class, 'show']);
Route::post('organizations',[App\Http\Controllers\OrganizationController::class, 'store']);
Route::put('organizations/{organization}',[App\Http\Controllers\OrganizationController::class, 'update']);
Route::delete('organizations/{organization}',[App\Http\Controllers\OrganizationController::class, 'destroy']);

// User routes
Route::get('users',[App\Http\Controllers\UserController::class, 'index']);
Route::get('users/{user}',[App\Http\Controllers\UserController::class, 'show']);
Route::post('users',[App\Http\Controllers\UserController::class, 'store']);
Route::put('users/{user}',[App\Http\Controllers\UserController::class, 'update']);
Route::delete('users/{user}',[App\Http\Controllers\UserController::class, 'destroy']);


// Volunteer Registration routes
Route::get('volunteer-registrations', [App\Http\Controllers\VolunteerRegistrationController::class, 'index']);
Route::get('volunteer-registrations/{volunteerRegistration}', [App\Http\Controllers\VolunteerRegistrationController::class, 'show']);
Route::post('volunteer-registrations', [App\Http\Controllers\VolunteerRegistrationController::class, 'store']);
Route::put('volunteer-registrations/{volunteerRegistration}', [App\Http\Controllers\VolunteerRegistrationController::class, 'update']);
Route::delete('volunteer-registrations/{volunteerRegistration}', [App\Http\Controllers\VolunteerRegistrationController::class, 'destroy']);
