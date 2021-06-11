@extends('layouts.app')

@section('content')

    @include('limited._header')

    <div id="li-lessons" class="li-lessons">
      <div class="li-lessons-title">
        <h1>レッスン一覧</h1>
        <p>公開中の全てのレッスンを見ることができます。</p>
      </div>
  
      @include('limited._lessons')
    </div>

    @include('layouts._footer')
    
@endsection