@extends('layouts.app')

@section('content')

  @include('layouts._header')

  <user-delete-component
    :csrf="{{json_encode(csrf_token())}}"
    user_id="{{ Auth::id() }}"
  ></user-delete-component>

  @include('layouts._footer')

@endsection