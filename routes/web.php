<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Basic routing
Route::get('/greeting', function () {
    return 'Hello World';
});

// Redirect Routing
Route::redirect('/redirect', '/greeting');


// View Routing
Route::view('/view', 'view');

// Routing with parameters
Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
});

// Named routes
Route::get('/user/profile', function () {
    return "user profile";
})->name('profile');
