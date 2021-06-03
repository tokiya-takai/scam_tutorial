<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportsController extends Controller
{
    // プライバシーポリシー
    public function privacyPolicy()
    {
        return view('support.privacy_policy');
    }

    // 利用規約
    public function termsOfUse()
    {
        return view('support.terms_of_use');
    }
}
