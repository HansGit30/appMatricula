<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// --- INICIO DE IMPORTACIONES DE CONTROLADORES (Nuevas) ---
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RegistrationController;
// --- FIN DE IMPORTACIONES ---

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas de Google
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// --- INICIO DE RUTAS AGREGADAS (Nuevas) ---
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('registrations', RegistrationController::class);
// --- FIN DE RUTAS AGREGADAS ---

// Ruta protegida de dashboard
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
});