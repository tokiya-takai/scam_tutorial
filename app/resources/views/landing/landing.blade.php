@extends('layouts.app')

@section('content')

  @guest
    @if (session('flash_message'))
      @include('landing._flash')
    @endif
  @endguest

  @include('layouts._header')

  <div class="landing">
    @include('landing._copy')
    @include('landing._intro')
    @include('landing._message')
  </div>

  @include('layouts._footer')
  
@endsection