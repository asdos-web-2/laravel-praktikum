<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
Route::get('/students', [StudentController::class, 'index'])->name("students.index");
Route::get('/students/create', [StudentController::class, 'create'])->name("students.create");
Route::get('/students/{id}', [StudentController::class, 'show'])->name("students.show");
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name("students.edit");

Route::get("/majors", [MajorsController::class, "index"])->name("majors.index");
Route::get("/majors/create", [MajorsController::class, "create"])->name("majors.create");
Route::get("/majors/{id}", [MajorsController::class, "show"])->name("majors.show");
Route::get("/majors/{id}/edit", [MajorsController::class, "edit"])->name("majors.edit");
