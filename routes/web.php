<?php

use Illuminate\Support\Facades\Route;

Route::resource('organizations', OrganizationController::class);

Route::get('/', function () {
    return view('welcome');
});
