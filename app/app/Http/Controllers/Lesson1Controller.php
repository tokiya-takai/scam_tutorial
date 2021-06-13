<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lesson1Controller extends Controller
{
    public function index()
    {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0");
        header("Pragma: no-cache");
        return view('lesson1-1.index');
    }

    public function show()
    {
        return view('lesson1-1.show');
    }
}
