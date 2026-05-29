<?php

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
