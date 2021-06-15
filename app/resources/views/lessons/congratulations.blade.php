@extends('layouts.app')

@section('content')
  @if(Auth::check())
    <congratulations-component :lesson="{{ $lesson }}" message="{{ $message }}" :is-loggedin="true"></congratulations-component>
  @else
    <congratulations-component :lesson="{{ $lesson }}" message="{{ $message }}" :is-loggedin="false"></congratulations-component>
  @endif
  <canvas id="sineCanvas"></canvas>
@endsection