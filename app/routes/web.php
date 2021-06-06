<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Lesson1Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SupportsController;
use App\Http\Controllers\UserDeleteController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('verified')->group(function() {
});
// アカウント削除
Route::get('/userdelete/{id}', [UserDeleteController::class, 'index'])->name('userdelete.index');
Route::post('/userdelete/{id}/delete', [UserDeleteController::class, 'delete']);


// Googleログイン用
Route::get('login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/relay', [LandingController::class, 'relay']);

// Lesson1
Route::get('/lesson1',[Lesson1Controller::class, 'index'])->name('lesson1');
Route::get('/lesson1/exercise',[Lesson1Controller::class, 'show']);

// Support
Route::get('/privacypolicy', [SupportsController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/termsofuse', [SupportsController::class, 'termsOfUse'])->name('termsOfUse');
