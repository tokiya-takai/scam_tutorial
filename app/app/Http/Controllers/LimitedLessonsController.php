<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LimitedLessonsController extends Controller
{
    // ダッシュボードページを表示
    public function dashboard() {
        return view('limited.dashboard');
    }

    //　レッスン一覧ページを表示
    public function listOfLessons() {
        return view('limited.listoflessons');
    }
}
