<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lesson;
use App\Models\Status;

class Lesson2Controller extends Controller
{
    public function index()
    {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0");
        header("Pragma: no-cache");
        return view('lesson2-1.index');
    }

    public function show()
    {
        return view('lesson2-1.show');
    }

    public function congratulations()
    {
        // Lesson 2-1 フィッシング詐欺のレコードを取得
        $lesson = Lesson::find(2);

        // クリア後メッセージ
        $message = "会員登録すると、クリアした記録が残ります！";

        if(!Auth::check()) {
            return view('lessons.congratulations',['lesson'=>$lesson, 'message'=>$message]);
        }

        // レッスンを過去にクリアしているか
        if(Status::where('user_id', Auth::user()->id)->where('lesson_id', $lesson->id)->exists()){
            $message = "このレッスンは既にクリアしています！";
            return view('lessons.congratulations',['lesson'=>$lesson, 'message'=>$message]);
        } else {
            $message = "レッスンをクリアしたことが記録されました！";
            // クリアしたレッスンを記録
            $status = new Status;
            $status->user_id = Auth::user()->id;
            $status->lesson_id = $lesson->id;
            $status->save();
            return view('lessons.congratulations',['lesson'=>$lesson, 'message'=>$message]);
        }
    }
}
