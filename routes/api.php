<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\EnrollmentController;
use App\Http\Controllers\Api\ProfessorController;
use App\Http\Controllers\Api\SheduleController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('auth.basic')->get('/user',function (Request $request){
    return  $request->user();
});

Route::apiResource('students',StudentController::class);
Route::apiResource('courses',CourseController::class);
Route::apiResource('professors',ProfessorController::class);
Route::apiResource('schedules',SheduleController::class);
Route::apiResource('enrollments',EnrollmentController::class);



