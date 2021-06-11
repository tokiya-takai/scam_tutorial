@extends('layouts.app')

@section('content')

    @include('limited._header')
    
    <list-of-lessons-component></list-of-lessons-component>

    @include('layouts._footer')
    
@endsection