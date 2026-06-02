<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\EnrollmentController;
use App\Http\Controllers\Api\ProfessorController;
use App\Http\Controllers\Api\SheduleController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');

Route::get('/login/google',[App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle']);
Route::get('/login/google/callback',[App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);

Route::middleware(['auth'])->get('/inicio', function(){
    return view('inicio');
});


Route::get('/login/github', [LoginController::class, 'redirectToGithub']);
Route::get('/login/github/callback', [LoginController::class, 'handleGithubCallback']);

Route::get('/alumno',[StudentController::class, 'listar'])->name('alumno');
Route::get('/alumno/create',[StudentController::class,'create'])->name('alumno.create');
Route::post('/alumno/store',[StudentController::class,'store'])->name('alumno.store');
Route::get('/alumno/edit/{student}',[StudentController::class,'edit'])->name('alumno.edit');
Route::put('/alumno/update/{student}',[StudentController::class,'update'])->name('alumno.update');
Route::delete('/alumno/destroy/{student}',[StudentController::class,'destroy'])->name('alumno.destroy');



Route::get('/curso',[CourseController::class, 'listar'])->name('curso');
Route::get('/curso/create',[CourseController::class,'create'])->name('curso.create');
Route::post('/curso/store',[CourseController::class,'store'])->name('curso.store');
Route::get('/curso/edit/{course}',[CourseController::class,'edit'])->name('curso.edit');
Route::put('/curso/update/{course}',[CourseController::class,'update'])->name('curso.update');
Route::delete('/curso/destroy/{course}',[CourseController::class,'destroy'])->name('curso.destroy');



Route::get('/docente',[ProfessorController::class, 'listar'])->name('docente');
Route::get('/docente/create',[ProfessorController::class,'create'])->name('docente.create');
Route::post('/docente/store',[ProfessorController::class,'store'])->name('docente.store');
Route::get('/docente/edit/{professor}',[ProfessorController::class,'edit'])->name('docente.edit');
Route::put('/docente/update/{professor}',[ProfessorController::class,'update'])->name('docente.update');
Route::delete('/docente/destroy/{professor}',[ProfessorController::class,'destroy'])->name('docente.destroy');




Route::get('/horario',[SheduleController::class, 'listar'])->name('horario');
Route::get('/horario/create',[SheduleController::class,'create'])->name('horario.create');
Route::post('/horario/store',[SheduleController::class,'store'])->name('horario.store');
Route::get('/horario/edit/{schedule}',[SheduleController::class,'edit'])->name('horario.edit');
Route::put('/horario/update/{schedule}',[SheduleController::class,'update'])->name('horario.update');
Route::delete('/horario/destroy/{schedule}',[SheduleController::class,'destroy'])->name('horario.destroy');




Route::get('/matricula',[EnrollmentController::class, 'listar'])->name('matricula');
Route::get('/matricula/create',[EnrollmentController::class,'create'])->name('matricula.create');
Route::post('/matricula/store',[EnrollmentController::class,'store'])->name('matricula.store');
Route::get('/matricula/edit/{enrollment}',[EnrollmentController::class,'edit'])->name('matricula.edit');
Route::put('/matricula/update/{enrollment}',[EnrollmentController::class,'update'])->name('matricula.update');
Route::delete('/matricula/destroy/{enrollment}',[EnrollmentController::class,'destroy'])->name('matricula.destroy');