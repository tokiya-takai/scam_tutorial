<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Lesson1Controller;
use App\Http\Controllers\Lesson2Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SupportsController;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\LimitedLessonsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function() {
  
  Route::middleware('verified')->group(function() {
    // ダッシュボード
    Route::get('/dashboard', [LimitedLessonsController::class, 'dashboard']);
    // レッスン一覧
    Route::get('/listoflessons', [LimitedLessonsController::class, 'listOfLessons']);

    // レッスン3
    Route::get('/limited/lesson3/1', [LimitedLessonsController::class, 'lesson3_1'])->name('lesson3_1');
    Route::get('/lesson3/1/exercise',[LimitedLessonsController::class, 'show3_1']);
  });

  // アカウント削除
  Route::get('/userdelete/{id}', [UserDeleteController::class, 'index'])->name('userdelete.index');
  Route::post('/userdelete/{id}/delete', [UserDeleteController::class, 'delete'])->name('userdelete.delete');
});

// Googleログイン用
Route::get('login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/relay', [LandingController::class, 'relay']);

// Lesson1
Route::get('/lesson1',[Lesson1Controller::class, 'index'])->name('lesson1');
Route::get('/lesson1/exercise',[Lesson1Controller::class, 'show']);
Route::post('/lesson1/congratulations', [Lesson1Controller::class, 'congratulations']);
// Lesson2
Route::get('/lesson2', [Lesson2Controller::class, 'index'])->name('lesson2');
Route::get('lesson2/exercise', [Lesson2Controller::class, 'show']);
Route::post('/lesson2/congratulations', [Lesson2Controller::class, 'congratulations']);

// Support
Route::get('/privacypolicy', [SupportsController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/termsofuse', [SupportsController::class, 'termsOfUse'])->name('termsOfUse');
