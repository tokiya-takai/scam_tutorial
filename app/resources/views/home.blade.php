@extends('layouts.app')

@section('content')
    <div id="home" class="home">
        <div class="home-container">
            <div class="home-header">
                {{ __('You are logged in!') }}
            </div>
            @if (session('status'))
            <div class="home-alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="home-content">
                <div class="submit-form-group">
                    <button class="auth-submit-btn" onclick="window.location.href = '/';">トップページへ</button>
                </div>
            </div>
        </div>
    </div>
    <canvas id="sineCanvas"></canvas>
@endsection
