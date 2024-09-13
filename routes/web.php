<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormationController;

use App\Http\Controllers\GroupeController;

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



Route::get('/formation', [FormationController::class, 'index'])->name('formations.index');

Route::get('/formation/{formation}', [FormationController::class, 'show'])->name('formations.show');



Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');


Route::get('/groupe', [GroupeController::class, 'index'])->name('groupes.index');

Route::get('/groupe/{groupe}', [GroupeController::class, 'show'])->name('groupes.show');




