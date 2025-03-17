<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// basic routes
Route::get('/student', [StudentController::class, 'index'])->name("student.index");
Route::post('/student', [StudentController::class, 'store'])->name("student.store");
Route::get('/student/create', [StudentController::class, 'create'])->name("student.create");

// params routes
Route::get('/student/{id}', [StudentController::class, 'show'])->name("student.show");
Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name("student.edit");
Route::put('/student/{id}', [StudentController::class, 'update'])->name("student.update");
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name("student.destroy");
