@extends('layouts.app')

@section('content')

    @include('limited._header')

    <div id="dashboard" class="dashboard">
      <div class="dashboard-title">
        <h1>ダッシュボード</h1>
        <p>データを見ることができます。</p>
      </div>

    </div>

    @include('layouts._footer')
    
@endsection