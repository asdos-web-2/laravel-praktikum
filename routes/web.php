<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// // Basic routing
// Route::get('/students', function () {
//     return 'students data...';
// });

// // Redirect Routing
// Route::redirect('/redirect', '/students');

// // Routing with parameters
// Route::get('/students/{id}', function (string $id) {
//     return 'Student ' . $id;
// });

// // Named routes
// Route::get('/students/create', function () {
//     return "create student data";
// })->name('students.create');

// connect to controller
Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
