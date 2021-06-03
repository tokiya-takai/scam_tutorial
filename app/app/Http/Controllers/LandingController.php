<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingController extends Controller
{
    public function index()
    {
        $userNum = User::count();
        return view('landing.landing', compact('userNum'));
    }
}
