<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});


// student controller routes

Route::get('/student' , [StudentController::class,'index']);

Route::get('/student/create' , [StudentController::class,'create']);

Route::post('/student/createStudent' , [StudentController::class,'store']);

Route::get('/student/details/{id}', [StudentController::class,'show']);

Route::get('/student/edit/{id}' , [StudentController::class,'edit']);

Route::post('/student/editStudent/{id}' , [StudentController::class,'update']);

Route::get('/student/delete/{id}', [StudentController::class,'destroy']);

// teacher controller routes

Route::get('/teacher' , [TeacherController::class, 'index']);

Route::get('/teacher/create' , [TeacherController::class,'create']);

Route::post('/teacher/createTeacher' , [TeacherController::class,'store']);

Route::get('/teacher/details/{id}',[TeacherController::class,'showdetails']);
// course controller routes


// enrollement controller routes
