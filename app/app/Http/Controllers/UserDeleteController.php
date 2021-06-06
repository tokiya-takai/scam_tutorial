<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDeleteController extends Controller
{
    public function index()
    {
        return view('userdelete.index');
    }

    public function delete(Request $request) {
        User::find($request->id)->delete();
        return redirect('/');
    }
}
