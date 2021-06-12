@extends('layouts.app')

@section('content')

    <div id="limited-inner" class="limited-inner">
        <div class="limited-main">
            @include('limited._header')
        
            <dashboard-component></dashboard-component>
        
            @include('layouts._footer')
        </div>
        <div id="limited-menu" class="limited-menu">
            <h1 style="color: white">test</h1>
        </div>
    </div>
    
@endsection