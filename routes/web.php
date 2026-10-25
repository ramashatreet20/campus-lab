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

Route::get('/students/{id}', [StudentController::class, 'show'])
    ->whereNumber('id');

Route::post('/students', [StudentController::class, 'store']);

Route::put('/students/{id}', [StudentController::class, 'update'])
    ->whereNumber('id');

Route::delete('/students/{id}', [StudentController::class, 'destroy'])
    ->whereNumber('id');

// Course Students Route
Route::get('/courses/{courseId}/students', [CourseController::class, 'students'])
    ->whereNumber('courseId');