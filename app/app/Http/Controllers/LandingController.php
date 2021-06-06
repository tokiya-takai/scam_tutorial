<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        $userNum = User::count();
        return view('landing.landing', ['userNum'=>$userNum]);
    }

    public function relay() {
        return redirect('/')->with('flash_message', 'Lesson1クリアおめでとうございます。');
    }
}
