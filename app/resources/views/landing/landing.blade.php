@extends('layouts.app')

@section('content')
  <div class="landing">
    @include('landing._copy')
    @include('landing._intro')
    @include('landing._message')
  </div>
@endsection