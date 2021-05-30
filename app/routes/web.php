<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunctionsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FunctionsController::class, 'index']);
