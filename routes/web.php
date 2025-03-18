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
// Route::get('/students', [StudentController::class, 'index']);

// Route::get('/students/{id}', [StudentController::class, 'show']);

// Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// group route by controller
// Route::controller(StudentController::class)->group(function () {
//     Route::get('/students', 'index');
//     Route::get('/students/{id}', 'show');
//     Route::get('/students/create', 'create');
// });

// group prefix
Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/{id}', [StudentController::class, 'show']);
    Route::get('/create', [StudentController::class, 'create'])->name('create');
});

// group name prefixes
Route::name('students.')->group(function () {
    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/students/{id}', [StudentController::class, 'show']);
    Route::get('/students/create', [StudentController::class, 'create'])->name('create');
});
