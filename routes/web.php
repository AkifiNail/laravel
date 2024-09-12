<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});

Route::get('/greeting/{name}', function ($name) {
    return view('greeting' , ['name' => $name]);
});


Route::get('/student', [StudentController::class, 'index'])->name('student.index');


Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');




