@extends('layouts.app')

@section('content')
  <lesson3-1-component :csrf="{{json_encode(csrf_token())}}"></lesson3-1-component>
@endsection