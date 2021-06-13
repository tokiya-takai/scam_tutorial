@extends('layouts.app')

@section('content')
  <congratulations-component :lesson="{{ $lesson }}" message="{{ $message }}"></congratulations-component>
  <canvas id="sineCanvas"></canvas>
@endsection