<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormationController;

use App\Http\Controllers\GroupeController;

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Formation;
use App\Models\Groupe;
use App\Http\Controllers\CourController;
use App\Models\Cour;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});

Route::get('/greeting/{name}', function ($name) {
    return view('greeting' , ['name' => $name]);
});






// Route::get('/formation', [FormationController::class, 'index'])->name('formations.index');

// Route::get('/formation/create', [FormationController::class, 'create'])->name('formations.create');

// Route::get('/formation/{formation}', [FormationController::class, 'show'])->name('formations.show');

// Route::delete('/formation/{formation}', [FormationController::class, 'destroy'])->name('formations.destroy');

// Route::get('/formation/{formation}/edit', [FormationController::class, 'edit'])->name('formations.edit');

// Route::put('/formation/{formation}', [FormationController::class, 'update'])->name('formations.update');



// Route::post('/formation', [FormationController::class, 'store'])->name('formations.store');


Route::resource('/formations', FormationController::class);
Route::resource('/student', StudentController::class);

// Route::get('/student', [StudentController::class, 'index'])->name('student.index');

// Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

// Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');

// Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');

// Route::delete('/student/{student}', [FormationController::class, 'destroy'])->name('student.destroy');

// Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');

// Route::post('/student', [StudentController::class, 'store'])->name('student.store');


Route::get('/groupe', [GroupeController::class, 'index'])->name('groupes.index');

Route::get('/groupe/{groupe}', [GroupeController::class, 'show'])->name('groupes.show');

Route::get('/cours', [CourController::class, 'index'])->name('cours.index');



Route::get('/cours/{cour}', [CourController::class, 'show'])->name('cours.show');




