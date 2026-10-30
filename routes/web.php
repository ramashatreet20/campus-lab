<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Hello Route
Route::get('/hello', function () {
    return 'Hello Laravel';
});

// Student Routes
Route::get('/students', [StudentController::class, 'index']);

// Create Student
Route::get('/students/create', [StudentController::class, 'create']);

// Show Student by ID
Route::get('/students/{id}', [StudentController::class, 'show'])
    ->whereNumber('id');

// Edit Student
Route::get('/students/{id}/edit', function ($id) {
    return 'Edit Student ID: ' . $id;
})->whereNumber('id');

// Store Student
Route::post('/students', [StudentController::class, 'store']);

// Update Student
Route::put('/students/{id}', [StudentController::class, 'update'])
    ->whereNumber('id');

// Delete Student
Route::delete('/students/{id}', [StudentController::class, 'destroy'])
    ->whereNumber('id');

// Course Students Route
Route::get('/courses/{courseId}/students', [CourseController::class, 'students'])
    ->whereNumber('courseId');

// Product Route
Route::get('/products/{id}', function ($id) {
    return 'Product ID: ' . $id;
})->whereNumber('id');
