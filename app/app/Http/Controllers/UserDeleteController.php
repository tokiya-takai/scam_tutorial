<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserDeleteController extends Controller
{
    public function index($id)
    {
        // 引数$idは文字列、Auth::id()の返却値は数値のため、型を合わせる
        $id = (int) $id;
        if(! $this->authenticateUser($id)) {
            // 他者のアカウント削除ページに遷移しようとした場合は、自分のページに遷移する
            return redirect('/userdelete/'.Auth::id());
        }

        return view('userdelete.index');
    }

    public function delete(Request $request) {
        User::find($request->id)->delete();
        return redirect('/');
    }

    private function authenticateUser($targetUserID) {
        if($targetUserID === Auth::id()){
            return true;
        } else {
            return false;
        }
    }
}
