<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LimitedLessonsController extends Controller
{
    public function dashboard() {
        return view('limited.dashboard');
    }
}
