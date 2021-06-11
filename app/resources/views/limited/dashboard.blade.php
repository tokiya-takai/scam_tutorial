@extends('layouts.app')

@section('content')

    @include('limited._header')
    
    <dashboard-component></dashboard-component>

    @include('layouts._footer')
    
@endsection