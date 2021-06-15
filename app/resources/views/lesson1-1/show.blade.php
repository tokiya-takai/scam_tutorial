@extends('layouts.app')

@section('content')
  <lesson1-1-component :csrf="{{json_encode(csrf_token())}}"></lesson1-1-component>
@endsection