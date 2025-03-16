<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Basic routing
Route::get('/students', function () {
    return 'students data...';
});

// Redirect Routing
Route::redirect('/redirect', '/students');

// Routing with parameters
Route::get('/students/{id}', function (string $id) {
    return 'Student ' . $id;
});

// Named routes
Route::get('/students/create', function () {
    return "create student data";
})->name('students.create');
