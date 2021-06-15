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
        $myLessonsStatus = DB::table('statuses')
                            ->select('number', 'sub_number', 'percentage')
                            ->leftJoin('lessons', 'statuses.lesson_id', '=', 'lessons.id')
                            ->where('user_id', Auth::user()->id)
                            ->get();
                            // var_dump($myLessonsStatus);
        // dd($myLessonsStatus->toSql(), $myLessonsStatus->getBindings());

        // user_id毎のnumber毎にクリアしているレッスンデータを取得
        // 一つでも該当クリアしている場合
        // $myLessonsStatus = DB::table('statuses')
        //                     ->select('user_id','number',DB::raw('sum(percentage) as percentage'))
        //                     ->where('user_id', Auth::user()->id)
        //                     ->leftJoin('lessons', 'statuses.lesson_id', '=', 'lessons.id')
        //                     ->groupBy('user_id','number')
        //                     ->get();
        // 一つもクリアしていない場合は空となり、v-bind出来ないので、各レッスンのデータを格納してテンプレートに渡す
        if($myLessonsStatus->isEmpty()) {
            $myLessonsStatus = collect([
                // sub_number -1 はクリアしていないことを示す
                ['number'=>1, 'sub_number'=>-1, 'percentage'=>0],
                ['number'=>2, 'sub_number'=>-1, 'percentage'=>0],
                ['number'=>3, 'sub_number'=>-1, 'percentage'=>0],
            ]);
        }
        return view('limited.listoflessons',['myLessonsStatus'=>$myLessonsStatus]);
    }
}
