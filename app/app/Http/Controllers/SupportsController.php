<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportsController extends Controller
{
    public function privacyPolicy()
    {
        return view('support.privacy_policy');
    }
}
