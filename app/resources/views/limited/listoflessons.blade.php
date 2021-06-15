@extends('layouts.app')

@section('content')

    <div id="limited-inner" class="limited-inner">
        <div class="limited-main">
            @include('limited._header')
            <list-of-lessons-component :my-lessons-status="{{ $myLessonsStatus }}"></list-of-lessons-component>
        
            @include('layouts._footer')
        </div>
        <div id="limited-menu" class="limited-menu">
            <ul class="limited-menu-list">
                <li class="limited-menu-list-user">{{ Auth::user()->name }}</li>
                <li class="limited-menu-list-others"><a href="/dashboard">ダッシュボード</a></li>
                <li class="limited-menu-list-others"><a href="/listoflessons">レッスン一覧</a></li>
            </ul>
        </div>
    </div>
    
@endsection