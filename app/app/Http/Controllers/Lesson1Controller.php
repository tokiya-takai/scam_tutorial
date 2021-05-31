<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lesson1Controller extends Controller
{
    public function index(){
        return view('lesson1.index');
    }
}
