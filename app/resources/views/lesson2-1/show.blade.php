@extends('layouts.app')

@section('content')
  <lesson2-1-component :csrf="{{json_encode(csrf_token())}}"></lesson2-1-component>
@endsection