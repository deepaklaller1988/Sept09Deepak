<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\StudentController;
// use App\Http\Controllers\CommonController;
// use App\Http\Controllers\ClientController;
// use App\Http\Controllers\EmploymentController;
// use App\Http\Controllers\ProjectController;
// use App\Http\Controllers\User;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\SyncController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::controller(StudentController::class)->group(function () {
    Route::get('/','index')->name('home');
    Route::get('/form','form')->name('form');
    Route::post('/manage','manage')->name('manage');
    Route::post('/student/delete','destroy')->name('studentdestroy');
    Route::post('/student/status','updateStatus')->name('studentstatus');
    Route::get('/student/edit/{id}','edit');
});
