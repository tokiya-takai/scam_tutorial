<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Lesson1Controller;

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [LandingController::class, 'index']);

// Lesson1
Route::get('/lesson1',[Lesson1Controller::class, 'index'])->name('lesson1');
Route::get('/lesson1/exercise',[Lesson1Controller::class, 'show']);
