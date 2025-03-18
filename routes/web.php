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

// // Named routes
// Route::get('/students/create', function () {
//     return "create student data";
// })->name('students.create');

// // Routing with parameters
// Route::get('/students/{id}', function (string $id) {
//     return 'Student ' . $id;
// });


// connect to controller
// Route::get('/students', [StudentController::class, 'index']);

// Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Route::get('/students/{id}', [StudentController::class, 'show']);


// group route by controller
// Route::controller(StudentController::class)->group(function () {
//     Route::get('/students', 'index');
//     Route::get('/students/create', 'create');
//     Route::get('/students/{id}', 'show');
// });

// group prefix
// Route::prefix('students')->group(function () {
//     Route::get('/', [StudentController::class, 'index']);
//     Route::get('/create', [StudentController::class, 'create'])->name('create');
//     Route::get('/{id}', [StudentController::class, 'show']);
// });

// // group name prefixes
// Route::name('students.')->group(function () {
//     Route::get('/students', [StudentController::class, 'index']);
//     Route::get('/students/create', [StudentController::class, 'create'])->name('create');
//     Route::get('/students/{id}', [StudentController::class, 'show']);
// });
