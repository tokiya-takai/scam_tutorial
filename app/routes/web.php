<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunctionsController;

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FunctionsController::class, 'index']);
