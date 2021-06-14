<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class LimitedLessonsController extends Controller
{
    // ダッシュボードページを表示
    public function dashboard() {
        return view('limited.dashboard');
    }

    //　レッスン一覧ページを表示
    public function listOfLessons() {
        // user_id毎のnumber毎にクリアしているレッスンデータを取得
        // 一つでも該当クリアしている場合
        $myLessonsStatus = DB::table('statuses')
                            ->select('user_id','number',DB::raw('sum(percentage) as percentage'))
                            ->where('user_id', Auth::user()->id)
                            ->leftJoin('lessons', 'statuses.lesson_id', '=', 'lessons.id')
                            ->groupBy('user_id','number')
                            ->get();
        // 一つもクリアしていない場合は空となり、v-bind出来ないので、各レッスンのデータを格納してテンプレートに渡す
        if($myLessonsStatus->isEmpty()) {
            $myLessonsStatus = collect([
                ['user_id'=>Auth::user()->id, 'number'=>1, 'percentage'=>0],
                ['user_id'=>Auth::user()->id, 'number'=>2, 'percentage'=>0],
                ['user_id'=>Auth::user()->id, 'number'=>3, 'percentage'=>0],
            ]);
        }
        return view('limited.listoflessons',['myLessonsStatus'=>$myLessonsStatus]);
    }
}
