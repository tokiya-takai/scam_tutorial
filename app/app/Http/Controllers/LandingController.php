<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $user = null;
        $userNum = User::count();
        if(Auth::check()){
            $user = User::find(Auth::id());
        }
        return view('landing.landing', ['userNum'=>$userNum, 'user'=>$user]);
    }
}
